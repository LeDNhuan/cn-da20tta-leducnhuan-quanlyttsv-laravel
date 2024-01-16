@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">LÝ LỊCH TRÍCH NGANG</h3>
        <hr>
        {{-- <h4 class="myh4">{{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }} - {{ $sinhvien->MSSV }}</h4> --}}
        <div class="row">
            @if (isset($lylich) && is_object($lylich))
                <div class="col-md-6">
                    <table >
                        <tr>
                            <th colspan="2" class="text-center">THÔNG TIN CHA</th>
                        </tr>
                        <tr>
                            <th>Họ tên</th>
                            <td>{{ $lylich->HoTenCha }}</td>
                        </tr>
                        <tr>
                            <th>Năm sinh</th>
                            <td>{{ $lylich->NamSinhCha }}</td>
                        </tr>
                        <tr>
                            <th>Điện thoại</th>
                            <td>{{ $lylich->DienThoaiCha }}</td>
                        </tr>
                        <tr>
                            <th>Dân tộc</th>
                            <td>{{ $lylich->DanTocCha }}</td>
                        </tr>
                        <tr>
                            <th>Tôn giáo</th>
                            <td>{{ $lylich->TonGiaoCha }}</td>
                        </tr>
                        <tr>
                            <th style="width: 120px">Nghề nghiệp</th>
                            <td>{{ $lylich->NgheNghiepCha }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th colspan="2" class="text-center">THÔNG TIN MẸ</th>
                        </tr>
                        <tr>
                            <th>Họ tên</th>
                            <td>{{ $lylich->HoTenMe }}</td>
                        </tr>
                        <tr>
                            <th>Năm sinh</th>
                            <td>{{ $lylich->NamSinhMe }}</td>
                        </tr>
                        <tr>
                            <th>Điện thoại</th>
                            <td>{{ $lylich->DienThoaiMe }}</td>
                        </tr>
                        <tr>
                            <th>Dân tộc</th>
                            <td>{{ $lylich->DanTocMe }}</td>
                        </tr>
                        <tr>
                            <th>Tôn giáo</th>
                            <td>{{ $lylich->TonGiaoMe }}</td>
                        </tr>
                        <tr>
                            <th style="width: 120px">Nghề nghiệp</th>
                            <td>{{ $lylich->NgheNghiepMe }}</td>
                        </tr>
                    </table>
                    <a class="edit-btn btn" href="{{ route('svlylich.gdsua', auth()->user()->TenDangNhap) }}">Chỉnh sửa</a>
                    <a class="edit-btn btn" href="{{ route('xemthongtin.index', auth()->user()->TenDangNhap) }}" style="margin-right: 5px">Trở lại</a>
                </div> 
            @endif                    
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