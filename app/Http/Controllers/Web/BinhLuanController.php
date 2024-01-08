<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BaiDang;
use App\Models\BinhLuan;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\SinhVien;
use App\Models\TuKhoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();

        $binhluan = BinhLuan::with(['sinhvien', 'nguoidung'])->where('bai_dangs_id', $id)->get();

        $baidang = BaiDang::where('id', $id)->first();
        $sinhvienbd = SinhVien::where('MSSV', $baidang->TenDangNhap)->first();

        return view('sinhvien.binhluan.index', compact(
            'macd',
            'madt',
            'binhluan',
            'baidang',
            'sinhvienbd',
            
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $bd)
    {
        $baidang = BaiDang::where('id', $bd)->first();

        $binhluan = new BinhLuan([
            'NoiDungBL' => $request->input('NoiDungBL'),
            'bai_dangs_id' => $baidang->id,
            'TenDangNhap' => auth()->user()->TenDangNhap,
        ]);

        $binhluan->save();

        if (Auth::check()) {
            $binhluan->TenDangNhap = auth()->user()->TenDangNhap;
        }
        
        if ($binhluan) {
            $binhluans = BinhLuan::where('bai_dangs_id', $bd)->get();
            return redirect()->back()->with('thongbao', 'Bình luận thành công!')->with('binhluan', $binhluans);
        } else {
            return redirect()->back()->with('loi', 'Bình luận không thành công!');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
