<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            {{-- <a class="page-scroll" href="#home">BỘ Y TẾ</a> --}}
                            <img src="{{asset('public/front-end/images/cuccntn.png')}}" width="100px" height="100px">
                            {{-- <img src="{{asset('public/front-end/user/images/logo.png')}}" alt="KHAI BÁO Y TẾ"> --}}
                        </a>
                        {{-- <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>The Rice
                            Bowl<br><small>Restaurant</small></a> --}}
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="page-scroll" href="#home">Khai báo y tế</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#features">Lịch sử khai báo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#about">Thông tin liên hệ</a>
                                </li>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->email }} <span class="caret"></span>
                                        </a>

                                        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                {{ __('Đăng xuất') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                    </li>
                                @endguest
                            </ul>
                        </div> <!-- navbar collapse -->
                        
                        {{-- <div class="navbar-btn d-none d-sm-inline-block">
                            <a class="main-btn" data-scroll-nav="0" href="#pricing">Đăng nhập với quyền Quản trị</a>
                        </div> --}}
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
    
    <div id="home" class="header-hero bg_cover" style="background-image: url({{asset('public/front-end/user/images/banner-bg.svg')}})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="header-hero-content text-center">
                        <h1 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="">VIỆT NAM KHỎE MẠNH</h1>
                        <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s" style="">Giải pháp toàn diện</h2>
                        <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s" style="">Giải pháp toàn diện về khai báo y tế và hỗ trợ quản lý nhập cảnh</h3>
                        <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s" style="">Get Started</a>
                    </div> <!-- header hero content -->
                </div>
            </div> 
            <!-- row -->
        </div> <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div> <!-- header hero -->
</header>