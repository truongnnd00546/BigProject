<!doctype html>
<html lang="en">
<head>
    <title>Sea-fashion</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--//tags -->
    <link href="{{asset('asset/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{asset('asset/css/flexslider.css')}}" type="text/css" media="screen">
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('asset/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('asset/css/easy-responsive-tabs.css')}}" rel="stylesheet" type="text/css">
    <!-- //for bootstrap working -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic"
          rel="stylesheet" type="text/css">

    <style type="text/css">@keyframes pop-in {
                               0% {
                                   opacity: 0;
                                   transform: scale(0.1);
                               }
                               60% {
                                   opacity: 1;
                                   transform: scale(1.2);
                               }
                               100% {
                                   transform: scale(1);
                               }
                           }

        @-webkit-keyframes pop-in {
            0% {
                opacity: 0;
                -webkit-transform: scale(0.1);
            }
            60% {
                opacity: 1;
                -webkit-transform: scale(1.2);
            }
            100% {
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes pop-in {
            0% {
                opacity: 0;
                -moz-transform: scale(0.1);
            }
            60% {
                opacity: 1;
                -moz-transform: scale(1.2);
            }
            100% {
                -moz-transform: scale(1);
            }
        }

        .minicart-showing #PPMiniCart {
            display: block;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            animation: pop-in 0.25s;
            -webkit-animation: pop-in 0.25s;
            -moz-animation: pop-in 0.25s;
        }

        #PPMiniCart {
            display: none;
            position: fixed;
            left: 50%;
            top: 75px;
        }

        #PPMiniCart form {
            position: relative;
            width: 400px;
            max-height: 400px;
            margin-left: -200px;
            padding: 10px 10px 40px;
            background: #fbfbfb;
            border: 1px solid #d7d7d7;
            border-radius: 4px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            font: 15px/normal arial, helvetica;
            color: #333;
        }

        #PPMiniCart form.minicart-empty {
            padding-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        #PPMiniCart ul {
            clear: both;
            float: left;
            width: 380px;
            margin: 5px 0 20px;
            padding: 10px;
            list-style-type: none;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        #PPMiniCart .minicart-empty ul {
            display: none;
        }

        #PPMiniCart .minicart-closer {
            float: right;
            margin: -12px -10px 0;
            padding: 10px;
            background: 0;
            border: 0;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
        }

        #PPMiniCart .minicart-item {
            clear: left;
            padding: 6px 0;
            min-height: 25px;
        }

        #PPMiniCart .minicart-item + .minicart-item {
            border-top: 1px solid #f2f2f2;
        }

        #PPMiniCart .minicart-item a {
            color: #333;
            text-decoration: none;
        }

        #PPMiniCart .minicart-details-name {
            float: left;
            width: 62%;
        }

        #PPMiniCart .minicart-details-quantity {
            float: left;
            width: 15%;
        }

        #PPMiniCart .minicart-details-remove {
            float: left;
            width: 7%;
        }

        #PPMiniCart .minicart-details-price {
            float: left;
            width: 16%;
            text-align: right;
        }

        #PPMiniCart .minicart-attributes {
            margin: 0;
            padding: 0;
            background: transparent;
            border: 0;
            border-radius: 0;
            box-shadow: none;
            color: #999;
            font-size: 12px;
            line-height: 22px;
        }

        #PPMiniCart .minicart-attributes li {
            display: inline;
        }

        #PPMiniCart .minicart-attributes li:after {
            content: ",";
        }

        #PPMiniCart .minicart-attributes li:last-child:after {
            content: "";
        }

        #PPMiniCart .minicart-quantity {
            width: 30px;
            height: 18px;
            padding: 2px 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            font-size: 13px;
            text-align: right;
            transition: border linear 0.2s, box-shadow linear 0.2s;
            -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
            -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
        }

        #PPMiniCart .minicart-quantity:hover {
            border-color: #0078C1;
        }

        #PPMiniCart .minicart-quantity:focus {
            border-color: #0078C1;
            outline: 0;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 3px rgba(0, 120, 193, 0.4);
        }

        #PPMiniCart .minicart-remove {
            width: 18px;
            height: 19px;
            margin: 2px 0 0;
            padding: 0;
            background: #b7b7b7;
            border: 1px solid #a3a3a3;
            border-radius: 3px;
            color: #fff;
            font-size: 13px;
            opacity: 0.70;
            cursor: pointer;
        }

        #PPMiniCart .minicart-remove:hover {
            opacity: 1;
        }

        #PPMiniCart .minicart-footer {
            clear: left;
        }

        #PPMiniCart .minicart-subtotal {
            position: absolute;
            bottom: 17px;
            padding-left: 6px;
            left: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        #PPMiniCart .minicart-submit {
            position: absolute;
            bottom: 10px;
            right: 10px;
            min-width: 153px;
            height: 33px;
            margin-right: 6px;
            padding: 0 9px;
            border: 1px solid #ffc727;
            border-radius: 5px;
            color: #000;
            text-shadow: 1px 1px 1px #fff6e9;
            cursor: pointer;
            background: #ffaa00;
            background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZjZlOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmFhMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
            background: -moz-linear-gradient(top, #fff6e9 0%, #ffaa00 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff6e9), color-stop(100%, #ffaa00));
            background: -webkit-linear-gradient(top, #fff6e9 0%, #ffaa00 100%);
            background: -o-linear-gradient(top, #fff6e9 0%, #ffaa00 100%);
            background: -ms-linear-gradient(top, #fff6e9 0%, #ffaa00 100%);
            background: linear-gradient(to bottom, #fff6e9 0%, #ffaa00 100%);
        }

        #PPMiniCart .minicart-submit img {
            vertical-align: middle;
            padding: 4px 0 0 2px;
        }</style>
</head>
<body>
<div class="header" id="home">
    <div class="container">
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt"
                                                                          aria-hidden="true"></i> Sign In </a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o"
                                                                           aria-hidden="true"></i> Sign Up </a></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i> Call : 01234567898</li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a
                        href="mailto:info@example.com">info@example.com</a></li>
        </ul>
    </div>
</div>
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <div class="col-md-5 header-middle">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">
                <div class="clearfix"></div>
            </form>
        </div>
        <!-- header-bot -->
        <div class="col-md-7 logo_agile">
            <h1><a href="index.html"><span>E</span>lite Shoppy <i class="fa fa-shopping-bag top_logo_agile_bag"
                                                                  aria-hidden="true"></i></a></h1>
        </div>
        <!-- header-bot -->
        <div class="clearfix"></div>
    </div>
</div>
<div class="ban-top">
    <div class="container">
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home
                                    <span class="sr-only">(current)</span></a></li>
                            <li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img1 multi-gd-text ">
                                            <a href="mens.html"><img src="images/top2.jpg" alt=" "></a>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Clothing</a></li>
                                                <li><a href="mens.html">Wallets</a></li>
                                                <li><a href="mens.html">Footwear</a></li>
                                                <li><a href="mens.html">Watches</a></li>
                                                <li><a href="mens.html">Accessories</a></li>
                                                <li><a href="mens.html">Bags</a></li>
                                                <li><a href="mens.html">Caps &amp; Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="mens.html">Jewellery</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Perfumes</a></li>
                                                <li><a href="mens.html">Beauty</a></li>
                                                <li><a href="mens.html">Shirts</a></li>
                                                <li><a href="mens.html">Sunglasses</a></li>
                                                <li><a href="mens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown menu__item">
                                <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">Women's wear <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Clothing</a></li>
                                                <li><a href="womens.html">Wallets</a></li>
                                                <li><a href="womens.html">Footwear</a></li>
                                                <li><a href="womens.html">Watches</a></li>
                                                <li><a href="womens.html">Accessories</a></li>
                                                <li><a href="womens.html">Bags</a></li>
                                                <li><a href="womens.html">Caps &amp; Hats</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li><a href="womens.html">Jewellery</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Perfumes</a></li>
                                                <li><a href="womens.html">Beauty</a></li>
                                                <li><a href="womens.html">Shirts</a></li>
                                                <li><a href="womens.html">Sunglasses</a></li>
                                                <li><a href="womens.html">Swimwear</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img multi-gd-text ">
                                            <a href="womens.html"><img src="images/top1.jpg" alt=" "></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="menu__item dropdown">
                                <a class="menu__link" href="#" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="icons.html">Web Icons</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class=" menu__item"><a class="menu__link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="top_nav_right">
            <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="display" value="1">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                                                                                        aria-hidden="true"></i></button>
                </form>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item2">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item4 active">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Summer <span>Collection</span></h3>
                    <p>New Arrivals On Sale</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
        <div class="item item5">
            <div class="container">
                <div class="carousel-caption">
                    <h3>The Biggest <span>Sale</span></h3>
                    <p>Special for today</p>
                    <a class="hvr-outline-out button2" href="mens.html">Shop Now </a>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- The Modal -->
    <!-- Modal1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In <span>Now</span></h3>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="Email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <input type="submit" value="Sign In">
                        </form>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <p><a href="#" data-toggle="modal" data-target="#myModal2"> Don't have an account?</a></p>

                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <img src="asset/images/log_pic.jpg" alt=" "/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="col-md-8 modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" name="Name" required="">
                                <label>Name</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="email" name="Email" required="">
                                <label>Email</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="password" name="password" required="">
                                <label>Password</label>
                                <span></span>
                            </div>
                            <div class="styled-input">
                                <input type="password" name="Confirm Password" required="">
                                <label>Confirm Password</label>
                                <span></span>
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <ul class="social-nav model-3d-0 footer-social w3_agile_social top_agile_third">
                            <li><a href="#" class="facebook">
                                    <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="instagram">
                                    <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                </a></li>
                            <li><a href="#" class="pinterest">
                                    <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                    <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                </a></li>
                        </ul>
                        <div class="clearfix"></div>
                        <p><a href="#">By clicking register, I agree to your terms</a></p>

                    </div>
                    <div class="col-md-4 modal_body_right modal_body_right1">
                        <img src="{{asset('/asset/images/log_pic.jpg')}}" alt=" "/>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->
</div>

@section('content')
@show()

<div class="coupons">
    <div class="coupons-grids text-center">
        <div class="w3layouts_mail_grid">
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE SHIPPING</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>24/7 SUPPORT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>MONEY BACK GUARANTEE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="col-md-3 w3layouts_mail_grid_left">
                <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                    <i class="fa fa-gift" aria-hidden="true"></i>
                </div>
                <div class="w3layouts_mail_grid_left2">
                    <h3>FREE GIFT COUPONS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>

<div class="footer">
    <div class="footer_agile_inner_info_w3l">
        <div class="col-md-12 footer-right">
            <div class="sign-grds">
                <div class="col-md-4 sign-gd">
                    <h4>Our <span>Information</span></h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="mens.html">Men's Wear</a></li>
                        <li><a href="womens.html">Women's wear</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="typography.html">Short Codes</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>

                <div class="col-md-5 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="w3-address">
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="w3-address-grid">
                            <div class="w3-address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="w3-address-right">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 sign-gd flickr-post">
                    <h4>Flickr <span>Posts</span></h4>
                    <ul>
                        <li><a href="single.html"><img src="{{asset('asset/images/t1.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t2.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t3.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t4.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t1.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t2.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t3.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>
                        <li><a href="single.html"><img src="{{asset('asset/images/t4.jpg')}}" alt=" "
                                                       class="img-responsive"></a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>

        <p class="copy-right">© 2017 Elite shoppy. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
        </p>
    </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3>Sign up for free</h3>
                            <form>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <input type="submit" value="REGISTER NOW">
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3>Sign in with your account</h3>
                            <form>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';"
                                           onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox" id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in">
                                    <input type="submit" value="SIGNIN">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy
                            Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#home" class="scroll" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover"
                                                                                                      style="opacity: 1;"> </span></a>

<script src="{{asset('asset/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>

<script type="text/javascript" src="{{asset('asset/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('asset/js/modernizr.custom.js')}}"></script>

<script src="js/imagezoom.js"></script>
<script src="{{asset('asset/js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<script src="{{asset('asset/js/jquery.flexslider.js')}}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>


<script type="text/javascript">//<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [1000, 7000],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    });//]]>

</script>
<script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.countup.js')}}"></script>
<script>
    $('.counter').countUp();
</script>
<script type="text/javascript" src="{{asset('asset/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<script type="text/javascript" src="{{asset('asset/js/bootstrap.js')}}"></script>
<a href="#" id="toTop">To Top</a>
</body>
</html>