@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHỈNH SỬA THÔNG TIN CÁ NHÂN</h3>
        <hr>
        <form method="POST" action="{{ route('gvthongtin.sua', $giangvien->MaGV) }}">
        @method('PUT')
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="MaGV">Mã giảng viên:</label>
                        <input type="text" name="MaGV" value="{{ $giangvien->MaGV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="HoGV">Họ:</label>
                        <input type="text" name="HoGV" value="{{ $giangvien->HoGV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="TenGV">Tên:</label>
                        <input type="text" name="TenGV" value="{{ $giangvien->TenGV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="GioiTinh">Giới tính:</label>
                        <input type="text" name="GioiTinh" value="{{ $giangvien->GioiTinh }}" class="form-control" readonly>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="DiaChi">Địa chỉ:</label>
                        <input type="text" name="DiaChi" value="{{ $giangvien->DiaChi }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="DienThoai">Điện thoại:</label>
                        <input type="text" name="DienThoai" value="{{ $giangvien->DienThoai }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="Email">Email:</label>
                        <input type="text" name="Email" value="{{ $giangvien->Email }}" class="form-control">
                    </div>
                    <div class="form-group myform">
                        <label for="HinhAnh">Ảnh đại diện:</label>
                        <input type="file" name="HinhAnh" value="{{ $nguoidung->AnhDaiDien }}" class="form-control">
                    </div>
                </div>    
            </div>
            
            <div class="publish-button2389">
                <input type="submit" value="Cập nhật" class="publis1291">
            </div>
        </form>    
    </div>    
@endsection