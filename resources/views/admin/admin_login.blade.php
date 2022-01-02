<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('public/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('public/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset('public/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('public/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset('public/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset('public/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/main.css')}}">
<!--===============================================================================================-->
</head>
<style>
	body {
		font-family: Arial, Helvetica, sans-serif;
	}
</style>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{URL::to('/admin-dashboard')}}" method="post" class="login100-form validate-form">
					{{ csrf_field() }}
					<span class="login100-form-title p-b-43" style="font-size: 50px; color: #6675df; font-family: Arial, Helvetica, sans-serif">
						ĐĂNG NHẬP
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="admin_email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="admin_password">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>

					<?php
					$message = Session::get('message');
					if($message){
						echo '<span class="text-danger text-center text-danger">'.$message.'</span>';
						Session::put('message', null);
					}
					?>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1" style="font-family: Arial, Helvetica, sans-serif">
								Nhớ tài khoản
							</label>
						</div>

						<div>
							<a href="#" class="txt1" style="font-family: Arial, Helvetica, sans-serif">
								Quên mật khẩu?
							</a>
						</div>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Hoặc đăng ký bằng
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url({{asset('public/images/bg.jpg')}});">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('public/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/js/main.js')}}"></script>

</body>
</html>