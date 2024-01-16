@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHỈNH SỬA LÝ LỊCH TRÍCH NGANG</h3>
        <hr>
        <form method="POST" action="{{ route('svlylich.sua', $sinhvien->MSSV) }}">
        @method('PUT')
        @csrf
            <div class="row">
                <div class="col-md-6">
                    <h4 class="myh4 text-center">THÔNG TIN CHA</h4>
                    <div class="form-group myform">
                        <label for="HoTenCha">Họ tên:</label>
                        <input type="text" name="HoTenCha" value="{{ $lylich->HoTenCha }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="NamSinhCha">Năm sinh:</label>
                        <input type="text" name="NamSinhCha" value="{{ $lylich->NamSinhCha }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="DienThoaiCha">Điện thoại:</label>
                        <input type="text" name="DienThoaiCha" value="{{ $lylich->DienThoaiCha }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="GioiTinhCha">Dân tộc:</label>
                        <input type="text" name="GioiTinhCha" value="{{ $lylich->DanTocCha }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="TonGiaoCha">Tôn giáo:</label>
                        <input type="text" name="TonGiaoCha" value="{{ $lylich->TonGiaoCha }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="NgheNghiepCha">Nghề nghiệp:</label>
                        <input type="text" name="NgheNghiepCha" value="{{ $lylich->NgheNghiepCha }}" class="form-control">  
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="myh4 text-center">THÔNG TIN MẸ</h4>
                    <div class="form-group myform">
                        <label for="HoTenMe">Họ tên:</label>
                        <input type="text" name="HoTenMe" value="{{ $lylich->HoTenMe }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="NamSinhMe">Năm sinh:</label>
                        <input type="text" name="NamSinhMe" value="{{ $lylich->NamSinhMe }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="DienThoaiMe">Điện thoại:</label>
                        <input type="text" name="DienThoaiMe" value="{{ $lylich->DienThoaiMe }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="GioiTinhMe">Dân tộc:</label>
                        <input type="text" name="GioiTinhMe" value="{{ $lylich->DanTocMe }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="TonGiaoMe">Tôn giáo:</label>
                        <input type="text" name="TonGiaoMe" value="{{ $lylich->TonGiaoMe }}" class="form-control">  
                    </div>
                    <div class="form-group myform">
                        <label for="NgheNghiepMe">Nghề nghiệp:</label>
                        <input type="text" name="NgheNghiepMe" value="{{ $lylich->NgheNghiepMe }}" class="form-control">  
                    </div>
                </div>    
            </div>
            
            <div class="publish-button2389">
                <input type="submit" value="Cập nhật" class="publis1291">
            </div>
        </form>    
    </div>    
@endsection