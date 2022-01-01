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
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css?v=').time() }}" rel="stylesheet">

    <!--====== Favicon Icon ======-->
    {{-- <link rel="shortcut icon" href="{{asset('public/front-end/user/images/favicon.png')}}" type="image/png"> --}}
        
    <!--====== Animate CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/animate.css')}}"> --}}
        
    <!--====== Magnific Popup CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/magnific-popup.css')}}"> --}}
        
    <!--====== Slick CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/slick.css')}}"> --}}
        
    <!--====== Line Icons CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/LineIcons.css')}}"> --}}
        
    <!--====== Font Awesome CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/font-awesome.min.css')}}"> --}}
        
    <!--====== Bootstrap CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/bootstrap.min.css')}}"> --}}
    
    <!--====== Default CSS ======-->
    {{-- <link rel="stylesheet" href="{{asset('public/front-end/user/css/default.css')}}"> --}}

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('public/front-end/user/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('public/front-end/footer/fonts/icomoon/style.css')}}">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/front-end/footer/css/bootstrap.min.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('public/front-end/footer/css/style.css')}}">

     @yield('css')
    

     
</head>
<body>
    <!-- header -->
    @include("includes.header1")

    @yield('content')

    <!-- footer -->
    @include("includes.footer")

    <!--====== Jquery js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/vendor/jquery-1.12.4.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/front-end/user/js/vendor/modernizr-3.7.1.min.js')}}"></script> --}}
    
    <!--====== Bootstrap js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/popper.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/front-end/user/js/bootstrap.min.js')}}"></script> --}}
    
    <!--====== Plugins js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/plugins.js')}}"></script> --}}
    
    <!--====== Slick js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/slick.min.js')}}"></script> --}}
    
    <!--====== Ajax Contact js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/ajax-contact.js')}}"></script> --}}
    
    <!--====== Counter Up js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/waypoints.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/front-end/user/js/jquery.counterup.min.js')}}"></script> --}}
    
    <!--====== Magnific Popup js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/jquery.magnific-popup.min.js')}}"></script> --}}
    
    <!--====== Scrolling Nav js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/jquery.easing.min.js')}}"></script> --}}
    {{-- <script src="{{asset('public/front-end/user/js/scrolling-nav.js')}}"></script> --}}
    
    <!--====== wow js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/wow.min.js')}}"></script> --}}
    
    <!--====== Particles js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/particles.min.js')}}"></script> --}}
    
    <!--====== Main js ======-->
    {{-- <script src="{{asset('public/front-end/user/js/main.js')}}"></script> --}}

    {{-- <script src="{{asset('public/front-end/footer/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/front-end/footer/js/popper.min.js')}}"></script>
    <script src="{{asset('public/front-end/footer/js/bootstrap.min.js')}}"></script> --}}
    @yield('js')
</body>
</html>
