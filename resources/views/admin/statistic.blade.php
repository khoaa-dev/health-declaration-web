@extends('admin.templates.admin-page')

@section('css')
    <!-- bootstrap-progressbar -->
    <link
        href="{{ asset('public/front-end/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('public/front-end/admin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('public/front-end/admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main" style="min-height: 1000px">
        <!-- top tiles -->
        <div class="col-md-12" style="display: inline-block;">
            <div class="tile_count">
                {{-- <div class="col-md-3 col-sm-4  tile_stats_count"> --}}
                    {{-- <span class="count_top" style="font-size: 16px"> Số người truy cập</span>
                    <div class="count">25</div> --}}
                    {{-- <span class="count_bottom"><i class="green">4% </i> hôm qua</span> --}}
                {{-- </div> --}}
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top" style="font-size: 16px"> Cán bộ quản lý</span>
                    <div class="count">2</div>
                    <span class="count_bottom"><i class="green">3% </i> hôm qua</span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top" style="font-size: 16px">Số lượng người dùng</span>
                    
                    <div class="count">
                        <?php
                            $countUser = Session::get('countUser');
                            if($countUser){
                                echo $countUser;
                            }
					    ?>
                    </div>
                    <span class="count_bottom"><i class="green">34% </i> hôm
                        qua</span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top" style="font-size: 16px"> Đã khai báo</span>
                    <div class="count">67</div>
                    <span class="count_bottom"><i class="red">12% </i> hôm
                        qua</span>
                </div>
            </div>
        </div>
        <!-- /top tiles -->

        <div class="col-md-12">
            <div class="col-md-12 col-sm-12 ">
                <form autocomplete="off">
                    @csrf
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>THỐNG KÊ <small>số lượng các đơn khai báo y tế</small></h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>Từ ngày:</p> <input type="text" id="datepicker" class="date form-control" name="from_date">
                    </div>
                    <div class="col-md-2">
                        <p>Đến ngày:</p> <input type="text" id="datepicker2" class="date form-control">
                    </div>
                    <div class="col-md-2 pt-4">
                        <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm p-2" value="Lọc kết quả" name="to_date" style="margin-top: 10px; padding-left: 5px; padding-right: 5px">
                    </div>
                    <div class="col-md-12">
                        <div id="chart" style="height: 250px;"></div>
                    </div>
                                        
                </form>
                <div class="dashboard_graph">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>THỐNG KÊ <small>số lượng người dân</small></h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="chart1" style="height: 250px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        </div>
    </div>
    <!-- /page content -->
@endsection



@section('js')
    
    {{-- jQuery --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <!-- Chart.js -->
    <script src="{{ asset('public/front-end/admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{asset('public/front-end/admin/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('public/front-end/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <!-- Skycons -->
    <script src="{{ asset('public/front-end/admin/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('public/front-end/admin/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('public/front-end/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('public/front-end/admin/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/front-end/admin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('public/front-end/admin/vendors/moment/min/moment.min.js') }}">
        
    </script>
    <script src="{{ asset('public/front-end/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}">
        
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script type="text/javascript">
        $('#datepicker').datepicker({  
            dateFormat: 'yy-mm-dd'
        });  
        $('#datepicker2').datepicker({  
            dateFormat: 'yy-mm-dd'
        });  
    </script>
     
    <script type="text/javascript">

        $(document).ready(function(){
            var chart = new Morris.Bar({
                // ID of the element in which to draw the chart.
                element: 'chart',
                lineColors: ['#819C79', '#fc8710', '#FF6541'],
                parseTime: false,
                hideHover: 'auto',
                xkey: 'ngay',
                ykeys: ['sl_diChuyenNoiDia', 'sl_nguoiNhapCanh', 'sl_khaiBaoToanDan'],
                labels: ['Di chuyển nội địa', 'Người nhập cảnh', 'Khai báo toàn dân'],
                data: {

                }
            });

            var chart1 = new Morris.Area({
                // ID of the element in which to draw the chart.
                element: 'chart1',
                lineColors: ['#104E8B', '#1C86EE'],
                parseTime: false,
                hideHover: 'auto',
                xkey: 'ngay',
                ykeys: ['sl_nguoiCoDauHieu', 'sl_nguoiKhongCo'],
                labels: ['Người có biểu hiện (Sốt, ho,...)', 'Người không có biểu hiện (Sốt, ho,...)']
            });

            $('#btn-dashboard-filter').click(function(){
                var _token = $('input[name="_token"]').val();
                var from_date = $('#datepicker').val();
                var to_date = $('#datepicker2').val();
                $.ajax({
                    url:"{{URL::to('/filter-by-date3')}}",
                    method:"POST",
                    dataType:"JSON",
                    cache: false,
                    data:{from_date:from_date, to_date:to_date, _token:_token},
                    success:function(data){
                        chart.setData(data);
                    }
                });
                $.ajax({
                    url:"{{URL::to('/filter-by-date1')}}",
                    method:"POST",
                    dataType:"JSON",
                    cache: false,
                    data:{from_date:from_date, to_date:to_date, _token:_token},
                    success:function(data){
                        chart1.setData(data);
                    }
                });
        });
        });

        
    </script>

    
@endsection
