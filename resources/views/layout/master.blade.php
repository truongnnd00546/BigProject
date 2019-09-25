<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/img/apple-icon.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{{ $page_title }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS     -->
    <script src="{{asset('/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('/assets/css/material-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('/assets/css/google-roboto-300-700.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="/assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="/admin/dashboard" class="simple-text">
                SEA FASHION
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="" class="simple-text">
                SEA
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{\Illuminate\Support\Facades\Auth::user()->thumbnail}}"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <h4><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b></h4>
                    </a>
                    <a title="Đăng xuất" href="/logout"><i class="material-icons">input</i></a>
                </div>
            </div>
            <ul class="nav">
                <li class="{{$current_menu == 'chart_manager' ? 'active' : ''}}">
                    <a href="/admin/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Trang chủ</p>
                    </a>
                </li>
                <li class="{{ $current_menu == 'product_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">sort</i>
                        <p>Quản lí sản phẩm
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'product_manager')
                        <div class="collapse in" id="pagesExamples">
                            <ul class="nav">
                                @if($current_menu == 'product_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/product/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/product">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                @if($current_menu == 'product_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/product/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'product_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/product">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'order_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">book</i>
                        <p>Quản lí đơn hàng
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'order_manager')
                        <div class="collapse in" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'order_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/order/chart">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/order">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'order_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/order/chart">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'order_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/order">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'category_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#components">
                        <i class="material-icons">apps</i>
                        <p>Danh mục sản phẩm
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'category_manager')
                        <div class="collapse in" id="components">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/category/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/category">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="components">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/category/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/category">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
                <li class="{{ $current_menu == 'collection_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">image</i>
                        <p>Bộ sưu tập
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'collection_manager')
                        <div class="collapse in" id="formsExamples">
                            <ul class="nav">
                                @if($current_menu == 'collection_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'collection_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/collection/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'collection_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/collection">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                @if($current_menu == 'collection_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'collection_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/collection/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'collection_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/collection">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                @section('content')
                @show()
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Công ty
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Bài viết
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Creative by Nguyen Nam Truong
                </p>
            </div>
        </footer>
    </div>
</div>

</body>
<!--   Core JS Files   -->

<script src="{{asset('/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('/assets/js/moment.min.js')}}"></script>

<!--  Plugin for the Wizard -->
<script src="{{asset('/assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('/assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('/assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('/assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('/assets/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="/assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="{{asset('/assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('/assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('/assets/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('/assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('/assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('/assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('/assets/js/material-dashboard.js')}}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>
