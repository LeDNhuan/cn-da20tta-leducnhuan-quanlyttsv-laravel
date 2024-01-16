@extends('admin.thanhphan.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý bài đăng</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Quản lý bài đăng</li>
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
                                        <h3 class="card-title" style="margin-top: 10px">Bài đăng đã duyệt</h3>
                                    </div>
                                    {{-- <div class="col-md-3">
                                        <a href="{{ route('baidang.gdthem') }}" class="btn btn-primary" style="width: 120px">Thêm</a>
                                        &nbsp;
                                        <a href="" class="btn btn-danger" style="width: 120px">Xóa</a>
                                    </div> --}}
                                </div>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (Session::has('loi'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('loi') }}
                                    </div>
                                @endif
                                @if (Session::has('thongbao'))
                                    <div class="alert alert-success">
                                        {{ Session::get('thongbao') }}
                                    </div>
                                @endif
                                <table id="myTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px">
                                                {{-- <input type="checkbox" name="" class="input-checkbox"> --}}
                                                STT
                                            </th>
                                            <th>Mã bài đăng</th>
                                            <th>Tiêu đề</th>
                                            <th>Nội dung</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày đăng</th>
                                            <th>Trạng thái</th>
                                            <th class="text-center">Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if (isset($giangvien) && is_object($giangvien)) --}}
                                            @foreach ($trangthai as $tt)
                                            <tr>
                                                {{-- <td>
                                                    <input type="checkbox" name="" class="input-checkbox checkboxItem">
                                                </td> --}}
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $tt -> id }}</td>
                                                <td>{{ $tt -> TieuDeBD }}</td>
                                                <td>{{ $tt -> NoiDungBD }}</td>
                                                <td>{{ $tt -> HinhAnh }}</td>
                                                <td>{{ $tt -> NgayDang }}</td>                                               
                                                <td>{{ $tt -> TrangThai }}</td>
                                                <td style="width: 120px">
                                                    <form action="{{ route('baidang.xoa', $tt->id) }}" method="post">
                                                        <a href="{{ route('baidang.duyet', $tt->id) }}" class="btn btn-success"><i class="fa fa-check"></i></a>                                                        
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr> 
                                            @endforeach                                
                                        {{-- @endif     --}}
                                    </tbody>
                                </table>
                                {{-- {{ $baidang -> links('pagination::bootstrap-4') }} --}}
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
