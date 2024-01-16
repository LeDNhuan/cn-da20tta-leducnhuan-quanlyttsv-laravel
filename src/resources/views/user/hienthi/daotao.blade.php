@extends('user.thanhphan.layout')
@section('content')
    <div class="ask-question-input-part032">
        <h3 class="text-center myh4">CHƯƠNG TRÌNH ĐÀO TẠO</h3>
            <hr>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <table>                        
                            <tr>
                                <th style="width: 160px">Mã đào tạo</th>
                                <td>{{ $daotao->MaDaoTao }}</td>
                            </tr>
                            <tr>
                                <th>Số quyết định</th>
                                <td>{{ $daotao->SoQuyetDinh }}</td>
                            </tr>
                            <tr>
                                <th>Tín chỉ lý thuyết</th>
                                <td>{{ $daotao->TCLyThuyet }}</td>
                            </tr>
                            <tr>
                                <th>Tín chỉ thực hành</th>
                                <td>{{ $daotao->TCThucHanh }}</td>
                            </tr>
                            <tr>
                                <th>Tổng số tín chỉ</th>
                                <td>{{ $daotao->TinChi }}</td>
                            </tr>                                              
                    </table>
                    <hr>
                </div>
                <div class="col-md-3"></div>
            </div>
            <hr>
            <h4 class="text-center myh4">CÁC LỚP THUỘC CHƯƠNG TRÌNH {{ $daotao->MaDaoTao }} - {{ $daotao->SoQuyetDinh }}</h4>
            <hr>
            <div class="row">
                {{-- <div class="col-md-3"></div> --}}
                @foreach ($lop as $lp)
                <div class="col-md-6">    
                    <table >
                        <tr>
                            <th>Mã lớp</th>
                            <td>{{ $lp->MaLop }}</td>
                            
                        </tr>
                        <tr>
                            <th>Tên lớp</th>
                            <td>{{ $lp->TenLop }}</td>
                        </tr>
                    </table>
                    <hr>
                </div>
                @endforeach
                {{-- <div class="col-md-3"></div> --}}
            </div>
        </div>  
    </div>
@endsection