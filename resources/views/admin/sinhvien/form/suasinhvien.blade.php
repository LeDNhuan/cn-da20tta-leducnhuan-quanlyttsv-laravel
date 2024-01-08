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
                            <li class="breadcrumb-item active">Sửa sinh viên</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Sửa sinh viên</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form action="{{ route('sinhvien.sua', $sinhvien->MSSV) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaGV">MSGV</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->MSSV }}" name="MaGV" placeholder="Nhập MSGV">
                                        </div>
                                        <div class="form-group">
                                            <label for="HoGV">Họ GV</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->HoSV }}" name="HoGV" placeholder="Nhập họ GV">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenGV">Tên GV</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->TenSV }}" name="TenGV" placeholder="Nhập tên GV">
                                        </div>
                                        <div class="form-group">
                                            <label for="GioiTinh">Giới tính</label>
                                            <select class="custom-select form-control-border border-width-2" name="GioiTinh">
                                                <option selected disabled>Chọn giới tính</option>
                                                <option value= "Nam"{{ $sinhvien->GioiTinh == "Nam" ? 'selected' : '' }} >Nam</option>
                                                <option value= "Nữ"{{ $sinhvien->GioiTinh == "Nữ" ? 'selected' : '' }} >Nữ</option>
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
                                            <label for="DiaChi">Địa chỉ</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->DiaChi }}" name="DiaChi" placeholder="Nhập địa chỉ">
                                        </div>
                                        <div class="form-group">
                                            <label for="DienThoai">Điện thoại</label>
                                            <input type="text" class="form-control" value="{{ $sinhvien->DienThoai }}" name="DienThoai" placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" value="{{ $sinhvien->Email }}" name="Email" placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Cập nhật</button>
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