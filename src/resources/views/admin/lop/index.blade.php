@extends('admin.thanhphan.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Quản lý Lớp</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                <li class="breadcrumb-item active">Quản lý lớp học</li>
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
                                            <h3 class="card-title" style="margin-top: 10px">Quản lý lớp học</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('lop.gdthem') }}" class="btn btn-primary" style="width: 110px">Thêm</a>
                                            &nbsp;
                                            <a href="" class="btn btn-danger" style="width: 110px">Xóa</a>
                                        </div>
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
                                                {{-- <input type="checkbox" name="" id="checkAll" class="input-checkbox"> --}}
                                                STT
                                            </th>
                                            <th>Mã lớp</th>
                                            <th>Tên lớp</th>
                                            <th>Chương trình đào tạo</th>
                                            <th class="text-center">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if (isset($sinhviens) && is_object($sinhviens)) --}}
                                        @foreach ($lop as $lp)
                                        <tr>
                                            <td>
                                                {{-- <input type="checkbox" name="" id="checkAll" class="input-checkbox checkboxItem"> --}}
                                                {{ ++$i }}
                                            </td>
                                            <td>{{ $lp -> MaLop }}</td>
                                            <td>{{ $lp -> TenLop }}</td>
                                            <td>{{ $lp -> MaDaoTao }}</td>
                                            <td style="width: 120px">
                                                <form action="{{ route('lop.xoa', $lp->MaLop) }}" method="post">
                                                    <a href="{{ route('lop.gdsua', $lp->MaLop) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>                                                        
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
                                {{-- {{ $lop -> links('pagination::bootstrap-4') }} --}}
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