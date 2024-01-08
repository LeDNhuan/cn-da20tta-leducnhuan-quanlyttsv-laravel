<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function edit($mall)
    {
        
        $lylich = LyLichTrichNgang::where('MaLyLich', $mall)->first();
        return view('admin.lylich.form.sualylich', compact(
            'lylich'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mall)
    {
        $lylich = LyLichTrichNgang::where('MSSV', $mall)->first();
        
        $lylich->update([
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

        if (!$lylich) {
            return redirect()->route('lylich.index', $mall)->with('loi', 'Không thể cập nhật');
        }

        $lylich->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cập nhật sinh viên thành công!');
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
