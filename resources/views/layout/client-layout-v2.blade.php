<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$page_title}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/png" href="//cdn.shopify.com/s/files/1/0476/6585/t/17/assets/favicon.png?2934" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <div class="topbar-child2">

                {{--<span class="topbar-email">--}}
                        {{--@if(Auth::check())--}}
                        {{--<li><a href="">{{Auth::user()->name}}</a></li>--}}
                        {{--<li><a href="{{route('logout')}}">Đăng xuất</a></li>--}}
                        {{--@csrf--}}
                    {{--@else--}}
                        {{--<li><a href="{{route('login')}}">Đăng nhập</a></li>--}}
                    {{--@endif--}}
					{{--</span>--}}

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option>USD</option>
                        <option>EUR</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="/home" class="logo">
                <img src="{{asset('anh/logo.jpg')}}"
                     alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li class="{{$active == 'home' ? 'sale-noti' : ''}}">
                            <a href="/home">Trang chủ</a>
                        </li>

                        <li class="{{$active == 'list' ? 'sale-noti' : ''}}">
                            <a href="/danh-sach-san-pham">Mua hàng</a>
                        </li>
                        <li class="{{$active == 'about' ? 'sale-noti' : ''}}">
                            <a href="/about">Giới thiệu</a>
                        </li>
                        <li class="{{$active == 'contact' ? 'sale-noti' : ''}}">
                            <a href="#">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <form method="get" action="/search">
                    <div class="pos-relative bo11 of-hidden" style="margin-right: 20px">
                        <input class="s-text7 size16 p-l-23 p-r-50" type="text" name="key" placeholder="Search">

                        <button type="submit" class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
                            <i class="fs-13 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
                <a href="" title="admin page" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>
                <div class="header-wrapicon2">
                    <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown"
                         alt="ICON">
                    <span class="header-icons-noti" id="header-icons-noti">{{\App\ShoppingCart::getTotalItem()}}</span>
                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem" id="header-cart-wrapitem">
                            @if(count(\App\ShoppingCart::getCart()->items)>0)
                                @foreach(\App\ShoppingCart::getCart()->items as $item)
                                    <li class="header-cart-item">
                                        <div class="header-cart-item-img">
                                            <img src="{{$item->product->images}}" alt="IMG">
                                        </div>

                                        <div class="header-cart-item-txt">
                                            <a href="#" class="header-cart-item-name">
                                                {{$item->product->name}}
                                            </a>

                                            <span class="header-cart-item-info">
                                                {{$item->quantity}} x {{$item->product->discountPriceString}}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                'Hiện tại không có sản phẩm nào trong giỏ hàng'
                            @endif
                        </ul>
                        <div class="header-cart-total">
                            Tổng cộng: <span
                                    id="header-cart-total">{{\App\ShoppingCart::getCart()->getTotalMoneyString()}}</span>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn"></div>
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="/xem-gio-hang" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Đơn hàng
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/home" class="logo-mobile">
            <img src="{{asset('anh/logo.jpg')}}"
                 alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
{{--                <a href="#" class="header-wrapicon1 dis-block">--}}
{{--                    <img src="{{asset('images/icons/icon-header-01.png')}}" class="header-icon1" alt="ICON">--}}
{{--                </a>--}}

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="{{asset('images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown"
                         alt="ICON">
                    <span class="header-icons-noti">{{\App\ShoppingCart::getTotalItem()}}</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            @if(count(\App\ShoppingCart::getCart()->items)>0)
                                @foreach(\App\ShoppingCart::getCart()->items as $item)
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="{{$item->product->images}}" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        {{$item->product->name}}
                                    </a>

                                    <span class="header-cart-item-info">
											{{$item->quantity}} x {{$item->product->discountPriceString}}
										</span>
                                </div>
                            </li>
                                @endforeach
                            @else
                                'Hiện tại không có sản phẩm nào trong giỏ hàng'
                            @endif
                        </ul>

                        <div class="header-cart-total">
                            Tổng cộng: <span
                                    id="header-cart-total">{{\App\ShoppingCart::getCart()->getTotalMoneyString()}}</span>
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="/xem-gio-hang" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Đơn hàng
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="/home">Trang chủ</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/danh-sach-san-pham">Mua hàng</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/about">Giới thiệu</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
@section('slider')
@show()
@section('content')
@show()
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                LIÊN HỆ
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Số 8A, Tôn Thất Thuyết, Mỹ Đình, Hà Nội.<br>
                    (+84) 981 740 887
                </p>

                <div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Danh mục
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="bo-suu-tap-san-pham/?collectionId=2" class="s-text7">
                        Đông
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="bo-suu-tap-san-pham/?collectionId=1" class="s-text7">
                        Hè
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Tìm kiếm
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/home" class="s-text7">
                        Trang chủ
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/danh-sach-san-pham" class="s-text7">
                        Mua hàng
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/about" class="s-text7">
                        Giới thiệu
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Liên hệ
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Trợ giúp
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Tin tức
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Đăng ký
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="{{asset('images/icons/paypal.png')}}" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('images/icons/visa.png')}}" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('images/icons/mastercard.png')}}" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('images/icons/express.png')}}" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="{{asset('images/icons/discover.png')}}" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o"
                                                                                  aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Colorlib</a>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/my-script.js')}}"></script>
</body>
</html>
