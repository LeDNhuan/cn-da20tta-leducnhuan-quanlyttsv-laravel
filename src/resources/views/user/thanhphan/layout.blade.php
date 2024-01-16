<!DOCTYPE html>
    <html lang="en">
        <head>
            {{--============== HEAD =============--}}
            <base href="{{ env('APP_URL') }}">
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="title" content="Ask online Form">
            <meta name="description" content="The Ask is a bootstrap design help desk, support forum website template coded and designed with bootstrap Design, Bootstrap, HTML5 and CSS. Ask ideal for wiki sites, knowledge base sites, support forum sites">
            <meta name="keywords" content="HTML, CSS, JavaScript,Bootstrap,js,Forum,webstagram ,webdesign ,website ,web ,webdesigner ,webdevelopment">
            <meta name="robots" content="index, nofollow">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="language" content="English">
            <title>Trang chủ | How well for SITers</title>
            <link href="forumCSS/css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="forumCSS/css/style.css" rel="stylesheet" type="text/css">
            <!-- <link href="css/animate.css" rel="stylesheet" type="text/css"> -->
            <link href="forumCSS/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
            {{------------------ CKEDITOR5 ----------------------}}
            <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/inline/ckeditor.js"></script>
            
            
        </head>

        <body>
            <!--======================== NAVBAR TOP ======================-->
            {{-- <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="navbar-menu-left-side239">
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</a></li>
                                    <li><a href="#"><i class="fa fa-headphones" aria-hidden="true"></i>Support</a></li>
                                    <li><a href="logIn.html"><i class="fa fa-user" aria-hidden="true"></i>Login Area</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="navbar-serch-right-side">
                                <form class="navbar-form" role="search">
                                    <div class="input-group add-on">
                                        <input class="form-control form-control222" placeholder="Search" id="srch-term" type="text">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default btn-default2913" type="button"><i class="glyphicon glyphicon-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             --}}
            <!-- ======================= NAVBAR ==========================-->
            <div class="top-menu-bottom932">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        {{-- <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <a class="navbar-brand" href="#"><img src="" alt="Logo"></a>
                        </div> --}}
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav"> </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route("user.index") }}">Trang chủ</a></li>

                                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" onchange="window.location.href=this.value;">Chương trình đào tạo<span class="caret"></span></a>
                                    <ul class="dropdown-menu animated zoomIn">
                                        @foreach ($madt as $dt)    
                                            <li><a href="{{ route('daotao.hienthi', $dt->MaDaoTao) }}">{{ $dt->SoQuyetDinh }}</a></li>
                                        @endforeach 
                                    </ul>
                                      
                                </li>

                                {{-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Question <span class="caret"></span></a>
                                    <ul class="dropdown-menu animated zoomIn">
                                        <li><a href="category.html">Question Category</a></li>
                                        <li><a href="category.html">HTML</a></li>
                                        <li><a href="category.html">CSS</a></li>
                                        <li><a href="category.html">Javascript</a></li>
                                        <li><a href="category.html">Bootstrap</a></li>
                                    </ul>
                                </li> --}}
                            
                                @if (auth()->user()->VaiTro == 'giang_vien')
                                    <li><a href="{{ route('gvcovan.hienthi', auth()->user()->TenDangNhap) }}">Thông tin lớp cố vấn</a></li>
                                @endif

                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->TenDangNhap }}<span class="caret"></span></a>
                                    <ul class="dropdown-menu animated zoomIn">
                                        <li><a href="{{ route('xemthongtin.index', auth()->user()->TenDangNhap) }}"> Thông tin cá nhân </a></li>
                                        <li><a href="{{ route('xuly.dangxuat') }}"> Đăng xuất </a></li>
                                        {{-- <li><a href="ask_question.html"> Ask Question </a></li>
                                        <li><a href="post-deatils.html"> Post-Details </a></li>
                                        <li><a href="user.html">All User</a></li>
                                        <li><a href="user_question.html"> User Question </a></li>
                                        <li><a href="category.html"> Category </a></li>
                                        <li><a href="#"> 404 </a></li> --}}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
            
            <!--======================== SECTION ===========================-->
            <section class="welcome-part-one">
                <div class="container">
                    <div class="welcome-demop102 text-center">
                        <h2>Welcome to <strong>How well for SITers</strong></h2>
                        <p>Đây là một môi trường tuyệt vời giúp các SITer trao đổi với nhau về những chủ đề xoay quanh việc học tập, ...</p>
                        {{-- <div class="button0239-item">
                            <a href="#">
                                <button type="button" class="aboutus022">About Us</button>
                            </a>
                            <a href="#">
                                <button type="button" class="join92">Join Now</button>
                            </a>
                        </div> --}}
                        {{-- <div class="form-style8292">
                            <div class="input-group"> 
                                <span class="input-group-addon"><i class="fa fa-pencil-square" aria-hidden="true"></i></span>
                                <input type="text" class="form-control form-control8392" placeholder="Ask any question and you be sure find your answer ?"> 
                                <span class="input-group-addon"><a href="#">Ask Now</a></span> 
                            </div>
                        </div> --}}
                    </div>
                </div>
            </section>
            
            <!--======================== SEARCH ============================-->
            <div class="header-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div id="custom-search-input" class="col-md-7">
                            <div class="input-group col-md-12"> 
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" class="search-query form-control user-control30 " placeholder="Search here...." /> 
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>


            
            {{--=================== CONTENT =================--}}
            <section class="main-content920">
                <div class="container">
                    <div class="row">
                            <div class="col-md-1"></div>
                            <aside class="col-md-2 sidebar97239">
                                <div class="status-part3821">
                                    <a href="{{ route('baidang.gdthem') }}" class=""><i class="fa fa-plus">  Thêm bài đăng</i></a>
                                </div>

                                <div class="categori-part329">
                                    <h4>Bài đăng</h4>
                                    <ul>
                                        <li>
                                            <a href="{{ route('baidang.index') }}">Tất cả</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('baidangbanthan.index') }}"> Bản thân </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tags-part2398">
                                    <h4>Chủ đề</h4>
                                    @foreach ($macd as $cd)
                                        <ul>
                                            <li><a href="{{ route('chudebaidang.index', $cd->MaChuDe) }}">{{ $cd->TenChuDe }}</a></li>
                                        </ul>
                                    @endforeach    
                                </div> 
                            </aside>

                            {{-- ===================== CONTENT ===================== --}}
                            <div class="col-md-8">
                                <div id="main">
                                    {{-- <input id="tab1" type="radio"  name="tabs" checked>
                                    <label for="tab1"><a href="{{ route('user.index') }}">Trang chủ</a></label>
                                    
                                    <input id="tab2" type="radio" name="tabs">
                                    <label for="tab2"><a href="">Bài đăng của bản thân</a></label>
                    
                                    <input id="tab3" type="radio" name="tabs">
                                    <label for="tab3"><a href="{{ route('baiviet.index') }}">Tất cả bài đăng</a></label> --}}

                                    {{-- <input id="tab4" type="radio" name="tabs">
                                    <label for="tab4">No Answer</label>
                                    <input id="tab5" type="radio" name="tabs">
                                    <label for="tab5">Recent Post</label> --}}

                                    {{-- <nav id="nav">
                                        <a href="{{ route('user.index') }}">Trang chủ</a>
                                        <a href="">Bài đăng của bản thân</a>
                                        <a href="">Tất cả bài đăng</a>
                                    </nav>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            var navLinks = document.querySelectorAll('nav a');

                                            navLinks.forEach(function(link) {
                                                link.addEventListener('click', function() {
                                                    // Xóa tất cả các lớp active khỏi các thẻ a
                                                    navLinks.forEach(function(innerLink) {
                                                        innerLink.classList.remove('active');
                                                    });

                                                    // Thêm lớp active cho thẻ a được click
                                                    link.classList.add('active');
                                                });
                                            });
                                        });
                                    </script> --}}
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

                                    @yield('content')
                                    
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        
                        <!-- end of col-md-9 -->
                    </div>
                </div>
            </section>
            
            
            
            {{--=================== FOOTER =================--}}
            <!--    footer -->
            {{-- <section class="footer-part">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </section> --}}
            <section class="footer-social">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Ứng dụng web "How well for SITers" - Phân hệ quản lý thông tin liên lạc</p>
                            <p><strong>LÊ ĐỨC NHUẬN</strong></p>
                            <p>110120054 - DA20TTA</p>
                        </div>
                    </div>
                </div>
            </section>

            {{--=================== SCRIPT =================--}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="forumCSS/js/jquery-3.1.1.min.js"></script>
            <script src="forumCSS/js/bootstrap.min.js"></script>
            <script src="forumCSS/js/npm.js"></script>
            
        </body>
    </html>