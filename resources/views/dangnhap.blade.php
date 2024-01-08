<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập | How well for SITers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="myCSS/css/style.css">
  <link rel="stylesheet" href="myCSS/css/customize.css">

</head>

<body class="img js-fullheight" style="background-image: url(myCSS/images/login-bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			{{-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class=""></h2>
				</div>
			</div> --}}
			<div class="row justify-content-center" style="margin-top: 100px">
				<div class="col-md-6 col-lg-4 form">
					<div class="login-wrap p-0">
		      	        <h3 class="mb-4 text-center heading-section">ĐĂNG NHẬP</h3>

                        <form  class="signin-form" method="POST" role="form" action= "{{ route('xuly.dangnhap') }}">
                            @csrf	
                            <div class="form-group">
                                <input type="text" name="TenDangNhap" class="form-control" placeholder="Nhập tên đăng nhập" required>
                                @if ($errors -> has('TenDangNhap'))
                                <span class="error-message">* {{ $errors -> first('TenDangNhap') }}</span>                             
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password-field" type="password" name="MatKhau" class="form-control" placeholder="Nhập mật khẩu" required>
                                {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                @if ($errors -> has('MatKhau'))
                                    <span class="error-message">* {{ $errors -> first('MatKhau') }}</span>                             
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="mybutton form-control btn btn-primary submit px-3">Đăng nhập</button>
                            </div>

                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Ghi nhớ đăng nhập
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Quên mật khẩu</a>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="myCSS/js/jquery.min.js"></script>
    <script src="myCSS/js/popper.js"></script>
    <script src="myCSS/js/bootstrap.min.js"></script>
    <script src="myCSS/js/main.js"></script>

</body>

</html>
