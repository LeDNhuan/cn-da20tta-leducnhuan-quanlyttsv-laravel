@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Lý lịch trích ngang sinh viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Lý lịch sinh viên</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                    <div class="col-md-9">
                                        <h3 class="card-title" style="margin-top: 10px">Lý lịch sinh viên</h3>
                                    </div>
                                    @if (isset($lylich) && is_object($lylich))
                                        <div class="col-md-3">
                                            <a href="{{ route('lylich.gdthem', $sinhvien->MSSV) }}" class="btn btn-primary" style="width: 120px" disabled><i class="fa fa-plus"></i> Thêm</a>
                                            <a href="{{ route('lylich.gdthem', $sinhvien->MSSV) }}" class="btn btn-success" style="width: 120px"><i class="fa fa-edit"></i> Sửa</a>
                                        </div>
                                    @else
                                        <div class="col-md-3">
                                            <a href="{{ route('lylich.gdthem', $sinhvien->MSSV) }}" class="btn btn-primary" style="width: 120px">Thêm</a>
                                            <a href="{{ route('lylich.gdthem', $sinhvien->MSSV) }}" class="btn btn-success" style="width: 120px" disabled>Sửa</a>
                                        </div>
                                    @endif       
                                </div>  
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (Session::has('loi'))
                                <div class="alert alert-danger">
                                    {{ Session::get('loi') }}
                                </div>
                            @endif
                            @if (Session::has('thongbao'))
                                <div class="alert alert-success">
                                    {{ Session::get('thongbao') }}
                                </div>
                            @endif
                            <h2>{{ $sinhvien->MSSV }} - {{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }}</h2>
                            <hr>
                            <div class="row">
                                <h4 class="text-center col-md-5" style="font-weight: bold">
                                    THÔNG TIN CÁ NHÂN
                                </h4>
                                <div class="col-md-7">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 200px">Danh mục</th>
                                            <th>Thông tin</th>
                                        </thead>
                                        <tbody>
                                            @if (isset($sinhvien) && is_object($sinhvien))                                           
                                            <tr>
                                                <td class="bold">Họ tên</td>
                                                <td>{{ $sinhvien -> HoSV }} {{ $sinhvien -> TenSV }}</td>                                             
                                            </tr> 
                                            <tr>
                                                <td class="bold">Giới tính</td>
                                                <td>{{ $sinhvien -> GioiTinh }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Ngày sinh</td>
                                                <td>{{ $sinhvien -> NgaySinh }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Điện thoại</td>
                                                <td>{{ $sinhvien -> DienThoai }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Địa chỉ</td>
                                                <td>{{ $sinhvien -> DiaChi }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Email</td>
                                                <td>{{ $sinhvien -> Email }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Tình trạng</td>
                                                <td>{{ $sinhvien -> TinhTrang }}</td>                                             
                                            </tr>                                                                         
                                            @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h4 class="text-center col-md-5" style="font-weight: bold">
                                    THÔNG TIN CHA
                                </h4>
                                <div class="col-md-7">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 200px">Danh mục</th>
                                            <th>Thông tin</th>
                                        </thead>
                                        <tbody>
                                            @if (isset($lylich) && is_object($lylich))                                           
                                            <tr>
                                                <td class="bold">Họ tên</td>
                                                <td>{{ $lylich -> HoTenCha }}</td>                                             
                                            </tr> 
                                            <tr>
                                                <td class="bold">Năm sinh</td>
                                                <td>{{ $lylich -> NamSinhCha }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Điện thoại</td>
                                                <td>{{ $lylich -> DienThoaiCha }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Dân tộc</td>
                                                <td>{{ $lylich -> DanTocCha }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Tôn giáo</td>
                                                <td>{{ $lylich -> TonGiaoCha }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Nghề nghiệp</td>
                                                <td>{{ $lylich -> NgheNghiepCha }}</td>                                             
                                            </tr>                                                                         
                                            @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h4 class="text-center col-md-5" style="font-weight: bold">
                                    THÔNG TIN MẸ
                                </h4>
                                <div class="col-md-7">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th style="width: 200px">Danh mục</th>
                                            <th>Thông tin</th>
                                        </thead>
                                        <tbody>
                                            @if (isset($lylich) && is_object($lylich))                                            
                                            <tr>
                                                <td class="bold">Họ tên</td>
                                                <td>{{ $lylich -> HoTenMe }}</td>                                             
                                            </tr> 
                                            <tr>
                                                <td class="bold">Năm sinh</td>
                                                <td>{{ $lylich -> NamSinhMe }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Điện thoại</td>
                                                <td>{{ $lylich -> DienThoaiMe }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Dân tộc</td>
                                                <td>{{ $lylich -> DanTocMe }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Tôn giáo</td>
                                                <td>{{ $lylich -> TonGiaoMe }}</td>                                             
                                            </tr>
                                            <tr>
                                                <td class="bold">Nghề nghiệp</td>
                                                <td>{{ $lylich -> NgheNghiepMe }}</td>                                             
                                            </tr>                                                                           
                                            @endif    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>
</div>
@endsection
<!-- Content Wrapper. Contains page content -->
