<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BaiDangController;
use App\Http\Controllers\Admin\ChuDeController;
use App\Http\Controllers\Admin\CoVanController;
use App\Http\Controllers\Admin\DaoTaoController;
use App\Http\Controllers\Admin\GiangVienController;
use App\Http\Controllers\Admin\LopController;
use App\Http\Controllers\Admin\LyLichController;
use App\Http\Controllers\Admin\SinhVienController;
use App\Http\Controllers\Admin\TuKhoaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\BaiVietController;
use App\Http\Controllers\Web\BinhLuanController;
use App\Http\Controllers\Web\TrangChuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dangnhap');
});
/*----------------------------------------------CHUNG------------------------------------------------*/

Route::get('/dang-nhap', [AuthController::class, 'index'])-> name('dangnhap');
#ROUTE ĐĂNG NHẬP
Route::post('/dang-nhap/xu-ly', [AuthController::class, 'dangnhap'])-> name('xuly.dangnhap');   
#ROUTE ĐĂNG XUẤT
Route::get('/dang-xuat/xu-ly', [AuthController::class, 'dangxuat'])-> name('xuly.dangxuat');


/*----------------------------------------------GIẢNG VIÊN & SINH VIÊN------------------------------------------------*/
Route::get('/nguoi-dung/thong-tin/{tendn}', [SinhVienController::class, 'xemthongtin'])-> name('xemthongtin.index');

Route::get('/nguoi-dung/bai-dang/da-duyet', [BaiDangController::class, 'index'])-> name('baidang.index');

Route::get('/nguoi-dung/trang-chu', [TrangChuController::class, 'index']) -> name('user.index');

Route::get('/nguoi-dung/binh-luan/{mabl}', [BinhLuanController::class, 'index'])-> name('binhluan.index');

Route::get('/nguoi-dung/bai-dang/chu-de/{macd}', [BaiDangController::class, 'chudebaidang'])-> name('chudebaidang.index');




/*----------------------------------------------GIẢNG VIÊN------------------------------------------------*/
    Route::group(['middleware' => 'role:giang_vien'], function() {
        // Các route chỉ dành cho giảng viên
        //---------------------------------------- ROUTE USER TRANG CHỦ ---------------------------------------
        // Route::get('/giang-vien/trang-chu', [TrangChuController::class, 'index']) -> name('user_gv.index');

        //---------------------------------------- ROUTE QL THÔNG TIN ---------------------------------------
        Route::get('/giang-vien/lop/{malop}', [LopController::class, 'ttlop'])-> name('ttlop.index');
    });


/*----------------------------------------------SINH VIÊN-------------------------------------------------*/
    Route::group(['middleware' => 'role:sinh_vien'], function() {
        // Các route chỉ dành cho sinh viên
        //---------------------------------------- ROUTE USER TRANG CHỦ ---------------------------------------
        

        /*--------------------------------------- QL BÌNH LUẬN------------------------------------*/
        
        Route::match(['GET', 'POST'],'/nguoi-dung/binh-luan/them', [BinhLuanController::class, 'create'])-> name('binhluan.gdthem');
        Route::match(['GET', 'POST'],'/nguoi-dung/binh-luan/xuly-them/{mabl}', [BinhLuanController::class, 'store'])-> name('binhluan.them');
        Route::get('/nguoi-dung/binh-luan/chinh-sua/{mabl}', [BinhLuanController::class, 'edit'])-> name('binhluan.gdsua');
        Route::put('/nguoi-dung/binh-luan/xuly-sua/{mabl}', [BinhLuanController::class, 'update'])-> name('binhluan.sua');
        Route::delete('/nguoi-dung/binh-luan/xoa/{mabl}', [BinhLuanController::class, 'destroy'])-> name('binhluan.xoa');

        /*--------------------------------------- QL BÀI ĐĂNG------------------------------------*/
        
        Route::match(['GET', 'POST'],'/nguoi-dung/bai-dang/them', [BaiDangController::class, 'create'])-> name('baidang.gdthem');
        Route::match(['GET', 'POST'],'/nguoi-dung/bai-dang/xuly-them', [BaiDangController::class, 'store'])-> name('baidang.them');

        /*--------------------------------------- QL CHỦ ĐỀ BÀI ĐĂNG------------------------------------*/
        Route::get('/nguoi-dung/bai-dang/ban-than', [BaiDangController::class, 'baidangbanthan'])-> name('baidangbanthan.index');
        
    });


/*----------------------------------------------ADMIN-------------------------------------------------*/
    Route::group(['middleware' => 'role:admin'], function() {
        // Các route chỉ dành cho admin
        /*----------------------------------------------ADMIN------------------------------------------------*/
        #ROUTE ADMIN TRANG CHỦ 
        Route::match(['GET', 'POST'], '/admin', [AdminController::class, 'index'])-> name('admin.index');

        /*---------------------------------------ADMIN QL GIẢNG VIÊN------------------------------------*/
        Route::get('/admin/giang-vien', [GiangVienController::class, 'index'])-> name('giangvien.index');
        Route::match(['GET', 'POST'],'/admin/giang-vien/them', [GiangVienController::class, 'create'])-> name('giangvien.gdthem');
        Route::match(['GET', 'POST'],'/admin/giang-vien/xuly-them', [GiangVienController::class, 'store'])-> name('giangvien.them');
        Route::get('/admin/giang-vien/chinh-sua/{magv}', [GiangVienController::class, 'edit'])-> name('giangvien.gdsua');
        Route::put('/admingiang-vien/xuly-sua/{magv}', [GiangVienController::class, 'update'])-> name('giangvien.sua');
        Route::delete('/admin/giang-vien/xoa/{magv}', [GiangVienController::class, 'destroy'])-> name('giangvien.xoa');


        /*---------------------------------------ADMIN QL SINH VIÊN------------------------------------*/
        Route::get('/admin/sinh-vien', [SinhVienController::class, 'index'])-> name('sinhvien.index');
        Route::match(['GET', 'POST'],'/admin/sinh-vien/them', [SinhVienController::class, 'create'])-> name('sinhvien.gdthem');
        Route::match(['GET', 'POST'],'/admin/sinh-vien/xuly-them', [SinhVienController::class, 'store'])-> name('sinhvien.them');
        Route::get('/admin/sinh-vien/chinh-sua/{masv}', [SinhVienController::class, 'edit'])-> name('sinhvien.gdsua');
        Route::put('/admin/sinh-vien/xuly-sua/{masv}', [SinhVienController::class, 'update'])-> name('sinhvien.sua');
        Route::delete('/sinh-vien/xoa/{masv}', [SinhVienController::class, 'destroy'])-> name('sinhvien.xoa');
        /*---------------------------------------ADMIN QL SINH VIÊN THEO LỚP------------------------------------*/
        Route::get('/admin/sinh-vien/lop/{malop}', [SinhVienController::class, 'xemtheolop'])-> name('xemtheolop.index');

        /*---------------------------------------ADMIN QL LỚP-----------------------------------*/
        Route::get('/admin/lop', [LopController::class, 'index'])-> name('lop.index');
        Route::match(['GET', 'POST'],'/admin/lop/them', [LopController::class, 'create'])-> name('lop.gdthem');
        Route::match(['GET', 'POST'],'/lop/xuly-them', [LopController::class, 'store'])-> name('lop.them');
        Route::get('/admin/lop/chinh-sua/{malop}', [LopController::class, 'edit'])-> name('lop.gdsua');
        Route::put('/admin/lop/xuly-sua/{malop}', [LopController::class, 'update'])-> name('lop.sua');
        Route::delete('/admin/lop/xoa/{malop}', [LopController::class, 'destroy'])-> name('lop.xoa');

        /*---------------------------------------ADMIN QL CHỦ ĐỀ-----------------------------------*/
        Route::get('/admin/chu-de', [ChuDeController::class, 'index'])-> name('chude.index');
        Route::match(['GET', 'POST'],'/admin/chu-de/them', [ChuDeController::class, 'create'])-> name('chude.gdthem');
        Route::match(['GET', 'POST'],'/admin/chu-de/xuly-them', [ChuDeController::class, 'store'])-> name('chude.them');
        Route::get('/admin/chu-de/chinh-sua/{machude}', [ChuDeController::class, 'edit'])-> name('chude.gdsua');
        Route::put('/admin/chu-de/xuly-sua/{machude}', [ChuDeController::class, 'update'])-> name('chude.sua');
        Route::delete('/admin/chu-de/xoa/{machude}', [ChuDeController::class, 'destroy'])-> name('chude.xoa');

        /*---------------------------------------ADMIN QL BÀI ĐĂNG-----------------------------------*/      
        Route::get('/admin/bai-dang/chua-duyet', [BaiDangController::class, 'edit'])-> name('baidang.choduyet');
        Route::match(['GET', 'PUT'], '/admin/bai-dang/duyet/{tieude}', [BaiDangController::class, 'update'])-> name('baidang.duyet');
        Route::delete('/admin/bai-dang/xoa/{tieude}', [BaiDangController::class, 'destroy'])-> name('baidang.xoa');

        /*---------------------------------------ADMIN QL TỪ KHÓA-----------------------------------*/
        Route::get('/admin/tu-khoa', [TuKhoaController::class, 'index'])-> name('tukhoa.index');
        Route::match(['GET', 'POST'],'/admin/tu-khoa/them', [TuKhoaController::class, 'create'])-> name('tukhoa.gdthem');
        Route::match(['GET', 'POST'],'/admin/tu-khoa/xuly-them', [TuKhoaController::class, 'store'])-> name('tukhoa.them');
        Route::get('/admin/tu-khoa/chinh-sua/{matukhoa}', [TuKhoaController::class, 'edit'])-> name('tukhoa.gdsua');
        Route::put('/admin/tu-khoa/xuly-sua/{matukhoa}', [TuKhoaController::class, 'update'])-> name('tukhoa.sua');
        Route::delete('/admin/tu-khoa/xoa/{matukhoa}', [TuKhoaController::class, 'destroy'])-> name('tukhoa.xoa');

        /*---------------------------------------ADMIN QL ĐÀO TẠO------------------------------------*/
        Route::get('/admin/dao-tao', [DaoTaoController::class, 'index'])-> name('daotao.index');
        Route::match(['GET', 'POST'],'/admin/dao-tao/them', [DaoTaoController::class, 'create'])-> name('daotao.gdthem');
        Route::match(['GET', 'POST'],'/admin/dao-tao/xuly-them', [DaoTaoController::class, 'store'])-> name('daotao.them');
        Route::get('/admin/dao-tao/chinh-sua/{madaotao}', [DaoTaoController::class, 'edit'])-> name('daotao.gdsua');
        Route::put('/admin/dao-tao/xuly-sua/{madaotao}', [DaoTaoController::class, 'update'])-> name('daotao.sua');
        Route::delete('/admin/dao-tao/xoa/{madaotao}', [DaoTaoController::class, 'destroy'])-> name('daotao.xoa');

        /*---------------------------------------ADMIN QL LÝ LỊCH------------------------------------*/
        Route::get('/admin/ly-lich/{malylich}', [LyLichController::class, 'index'])-> name('lylich.index');
        Route::match(['GET', 'POST'],'/admin/ly-lich/them/{malylich}', [LyLichController::class, 'create'])-> name('lylich.gdthem');
        Route::match(['GET', 'POST'],'/admin/ly-lich/xuly-them', [LyLichController::class, 'store'])-> name('lylich.them');
        Route::get('/admin/ly-lich/chinh-sua/{malylich}', [LyLichController::class, 'edit'])-> name('lylich.gdsua');
        Route::put('/admin/ly-lich/xuly-sua/{malylich}', [LyLichController::class, 'update'])-> name('lylich.sua');
        Route::delete('/admin/ly-lich/xoa/{malylich}', [LyLichController::class, 'destroy'])-> name('lylich.xoa');

        /*---------------------------------------ADMIN QL CỐ VẤN------------------------------------*/
        Route::get('/admin/co-van', [CoVanController::class, 'index'])-> name('covan.index');
        Route::match(['GET', 'POST'],'/admin/co-van/them', [CoVanController::class, 'create'])-> name('covan.gdthem');
        Route::match(['GET', 'POST'],'/admin/co-van/xuly-them', [CoVanController::class, 'store'])-> name('covan.them');
        Route::get('/admin/co-van/chinh-sua/{magv}/{malop}', [CoVanController::class, 'edit'])-> name('covan.gdsua');
        Route::put('/adminco-van/xuly-sua/{magv}/{malop}', [CoVanController::class, 'update'])-> name('covan.sua');
        Route::delete('/admin/co-van/xoa/{magv}/{malop}', [CoVanController::class, 'destroy'])-> name('covan.xoa');
    });










