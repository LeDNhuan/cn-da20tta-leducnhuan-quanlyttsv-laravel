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
                            <li class="breadcrumb-item active">Thêm sinh viên</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Thêm sinh viên</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="{{ route('sinhvien.them') }}">
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MSSV">MSSV</label>
                                            <input type="text" class="form-control" name="MSSV" placeholder="Nhập MSSV">
                                        </div>
                                        <div class="form-group">
                                            <label for="HoSV">Họ SV</label>
                                            <input type="text" class="form-control" name="HoSV" placeholder="Nhập họ SV">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenSV">Tên SV</label>
                                            <input type="text" class="form-control" name="TenSV" placeholder="Nhập tên SV">
                                        </div>
                                        <div class="form-group">
                                            <label for="GioiTinh">Giới tính</label>
                                            <select class="custom-select form-control-border border-width-2" name="GioiTinh">
                                                <option selected disabled>Chọn giới tính</option>
                                                <option>Nam</option>
                                                <option>Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="MaLop">Lớp</label>
                                            <select class="custom-select form-control-border border-width-2" name="MaLop">
                                                <option selected disabled>Chọn lớp</option>
                                                @foreach ($lop as $lp)
                                                    <option value="{{ $lp->MaLop }}">{{ $lp->TenLop }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="NgaySinh">Ngày sinh</label>
                                            <input type="date" class="form-control" name="NgaySinh" placeholder="Nhập ngày sinh">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoai">Điện thoại</label>
                                            <input type="text" class="form-control" name="DienThoai" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="DiaChi">Địa chỉ</label>
                                            <input type="text" class="form-control" name="DiaChi" placeholder="Nhập địa chỉ">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" name="Email" placeholder="Nhập email">
                                        </div>
                                        <div class="form-group">
                                            <label for="TinhTrang">Tình trạng</label>
                                            <select class="custom-select form-control-border border-width-2" name="TinhTrang">
                                                <option selected disabled>Chọn tình trạng</option>
                                                <option>Học</option>
                                                <option>Thôi học</option>
                                            </select>
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