@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý chủ đề</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('chude.index') }}">Quản lý chủ đề</a></li>
                            <li class="breadcrumb-item active">Sửa chủ đề</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Sửa chủ đề</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form action="{{ route('chude.sua', $chude->MaChuDe) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaChuDe">Mã chủ đề</label>
                                            <input type="text" class="form-control" value="{{ $chude->MaChuDe }}" name="MaChuDe" placeholder="Nhập mã chủ đề">
                                        </div>
                                        <div class="form-group">
                                            <label for="TenChuDe">Tên chủ đề</label>
                                            <input type="text" class="form-control" value="{{ $chude->TenChuDe }}" name="TenChuDe" placeholder="Nhập tên chủ đề">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Cập nhật</button>
                                        &nbsp;
                                        <a href="{{ route('chude.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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