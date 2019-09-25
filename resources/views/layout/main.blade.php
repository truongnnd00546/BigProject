<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/jquery-validate/jquery.validate.js')}}"></script>
</head>
<style>
    body{
        background-color: #F5C000;
    }
    form {
        width: 300px;
        margin-right: auto;
        margin-left: auto;

    }

    form input {
        margin-bottom: 10px;
    }

    label.error {
        color: #c0392b;
    }
    @-webkit-keyframes animation-rotate {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }
    @-moz-keyframes animation-rotate {
        100% {
            -moz-transform: rotate(360deg);
        }
    }
    @-o-keyframes animation-rotate {
        100% {
            -o-transform: rotate(360deg);
        }
    }
    @keyframes animation-rotate {
        100% {
            transform: rotate(360deg);
        }
    }
    button {
        appearance: none;
        -webkit-appearance: none;
        border: none;
        cursor: pointer;
    }
    button span {
        position: relative;
    }
    button span {
        white-space: nowrap;
        display: block;
    }
    button:focus {
        outline: none;
    }
    .button {
        padding: 0;
        width: 245px;
        height: 47px;
        background-color: #F5C000;
        -webkit-border-radius: 4px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 4px;
        -moz-background-clip: padding;
        border-radius: 4px;
        background-clip: padding-box;
    }
    .button span {
        text-shadow: #F5C000;
    }
    .button span {
        font: 500 18px Montserrat, Helvetica, Arial, sans-serif;
        text-transform: uppercase;
        color: #fff;
        -webkit-transition: all 350ms ease;
        -moz-transition: all 350ms ease;
        -o-transition: all 350ms ease;
        transition: all 350ms ease;
    }
    .button--loading {
        background-color: #F5C000 !important;
        position: relative;
        cursor: wait;
    }
    .button--loading:before {
        margin: -13px 0 0 -13px;
        width: 30px;
        height: 30px;
        position: absolute;
        left: 50%;
        top: 50%;
        content: '';
        -webkit-border-radius: 24px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 24px;
        -moz-background-clip: padding;
        border-radius: 24px;
        background-clip: padding-box;
        border: rgba(255, 255, 255, 0.25) 2px solid;
        border-top-color: #fff;
        -webkit-animation: animation-rotate 750ms linear infinite;
        -moz-animation: animation-rotate 750ms linear infinite;
        -o-animation: animation-rotate 750ms linear infinite;
        animation: animation-rotate 750ms linear infinite;
    }
    .button--loading span,
    .button--loading:hover span,
    .button--loading:active span {
        color: transparent;
        text-shadow: none;
    }
</style>
<body>
<div class="container">
    @yield("content")
</div>
</body>
</html>
