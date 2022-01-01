@extends('layouts.app')

@section('css')
    <style>
        .announcement {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 75px;
            text-align: center;
        }

        h1 {
            color: #FB0744;
        }

        p {
            font-size: 20px;
        }

        button {
            width: 50%;

        }
    </style>
@endsection

@section('content')
    <!-- Card -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="announcement" style="margin-bottom: 200px">
                    <h1>Thông báo</h1>
                    <p>Bạn đã gửi đơn khai báo thành công!</p>
                    <div class="button ">
                        <button class="btn btn-primary" onclick="window.location.href = '{{ URL::to('/home') }}' ">Tiếp tục khai báo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
