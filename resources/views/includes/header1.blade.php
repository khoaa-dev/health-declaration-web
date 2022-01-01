<style>
    header{
        font-family: lato;
        src: '../../../public/fonts/lato/Lato-Black.ttf';
        z-index: 1000;
        position: sticky;
        top:0px;
        background-image: linear-gradient( 90deg , rgb(66, 132, 207) 100px, rgb(20, 75, 126));
        border-bottom: 4px solid rgb(48, 186, 153) ;
        padding-right:20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo{
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration:none;
        padding: 10px;
    }
    .logo img{
        width: 80px;
        height: 80px;
        transform: scaleX(-1);
    }
    .logo h1{
        color: rgb(212, 212, 212);
        display: inline-block;
    }
    .logo h1:hover{
        text-shadow: 0px 0px 6px rgb(255, 255, 255);
        color: white;
    }
    .links{
        width: 100%;
        margin-left: 50px;
    }
    .links div{
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .links a{
        text-decoration: none;
        color: rgb(212, 212, 212);
    }
    .links a:hover{
        text-shadow: 0px 0px 6px rgb(255, 255, 255);
        color: white;
    }
    header input{
    display: none; 
    }
    header input:checked ~ .links{
    right: 0px;
    }
    header input:checked ~ label .img1{
    display: none;
    }
    header input:checked ~ label .img2{
    display: inline-block;
    }
    header input:checked ~ label{
    transform: rotate(720deg);
    }
    header label{
        position: relative;
        display: none;
        right: 20px;
        width: 30px; 
        height: 47.619047px;
        transition: 1s ease;
        z-index: 3;
    }
    header label , header label:before, header label:after{
        background-color:#009688;
        border-radius: 3px;
    }
    header label:before, header label:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0px;
        height: 100%;
        width: 100%;
    }
    header label:before {
        transform: rotate(60deg);
        z-index: 3;
    }
    header label:after {
        transform: rotate(-60deg);
        z-index: 5;
    }
    header label img{         
        position: absolute;
        top: 8.8px ;
        left: 0px;
        width: 100%;
        z-index: 6;
    }
    header label .img2{
        display: none;
    }
    @media (max-width: 700px) {
    .links {
        position: fixed;
        top:0px;
        right:-100%;
     background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        height:100%;
        z-index: 2;
    }
      
    .links div{
        position: absolute;
        right: 0px;
        top: 0px;
        background-color: black;
        width: 70%;
        height:100%;
        display: flex;
        justify-content:center;
        align-items: center;
        flex-direction: column;
    }
    .links div a{
        text-decoration: none;
        color: rgb(212, 212, 212);
        margin-top: 10px;
        font-size: 25px;
    }
    .links div a:hover{
        text-shadow: 0px 0px 6px rgb(255, 255, 255);
        border: 2px solid black;
        color: white;
    }
    header label{
       display: inline-block; 
    }
    }
    @media (min-width: 1500px) {
    header{
        padding-right: 10%;
        padding-left: calc( 10% - 20px);
    }
    }
    @media (max-width: 440px) {
    .logo img{
        width: 120px;
    }
    .logo h1{
        font-size:26px
    }
    header label{
        width: 20px; 
        height: 31.746px;
    }
    header label img{         
        position: absolute;
        top: 5.867px ;
    }
    }
    @media (max-width: 345px) {
    .logo img{
        width: 100px;
    }
    .logo h1{
        font-size:24px
    }
    header label{
        width: 15px; 
        height: 23.809px;
    }
    header label img{         
        position: absolute;
        top: 5.867px ;
    }
</style>
<header>
    <a href="#" class="logo">
        <img src="{{asset('public/front-end/images/cuccntn.png')}}">
        
    </a>
    <input type="checkbox" id="check">
    <label for="check">
        <img src="https://1.bp.blogspot.com/-TQ6sqw09POE/YVmBmHDNLtI/AAAAAAAABBE/h2kA7cyP42gurgfw1OttA8o6-9IFWvm7wCLcBGAsYHQ/s0/menu1.png" class="img1">
        <img src="https://1.bp.blogspot.com/-7FrNzRkSTfA/YVmBmBWPd1I/AAAAAAAABBA/7ddyu0cIswgmBH3FCqUAuOnCU6Rq5bgbgCLcBGAsYHQ/s0/menu2.png" class="img2">
    </label>
    <div class="links">
      <div class="">
        <ul id="nav" class="navbar-nav ml-auto d-flex flex-row">
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
                    <a id="navbarDropdown" class="nav-link" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }} <span class="caret"></span>
                    </a>
                    

                    
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
            <li class="nav-item">
                <a class="page-scroll" href="{{ route('admin-login') }}">Trang quản trị</a>
            </li>
        </ul>
      </div>
    </div>
</header>