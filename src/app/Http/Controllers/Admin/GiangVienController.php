<?php

namespace App\Http\Controllers\Admin;

use App\Events\GenerateGiangVienCredentials;
use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\GiangVien;
use App\Models\NguoiDung;
use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giangvien = GiangVien::all();
        

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

    public function chinhsua($tendn)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        $nguoidung = NguoiDung::where('TenDangNhap', $tendn)->first();

        if($nguoidung->MaGV == $tendn) {
            $giangvien = GiangVien::where('MaGV', $nguoidung->MaGV)->first();
            return view('giangvien.thongtin.form.suathongtin', compact(
                'macd',
                'madt',
                'giangvien',
                'nguoidung'
            ));
        } 
        
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

    public function luu(Request $request, $magv)
    {
        $request->validate([
            'HinhAnh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra hình ảnh
        ]);

        $imageName = null;

        if ($request->hasFile('HinhAnh')) {
            $image = $request->file('HinhAnh');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Di chuyển và lưu hình ảnh vào thư mục public/images
        }

        $nguoidung = NguoiDung::where('TenDangNhap', $magv)->first();
        
        $nguoidung->update([
            'AnhDaiDien' => 'images/'. $imageName, // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
        ]);

        $giangvien = GiangVien::where('MaGV', $magv)->first();
        
        $giangvien->update([
            'DiaChi' => $request->input('DiaChi'),
            'DienThoai' => $request->input('DienThoai'),
            'Email' => $request->input('Email'),
            //Thêm các trường khác nếu có
        ]);

        if (!$giangvien) {
            return redirect()->back()->with('loi', 'Không thể cập nhật');
        }

        $giangvien->update($request->all());
        return redirect()->back()->with('thongbao', 'Cập nhật thông tin giảng viên thành công!');
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
