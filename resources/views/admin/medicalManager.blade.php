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
        <h1 class="text-center mtb-20 w-100">Tờ khai y tế/Vietnam Health Declaration</h1><br>
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
                <div class="searh-box ">
                    <label for="search" class="mr-1" style="font-size: 20px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 20px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
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

                            <div class="d-flex justify-content-center">
                                {{ $domesticGuests->links() }}
                            </div>
                        </div>
        
        
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane">
            <div class="row d-flex flex-row-reverse m-3">
                <div class="searh-box ">
                    <label for="search" class="mr-1" style="font-size: 20px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 20px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
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
                                    
                                    @foreach ($domesticMoves as $domesticMove)
                                        <tr class="even pointer">
                                            <td class=" ">{{ ++$i2 }}</td>
                                            <td class=" ">{{ $domesticMove->fullName }}</td>
                                            <td class=" ">{{ $domesticMove->created_at }}</td>
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

        <div class="tab-pane">
            <div class="row d-flex flex-row-reverse m-3">
                <div class="searh-box ">
                    <label for="search" class="mr-1" style="font-size: 20px">Nhập tên: </label>
                    <input type="text" name="search" id="search" class="" style="font-size: 20px">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
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

</script>
@endsection

    
@endsection