<?php

namespace App\Http\Controllers\Admin;

use App\Events\GenerateGiangVienCredentials;
use App\Http\Controllers\Controller;
use App\Models\GiangVien;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giangvien = GiangVien::paginate(10);
        

        // $content = 'admin.giangvien.index';
        return view('admin.giangvien.index', compact(
            // 'content',
            'giangvien'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.giangvien.form.themgiangvien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $giangvien = GiangVien::create($request->all());
        if ($giangvien) {
            event(new GenerateGiangVienCredentials($giangvien));
            return redirect()->route('giangvien.index')->with('thongbao', 'Thêm giảng viên thành công!');
        } else {
            return redirect()->route('giangvien.index')->with('loi', 'Thêm giảng viên không thành công!');
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
    public function edit($magv)
    {
        $giangvien = GiangVien::where('MaGV', $magv)->first();
        return view('admin.giangvien.form.suagiangvien', compact('giangvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $magv)
    {
        $giangvien = GiangVien::where('MaGV', $magv)->first();
        
        $giangvien->update([
            'HoGV' => $request->input('HoGV'),
            'TenGV' => $request->input('TenGV'),
            'GioiTinh' => $request->input('GioiTinh'),
            'DiaChi' => $request->input('DiaChi'),
            'DienThoai' => $request->input('DienThoai'),
            'Email' => $request->input('Email'),
            //Thêm các trường khác nếu có
        ]);

        if (!$giangvien) {
            return redirect()->route('giangvien.index')->with('loi', 'Không thể cập nhật');
        }

        $giangvien->update($request->all());
        return redirect()->route('giangvien.index')->with('thongbao', 'Cập nhật giảng viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($magv)
    {    
        $giangvien = GiangVien::where('MaGV', $magv)->first();
        
        if (!$giangvien) {
            return redirect()->route('giangvien.index')->with('loi', 'Không thể xóa');
        }

        $giangvien->delete();
        return redirect()->route('giangvien.index')->with('thongbao', 'Xóa giảng viên thành công!');
    }
}
