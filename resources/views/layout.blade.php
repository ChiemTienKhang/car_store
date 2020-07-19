<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>KQ car dealer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KQ car dealer">
    <meta name="keywords" content="KQ car dealer">
    <meta name="robots" content="*">
    <link rel="icon" href="{{('public/frontend/images/logo.png')}}" type="image/x-icon">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/font-awesome.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/bootstrap-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/revslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/owl.theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/jquery.mobile-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/style.css')}}" media="all">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/stylesheet/responsive.css')}}" media="all">
</head>

<body>
    <div id="page">
        <header>
            <div class="container">
                <div class="row">
                    <div id="header">
                        <div class="header-container">
                            <div class="header-logo"> <a href="{{URL::to('/home')}}" title="KQ car dealer" class="logo">
                                    <div><img style="width:200px;height:56px;"
                                            src="{{('public/frontend/images/logo-2.png')}}" alt="Car Dealer"></div>
                                </a> </div>
                            <div class="header__nav">
                                <div class="header-banner">
                                    <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                                        <div class="assetBlock">
                                        </div>
                                    </div>
                                </div>
                                <div class="fl-header-right">
                                </div>
                                <div class="fl-nav-menu">
                                    <nav>
                                        <div class="mm-toggle-wrap">
                                            <div class="mm-toggle"><i class="fa fa-bars"></i><span
                                                    class="mm-label">Trang chủ</span> </div>
                                        </div>
                                        <div class="nav-inner">
                                            <!-- BEGIN NAV -->
                                            <ul id="nav" class="hidden-xs">
                                                <li class="active"> <a class="level-top"
                                                        href="{{URL::to('/home')}}"><span>Trang chủ</span></a></li>
                                                <li class="level0 parent drop-menu"> <a class="level-top"
                                                        href="#"><span>Sản phẩm</span></a>
                                                    <ul class="level1">
                                                        <li class="level1 first"><a
                                                                href="{{URL::to('/car-all')}}"><span>Tất cả
                                                                    xe</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="level0 parent drop-menu"> <a class="level-top"
                                                        href="{{URL::to('/car-add')}}"><span>Đăng xe</span></a>
                                                </li>
                                                <!--nav-->
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--container-->
        @yield('content')
        <footer>
            <!-- BEGIN INFORMATIVE FOOTER -->
            <div class="footer-inner">
                <div class="newsletter-row">
                    <div class="container">
                        <div class="row">
                            <!-- Footer Newsletter -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
                                <div class="newsletter-wrap">
                                    <h5></h5>
                                    <h4></h4>
                                    <form action="#" method="post" id="newsletter-validate-detail1">
                                        <div id="container_form_news">
                                            <div id="container_form_news2">
                                            </div>
                                            <!--container_form_news2-->
                                        </div>
                                        <!--container_form_news-->
                                    </form>
                                </div>
                                <!--newsletter-wrap-->
                            </div>
                        </div>
                    </div>
                    <!--footer-column-last-->
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12 col-lg-4">
                            <div class="co-info">
                                <h4>LIÊN HỆ</h4>
                                <address>
                                    <div><span>25 Nguyễn Trãi Quận 4</span></div>
                                    <div> <span> +84 91231231</span></div>
                                    <div> <span><a href="#">KQ cardealer</a></span></div>
                                    <div> <span>Thứ hai - Thứ sáu : 09am - 06pm</span></div>
                                </address>
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12 col-lg-8">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                        </div>
                        <div class="col-sm-4 col-xs-12 coppyright">
                          <a target="_blank" href="#">copyright © 2020 - developed by KQ</a></div>
                        <div class="col-xs-12 col-sm-4">
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN SIMPLE FOOTER -->
        </footer>
        <!-- End For version 1,2,3,4,6 -->

    </div>
    <!--page-->
    <!-- Mobile Menu-->
    <div id="mobile-menu">
        <ul>
            <li class="active"> <a class="level-top" href="{{URL::to('/home')}}"><span>Trang chủ</span></a></li>
            <li><a href="*">Sản phẩm</a>
                <ul class="level0">
                    <li class="level3 nav-6-1 parent item"> <a href="{{URL::to('/car-all')}}"><span>Tất cả xe</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="{{URL::to('/car-add')}}">Đăng xe</a>
            </li>
        </ul>
    </div>

    </div>


    <!-- JavaScript -->
    <script type="text/javascript" src="{{('public/frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{('public/frontend/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{('public/frontend/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/parallax.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/revslider.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/common.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/jquery.bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{('public/frontend/js/jquery.mobile-menu.min.js')}}"></script>
    <script src="{{('public/frontend/js/countdown.js')}}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
                startheight: 650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });

    </script>
    <script>
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);

    </script>
</body>

</html>
