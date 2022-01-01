@extends('admin.templates.admin-page')

@section('css')

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
            font-size: 18px;
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
        <ul class="nav nav-tabs nav-tab tabs d-flex text-center col-12" style="background: #eaeaea"> 
            <li class="tab-item active col-4"><a data-toggle="tab" href="#tab-9-3" data-case="HDLocal">Khai báo di chuyển nội địa<br>For domestic move declaration</a></li>
            <li class="tab-item col-4"><a data-toggle="tab" href="#tab-9-1" data-case="HDPassenger">Khai báo cho người nhập cảnh<br>Entry declaration</a></li>
            <li class="tab-item col-4"><a data-toggle="tab" href="#tab-9-2" data-case="HDHealth">Khai báo toàn dân<br>For domestic guests</a></li>
            <div class="line"></div>
        </ul>
    </div>

    <div class="col-md-12">
        <div class="tab-pane active">
            <div class="row d-flex flex-row-reverse m-3">
                <div class="searh-box d-flex">
                    @csrf
                    <label for="search" class="mr-1" style="font-size: 16px !important; margin-top:10px">Nhập tên: </label>
                    <input type="text" name="search" id="search_name" class="" style="font-size: 16px; border: 1px solid #e7e7e7; border-radius: 8px; padding-inline-start: 10px">
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-top: 5px" id="btn-search">Tìm kiếm</button>
                </div>
            </div>
            <div class="row">
                <div class="x_panel">
                    <div class="p-2">
                        <p style="color: #00256b; font-weight: 700; font-size: 21px">Danh sách các đơn khai báo</p>
                    </div>
        
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action" id="table-1">
                                <thead>
                                    <tr class="headings text-center" style="font-size: 18px">
                                        <th class="column-title" style="width: 10%">STT </th>
                                        <th class="column-title" style="width: 30%">Họ và tên </th>
                                        <th class="column-title" style="width: 30%">Ngày khai báo </th>
                                        <th class="column-title" style="width: 30%">Hành động </th>
                                    </tr>
                                </thead>
        
                                <tbody class="text-center" style="font-size: 16px">
                                    @foreach ($domesticGuests as $domesticGuest)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i1 }}</td>
                                            <td class=" ">{{ $domesticGuest->fullName }}</td>
                                            <td class=" ">{{ $domesticGuest->created_at }}</td>
                                            <td class=" last"><a href="#">Xem chi tiết</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div class=" justify-content-center" id="pagination-1" style="display: flex">
                                {{ $domesticGuests->links() }}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane">
            <div class="row d-flex flex-row-reverse m-3">
                <div class="searh-box d-flex">
                    <label for="search" class="mr-1" style="font-size: 16px !important; margin-top:10px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 16px; border: 1px solid #e7e7e7; border-radius: 8px; padding-inline-start: 10px">
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-top: 5px">Tìm kiếm</button>
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
                                        <th class="column-title" style="width: 30%">Họ và tên </th>
                                        <th class="column-title" style="width: 30%">Ngày khai báo </th>
                                        <th class="column-title" style="width: 30%">Hành động </th>
                                    </tr>
                                </thead>
        
                                <tbody class="text-center" style="font-size: 16px">
                                    
                                    @foreach ($entrys as $entry)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i2 }}</td>
                                            <td class=" ">{{ $entry->fullName }}</td>
                                            <td class=" ">{{ $entry->created_at }}</td>
                                            <td class=" last"><a href="#">Xem chi tiết</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{ $entrys->links() }}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane">
            <div class="row d-flex flex-row-reverse m-3">
                <div class="searh-box d-flex">
                    <label for="search" class="mr-1" style="font-size: 16px !important; margin-top:10px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 16px; border: 1px solid #e7e7e7; border-radius: 8px; padding-inline-start: 10px">
                    <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-top: 5px">Tìm kiếm</button>
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
                                        <th class="column-title" style="width: 30%">Họ và tên </th>
                                        <th class="column-title" style="width: 30%">Ngày khai báo </th>
                                        <th class="column-title" style="width: 30%">Hành động </th>
                                    </tr>
                                </thead>
        
                                <tbody id="domesticGuests" class="text-center" style="font-size: 16px">
                                    
                                    @foreach ($domesticGuests as $domesticGuest)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i3 }}</td>
                                            <td class=" ">{{ $domesticGuest->fullName }}</td>
                                            <td class=" ">{{ $domesticGuest->created_at }}</td>
                                            <td class=" last"><a href="#">Xem chi tiết</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            <div class="d-flex justify-content-center">
                                {{ $domesticGuests->links() }}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection

@section('js')
{{-- jQuery --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

<script>
    // const $ = document.querySelector.bind(document);
    // const $$ = document.querySelectorAll.bind(document);

    const tabs = document.querySelectorAll('.tab-item');
    const panes = document.querySelectorAll('.tab-pane');

    const tabActive = document.querySelector('.tab-item.active');
    const line = document.querySelector('.tabs .line');

    line.style.left = tabActive.offsetLeft + 'px';
    line.style.width = tabActive.offsetWidth + 'px';

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            document.querySelector('.tab-item.active').classList.remove('active');
            document.querySelector('.tab-pane.active').classList.remove('active');

            line.style.left = this.offsetLeft + 'px';
            line.style.width = this.offsetWidth + 'px';

            this.classList.add('active');
            pane.classList.add('active');
        }
    });

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        // fetch_customer_data();
        // function fetch_customer_data(query = ''){
            
        // }
        $('#btn-search').on('click', function(event){
            $('#pagination-1').hide();
            event.preventDefault();
            
            // alert("alo");
            var query = $('input[name=search]').val();
            var _token = $('input[name=_token]').val();
            // fetch_customer_data(query);
            $.ajax({
                url:"{{route('search')}}",
                method:"POST",
                data:{
                    query:query,
                    _token: _token
                },
                dataType:"JSON",
                success:function(data){
                    $('#table-1 tbody').html(data.table_data);
                }
            });
        })
    });
    
</script>
@endsection

    
