<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <title>@yield('title','人人网')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/img/logo.jpg')}}" />
    <script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/thems.css')}}">
    <link href="{{url('/home/css/bootstrap.min.css')}}" rel="stylesheet">
    @yield('my-css')


</head>

<body>

<div class="header">
    <div class="head clearfix">
        <div class="logo"><a href="index.html"><img src="{{asset('home/img/logo.jpg')}}" alt="张尼玛" style="width:90px"></a></div>
        <ul class="nav clearfix">
            <li>
                <div class="li_m">

                </div>
            </li>
            <li>
                <div class="li_m">

                </div>
            </li>
            <li>
                <div class="li_m">

                </div>
            </li>
            <li>
                <div class="li_m">
                    <div class="li_m">
                        <a href="/register">
                            <span><h4>注册</h4></span>

                        </a>
                    </div>
                </div>
            </li>
            <li>
                <div class="li_m">
                    <a href="news.html">
                        <span><h4>反馈意见</h4></span>

                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
@yield('content')
</body>
</html>