<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('public/front-end/admin/images/img.jpg') }}" alt="..."
                    class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin chào,</span>
                <h2>
                    <?php
                            $name = Session::get('admin_name');
                            if($name){
                                echo $name;
                            }
					    ?>
                </h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Trang chủ</a></li>

                    <li><a href="{{ URL::to('/medicalManagement') }}"><i class="fa fa-home"></i> Quản lý khai báo y tế</a></li>

                    <li><a><i class="fa fa-life-ring"></i> Dịch vụ <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.html">Danh sách dịch vụ</a></li>
                            <li><a href="index.html">Thêm dịch vụ</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-bar-chart"></i> Thống kê <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="index.html">Doanh thu</a></li>
                            <li><a href="index.html">Đơn hàng</a></li>
                            <li><a href="index.html">Dịch vụ</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Quản trị giao diện <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('admin/form') }}" class="nav-link">Hình ảnh</a></li>
                            <li><a href="{{ url('admin/form-advanced') }}" class="nav-link">Hỗ trợ trực tuyến</a>
                            </li>
                            <li><a href="{{ url('admin/form-validation') }}" class="nav-link">Thông tin</a></li>
                            <li><a href="{{ url('admin/form-wizards') }}" class="nav-link">Nội dung khác</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Cấu hình user <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ url('admin/form') }}" class="nav-link">Hình ảnh</a></li>
                            <li><a href="{{ url('admin/form-advanced') }}" class="nav-link">Hỗ trợ trực tuyến</a>
                            </li>
                            <li><a href="{{ url('admin/form-validation') }}" class="nav-link">Thông tin</a></li>
                            <li><a href="{{ url('admin/form-wizards') }}" class="nav-link">Nội dung khác</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
