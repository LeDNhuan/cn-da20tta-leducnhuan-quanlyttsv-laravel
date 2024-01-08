<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BaiDang;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\TuKhoa;
use Illuminate\Http\Request;

class BaiDangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        $baidang = BaiDang::paginate(10);
        $trangthai = BaiDang::where('TrangThai', 'đã duyệt')->get();

        return view('sinhvien.baiviet.index', compact(
            'baidang',
            'trangthai',
            'macd',
            'madt'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function chudebaidang($chude)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        $baidang = BaiDang::paginate(10);
        $trangthai = BaiDang::where('TrangThai', 'đã duyệt')->where('MaChuDe', $chude)->get();

        return view('sinhvien.baiviet.chude', compact(
            'baidang',
            'trangthai',
            'macd',
            'madt'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function baidangbanthan()
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        $baidang = BaiDang::paginate(10);
        $trangthai = BaiDang::where('TenDangNhap', auth()->user()->TenDangNhap)->where('TrangThai', 'đã duyệt')->get();

        return view('sinhvien.baiviet.chude', compact(
            'baidang',
            'trangthai',
            'macd',
            'matk'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();
        return view('sinhvien.baiviet.form.dangbaiviet', compact(
            'macd',
            'madt'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $baidang = new BaiDang([
            'TieuDeBD' => $request->input('TieuDeBD'),
            'NoiDungBD' => $request->input('NoiDungBD'),
            'HinhAnh' => $request->input('HinhAnh'),
            'NgayDang' => now(),
            'TrangThai' => 'chờ duyệt', // Hoặc trạng thái khác tùy ý
            'TenDangNhap' => auth()->user()->TenDangNhap,
            'MaChuDe' => $request->input('MaChuDe'),
        ]);

        $baidang->save();
        if ($baidang) {
            return redirect()->route('user.index')->with('thongbao', 'Bài đăng của bạn đang chờ xác nhận!');
        } else {
            return redirect()->route('baidang.gdthem')->with('loi', 'Bạn không thể đăng bài!');
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
    public function edit()
    {
        $baidang = BaiDang::paginate(10);
        $trangthai = BaiDang::where('TenDangNhap', auth()->user()->TenDangNhap)->where('TrangThai', 'chưa duyệt')->get();

        return view('admin.baidang.index', compact(
            'baidang',
            'trangthai'
            ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $baidang = BaiDang::where('id', $id)->first();

        if ($baidang) {
            $baidang->TrangThai = 'đã duyệt';
            $baidang->save();

            // Gửi thông báo hoặc thực hiện các bước khác nếu cần
            return redirect()->route('baidang.choduyet')->with('thongbao', 'Bài đăng đã được duyệt!');
        } else {
            return redirect()->route('baidang.choduyet')->with('loi', 'Không tìm thấy bài đăng!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $baidang = BaiDang::where('id', $id)->first();
        
        if (!$baidang) {
            return redirect()->route('baidang.choduyet')->with('loi', 'Không thể xóa');
        }

        $baidang->delete();
        return redirect()->route('baidang.choduyet')->with('thongbao', 'Xóa bài đăng thành công!');
    }
}
