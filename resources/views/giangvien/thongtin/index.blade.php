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
            </div>
        </div>
    </div>    
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHƯƠNG TRÌNH ĐÀO TẠO</h3>
            <hr>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @foreach ($madt as $dt)
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
                    <div class="row">
                        @foreach ($lop as $lp)
                        <div class="col-md-6">
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
                                    <td colspan="2" style="text-align: center">
                                        <a href="{{ route('ttlop.index', $lp->MaLop) }}" class="mytd">Xem thông tin lớp</a>
                                    </td>                        
                                </tr>
                            </table>
                        </div>
                        @endforeach
                    </div>
                    <hr>   
                    @endforeach  
                </div>
                <div class="col-md-1"></div>
                
                {{-- <div class="col-md-6">
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
                            <td colspan="2" style="text-align: center">
                                <a href="{{ route('ttlop.index', $lp->MaLop) }}" class="mytd">Xem thông tin lớp</a>
                            </td>                        
                        </tr>
                    </table>
                    <hr>
                    @endforeach
                </div> --}}
            </div>
        </div>  
    </div>
     
@endsection