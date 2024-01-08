@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý lớp học</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('lop.index') }}">Quản lý lớp học</a></li>
                            <li class="breadcrumb-item active">Sửa lớp học</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Sửa lớp học</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form action="{{ route('giangvien.sua', $lop->MaLop) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaLop">Mã lớp</label>
                                            <input type="text" class="form-control" value="{{ $lop->MaLop }}" name="MaLop" placeholder="Nhập mã lớp">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenLop">Tên lớp</label>
                                            <input type="text" class="form-control" value="{{ $lop->TenLop }}" name="TenLop" placeholder="Nhập tên lớp">
                                        </div>
                                        <div class="form-group">
                                            <label for="MaDaoTao">Chương trình đào tạo</label>
                                            <select class="custom-select form-control-border border-width-2" name="MaDaoTao">
                                                <option selected disabled>Chọn mã chương trình đào tạo</option>
                                                @foreach ($daotao as $dt)    
                                                    <option value="{{ $dt->MaDaoTao }}">{{ $dt->MaDaoTao }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Cập nhật</button>
                                        &nbsp;
                                        <a href="{{ route('lop.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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