<!DOCTYPE html>
<html lang="en">
    <head>
        {{------------- HEAD -----------}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quản trị | How well for SITers</title>

        <base href="{{ env('APP_URL') }}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="adminCSS/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="adminCSS/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="adminCSS/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="adminCSS/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="adminCSS/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="adminCSS/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="adminCSS/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="adminCSS/plugins/summernote/summernote-bs4.min.css">
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        
        
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        


    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            {{------------------------ PRELOADER ----------------------}}
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="adminCSS/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            {{------------------------- NAVBAR ------------------------}}
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    
                    {{-- <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Trang chủ</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Liên hệ</a>
                    </li> --}}
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('xuly.dangxuat') }}">
                            Đăng xuất
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                    <!-- Navbar Search -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    
                </ul>
            </nav>
            <!-- /.navbar -->

            {{------------------------- SIDEBAR -----------------------}}
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                <img src="adminCSS/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Quản trị viên</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="" class="d-block">{{ auth()->user()->TenDangNhap }}</a>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    {{-- <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul  class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="{{ route('admin.index') }}" class="nav-link active">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Trang chủ
                                        {{-- <i class="right fas fa-angle-left"></i> --}}
                                    </p>
                                </a>
                            </li>                       
                            <li class="nav-item menu-open">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>
                                        Quản lý thành viên
                                        <i class="fas fa-angle-left right"></i>
                                        
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('giangvien.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Giảng viên</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('sinhvien.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sinh viên</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('daotao.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Chương trình đào tạo
                                        {{-- <i class="right fas fa-angle-left"></i> --}}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('covan.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-user-tie"></i>
                                    <p>
                                        Cố vấn
                                        {{-- <i class="right fas fa-angle-left"></i> --}}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('lop.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-house-user"></i>
                                    <p>
                                        Lớp học
                                        {{-- <i class="right fas fa-angle-left"></i> --}}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('chude.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Chủ đề bài đăng
                                        {{-- <i class="right fas fa-angle-left"></i> --}}
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu-open">
                                <a href="" class="nav-link">
                                    <i class="nav-icon fas fa-file-alt"></i>
                                    <p>
                                        Quản lý bài đăng
                                        <i class="fas fa-angle-left right"></i>
                                        
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('baidang.choduyet') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bài đăng chờ duyệt</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('baidang.daduyet') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bài đăng đã duyệt</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                <!-- /.sidebar-menu -->
                </div>
            <!-- /.sidebar -->
            </aside>


            {{------------------------- CONTENT -----------------------}}
            @yield('content')

            {{------------------------- FOOTER ------------------------}}
            <footer class="main-footer text-center">
                <p>Ứng dụng web "How well for SITers" - Phân hệ quản lý thông tin liên lạc</p>
                <p><strong>Lê Đức Nhuận</strong></p>
                <p>110120054 - DA20TTA</p>
            </footer>

        </div>
    <!-- ./wrapper -->
        <script src="adminCSS/dist/js/myjs.js"></script>
        {{------------------------ SCRIPT --------------------------}}
        <!-- jQuery -->
        <script src="adminCSS/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="adminCSS/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="adminCSS/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Sparkline --> 
        <script src="adminCSS/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="adminCSS/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="adminCSS/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="adminCSS/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="adminCSS/plugins/moment/moment.min.js"></script>
        <script src="adminCSS/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="adminCSS/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="adminCSS/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="adminCSS/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="adminCSS/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes
        <script src="adminCSS/dist/js/demo.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="adminCSS/dist/js/pages/dashboard.js"></script>
    </body>
</html>
