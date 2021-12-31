<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js?v=').time() }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css?v=').time() }}" rel="stylesheet">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('public/front-end/user/images/favicon.png')}}" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/animate.css')}}">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/magnific-popup.css')}}">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/slick.css')}}">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/LineIcons.css')}}">
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/font-awesome.min.css')}}">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/bootstrap.min.css')}}">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/default.css')}}">

     <!--====== Style CSS ======-->
     <link rel="stylesheet" href="{{asset('public/front-end/user/css/style.css')}}">

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
    

     
</head>
<body>
    <!-- header -->
    @include("includes.header1")

    @yield('content')

    <!-- footer -->
    @include("includes.footer")

    <!--====== Jquery js ======-->
    <script src="{{asset('public/front-end/user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('public/front-end/user/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="{{asset('public/front-end/user/js/popper.min.js')}}"></script>
    <script src="{{asset('public/front-end/user/js/bootstrap.min.js')}}"></script>
    
    <!--====== Plugins js ======-->
    <script src="{{asset('public/front-end/user/js/plugins.js')}}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{asset('public/front-end/user/js/slick.min.js')}}"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="{{asset('public/front-end/user/js/ajax-contact.js')}}"></script>
    
    <!--====== Counter Up js ======-->
    <script src="{{asset('public/front-end/user/js/waypoints.min.js')}}"></script>
    <script src="{{asset('public/front-end/user/js/jquery.counterup.min.js')}}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('public/front-end/user/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('public/front-end/user/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('public/front-end/user/js/scrolling-nav.js')}}"></script>
    
    <!--====== wow js ======-->
    <script src="{{asset('public/front-end/user/js/wow.min.js')}}"></script>
    
    <!--====== Particles js ======-->
    <script src="{{asset('public/front-end/user/js/particles.min.js')}}"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('public/front-end/user/js/main.js')}}"></script>

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
</body>
</html>
