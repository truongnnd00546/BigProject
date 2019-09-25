@extends('layout.main')
@section('title')
    Đăng nhập
@endsection
@section('content')
    <?php //Hiển thị thông báo thành công?>
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container" style="margin-top: -8%">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-offset-4">
                <center>
                    <img style="width: 450px;height: auto;margin-left: -50px" src="anh/logocty.png">
                </center>
                <div style="margin-top: -110px" class="panel panel-default">
                    <div class="panel-body">
                        <form style="margin-top: -17px" role="form" action="{{ url('/login') }}" method="POST">
                            {!! csrf_field() !!}
                            <fieldset>
                                <div class="row">
                                    <div class="panel-heading">
                                        <h3 style="color: #F5C000"><strong>Đăng nhập</strong></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input class="form-control" placeholder="Email" name="email" type="text"
                                                       value="{{ old('email') }}" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input class="form-control" placeholder="Mật khẩu" name="password"
                                                       type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class='button' id='call-to-action'>
                                                <span>Đăng nhập</span>
                                            </button>
                                        </div>
                                        {{--<div class="login-help">--}}
                                        {{--<a href="/register">Đăng ký</a> - <a href="#">Quên mật khẩu</a>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function () {
            var $;

            $ = jQuery;

            $(document).ready(function () {
                return $('#call-to-action').on('click', function () {
                    return $(this).toggleClass('button--loading');
                });
            });

        }).call(this);

        //# sourceURL=coffeescript
    </script>
@endsection
