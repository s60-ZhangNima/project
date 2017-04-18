<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
<title>人人网 - {{Auth::user()->name}}</title>
<link rel="stylesheet" type="text/css" href="{{asset('home/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('home/img/logo.jpg')}}" />
<script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('home/css/thems.css')}}">
    <script  src="{{asset('home/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery.qqFace.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('home/face/iconfont.css')}}">
    <style>
        @yield('style')
        a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body>
<!--头部-->
<div class="t_bg">
	<div class="top">
        欢迎 【 {{Auth::user()->name}} 】
        <a href="{{url('home/per_home')}}">个人主页</a>|
        <a href="contact.html">与我相关

        </a>

    </div>
</div>
<div class="header">
    <div class="head clearfix">
        <div class="logo"><a href="index.html"><img src="{{asset('home/img/logo.jpg')}}" style="width:90px"></a></div>
        <ul class="nav clearfix">
            <li>
                <div class="li_m">
                    <a href="{{url('home/index')}}">
                        <span>首页</span>
                        Index
                    </a>
                </div>
            </li>
            <li>
                <div class="li_m">
                    <a href="./photo">
                        <span>我的相册</span>
                       My Photo
                    </a>
                </div>
            </li>
            <li>
                <div class="li_m">
                    <a href="{{url('home/per_focus')}}">
                        <span>我的好友</span>
                        My Friend
                    </a>
                </div>
            </li>
            <li>
                <div class="li_m">
                    <a href="case.html">
                        <span>应用中心</span>
                        Success
                    </a>
                </div>
            </li>
            <li>
                <div class="li_m">
                    <a href="news.html">
                        <span>我的应用</span>
                        News
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--头部-->
@section('content')
    <div>
        1111
        22222
        3333
        4444
    </div>
@show
<div class="f_bg">
	<div class="f_nav clearfix">
    	<ul class="clearfix">
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
                <p><a href="http://bolt.jebe.renren.com/introduce.htm"  target="_blank">中小企业<br />自助广告</a></p>
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
                <span>人人网&copy;2016</span>
                <p><a href="#nogo" id="lawInfo">法律声明</a></p>
            </dd>
            <dt>
            <img src="{{url('home/img/down-qr.jpg')}}" alt=""/>
            </dt>
        </dl>
    </div>
</div>
<div class="bq_bg">
</div>
</body>
</html>
