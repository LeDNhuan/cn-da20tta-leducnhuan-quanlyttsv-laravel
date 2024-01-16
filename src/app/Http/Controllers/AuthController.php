<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(){

    }

    public function index(){
        return view('dangnhap');
    }

    public function dangnhap(Request $request){
        $TenDangNhap = $request->input('TenDangNhap');
        $MatKhau = $request->input('MatKhau');
        //dd($TenDangNhap);
        //dd($MatKhau);

        $nguoidung = NguoiDung::where('TenDangNhap', $TenDangNhap)->first();
        //dd($nguoidung);
        if ($nguoidung && Hash::check($MatKhau, $nguoidung->MatKhau)) {
            Auth::login($nguoidung);

            $vaitro = $nguoidung->VaiTro;

            if ($vaitro == 'sinh_vien' || $vaitro == 'giang_vien') {
                return redirect()->route('user.index');
            } else {
                return redirect()->route('admin.index');
            }
        } else {
            return back()->with('error', 'Tên đăng nhập hoặc mật khẩu không đúng');
        }
    }

    public function dangxuat()
    {
        Auth::logout();
        return redirect()->route('dangnhap');
    }
}
