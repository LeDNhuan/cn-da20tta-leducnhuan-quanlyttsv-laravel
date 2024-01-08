@extends('admin.thanhphan.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">TRANG CHỦ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Trang chủ</li>
                            {{-- <li class="breadcrumb-item active"></li> --}}
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
                                        <h2 class="card-title" style="margin-top: 10px"><strong>Chào mừng đến với trang quản trị ứng dụng web How well for SITers</strong></h2>
                                    </div>
                                </div>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <h5>Hướng dẫn quản trị</h5>
                                <ul>
                                    <li>Quản lý các Modules theo các danh mục Modules bên trái.</li>
                                    <li>Nội dung các Modules được hiển thị ở khung bên phải</li>
                                    <li>Có thể mở rộng màn hình module bằng cách mở rộng/thu nhỏ thanh điều hướng ở header</li>
                                    <li>Icon user : Truy cập Module quản lý thông tin cá nhân - Thoát phiên đăng nhập</li>
                                </ul>
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
