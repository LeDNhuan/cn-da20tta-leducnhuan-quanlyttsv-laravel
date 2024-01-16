@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý thành viên</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('giangvien.index') }}">Quản lý sinh viên</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('lylich.index', $sinhvien->MSSV) }}">Lý lịch sinh viên</a></li>
                            <li class="breadcrumb-item active">Sửa lý lịch sinh viên</li>
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
                                <h1 class="card-title" style="margin-top: 10px">Sửa lý lịch sinh viên</h1>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h3>{{ $sinhvien->MSSV }} - {{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }}</h3>
                                <!-- form start -->
                                <form action="{{ route('lylich.sua', $sinhvien->MSSV) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="row">
                                            <h4 class="text-center col-md-4" style="font-weight: bold">
                                                THÔNG TIN CHA
                                            </h4>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="HoTenCha">Họ tên</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->HoTenCha }}" name="HoTenCha" placeholder="Nhập họ tên">
                                                </div>
                                                <div class="form-group">
                                                    <label for="NamSinhCha">Năm sinh</label>
                                                    <input type="date" class="form-control" value="{{ $lylich->NamSinhCha }}" name="NamSinhCha" placeholder="Nhập năm sinh">
                                                </div>
                                                <div class="form-group">
                                                    <label for="DienThoaiCha">Điện thoại</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->DienThoaiCha }}" name="DienThoaiCha" placeholder="Nhập số điện thoại">
                                                </div>
                                                <div class="form-group">
                                                    <label for="DanTocCha">Dân tộc</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->DanTocCha }}" name="DanTocCha" placeholder="Nhập dân tộc">
                                                </div>
                                                <div class="form-group">
                                                    <label for="TonGiaoCha">Tôn giáo</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->TonGiaoCha }}" name="TonGiaoCha" placeholder="Nhập tôn giáo">
                                                </div>
                                                <div class="form-group">
                                                    <label for="NgheNghiepCha">Nghề nghiệp</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->NgheNghiepCha }}" name="NgheNghiepCha" placeholder="Nhập nghề nghiệp">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h4 class="text-center col-md-4" style="font-weight: bold">
                                                THÔNG TIN MẸ
                                            </h4>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="HoTenMe">Họ tên</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->HoTenMe }}" name="HoTenMe" placeholder="Nhập họ tên">
                                                </div>
                                                <div class="form-group">
                                                    <label for="NamSinhMe">Năm sinh</label>
                                                    <input type="date" class="form-control" value="{{ $lylich->NamSinhMe }}" name="NamSinhMe" placeholder="Nhập năm sinh">
                                                </div>
                                                <div class="form-group">
                                                    <label for="DienThoaiMe">Điện thoại</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->DienThoaiMe }}" name="DienThoaiMe" placeholder="Nhập số điện thoại">
                                                </div>
                                                <div class="form-group">
                                                    <label for="DanTocMe">Dân tộc</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->DanTocMe }}" name="DanTocMe" placeholder="Nhập dân tộc">
                                                </div>
                                                <div class="form-group">
                                                    <label for="TonGiaoMe">Tôn giáo</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->TonGiaoMe }}" name="TonGiaoMe" placeholder="Nhập tôn giáo">
                                                </div>
                                                <div class="form-group">
                                                    <label for="NgheNghiepMe">Nghề nghiệp</label>
                                                    <input type="text" class="form-control" value="{{ $lylich->NgheNghiepMe }}" name="NgheNghiepMe" placeholder="Nhập nghề nghiệp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Cập nhật</button>
                                        &nbsp;
                                        <a href="{{ route('lylich.index', $sinhvien->MSSV) }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.card -->
    </div>
@endsection