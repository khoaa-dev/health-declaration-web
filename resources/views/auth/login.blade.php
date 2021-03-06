@extends('layouts.app')
@section('css')
	 <!--===============================================================================================-->	
	 <link rel="icon" type="image/png" href="{{ asset('public/front-end/login/images/icons/favicon.ico') }}"/>
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/bootstrap/css/bootstrap.min.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/animate/animate.css')}}">
	 <!--===============================================================================================-->	
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/css-hamburgers/hamburgers.min.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/animsition/css/animsition.min.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/select2/select2.min.css')}}">
	 <!--===============================================================================================-->	
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/vendor/daterangepicker/daterangepicker.css')}}">
	 <!--===============================================================================================-->
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/css/util.css')}}">
		 <link rel="stylesheet" type="text/css" href="{{asset('public/front-end/login/css/main.css')}}">
	 <!--===============================================================================================-->
 
	 
@endsection


@section('content')
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55 mb-100">
			<form method="POST" action="{{ route('login') }}" class="login100-form validate-form flex-sb flex-w">
				@csrf
				<span class="login100-form-title p-b-32" style="">
					????ng nh???p
				</span>

				<span class="txt1 p-b-11">
					Email
				</span>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<span class="focus-input100"></span>
				</div>
				
				<span class="txt1 p-b-11">
					M???t kh???u
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye"></i>
					</span>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					<span class="focus-input100"></span>
				</div>
				
				<div class="flex-sb-m w-full p-b-48">
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Nh??? t??i kho???n
						</label>
					</div>

					<div>
						<a href="{{ route('password.request') }}" class="txt3">
							Qu??n m???t kh???u?
						</a>
					</div>
				</div>

				<div class="container-login100-form-btn">
					<button type="submits" class="login100-form-btn">
						????ng nh???p
					</button>
				</div>

			</form>
		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>
	
@endsection

@section('js')
	<!--===============================================================================================-->
	<script src="{{asset('public/front-end/login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/vendor/bootstrap/js/popper.js')}}"></script>
        <script src="{{asset('public/front-end/login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{asset('public/front-end/login/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('public/front-end/login/js/main.js')}}"></script>

@endsection