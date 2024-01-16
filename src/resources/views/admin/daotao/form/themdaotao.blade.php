@extends('admin.thanhphan.layout')
@section('content')
    <div class="content-wrapper">
        <!-- general form elements -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Quản lý chương trình đào tạo</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('daotao.index') }}">Quản lý chương trình đào tạo</a></li>
                            <li class="breadcrumb-item active">Thêm chương trình đào tạo</li>
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
                                <h2 class="card-title" style="margin-top: 10px">Thêm chương trình đào tạo</h2>                               
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST" action="{{ route('daotao.them') }}">
                                @csrf
                                    <div class="card-body table-bordered">
                                        <div class="form-group">
                                            <label for="MaDaoTao">Mã chương trình đào tạo</label>
                                            <input type="text" class="form-control" name="MaDaoTao" placeholder="Nhập mã chương trình">
                                        </div>
                                        <div class="form-group">
                                            <label for="SoQuyetDinh">Số quyết định</label>
                                            <input type="text" class="form-control" name="SoQuyetDinh" placeholder="Nhập số quyết định">
                                        </div>
                                        <div class="form-group">
                                            <label for="TinChi">Số Tín chỉ lý thuyết</label>
                                            <input type="number" class="form-control TinChiLyThuyet" name="TCLyThuyet" placeholder="Nhập số tín chỉ lý thuyết">
                                        </div> 
                                        <div class="form-group">
                                            <label for="TinChi">Số tín chỉ thực hành</label>
                                            <input type="number" class="form-control TinChiThucHanh" name="TCThucHanh" placeholder="Nhập số tín chỉ thực hành">
                                        </div>
                                        <div class="form-group">
                                            <label for="TinChi">Số tín chỉ</label>
                                            <input type="number" class="form-control TinChi" name="TinChi" placeholder="" readonly>
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                // Bắt sự kiện khi giá trị của ô số tín chỉ lý thuyết hoặc ô số tín chỉ thực hành thay đổi
                                                $(".TinChiLyThuyet, .TinChiThucHanh").on("input", function() {
                                                    // Lấy giá trị của ô số tín chỉ lý thuyết và ô số tín chỉ thực hành
                                                    var tinChiLyThuyet = parseInt($(".TinChiLyThuyet").val()) || 0;
                                                    var tinChiThucHanh = parseInt($(".TinChiThucHanh").val()) || 0;

                                                    // Tính tổng
                                                    var totalCredits = tinChiLyThuyet + tinChiThucHanh;

                                                    // Gán giá trị cho ô số tín chỉ
                                                    $(".TinChi").val(totalCredits);
                                                });
                                            });
                                        </script>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" style="width: 100px">Thêm</button>
                                        &nbsp;
                                        <a href="{{ route('daotao.index') }}" type="submit" class="btn btn-danger" style="width: 100px">Trở lại</a>
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