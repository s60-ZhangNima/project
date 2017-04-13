<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <title>人人网 - 注册</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/reset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/img/logo.jpg')}}" />
    <script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/thems.css')}}">
    <link rel="stylesheet" href="/css/bootstrap.css">
    @yield('my-css')
    <style>
        @yield('style')


    </style>
</head>

<body>
{{--头部--}}
<div class="header" style="background-color: #d9edf7">
    <div class="head clearfix">
        <div class="logo"><a href="index.html"><img src="{{asset('home/img/logo.jpg')}}" alt="张尼玛" style="width:90px;"></a></div>
        <ul class="nav clearfix" style="height: 120px;">
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

                <div class="li_m" style="margin-top: 40%;">
                        <span><h5>已有账号</h5></span>
                </div>

            </li>

            <li>
                <div class="li_m" style="margin-top: -23%;">
                    <a href="/">
                        <span><h2>登录</h2></span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

{{--注册表单--}}
<div style="width: 100%; background-color: #f3f3f3;">

    <br>
    <div class="container" style="width: 50%; border: 1px solid #CFD6DE; background-color: #F8F8F8; ">

        <form class="form-signin " action="/store" method="post">
            {{csrf_field()}}
            <div  style="background-color: #FFFFFF; text-align: center; height: 80px;">
                <h2 style="line-height: 80px;"><b>注册新账号 加入XX网</b></h2>
            </div>
            {{--显示错误信息--}}
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
            <br>
            <input   type="text" id="inputEmail" class="form-control" placeholder="请创建用户名" name="name">
            <br>
            <br>
            <input   type="email" id="inputEmail" class="form-control" placeholder="请输入邮箱" name="email">
            <br>
            <br>
            <input type="password" id="inputPassword" class="form-control" placeholder="请创建密码" name="password">
            <br>
            <br>
            <input type="password" id="inputPassword" class="form-control" placeholder="请确认密码" name="password_confirmation">
            <br>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">完成注册</button>
            <br>
            <br>
        </form>

    </div>
</div>

{{--底部--}}
<div class="f_bg" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="f_nav clearfix" style="border-top:1px solid gray;">
        <br>
        <br>
        <ul class="clearfix " >
            <li>
                <b>玩转人人</b>
                <p><a href="http://page.renren.com/register/regGuide/" target="_blank">公共主页</a></p>
                <p> <a href="http://public.renren.com/" target="_blank">公众平台</a></p>
                <p><a href="http://support.renren.com/helpcenter" target="_blank">客服帮助</a></p>
                <p><a href="http://www.renren.com/siteinfo/privacy" target="_blank">隐私</a></p>

            </li>
            <li>
                <b>商务合作</b>
                <p><a href="http://page.renren.com/marketing/index" target="_blank">品牌营销</a></p>
                <p><a href="http://bolt.jebe.renren.com/introduce.htm" target="_blank">中小企业<br>自助广告</a></p>
                <p><a href="http://dev.renren.com/" target="_blank">开放平台</a></p>
            </li>
            <li>
                <b>公司信息</b>
                <p><a href="http://www.renren-inc.com/zh/product/renren.html" target="_blank">关于我们</a></p>
                <p><a href="http://page.renren.com/gongyi" target="_blank">人人公益</a></p>
                <p><a href="http://www.renren-inc.com/zh/hr/" target="_blank">招聘</a></p>
            </li>
            <li>
                <b>友情链接</b>
                <p><a href="http://www.jingwei.com/" target="_blank">经纬网</a></p>
                <p><a href="http://wan.renren.com/" target="_blank">人人游戏</a></p>
                <p><a href="http://fenqi.renren.com/" target="_blank">人人分期</a></p>
                <p> <a href="http://www.nic.ren/" target="_blank">.ren注册局</a></p>

            </li>
        </ul>
        <dl class="clearfix">
            <dd>
                <b>公司全称：北京千橡网景科技发展有限公司</b>
                <p>公司电话：010-84481818</p>
                <p><a href="mailto:admin@renren-inc.com">公司邮箱：admin@renren-inc.com</a></p>
                <p>公司地址：北京市朝阳区酒仙桥中路18号<br>国投创意信息产业园北楼5层</p>
                <p><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP证090254号</a></p>
                <span>人人网©2016</span>
                <p><a href="#nogo" id="lawInfo">法律声明</a></p>
            </dd>
            <dt>
                <img src="{{asset('home/img/down-qr.jpg')}}" alt="">
            </dt>
        </dl>
    </div>
</div>


</body>
</html>
