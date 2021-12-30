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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Số người truy cập</span>
                    <div class="count">25</div>
                    <span class="count_bottom"><i class="green">4% </i> hôm qua</span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Cán bộ quản lý</span>
                    <div class="count">5</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> hôm qua</span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Người dùng</span>
                    <div class="count green">
                        <?php
                            $countUser = Session::get('countUser');
                            if($countUser){
                                echo $countUser;
                            }
					    ?>
                    </div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> hôm
                        qua</span>
                </div>
                <div class="col-md-3 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Đã khai báo</span>
                    <div class="count">67</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> hôm
                        qua</span>
                </div>
            </div>
        </div>
        <!-- /top tiles -->

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <form autocomplete="off">
                    @csrf
                    <div class="col-md-2">
                        <p>Từ ngày:</p> <input type="text" id="datepicker" class="date form-control">
                        <input type="button" id="btn-dashboard-filter" class="btn btn-primary btn-sm" value="Lọc kết quả">
                    </div>
                    <div class="col-md-2">
                        <p>Đến ngày:</p> <input type="text" id="datepicker2" class="date form-control">
                    </div>
                    {{-- <div class="col-md-2">
                        <p>
                            Lọc theo
                            <select class="dashboard-filter form-control">
                                <option value="7ngay">7 ngày qua</option>
                                <option value="thangtruoc">tháng trước</option></option>
                                <option value="thangnay">tháng này</option>
                            </select>
                        </p>
                    </div> --}}
                    <div class="col-md-12">
                        <div id="chart" style="height: 250px;"></div>
                    </div>
                </form>
                {{-- <div class="dashboard_graph">
                    <div class="row x_title">
                        <div class="col-md-6">
                            <h3>Network Activities <small>Graph title sub-title</small></h3>
                        </div>
                        <div class="col-md-6">
                            <div id="reportrange" class="pull-right"
                                style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 col-sm-9 ">
                        <div id="chart_plot_01" class="demo-placeholder"></div>
                    </div>
                    <div class="col-md-3 col-sm-3  bg-white">
                        <div class="x_title">
                            <h2>Top Campaign Performance</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 ">
                            <div>
                                <p>Facebook Campaign</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>Twitter Campaign</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 ">
                            <div>
                                <p>Conventional Media</p>
                                <div class="">
                                    <div class="progress progress_sm" style="width: 76%;">
                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                </div> --}}
            </div>
        </div>
        <br />

        <div class="row">
            {{-- <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>App Versions</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <h4>App Usage across versions</h4>
                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>0.1.5.2</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>123k</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>0.1.5.3</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>53k</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>0.1.5.4</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>23k</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>0.1.5.5</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>3k</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget_summary">
                            <div class="w_left w_25">
                                <span>0.1.5.6</span>
                            </div>
                            <div class="w_center w_55">
                                <div class="progress">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="w_right w_20">
                                <span>1k</span>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                    <div class="x_title">
                        <h2>Device Usage</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="" style="width:100%">
                            <tr>
                                <th style="width:37%;">
                                    <p>Top 5</p>
                                </th>
                                <th>
                                    <div class="col-lg-7 col-md-7 col-sm-7 ">
                                        <p class="">Device</p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                                        <p class="">Progress</p>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <canvas class="canvasDoughnut" height="140" width="140"
                                        style="margin: 15px 10px 10px 0"></canvas>
                                </td>
                                <td>
                                    <table class="tile_info">
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square blue"></i>IOS </p>
                                            </td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square green"></i>Android </p>
                                            </td>
                                            <td>10%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square purple"></i>Blackberry </p>
                                            </td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square aero"></i>Symbian </p>
                                            </td>
                                            <td>15%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p><i class="fa fa-square red"></i>Others </p>
                                            </td>
                                            <td>30%</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-sm-4 ">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h2>Quick Settings</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <ul class="quick-list">
                                <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                                </li>
                                <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                                </li>
                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                </li>
                                <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                </li>
                                <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                                </li>
                            </ul>

                            <div class="sidebar-widget">
                                <h4>Profile Completion</h4>
                                <canvas width="150" height="80" id="chart_gauge_01" class=""
                                    style="width: 160px; height: 100px;"></canvas>
                                <div class="goal-wrapper">
                                    <span id="gauge-text" class="gauge-value pull-left">0</span>
                                    <span class="gauge-value pull-left">%</span>
                                    <span id="goal-text" class="goal-value pull-right">100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        </div>
    </div>
    <!-- /page content -->
@endsection



@section('js')
    <script type="text/javascript">
        $('#datepicker').datepicker({  
            dateFormat: 'yy-mm-dd'
        });  
        $('#datepicker2').datepicker({  
            dateFormat: 'yy-mm-dd'
        });  
    </script> 
    <script type="text/javascript">
        $('#btn-dashboard-filter').click(function(){
            var _token = $('input[name="token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();
            $.ajax({
                url:"{url('/filter-by-date')}",
                method:"POST",
                dataType:"JSON",
                data:{from_date:from_date, to_date:to_date,_token:_token},
                success::function(data){
                    chart.setData(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            new Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'chart',
            lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
            parseTime: false,
            // Chart data records -- each entry in this array corresponds to a point on
            // the chart.
            data: [
                { ngay: '2021-12-04', sl_diChuyenNoiDia: 20, sl_nguoiNhapCanh: 21, sl_khaiBaoToanDan: 50},
                { ngay: '2021-12-12', sl_diChuyenNoiDia: 20, sl_nguoiNhapCanh: 21, sl_khaiBaoToanDan: 50},
                { ngay: '2021-12-24', sl_diChuyenNoiDia: 20, sl_nguoiNhapCanh: 21, sl_khaiBaoToanDan: 50},
                { ngay: '2021-12-31', sl_diChuyenNoiDia: 20, sl_nguoiNhapCanh: 21, sl_khaiBaoToanDan: 50}
            ],
            hideHover: 'auto',
            xkey: 'ngay',
            ykeys: ['sl_diChuyenNoiDia', 'sl_nguoiNhapCanh', 'sl_khaiBaoToanDan'],
            labels: ['Di chuyển nội địa', 'Người nhập cảnh', 'Khai báo toàn dân']
            });
            // var chart = new Morris.Bar({
            //     element: 'chart',
            //     lineColors: ['#819C79', '#fc8710', '#FF6541', '#A4ADD3', '#766B56'],
            //     pointFillColors: ['#FFFFFF'],
            //     pointStrokeColors: ['black'],
            //     fillOpacity: 0.6,
            //     hideHover: 'auto',
            //     parseTime: false,
            //     xkey: 'ngay',
            //     ykeys: ['sl_diChuyenNoiDia', 'sl_nguoiNhapCanh', 'sl_khaiBaoToanDan'],
            //     behaveLikeLine: true,
            //     labels: ['Di chuyển nội địa', 'Người nhập cảnh', 'Khai báo toàn dân']
            // });
        })
    </script>

    <!-- Chart.js -->
    <script src="{{ asset('public/front-end/admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="/vendors/gauge.js/dist/gauge.min.js"></script>
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
    <script src="{{ asset('public/front-end/admin/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('public/front-end/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@endsection
