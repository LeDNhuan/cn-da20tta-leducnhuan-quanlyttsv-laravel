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
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                        <th>Tình trạng</th>
                    </tr>
                    @foreach ($sinhvien as $sv)
                        <tr>
                            <td>{{ $sv->MSSV }}</td>
                            <td>{{ $sv->HoSV }} {{ $sv->TenSV }}</td>
                            <td>{{ $sv->GioiTinh }}</td>
                            <td>{{ $sv->NgaySinh }}</td>
                            <td>{{ $sv->DiaChi }}</td>
                            <td>{{ $sv->DienThoai }}</td>
                            <td>{{ $sv->Email }}</td>
                            <td>{{ $sv->TinhTrang }}</td>
                        </tr>
                    @endforeach
                    
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
    {{-- <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHƯƠNG TRÌNH ĐÀO TẠO</h3>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    @foreach ($daotao as $dt)
                    <table>                        
                            <tr>
                                <th style="width: 160px">Mã đào tạo</th>
                                <td>{{ $dt->MaDaoTao }}</td>
                            </tr>
                            <tr>
                                <th>Số quyết định</th>
                                <td>{{ $dt->SoQuyetDinh }}</td>
                            </tr>
                            <tr>
                                <th>Tín chỉ lý thuyết</th>
                                <td>{{ $dt->TCLyThuyet }}</td>
                            </tr>
                            <tr>
                                <th>Tín chỉ thực hành</th>
                                <td>{{ $dt->TCThucHanh }}</td>
                            </tr>
                            <tr>
                                <th>Tổng số tín chỉ</th>
                                <td>{{ $dt->TinChi }}</td>
                            </tr>                                              
                    </table>
                    <hr>
                    @endforeach  
                </div>
                <div class="col-md-6">
                    @foreach ($lop as $lp)
                    <table >
                        <tr>
                            <th style="width: 100px; color: #fd6372">Mã lớp</th>
                            <td>{{ $lp->MaLop }}</td>
                            
                        </tr>
                        <tr>
                            <th>Tên lớp</th>
                            <td>{{ $lp->TenLop }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center"><a href="" class="mytd">Xem thông tin lớp</a></td>
                            
                        </tr>
                    </table>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>  
    </div> --}}
     
@endsection