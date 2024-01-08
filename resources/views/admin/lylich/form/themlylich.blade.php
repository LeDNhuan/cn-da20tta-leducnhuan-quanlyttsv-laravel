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
                            <li class="breadcrumb-item active"><a href="{{ route('sinhvien.index') }}">Quản lý sinh viên</a></li>
                            <li class="breadcrumb-item active">Thêm lý lịch</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Thêm lý lịch</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="{{ route('lylich.them') }}">
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MSSV">MSSV</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->MSSV }}" name="MSSV" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="MaLyLich">Mã lý lịch</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->MSSV }}" name="MaLyLich" placeholder="" readonly>
                                        </div>

                                        <hr>
                                        {{--------------- THÔNGTINCHA ----------------}}
                                        <h3>Thông tin cha</h3>
                                        <div class="form-group">
                                            <label for="HoTenCha">Họ tên</label>
                                            <input type="text" class="form-control" name="HoTenCha" placeholder="Nhập tên SV">
                                        </div>
                                        <div class="form-group">
                                            <label for="NamSinhCha">Ngày sinh</label>
                                            <input type="date" class="form-control" name="NamSinhCha" placeholder="Nhập ngày sinh">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoaiCha">Điện thoại</label>
                                            <input type="text" class="form-control" name="DienThoaiCha" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="DanTocCha">Dân tộc</label>
                                            <input type="text" class="form-control" name="DanTocCha" placeholder="Nhập dân tộc">
                                        </div>
                                        <div class="form-group">
                                            <label for="TonGiaoCha">Tôn giáo</label>
                                            <input type="text" class="form-control" name="TonGiaoCha" placeholder="Nhập tôn giáo">
                                        </div>
                                        <div class="form-group">
                                            <label for="NgheNghiepCha">Nghề nghiệp</label>
                                            <input type="text" class="form-control" name="NgheNghiepCha" placeholder="Nhập nghề nghiệp">
                                        </div>

                                        <hr>
                                        {{--------------- THÔNG TIN MẸ -----------------}}
                                        <h3>Thông tin mẹ</h3>
                                        <div class="form-group">
                                            <label for="HoTenMe">Họ tên</label>
                                            <input type="text" class="form-control" name="HoTenMe" placeholder="Nhập tên SV">
                                        </div>
                                        <div class="form-group">
                                            <label for="NamSinhMe">Ngày sinh</label>
                                            <input type="date" class="form-control" name="NamSinhMe" placeholder="Nhập ngày sinh">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoaiMe">Điện thoại</label>
                                            <input type="text" class="form-control" name="DienThoaiMe" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="DanTocMe">Dân tộc</label>
                                            <input type="text" class="form-control" name="DanTocMe" placeholder="Nhập dân tộc">
                                        </div>
                                        <div class="form-group">
                                            <label for="TonGiaoMe">Tôn giáo</label>
                                            <input type="text" class="form-control" name="TonGiaoMe" placeholder="Nhập tôn giáo">
                                        </div>
                                        <div class="form-group">
                                            <label for="NgheNghiepMe">Nghề nghiệp</label>
                                            <input type="text" class="form-control" name="NgheNghiepMe" placeholder="Nhập nghề nghiệp">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Thêm</button>
                                        &nbsp;
                                        <a href="{{ route('sinhvien.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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