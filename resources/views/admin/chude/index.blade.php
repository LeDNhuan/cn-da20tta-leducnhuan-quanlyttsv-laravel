@extends('admin.thanhphan.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý chủ đề</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Quản lý chủ đề</li>
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
                                        <h3 class="card-title" style="margin-top: 10px">Quản lý chủ đề</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('chude.gdthem') }}" class="btn btn-primary" style="width: 120px"><i class="fa fa-plus"></i> Thêm</a>
                                        &nbsp;
                                        <a href="" class="btn btn-danger" style="width: 120px"><i class="fa fa-trash"></i> Xóa</a>
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
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 20px">
                                                {{-- <input type="checkbox" name="" class="input-checkbox"> --}}
                                                STT
                                            </th>
                                            <th>Mã chủ đề</th>
                                            <th>Tên chủ đề</th>
                                            <th class="text-center">Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @if (isset($chude) && is_object($chude)) --}}
                                            @foreach ($chude as $cd)
                                            <tr>
                                                {{-- <td>
                                                    <input type="checkbox" name="" class="input-checkbox checkboxItem">
                                                </td> --}}
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $cd -> MaChuDe }}</td>
                                                <td>{{ $cd -> TenChuDe }}</td>
                                                <td style="width: 120px">
                                                    <form action="{{ route('chude.xoa', $cd->MaChuDe) }}" method="post">
                                                        <a href="{{ route('chude.gdsua', $cd->MaChuDe) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>                                                        
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
                                {{ $chude -> links('pagination::bootstrap-4') }}
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
