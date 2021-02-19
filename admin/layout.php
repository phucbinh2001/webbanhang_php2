<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title><?= (isset($pageTitle)) ? $pageTitle : "Trang quản trị"; ?></title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <!-- App css -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
    <script src="./views/js/app.js"></script>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
                <!-- Image logo -->
                <!--<a href="index.html" class="logo">-->
                <!--<span>-->
                <!--<img src="assets/images/logo.png" alt="" height="30">-->
                <!--</span>-->
                <!--<i>-->
                <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                <!--</i>-->
                <!--</a>-->
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Navbar-left -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-xs">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <!-- Right(Notification) -->
                    <ul class="nav navbar-nav navbar-right" style="display: flex; align-items: center;">
                        <li style="margin-right:10px; ">
                            <?php

                            $anh = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun", "am", "pm", ":");
                            $viet = array("Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy", "Chủ nhật", " phút, sáng", " phút, chiều", " giờ ");
                            $timenow = gmdate("D, d/m/Y - g:i a", time() + 7 * 3600);
                            $t = str_replace($anh, $viet, $timenow);
                            echo $t;

                            ?>
                        </li>

                        <li>
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge up bg-success">4</span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                <li>
                                    <h5>Notifications</h5>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-info">
                                            <i class="mdi mdi-account"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Signup</span>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list-item">
                                        <div class="icon bg-danger">
                                            <i class="mdi mdi-comment"></i>
                                        </div>
                                        <div class="user-desc">
                                            <span class="name">New Message received</span>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="all-msgs text-center">
                                    <p class="m-0"><a href="#">See all Notification</a></p>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown user-box">
                            <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li>
                                    <h5>Chào, Bình</h5>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Trang cá nhân</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Cài đặt</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Đăng xuất</a></li>
                            </ul>
                        </li>

                    </ul> <!-- end navbar-right -->

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>

                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="<?= ADMIN_URL ?>/?ctrl=home" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Tổng quan </span></a>
                        </li>
                        <li>
                            <a href="<?= ADMIN_URL ?>/?ctrl=nhasanxuat&act=list" class="waves-effect"><i class=" mdi mdi-store"></i><span> Nhà sản xuất </span></a>
                        </li>
                        <li>
                            <a href="<?= ADMIN_URL ?>/?ctrl=dienthoai" class="waves-effect"><i class=" mdi mdi-cellphone-iphone"></i><span> Điện thoại </span></a>
                        </li>
                        <li>
                            <a href="<?= ADMIN_URL ?>/?ctrl=binhluan" class="waves-effect"><i class=" mdi mdi-comment-text"></i><span> Bình luận </span></a>
                        </li>
                        <li>
                            <a href="<?= ADMIN_URL ?>/?ctrl=donhang" class="waves-effect"><i class="mdi mdi-cart"></i><span> Đơn hàng </span></a>
                        </li>

                        <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-panels.html">Panel</a></li>
                                <li><a href="ui-portlets.html">Portlets</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="ui-tabs.html">Tabs</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-notifications.html">Notification</a></li>
                                <li><a href="ui-alerts.html">Alerts</a>
                                <li><a href="ui-carousel.html">Carousel</a>
                                <li><a href="ui-video.html">Video</a>
                                <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

                <div class="help-box">
                    <h5 class="text-muted m-t-0">Cần giúp đỡ ?</h5>
                    <p class=""><span class="text-custom">Email:</span> <br /> phucbinh.2001@gmail.com</p>
                    <p class="m-b-0"><span class="text-custom">Liên hệ:</span> <br /> (+84) 879 533 534</p>
                </div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title"><?= (isset($pageTitle)) ? $pageTitle : "Tổng quan"; ?></h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="?ctrl=nhasanxuat">Trang Quản trị</a>
                                    </li>
                                    <li class="active">
                                        <?= (isset($pageTitle)) ? $pageTitle : "Tổng quan"; ?>
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <?php if (file_exists($pageFile))
                        require_once "$pageFile" ?>
                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2021 © Cửa hàng điện thoại Bstore (Phúc Bình).
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <a href="javascript:void(0);" class="right-bar-toggle">
                <i class="mdi mdi-close-circle-outline"></i>
            </a>
            <h4 class="">Settings</h4>
            <div class="setting-list nicescroll">
                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Notifications</h5>
                        <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">API Access</h5>
                        <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Auto Updates</h5>
                        <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-xs-8">
                        <h5 class="m-0">Online Status</h5>
                        <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                    </div>
                    <div class="col-xs-4 text-right">
                        <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="plugins/switchery/switchery.min.js"></script>

    <!-- Counter js  -->
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!--Morris Chart-->
    <script src="plugins/morris/morris.min.js"></script>
    <script src="plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>