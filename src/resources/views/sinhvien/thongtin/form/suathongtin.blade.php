@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHỈNH SỬA THÔNG TIN CÁ NHÂN</h3>
        <hr>
        <form method="POST" action="{{ route('svthongtin.sua', $sinhvien->MSSV) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="MSSV">MSSV:</label>
                        <input type="text" name="MSSV" value="{{ $sinhvien->MSSV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="HoSV">Họ:</label>
                        <input type="text" name="HoSV" value="{{ $sinhvien->HoSV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="TenSV">Tên:</label>
                        <input type="text" name="TenSV" value="{{ $sinhvien->TenSV }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="GioiTinh">Giới tính:</label>
                        <input type="text" name="GioiTinh" value="{{ $sinhvien->GioiTinh }}" class="form-control" readonly>  
                    </div>
                    <div class="form-group myform">
                        <label for="NgaySinh">Ngày sinh:</label>
                        <input type="date" name="NgaySinh" value="{{ $sinhvien->NgaySinh }}" class="form-control" readonly>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group myform">
                        <label for="DiaChi">Địa chỉ:</label>
                        <input type="text" name="DiaChi" value="{{ $sinhvien->DiaChi }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="DienThoai">Điện thoại:</label>
                        <input type="text" name="DienThoai" value="{{ $sinhvien->DienThoai }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="Email">Email:</label>
                        <input type="text" name="Email" value="{{ $sinhvien->Email }}" class="form-control">
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