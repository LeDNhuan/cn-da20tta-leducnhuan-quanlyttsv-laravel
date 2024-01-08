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
                            <li class="breadcrumb-item active"><a href="{{ route('giangvien.index') }}">Quản lý giảng viên</a></li>
                            <li class="breadcrumb-item active">Thêm giảng viên</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Thêm giảng viên</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="{{ route('giangvien.them') }}">
                                @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaGV">MSGV</label>
                                            <input type="text" class="form-control" name="MaGV" placeholder="Nhập MSGV">
                                        </div>
                                        <div class="form-group">
                                            <label for="HoGV">Họ GV</label>
                                            <input type="text" class="form-control" name="HoGV" placeholder="Nhập họ GV">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenGV">Tên GV</label>
                                            <input type="text" class="form-control" name="TenGV" placeholder="Nhập tên GV">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="txtMatkhau">Mật khẩu</label>
                                            <input type="text" class="form-control" name="txtMatkhau" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <label for="txtVaitro">Vai trò</label>
                                            <input type="text" class="form-control" value="Giảng viên" name="txtVaitro" placeholder="Nhập vai trò" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="ipFile">Đăng ảnh</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="ipFile">
                                                    <label class="custom-file-label" for="ipFile">Chọn</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Tải lên</span>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="GioiTinh">Giới tính</label>
                                            <select class="custom-select form-control-border border-width-2" name="GioiTinh">
                                                <option selected disabled>Chọn giới tính</option>
                                                <option>Nam</option>
                                                <option>Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="DiaChi">Địa chỉ</label>
                                            <input type="text" class="form-control" name="DiaChi" placeholder="Nhập địa chỉ">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoai">Điện thoại</label>
                                            <input type="text" class="form-control" name="DienThoai" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" name="Email" placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Thêm</button>
                                        &nbsp;
                                        <a href="{{ route('giangvien.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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