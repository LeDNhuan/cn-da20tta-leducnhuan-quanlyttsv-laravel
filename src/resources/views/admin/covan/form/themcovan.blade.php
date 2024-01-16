@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý cố vấn</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('giangvien.index') }}">Quản lý cố vấn</a></li>
                            <li class="breadcrumb-item active">Thêm cố vấn</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Thêm cố vấn</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="{{ route('covan.them') }}">
                                @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaGV">Tên giảng viên</label>
                                            <select class="custom-select form-control-border border-width-2" name="MaGV">
                                                <option selected disabled>Chọn giảng viên</option>
                                                @foreach ($giangvien as $gv)
                                                    <option value="{{ $gv->MaGV }}">{{ $gv->HoGV }} {{ $gv->TenGV }}</option>
                                                @endforeach    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="MaLop">Mã lớp</label>
                                            <select class="custom-select form-control-border border-width-2" name="MaLop">
                                                <option selected disabled>Chọn lớp</option>
                                                @foreach ($lop as $lp)
                                                    <option value="{{ $lp->MaLop }}">{{ $lp->TenLop }}</option>
                                                @endforeach    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ThoiGianBDCV">Thời gian bắt đầu cố vấn</label>
                                            <input type="date" class="form-control" name="ThoiGianBDCV" placeholder="Nhập thời gian bắt đầu">
                                        </div>
                                        <div class="form-group">
                                            <label for="ThoiGianKTCV">Thời gian kết thúc cố vấn</label>
                                            <input type="date" class="form-control" name="ThoiGianKTCV" placeholder="Nhập thời gian kết thúc">
                                        </div>
                                        <div class="form-group">
                                            <label for="TrangThai">Trạng thái</label>
                                            <select class="custom-select form-control-border border-width-2" name="TrangThai">
                                                <option selected disabled>Chọn tình trạng</option>
                                                <option>Đang cố vấn</option>
                                                <option>Không còn có vấn</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Thêm</button>
                                        &nbsp;
                                        <a href="{{ route('covan.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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