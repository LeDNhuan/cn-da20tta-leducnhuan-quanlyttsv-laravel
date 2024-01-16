@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">THÔNG TIN LỚP "{{ $lop->TenLop }} - {{ $lop->MaLop }}"</h3>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <table >
                    <tr>
                        <th>MSSV</th>
                        <th>Họ tên</th>
                        {{-- <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th> --}}
                        <th>Tình trạng</th>
                        <th>Lý lịch trích ngang</th>
                    </tr>
                    @if (isset($sinhvien) && is_object($sinhvien))
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{ $sv->MSSV }}</td>
                                <td>{{ $sv->HoSV }} {{ $sv->TenSV }}</td>
                                {{-- <td>{{ $sv->GioiTinh }}</td>
                                <td>{{ $sv->NgaySinh }}</td>
                                <td>{{ $sv->DiaChi }}</td>
                                <td>{{ $sv->DienThoai }}</td>
                                <td>{{ $sv->Email }}</td> --}}
                                <td>{{ $sv->TinhTrang }}</td>
                                <td colspan="2" style="text-align: center"><a href="{{ route('gvcovan.hienthisv', $sv->MSSV) }}" class="mytd">Xem thông tin chi tiết</a></td>
                            </tr>
                        @endforeach
                    @endif
                    
                    
                </table>
            </div>
            {{-- <div class="col-md-6">
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
            </div> --}}
        </div>
    </div>    
     
@endsection