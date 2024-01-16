@extends('admin.thanhphan.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lý thành viên</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý sinh viên</li>
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
                                    <div class="col-md-6">
                                        <h3 class="card-title" style="margin-top: 10px">Quản lý sinh viên</h3>
                                    </div>
                                    <div class="col-md-3">
                                        <select class="custom-select form-control-border border-width-2" name="MaLop">
                                            <option selected disabled>Xem sinh viên theo lớp</option>
                                            @foreach ($lop as $lp)
                                                <option href="{{ route('xemtheolop.index', $lp->MaLop) }}" value="{{ $lp->MaLop }}">{{ $lp->TenLop }}</option>
                                            @endforeach   
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('sinhvien.gdthem') }}" class="btn btn-primary" style="width: 120px">Thêm</a>
                                        &nbsp;
                                        <a href="" class="btn btn-danger" style="width: 120px">Xóa</a>
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
                                            {{-- <input type="checkbox" name="" id="checkAll" class="input-checkbox"> --}}
                                            STT
                                        </th>
                                        <th>MSSV</th>
                                        <th>Họ</th>
                                        <th>Tên</th>
                                        <th>Giới tính</th>
                                        <th>Lớp</th>
                                        <th>Ngày sinh</th>
                                        <th>Địa chỉ</th>
                                        <th>Điện thoại</th>
                                        <th>Email</th>
                                        <th>Tình trạng</th>
                                        <th>Xem lý lịch</th>
                                        <th class="text-center">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if (isset($sinhviens) && is_object($sinhviens)) --}}
                                    @foreach ($sinhvien as $sv)
                                    <tr>
                                        <td>
                                            {{-- <input type="checkbox" name="" id="checkAll" class="input-checkbox checkboxItem"> --}}
                                            {{ ++$i }}
                                        </td>
                                        <td>{{ $sv -> MSSV }}</td>
                                        <td>{{ $sv -> HoSV }}</td>
                                        <td>{{ $sv -> TenSV }}</td>
                                        <td>{{ $sv -> GioiTinh }}</td>
                                        <td>{{ $sv -> MaLop }}</td>
                                        <td>{{ $sv -> NgaySinh }}</td>                                      
                                        <td>{{ $sv -> DiaChi }}</td>
                                        <td>{{ $sv -> DienThoai }}</td>
                                        <td>{{ $sv -> Email }}</td>
                                        <td>{{ $sv -> TinhTrang }}</td>
                                        <td><a href="{{ route('lylich.index', $sv->MSSV) }}" style="font-style: italic">Xem chi tiết</a></td>
                                        <td style="width: 120px">
                                            <form action="{{ route('sinhvien.xoa', $sv->MSSV) }}" method="post">
                                                <a href="{{ route('sinhvien.gdsua', $sv->MSSV) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>                                                        
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
                            {{-- {{ $sinhviens -> links('pagination::bootstrap-4') }} --}}
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
