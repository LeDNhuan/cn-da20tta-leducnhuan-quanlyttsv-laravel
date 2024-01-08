<?php

namespace App\Http\Controllers\Admin;

use App\Events\GenerateSinhVienCredentials;
use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\GiangVien;
use App\Models\SinhVien;
use App\Models\TuKhoa;
use Illuminate\Http\Request;
use App\Models\Lop;
use App\Models\LyLichTrichNgang;

class SinhVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sinhvien = SinhVien::paginate(10);
        $lop = Lop::all();

        // $content = 'admin.sinhvien.index';
        return view('admin.sinhvien.index', compact(
            // 'content',
            'sinhvien',
            'lop',
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function xemtheolop($malop)
    {
        $sinhvien = SinhVien::paginate(10);
        $sinhvien = SinhVien::where('MaLop', $malop)->get();

        $lop = Lop::all();

        // $content = 'admin.sinhvien.index';
        return view('admin.sinhvien.index', compact(
            'sinhvien',
            'lop',
        ))->with('i', (request()->input('page', 1) -1) *5);
    }


    public function xemthongtin($tendn)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();

        $sinhvien = SinhVien::where('MSSV', $tendn)->first();
        $giangvien = GiangVien::where('MaGV', $tendn)->first();

        if(isset($sinhvien) && is_object($sinhvien)) {
            $lop = $sinhvien->MaLop;
            $malop = Lop::where('MaLop', $lop)->first();

            $mdt = $malop->MaDaoTao;
            $madaotao = DaoTao::where('MaDaoTao', $mdt)->first();

            // $content = 'admin.sinhvien.index';
            return view('sinhvien.thongtin.index', compact(
                'macd',
                'madt',
                'sinhvien',
                'malop',
                'madaotao'
            ))->with('i', (request()->input('page', 1) -1) *5);
        } else {

            //$madt = $daotao->MaDaoTao;
            $lop = Lop::all();

            return view('giangvien.thongtin.index', compact(
                'macd',
                'giangvien',
                'lop',
                'madt'
            ))->with('i', (request()->input('page', 1) -1) *5);
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lop = Lop::all();
        return view('admin.sinhvien.form.themsinhvien', compact('lop'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sinhvien = SinhVien::create($request->all());
        if ($sinhvien) {
            event(new GenerateSinhVienCredentials($sinhvien));
            return redirect()->route('sinhvien.index')->with('thongbao', 'Thêm sinh viên thành công!');
        } else {
            return redirect()->route('sinhvien.index')->with('thongbao', 'Thêm sinh viên không thành công!');
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($masv)
    {
        $lop = Lop::all();
        $sinhvien = SinhVien::where('MSSV', $masv)->first();
        return view('admin.sinhvien.form.suasinhvien', compact(
            'sinhvien',
            'lop'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $masv)
    {
        $sinhvien = SinhVien::where('MSSV', $masv)->first();
        
        $sinhvien->update([
            'MSSV' => $request->input('MSSV'),
            'HoSV' => $request->input('HoSV'),
            'TenSV' => $request->input('TenSV'),
            'GioiTinh' => $request->input('GioiTinh'),
            'DiaChi' => $request->input('DiaChi'),
            'DienThoai' => $request->input('DienThoai'),
            'Email' => $request->input('Email'),
            'TinhTrang' => $request->input('TinhTrang'),
            //Thêm các trường khác nếu có
        ]);

        if (!$sinhvien) {
            return redirect()->route('sinhvien.index')->with('loi', 'Không thể cập nhật');
        }

        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cập nhật sinh viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($masv)
    {
        $sinhvien = SinhVien::where('MSSV', $masv)->first();
        
        if (!$sinhvien) {
            return redirect()->route('sinhvien.index')->with('loi', 'Không thể xóa');
        }

        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao', 'Xóa sinh viên thành công!');
    }
}
