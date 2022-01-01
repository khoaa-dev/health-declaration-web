@extends('admin.templates.admin-page')

@section('css')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
    <style>
        .tabs {
            display: flex;
            position: relative;
        }
        .tabs .line {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 6px;
            border-radius: 15px;
            background-color: #1959ad;
            transition: all 0.2s ease;
        }
        .tab-item {
            /* min-width: 80px; */
            padding: 16px 20px 11px 20px;
            font-size: 20px;
            text-align: center;
            color: #c23564;
            background-color: #fff;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border-bottom: 5px solid transparent;
            opacity: 0.6;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .tab-icon {
            font-size: 24px;
            width: 32px;
            position: relative;
            top: 2px;
        }
        .tab-item:hover {
            opacity: 1;
            background-color: rgba(194, 53, 100, 0.05);
            border-color: rgba(194, 53, 100, 0.1);
            text-decoration: none;
            color: #be2424;
        }
        .tab-item.active {
            opacity: 1; 
        }
        .tab-content {
            padding: 28px 0;
            width: 100%;
        }
        .tab-pane {
            color: #333;
            display: none;
        }
        .tab-pane.active {
            display: block;
        }
        .tab-pane h2 {
            font-size: 24px;
            margin-bottom: 8px;
        }
    </style>
@endsection

@section('content')
<div class="right_col" role="main" style="min-height: 1000px">
    <div class="col-md-12">
        <h1 class="text-center mtb-20 w-100">QUẢN LÝ TÀI KHOẢN</h1><br>
        <ul class="nav nav-tabs nav-tab tabs d-flex text-center col-12" style="background: #eaeaea"> 
            <li class="tab-item active col-6"><a data-toggle="tab" href="#tab-9-3" data-case="HDLocal">Tài khoản người dùng</a></li>
            <li class="tab-item col-6"><a data-toggle="tab" href="#tab-9-1" data-case="HDPassenger">Tài khoản admin</a></li>
            <div class="line"></div>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="tab-pane active">
            <div class="row d-flex flex-row justify-content-between m-3">
                <div class="searh-box ">
                    <label for="search" class="mr-1" style="font-size: 20px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 20px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
                <div class="add-account-box">
                    <button type="submit" class="btn btn-primary">Thêm tài khoản</button>
                </div>
                
            </div>
            <div class="row">
                <div class="x_panel">
                    <div class="p-2">
                        <h2>Danh sách đơn khai báo</h2>
                    </div>
        
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" >
                                <thead>
                                    <tr class="headings text-center" style="font-size: 20px">
                                        <th class="column-title" style="width: 10%">STT </th>
                                        <th class="column-title" style="width: 25%">Họ và tên </th>
                                        <th class="column-title" style="width: 20%">Email </th>
                                        <th class="column-title" style="width: 20%">Ngày tạo </th>
                                        <th class="column-title" style="width: 25%">Hành động </th>
                                    </tr>
                                </thead>
        
                                <tbody class="text-center" style="font-size: 16px">
                                    
                                    @foreach ($accountUsers as $accountUser)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i1 }}</td>
                                            <td class=" ">{{ $accountUser->fullName }}</td>
                                            <td class=" ">{{ $accountUser->email }}</td>
                                            <td class=" ">{{ $accountUser->created_at }}</td>
                                            <td class=" last"><a href="#">Xem chi tiết</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{-- {{ $domesticGuests->links() }} --}}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane">
            <div class="row d-flex flex-row justify-content-between m-3">
                <div class="searh-box ">
                    <label for="search" class="mr-1" style="font-size: 20px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 20px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>

                <div class="add-account-box">
                    <button type="submit" class="btn btn-primary" id="add-account-admin">Thêm tài khoản</button>
                </div>
            </div>

            <div class="row">
                <div id="form-add-account-admin" class=" col-12" style="display: none">
                    <div class="col-12" style="font-size: 20px">
                        
                        <div class="form-froup">
                            <div class="form-group row">
                                <label for="admin_name" class="col-md-6 col-form-label text-md-right">{{ __('Họ và tên') }}</label>
    
                                <div class="col-md-6">
                                    <input id="admin_name" type="text" class="form-control @error('admin_name') is-invalid @enderror" name="admin_name" value="{{ old('admin_name') }}" required autocomplete="admin_name" autofocus>
    
                                    @error('admin_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail') }}</label>
    
                                <div class="col-md-6">
                                    <input id="admin_email" type="email" class="form-control @error('email') is-invalid @enderror" name="admin_email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="phone" class="col-md-6 col-form-label text-md-right">{{ __('Số điện thoại') }}</label>
    
                                <div class="col-md-6">
                                    <input id="admin_phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="admin_phone" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="admin_password" type="password" class="form-control @error('password') is-invalid @enderror" name="admin_password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-primary" id="add-account-admin">
                                        {{ __('Thêm') }}
                                    </button>
    
                                    <button type="submit" class="btn btn-secondary" id="cancle-add-account-admin">
                                        {{ __('Hủy') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- <form action="{{ route('accountManagement') }}" method="POST" id="form-add-account-admin">
                            {{ csrf_field() }}
                            
                        </form> --}}
                        {{ csrf_field() }}
                    
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="x_panel">
                    <div class="p-2">
                        <h2>Danh sách đơn khai báo</h2>
                    </div>
        
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" >
                                <thead>
                                    <tr class="headings text-center" style="font-size: 20px">
                                        <th class="column-title" style="width: 10%">STT </th>
                                        <th class="column-title" style="width: 25%">Họ và tên </th>
                                        <th class="column-title" style="width: 20%">Email </th>
                                        <th class="column-title" style="width: 20%">Ngày tạo </th>
                                        <th class="column-title" style="width: 25%">Hành động </th>
                                    </tr>
                                </thead>
        
                                <tbody class="text-center" style="font-size: 16px" >
                                    <div id="list-account-admin">

                                    </div>
                                    @foreach ($accountAdmins as $accountAdmin)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i2 }}</td>
                                            <td class=" ">{{ $accountAdmin->admin_name }}</td>
                                            <td class=" ">{{ $accountAdmin->admin_email }}</td>
                                            <td class=" ">{{ $accountAdmin->created_at }}</td>
                                            <td class=" last"><a href="#">Xem chi tiết</a></td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{-- {{ $domesticGuests->links() }} --}}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

@section('js')
<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$('.tab-item');
    const panes = $$('.tab-pane');

    const tabActive = $('.tab-item.active');
    const line = $('.tabs .line');

    line.style.left = tabActive.offsetLeft + 'px';
    line.style.width = tabActive.offsetWidth + 'px';

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $('.tab-item.active').classList.remove('active');
            $('.tab-pane.active').classList.remove('active');

            line.style.left = this.offsetLeft + 'px';
            line.style.width = this.offsetWidth + 'px';

            this.classList.add('active');
            pane.classList.add('active');
        }
    });
    const btnAddAccountAdmin = document.querySelector('#add-account-admin');
    const btnCancleAddAccountAdmin = document.querySelector('#cancle-add-account-admin');
    
    const addAccountAdminBox = document.querySelector('#form-add-account-admin');
    btnAddAccountAdmin.onclick = function() {
        addAccountAdminBox.style.display = "block";
    }

    btnCancleAddAccountAdmin.onclick = function() {
        addAccountAdminBox.style.display = "none";
    }
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
    // $('#form-add-account-admin').submit(function(e) {
    //     e.preventDefault();
        
          
    // })
    $(document).ready(function() {
        $('#add-account-admin').click(function() {
            var admin_name = $('#admin_name').val();
            var admin_email = $('#admin_email').val();
            var admin_password = $('#admin_password').val();
            var admin_phone = $('#admin_phone').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{ route('accountManagement.addAccountAdmin') }}",
                method: "POST",
                data: {
                    admin_name: admin_name,
                    admin_email: admin_email,
                    admin_password: admin_password,
                    admin_phone: admin_phone,
                    _token: _token,
                },
                success: function(data) {
                    $('#list-account-admin').fadeIn();
                    $('#list-account-admin').html(data);
                    console.log(data);
                }
            })
        });
    })
</script>
@endsection

    
@endsection