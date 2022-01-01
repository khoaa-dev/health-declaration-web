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
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55 mb-100">
			<form method="POST" action="{{ route('register') }}" class="login100-form validate-form flex-sb flex-w">
                @csrf
				<span class="login100-form-title p-b-32" style="">
					Đăng ký
				</span>

				<span class="txt1 p-b-11">
					Họ và tên
				</span>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
					<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="focus-input100"></span>
				</div>

                <span class="txt1 p-b-11">
					Email
				</span>
				<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="focus-input100"></span>
				</div>
				
				<span class="txt1 p-b-11">
					Mật khẩu
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye"></i>
					</span>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<span class="focus-input100"></span>
				</div>

                <span class="txt1 p-b-11">
					Xác nhận mật khẩu
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye"></i>
					</span>
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button type="submits" class="login100-form-btn">
						Đăng ký
					</button>
				</div>

			</form>
		</div>
	</div>
</div>
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
