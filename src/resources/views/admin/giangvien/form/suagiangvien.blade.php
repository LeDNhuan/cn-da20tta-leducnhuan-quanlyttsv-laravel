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
                            <li class="breadcrumb-item active">Sửa giảng viên</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Sửa giảng viên</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form action="{{ route('giangvien.sua', $giangvien->MaGV) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaGV">MSGV</label>
                                            <input type="text" class="form-control" value="{{ $giangvien->MaGV }}" name="MaGV" placeholder="Nhập MSGV">
                                        </div>
                                        <div class="form-group">
                                            <label for="HoGV">Họ GV</label>
                                            <input type="text" class="form-control" value="{{ $giangvien->HoGV }}" name="HoGV" placeholder="Nhập họ GV">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenGV">Tên GV</label>
                                            <input type="text" class="form-control" value="{{ $giangvien->TenGV }}" name="TenGV" placeholder="Nhập tên GV">
                                        </div>
                                        <div class="form-group">
                                            <label for="GioiTinh">Giới tính</label>
                                            <select class="custom-select form-control-border border-width-2" name="GioiTinh">
                                                <option selected disabled>Chọn giới tính</option>
                                                <option value= "Nam"{{ $giangvien->GioiTinh == "Nam" ? 'selected' : '' }} >Nam</option>
                                                <option value= "Nữ"{{ $giangvien->GioiTinh == "Nữ" ? 'selected' : '' }} >Nữ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="DiaChi">Địa chỉ</label>
                                            <input type="text" class="form-control" value="{{ $giangvien->DiaChi }}" name="DiaChi" placeholder="Nhập địa chỉ">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoai">Điện thoại</label>
                                            <input type="text" class="form-control" value="{{ $giangvien->DienThoai }}" name="DienThoai" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" value="{{ $giangvien->Email }}" name="Email" placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Cập nhật</button>
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