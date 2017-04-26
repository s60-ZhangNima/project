

<!DOCTYPE >
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta name="Description" content="" />
    <meta name="Keywords" content="" />
    <link type="image/x-icon" rel="shortcut icon" href="{{url('home/img/favicon-rr.icon')}}" />
    <link href="{{url('home/css/serve.css')}}" rel="stylesheet" type="text/css" media="all" />
    <title>Renren - 产品和服务</title>
    <style>
        body{background: #F3F3F3;}
    </style>
</head>
<body class="home contact">
<div class="all">
    <div class="header clearfix">
        <div class="logo"><a><img src="{{url('home/img/login.jpg')}}"  width="166" height="33"   alt="人人" title="Renren - 人人" /></a></div>
        <div class="nav">
            <ul class="clearfix">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""></a></li>
                <li><a href=""> </a></li>
                <li class="select" style="margin-right:0;"><a href=""></a></li>
            </ul>
        </div>
        <div class="edition"><a href="/en/"></a></div>

    </div><!--header end-->



    <div class="banner" style="background:#fff url(/home/img/banner.jpg) no-repeat center 0;">

    </div>
    <div class="body clearfix">
        <div class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="http://www.renren-inc.com/zh/">首页</a></li>
                <li><a href="http://www.renren-inc.com/zh/info/management.html">公司信息</a></li>
                <li><a href="http://www.renren-inc.com/zh/news/release.html">新闻中心</a></li>
                <li>
                    <a href="{{url('home/serve')}}" class="select">产品和服务</a>
                    <ul>
                        <li><a href="{{url('home/index')}}" class="select">人人网</a></li>

                    </ul>
                </li>
                <li><a href="http://www.renren-inc.com/zh/culture/">企业社会责任</a></li>
                <li><a href="http://www.renren-inc.com/zh/hr/">招贤纳士</a></li>
                <li><a href="http://www.renren-inc.com/zh/contact/">联系我们</a></li>
            </ul>
        </div><!--sidebar end-->
        <div class="main-home">
            <div class="box-list">
                <div class="contact-infor clearfix" style="position:relative;">
                    <b>中国领先的实名制SNS网站</b>
                    <br /><br />
                    <div style="width:500px;">人人网前身为校内网，成立于2005年，是中国领先的实名制的SNS网络平台。通过每个人真实的人际关系，满足各类用户对社交、资讯、娱乐等多方面的沟通需求。</div>
                    <div style="position: absolute; top: 0px; right: 0px;"><a href="http://www.renren.com" ><img src="{{url('home/img/login.jpg')}}" alt="人人网" /></a></div>
                    <hr style="height:1px; border:none; border-top:1px  #000;" />


                    <div class="serve" style="background-color: #00B7D8; width: 670px; ">

                        @foreach($serves as $se)

                        <div class="serve_1" style=" width: 335px ; height: 300px; border-top: 1px solid #E5E5E5; float: left;">
                            {{--{{$se->id}}--}}
                            <img src="{{asset($se->icon)}}" style="margin-top: 18px;">
                        </div>
                            @endforeach
                    </div>

                </div>
            </div><!--box-list end-->
        </div><!--main-home end-->
    </div>

    <div class="footer_icp"><a href="http://www.miibeian.gov.cn" target="_blank">京ICP备09114543号-11</a></div>
    <div class="footer">Copyright 2017 Renren Inc.</div>

</div>
</body>
</html>
