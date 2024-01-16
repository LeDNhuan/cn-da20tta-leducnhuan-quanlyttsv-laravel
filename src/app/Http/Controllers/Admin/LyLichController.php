<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use App\Models\SinhVien;
use App\Models\LyLichTrichNgang;
use App\Models\Lop;
class LyLichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($masv)
    {
        $lylich = LyLichTrichNgang::where('MSSV', $masv)->first();
        $sinhvien = SinhVien::where('MSSV', $masv)->first();
        // $content = 'admin.sinhvien.index';
        return view('admin.lylich.index', compact(
            // 'content',
            'lylich',
            'sinhvien'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function xemlylich($tendn)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();

        $nguoidung = NguoiDung::where('TenDangNhap', $tendn)->first();
        
        if($nguoidung->MSSV == $tendn) {
            $sinhvien = SinhVien::where('MSSV', $nguoidung->MSSV)->first();
            $lylich = LyLichTrichNgang::where('MaLyLich', $nguoidung->MSSV)->first();
            return view('sinhvien.lylich.index', compact(
                'macd',
                'madt',
                'lylich',
                'sinhvien'
            ))->with('i', (request()->input('page', 1) -1) *5);
        }
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($masv)
    {
        $sinhvien = SinhVien::where('MSSV', $masv)->first();
        return view('admin.lylich.form.themlylich', compact('sinhvien'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        LyLichTrichNgang::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Thêm lý lịch thành công!');
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
    public function edit($mssv)
    {
        
        $lylich = LyLichTrichNgang::where('MaLyLich', $mssv)->first();
        $sinhvien = SinhVien::where('MSSV', $mssv)->first();
        return view('admin.lylich.form.sualylich', compact(
            'lylich',
            'sinhvien'
        ));
    }

    public function sualylich($tendn)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        
        $lylich = LyLichTrichNgang::where('MaLyLich', $tendn)->first();
        $sinhvien = SinhVien::where('MSSV', $tendn)->first();
        return view('sinhvien.lylich.form.sualylich', compact(
            'macd',
            'madt',
            'lylich',
            'sinhvien'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mall)
    {
        $lylich = LyLichTrichNgang::where('MSSV', $mall)->first();
        
        $lylich->update([
            'HoTenCha' => $request->input('HoTenCha'),
            'NamSinhCha' => $request->input('NamSinhCha'),
            'DienThoaiCha' => $request->input('DienThoaiCha'),
            'DanTocCha' => $request->input('DanTocCha'),
            'TonGiaoCha' => $request->input('TonGiaoCha'),
            'NgheNghiepCha' => $request->input('NgheNghiepCha'),
            'HoTenMe' => $request->input('HoTenMe'),
            'NamSinhMe' => $request->input('NamSinhMe'),
            'DienThoaiMe' => $request->input('DienThoaiMe'),
            'DanTocMe' => $request->input('DanTocMe'),
            'TonGiaoMe' => $request->input('TonGiaoMe'),
            'NgheNghiepMe' => $request->input('NgheNghiepMe'),            
            //Thêm các trường khác nếu có
        ]);

        if (!$lylich) {
            return redirect()->route('lylich.index', $mall)->with('loi', 'Không thể cập nhật');
        }

        $lylich->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cập nhật lý lịch sinh viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mall)
    {
        $lylich = LyLichTrichNgang::where('MSSV', $mall)->first();
        
        if (!$lylich) {
            return redirect()->route('lylich.index')->with('loi', 'Không thể xóa');
        }

        $lylich->delete();
        return redirect()->route('lylich.index')->with('thongbao', 'Xóa lý lịch thành công!');
    }
}
