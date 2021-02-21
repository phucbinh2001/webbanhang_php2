<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?= (isset($pageName)) ? $pageName : "Trang chủ"; ?> | Bstore</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="./views/asset/stylesheets/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="./views/asset/stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="./views/asset/stylesheets/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="./views/asset/stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="./views/asset/stylesheets/animate.css">


    <!-- Favicon and touch icons  -->
    <link href="./views/asset/icon/favicon.png" rel="shortcut icon">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="./views/js/app.js"></script>
</head>

<body class="header_sticky header-style-1 topbar-style-1 has-menu-extra">
    <!-- Preloader -->
    <div id="loading-overlay">
        <div class="loader"></div>
    </div>

    <!-- Boxed -->
    <div class="boxed">
        <div id="site-header-wrap">
            <!-- End Top Bar -->
            <!-- Header -->
            <header id="header" class="header header-container clearfix">
                <div class="container clearfix" id="site-header-inner">
                    <div id="logo" class="logo float-left">
                        <a href="index.html" title="logo">
                            <img src="./views/asset/images/logo.png" alt="image" width="107" height="24" data-retina="images/logo@2x.png" data-width="107" data-height="24">
                        </a>
                    </div><!-- /.logo -->
                    <div class="mobile-button"><span></span></div>
                    <ul class="menu-extra">
                        <li class="box-search">
                            <a class="icon_search header-search-icon" href="#"></a>
                            <form role="search" method="get" class="header-search-form" action="#">
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Tìm kiếm...">
                                <button type="submit" class="header-search-submit" title="Search">Tìm kiếm</button>
                            </form>
                        </li>
                        <li class="box-login">
                            <a class="icon_login" href="#"></a>
                        </li>
                        <li class="box-cart nav-top-cart-wrapper">
                            <a class="icon_cart nav-cart-trigger active" href="index.php?act=cartview"></a>
                            <!-- <div class="nav-shop-cart">
                                <div class="widget_shopping_cart_content">
                                    <div class="woocommerce-min-cart-wrap">
                                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                <span>Chưa có sản phẩm nào</span>
                                            </li>
                                        </ul>
                                    </div>.widget_shopping_cart_content 
                                </div>
                            </div>/.nav-shop-cart -->
                        </li>
                    </ul><!-- /.menu-extra -->
                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="<?= SITE_URL ?>">TRANG CHỦ</a>
                                </li>
                                <li>
                                    <a href="shop-3col.html">SẢN PHẨM</a>
                                </li>
                                <li>
                                    <a href="">THƯƠNG HIỆU</a>
                                    <ul class="submenu">
                                        <?php foreach ($this->model->nhaSX() as $brand) {
                                        ?>
                                            <li><a href="?act=cat&id=<?= $brand['idNSX'] ?>"><?= $brand['TenNSX'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-list.html">LIÊN HỆ</a>
                                    <ul class="submenu">
                                        <li><a href="blog-list.html">Tư vấn sản phẩm</a></li>
                                        <li><a href="blog-list-1.html">Dịch vụ bảo hành</a></li>
                                        <li><a href="blog-list-2.html">Đổi trả/ khiếu nại</a></li>
                                    </ul><!-- /.submenu -->
                                </li>
                            </ul>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.container-fluid -->
            </header><!-- /header -->
        </div><!-- /#site-header-wrap -->

        <?php if (isset($viewFile)) require_once $viewFile;
        else require_once './views/404.php' ?>

        <!-- ICON BOX -->
        <section class="flat-row row-icon-box style-1 bg-section bg-color-f5f">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                            <div class="inner no-margin  flat-content-box " data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                <div class="icon-wrap">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading letter-spacing--1"><a href="#">Miễn phí vận chuyển</a></h5>
                                    <p class="desc">Giảm lên tới 90% chi phí</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                            <div class="inner flat-content-box" data-margin="0 0 0 7px" data-mobilemargin="0 0 0 0">
                                <div class="icon-wrap">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading letter-spacing--1"><a href="#">Thanh toán khi nhận hàng</a></h5>
                                    <p class="desc">Được xem hàng trước khi thanh toán</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                            <div class="inner flat-content-box" data-margin="0 0 0 46px" data-mobilemargin="0 0 0 0">
                                <div class="icon-wrap">
                                    <i class="fa fa-gift"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading letter-spacing--1"><a href="#">Quà tặng</a></h5>
                                    <p class="desc">Dành cho khách hàng mới</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="flat-icon-box icon-left w55 circle bg-white style-1 clearfix">
                            <div class="inner flat-content-box" data-margin="0 0 0 62px" data-mobilemargin="0 0 0 0">
                                <div class="icon-wrap">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="text-wrap">
                                    <h5 class="heading letter-spacing--1"><a href="#">Giờ mở cửa</a></h5>
                                    <p class="desc">6.00 Sáng - 17.00 Chiều</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                </div>
            </div>
        </section>
        <!-- END ICON BOX -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link">
                            <ul>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Chế độ bảo hành</a></li>
                                <li><a href="blog-list.html">Bài viết</a></li>
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link link-login">
                            <ul>
                                <li><a href="#">Đăng nhập/ Đăng ký</a></li>
                                <li><a href="#">Giỏ hàng</a></li>
                                <li><a href="#">Danh sách yêu thích</a></li>
                                <li><a href="#">Điểm thưởng</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-link link-faq">
                            <ul>
                                <li><a href="faqs.html">Điều khoản</a></li>
                                <li><a href="#">Q&A</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="widget widget-brand">
                            <div class="logo logo-footer">
                                <a href="index.html"><img src="./views/asset/images/logo@2x.png" alt="image" width="107" height="24"></a>
                            </div>
                            <ul class="flat-contact">
                                <li class="address">Cao đẳng FPT Polytechnic</li>
                                <li class="phone">(+84)879 533 534</li>
                                <li class="email">bstore@gmail.com</li>
                            </ul><!-- /.flat-contact -->
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.footer -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright text-center">Copyright @2021 <a href="#">Modaz</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>

    </div>

    <!-- Javascript -->
    <script src="./views/asset/javascript/jquery.min.js"></script>
    <script src="./views/asset/javascript/tether.min.js"></script>
    <script src="./views/asset/javascript/bootstrap.min.js"></script>
    <script src="./views/asset/javascript/jquery.easing.js"></script>
    <script src="./views/asset/javascript/parallax.js"></script>
    <script src="./views/asset/javascript/jquery-waypoints.js"></script>
    <script src="./views/asset/javascript/jquery-countTo.js"></script>
    <script src="./views/asset/javascript/jquery.countdown.js"></script>
    <script src="./views/asset/javascript/jquery.flexslider-min.js"></script>
    <script src="./views/asset/javascript/images-loaded.js"></script>
    <script src="./views/asset/javascript/jquery.isotope.min.js"></script>
    <script src="./views/asset/javascript/magnific.popup.min.js"></script>
    <script src="./views/asset/javascript/jquery.hoverdir.js"></script>
    <script src="./views/asset/javascript/owl.carousel.min.js"></script>
    <script src="./views/asset/javascript/equalize.min.js"></script>
    <script src="./views/asset/javascript/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
    <script src="./views/asset/javascript/jquery-ui.js"></script>

    <script src="./views/asset/javascript/jquery.cookie.js"></script>
    <script src="./views/asset/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script src="./views/asset/rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="./views/asset/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="./views/asset/javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="./views/asset/rev-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

</html>