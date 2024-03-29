@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">THÔNG TIN CÁ NHÂN</h3>
        <hr>
        <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-4 text-center">
                <img class="myImg" src="{{ $nguoidung->AnhDaiDien }}" alt="">
            </div>
            <div class="col-md-8">
                <table >
                    <tr>
                        <th>MSSV</th>
                        <td>{{ $sinhvien->MSSV }}</td>
                    </tr>
                    <tr>
                        <th>Họ tên</th>
                        <td>{{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }}</td>
                    </tr>
                    <tr>
                        <th>Giới tính</th>
                        <td>{{ $sinhvien->GioiTinh }}</td>
                    </tr>
                    <tr>
                        <th>Ngày sinh</th>
                        <td>{{ $sinhvien->NgaySinh }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 text-center" style="margin-top: 50px">
                <h3 class="myh4">THÔNG TIN LIÊN LẠC</h3>
            </div>
            <div class="col-md-8">
                <table>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $sinhvien->DiaChi }}</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>{{ $sinhvien->DienThoai }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $sinhvien->Email }}</td>
                    </tr>
                    <tr>
                        <th>Tình trạng</th>
                        <td>{{ $sinhvien->TinhTrang }}</td>
                    </tr>
                </table>
                <a class="edit-btn btn" href="{{ route('svthongtin.gdsua', auth()->user()->TenDangNhap) }}">Chỉnh sửa</a>
                <a class="edit-btn btn" href="{{ route('svlylich.index', auth()->user()->TenDangNhap) }}" style="margin-right: 5px">Xem lý lịch</a>
            </div>         
        </div>
    </div>    
    {{-- <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHƯƠNG TRÌNH ĐÀO TẠO</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <table >
                        <tr>
                            <th style="width: 100px; color: #fd6372">Mã lớp</th>
                            <td>{{ $sinhvien->MaLop }}</td>
                            
                        </tr>
                        <tr>
                            <th>Tên lớp</th>
                            <td>{{ $malop->TenLop }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th style="width: 160px">Mã đào tạo</th>
                            <td>{{ $malop->MaDaoTao }}</td>
                        </tr>
                        <tr>
                            <th>Số quyết định</th>
                            <td>{{ $madaotao->SoQuyetDinh }}</td>
                        </tr>
                        <tr>
                            <th>Tín chỉ lý thuyết</th>
                            <td>{{ $madaotao->TCLyThuyet }}</td>
                        </tr>
                        <tr>
                            <th>Tín chỉ thực hành</th>
                            <td>{{ $madaotao->TCThucHanh }}</td>
                        </tr>
                        <tr>
                            <th>Tổng số tín chỉ</th>
                            <td>{{ $madaotao->TinChi }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>  
    </div> --}}
     
@endsection