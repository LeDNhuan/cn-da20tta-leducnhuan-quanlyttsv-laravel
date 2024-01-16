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
        $trangthai = BaiDang::where('TrangThai', 'đã duyệt')->orderBy('created_at', 'desc')->get();

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


    // -------------HIỂN THỊ BÀI ĐĂNG PHÍA ADMIN

    public function hienthidaduyet()
    {
        // $macd = ChuDe::all();
        // $madt = DaoTao::all();
        $dd = 'đã duyệt';
        $baidang = BaiDang::all();
        $trangthai = BaiDang::where('TrangThai', $dd)->get();

        return view('admin.baidang.index', compact(
            'baidang',
            'trangthai',
            
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
        // $request->validate([
        //     'HinhAnh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Kiểm tra hình ảnh
        // ]);

        // $imageName = null;

        // if ($request->hasFile('HinhAnh')) {
        //     $image = $request->file('HinhAnh');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/images', $imageName); // Lưu hình ảnh vào thư mục storage/app/public/images
        // }

        $baidang = new BaiDang([
            'TieuDeBD' => $request->input('TieuDeBD'),
            'NoiDungBD' => $request->input('NoiDungBD'),
            // 'HinhAnh' => $imageName, // Lưu tên hình ảnh vào cơ sở dữ liệu
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
        $trangthai = BaiDang::where('TrangThai', 'chờ duyệt')->get();

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
