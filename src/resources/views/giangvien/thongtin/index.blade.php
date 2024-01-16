@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">THÔNG TIN CÁ NHÂN</h3>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <table >
                    <tr>
                        <th>MSSV</th>
                        <td>{{ $giangvien->MaGV }}</td>
                    </tr>
                    <tr>
                        <th>Họ tên</th>
                        <td>{{ $giangvien->HoGV }} {{ $giangvien->TenGV }}</td>
                    </tr>
                    <tr>
                        <th>Giới tính</th>
                        <td>{{ $giangvien->GioiTinh }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table>
                    <tr>
                        <th>Địa chỉ</th>
                        <td>{{ $giangvien->DiaChi }}</td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td>{{ $giangvien->DienThoai }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $giangvien->Email }}</td>
                    </tr>
                </table>
                <a class="edit-btn btn" href="{{ route('gvthongtin.gdsua', auth()->user()->TenDangNhap) }}">Chỉnh sửa</a>
                
            </div>
        </div>
    </div>    
@endsection