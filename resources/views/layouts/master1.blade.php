
<!Doctype html>
<html class="nx-main860">
<head>
    <script type="text/javascript">
        var startTime = new Date().getTime();
    </script>
    <meta charset="utf-8"/>
    <title>@yield('title','人人网')</title>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('home/img/logo.jpg')}}" />
    <link rel="apple-touch-icon" href="{{asset('home/img/logo.jpg')}}" />
    <link rel="stylesheet" type="text/css" href="http://s.xnimg.cn/a79343/nx/core/base.css">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}">
    {{--<script type="text/javascript">--}}
        {{--if(typeof nx === 'undefined'){--}}
            {{--var nx = {};--}}
        {{--}--}}
        {{--nx.log = {--}}
            {{--startTime : + new Date()--}}
        {{--};--}}
        {{--nx.user = {--}}
            {{--id : "925826496",--}}
            {{--ruid:"925826496",--}}
            {{--tinyPic	: "http://head.xiaonei.com/photos/0/0/men_tiny.gif ",--}}
            {{--name : "张群艳",--}}
            {{--requestToken : '943671226',--}}
            {{--_rtk : '4004614'--}}
        {{--};nx.user.isvip = false;nx.user.hidead = false;nx.webpager = nx.webpager || {};--}}
        {{--nx.production = true;--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="http://s.xnimg.cn/a78457/nx/core/libs.js"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--define.config({map:{--}}
            {{--"backbone":"http://s.xnimg.cn/a75208/nx/core/backbone.js",--}}
            {{--"ui/draggable":"http://s.xnimg.cn/a70750/nx/core/ui/draggable.js",--}}
            {{--"ui/menu":"http://s.xnimg.cn/a70736/nx/core/ui/menu.js",--}}
            {{--"ui/resizable":"http://s.xnimg.cn/a70738/nx/core/ui/resizable.js",--}}
            {{--"ui/sortable":"http://s.xnimg.cn/a70749/nx/core/ui/sortable.js",--}}
            {{--"ui/tabs":"http://s.xnimg.cn/a78333/nx/core/ui/tabs.js",--}}
            {{--"ui/ceiling":"http://s.xnimg.cn/a76297/nx/core/ui/ceiling.js",--}}
            {{--"ui/columns":"http://s.xnimg.cn/a68070/nx/core/ui/columns.js",--}}
            {{--"ui/dialog":"http://s.xnimg.cn/a76395/nx/core/ui/dialog.js",--}}
            {{--"ui/fileupload":"http://s.xnimg.cn/a78409/nx/core/ui/fileupload.js",--}}
            {{--"ui/pagination":"http://s.xnimg.cn/a70307/nx/core/ui/pagination.js",--}}
            {{--"ui/placeholder":"http://s.xnimg.cn/a72095/nx/core/ui/placeholder.js",--}}
            {{--"ui/progressbar":"http://s.xnimg.cn/a62964/nx/core/ui/progressbar.js",--}}
            {{--"ui/rows":"http://s.xnimg.cn/a62964/nx/core/ui/rows.js",--}}
            {{--"ui/scroll":"http://s.xnimg.cn/a61518/nx/core/ui/scroll.js",--}}
            {{--"ui/scrollbar":"http://s.xnimg.cn/a76868/nx/core/ui/scrollbar.js",--}}
            {{--"ui/select":"http://s.xnimg.cn/a77883/nx/core/ui/select.js",--}}
            {{--"ui/slideshow":"http://s.xnimg.cn/a72804/nx/core/ui/slideshow.js",--}}
            {{--"ui/speech":"http://s.xnimg.cn/a77631/nx/core/ui/speech.js",--}}
            {{--"ui/textbox":"http://s.xnimg.cn/a78628/nx/core/ui/textbox.js",--}}
            {{--"ui/renren/textbox":"http://s.xnimg.cn/a78831/nx/core/ui/renren/textbox.js",--}}
            {{--"ui/tooltip":"http://s.xnimg.cn/a73228/nx/core/ui/tooltip.js",--}}
            {{--"ui/renren/addfriend":"http://s.xnimg.cn/a78457/nx/core/ui/renren/addFriendLayer.js",--}}
            {{--"ui/renren/at":"http://s.xnimg.cn/a78409/nx/core/ui/renren/atAndEmotion.js",--}}
            {{--"ui/renren/emotion":"http://s.xnimg.cn/a78409/nx/core/ui/renren/atAndEmotion.js",--}}
            {{--"ui/renren/commentCenter":"http://s.xnimg.cn/a83569/nx/core/ui/renren/commentCenter.js",--}}
            {{--"ui/renren/friendgroup":"http://s.xnimg.cn/a62964/nx/core/ui/renren/friendGroup.js",--}}
            {{--"ui/renren/friendListSelector":"http://s.xnimg.cn/a78513/nx/core/ui/renren/friendListSelector.js",--}}
            {{--"ui/renren/like":"http://s.xnimg.cn/a83569/nx/core/ui/renren/like.js",--}}
            {{--"nx/namecard":"http://s.xnimg.cn/a77668/nx/core/ui/renren/namecard.js",--}}
            {{--"ui/renren/pagelayer":"http://s.xnimg.cn/a62964/nx/core/ui/renren/pageLayer.js",--}}
            {{--"ui/renren/photoupload":"http://s.xnimg.cn/a77883/nx/core/ui/renren/photoupload.js",--}}
            {{--"ui/renren/privacy":"http://s.xnimg.cn/a76680/nx/core/ui/renren/privacy.js",--}}
            {{--"ui/renren/share":"http://s.xnimg.cn/a78623/nx/core/ui/renren/share.js",--}}
            {{--"ui/renren/vocal":"http://s.xnimg.cn/a77347/nx/core/ui/renren/vocal.js",--}}
            {{--"ui/renren/mvideo":"http://s.xnimg.cn/a77347/nx/core/ui/renren/mvideo.js",--}}
            {{--"ui/renren/with":"http://s.xnimg.cn/a77227/nx/core/ui/renren/with.js",--}}
            {{--"ui/clipboard":"http://s.xnimg.cn/a63417/nx/core/ui/clipboard.js",--}}
            {{--"app/publisher":"http://s.xnimg.cn/a78409/nx/core/app/publisher.js",--}}
            {{--"viewer":"http://s.xnimg.cn/a78832/nx/photo/viewer/js/viewer.js",--}}
            {{--"media/player": "http://s.xnimg.cn/nx/photo/viewer/js/mediaplayer.js",--}}
            {{--"ui/renren/like/commentseed":"http://s.xnimg.cn/a64636/nx/core/ui/renren/like.seed.comment.js",--}}
            {{--"ui/renren/like/seed":"http://s.xnimg.cn/a62964/nx/core/ui/renren/like.seed.js",--}}
            {{--"ui/renren/share/seed":"http://s.xnimg.cn/a62964/nx/core/ui/renren/share.seed.js",--}}
            {{--"ui/renren/follow":"http://s.xnimg.cn/a78456/nx/core/ui/renren/follow.js",--}}
            {{--"ui/renren/relationFollow":"http://s.xnimg.cn/a78457/nx/core/ui/renren/relationFollow.js",--}}
            {{--"ui/autocomplete":"http://s.xnimg.cn/a70736/nx/core/ui/autocomplete.js",--}}
            {{--"ui/showCommonFriend":"http://s.xnimg.cn/a63984/nx/core/ui/renren/showcommonfriend.js",--}}
            {{--"photo/circler":"http://s.xnimg.cn/a73344/nx/photo/phototerminal/js/circler.js",--}}
            {{--"ui/friendSearch":"http://s.xnimg.cn/a64338/nx/core/ui/renren/friendSearch.js",--}}
            {{--"ui/renren/replyOption":"http://s.xnimg.cn/a68256/nx/core/ui/renren/replyOption.js",--}}
            {{--"photo/avatarUpload": "http://s.xnimg.cn/a77340/nx/photo/upload-avata/js/avatarUpload.js"--}}
        {{--}});--}}
        {{--nx.data.isDoubleFeed = Boolean();--}}
        {{--nx.data.isDoubleFeedGuide = Boolean();--}}
    {{--</script>--}}
    {{--<script type="text/javascript" src="http://s.xnimg.cn/a77913/nx/core/base.js"></script>--}}
    <!--[if lt IE 9]>
    <!--<script type="text/javascript">-->
        <!--document.execCommand("BackgroundImageCache", false, true);-->
    <!--</script>-->
    <![endif]-->
    <link rel="stylesheet" href="http://s.xnimg.cn/a73985/nx/photo/album-list/css/albumList.css" />
    <link rel="stylesheet" href="http://s.xnimg.cn/a70628/nx/photo/album-list/css/uploadAndCreate.css" />
    <script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
    {{--<script type="text/javascript">--}}
        {{--nx.webpager.fold = true;//强制收起--}}
        {{--nx.data.photo = { 'albumList':{--}}
            {{--'ownerId': 925826496,--}}
            {{--'albumCount': 1,--}}
            {{--'albumList': [{"cover":"http://fmn.rrimg.com/fmn076/20170405/2010/p/m3w232h162q85lt_large_UVe8_663b00086f4e1e7f.jpg","albumName":"2017年4月5日","albumId":"1164333599","ownerId":925826496,"sourceControl":-1,"photoCount":1,"type":0}],--}}
            {{--'isAdmin': false,--}}
            {{--'hostId': 925826496--}}
        {{--}};--}}
        {{--nx.data.hasHiddenAlbum = true;--}}
        {{--; define.config({--}}
            {{--map: {--}}
                {{--'photo/uploadandcreate': 'http://s.xnimg.cn/a73341/nx/photo/album-list/js/uploadAndCreate.js'--}}
            {{--}--}}
        {{--});--}}
         {{--nx.load(['http://s.xnimg.cn/a73548/nx/photo/album-list/js/albumList.js']);--}}
         {{--nx.load(['http://s.xnimg.cn/a70628/nx/photo/album-list/js/dropTips.js']);--}}
        {{--$(function(){--}}
            {{--nx.stats.ps.add('ready-photo/viewAlbumList', nx.dateplus.getTime() - startTime);--}}
        {{--});--}}
        {{--$(window).load(function(){--}}
            {{--nx.stats.ps.add('load-photo/viewAlbumList', nx.dateplus.getTime() - startTime);--}}
        {{--});--}}
    {{--</script>--}}
    <style>
        .app-nav-item:hover{height:50px;}
        .app-nav-item .app-link{
            height:50px;line-height:50px}

        body{

            font-family: STHeiti,'Microsoft YaHei',\5b8b\4f53,arial;
        }
    </style>
</head>
<body>
<div id="nxContainer" class="nx-container">
    <div class="nx-main">             <div id="zidou_template" style="display:none"></div>
        <div id="hometpl_style" data-notshow="" style="display:none">
            <br />

        </div>
        <div id="nxHeader" class="hd-wraper ">
            <div class="hd-fixed-wraper clearfix" style="height:50px;">
                <div class="hd-main">
                    <h1 class="hd-logo" style="top:-20px;">
                        <a href="http://www.renren.com/" title="人人网 renren.com - 人人网校内是一个真实的社交网络，联系朋友，一起玩游戏">人人网</a>
                    </h1>
                    <div class="hd-nav clearfix">
                        <div class="hd-search">
                            <input type="text" id="hd-search" class="hd-search-input" placeholder="搜索好友，公共主页，状态" />
                            <a href="javascript:;" class="hd-search-btn"></a>
                        </div>
                        <dl class="hd-account clearfix">
                            <dt>
                                <a href="http://www.renren.com/925826496/profile">
                                    <img class="hd-avatar" width="30" height="30" src="http://head.xiaonei.com/photos/0/0/men_tiny.gif" alt="张群艳" />
                                </a>
                            </dt>
                            <dd>
                                <a class="hd-name" href="http://www.renren.com/925826496/profile" title="张群艳">张群艳</a>
                                <a id="hdLoginDays" target="_blank" class="hd-logindays" href="http://sc.renren.com/scores/mycalendar" data-tips="{'days':'3','range':'1','score':'16','vipLevel':'1'}">3天</a>
                            </dd>
                        </dl>
                        <div class="hd-account-action">
                            <a href="#" class="account-more"><span class="ui-icon ui-icon-setting ui-iconfont">&#xe80f;</span></a>
                            <div class="nx-drop-box nx-simple-drop nx-account-drop">
                                <ul class="nv-account-ctrl clearfix">
                                    <li class="nv-drop-privacy "><a href="http://www.renren.com/privacyhome.do"><span class="ui-icon ui-icon-lock ui-iconfont">&#xe818;</span>隐私设置</a></li>
                                    <li class="nv-drop-setting"><a href="http://safe.renren.com/"><span class="ui-icon ui-icon-privacysetting ui-iconfont">&#xe82a;</span>个人设置</a></li>
                                    <li class="nv-drop-pay"><a href="http://pay.renren.com/"><span class="ui-icon ui-icon-pay"></span>充值中心</a></li>
                                    <li class="nv-account-sline"></li>
                                    <li class="nv-drop-guide"><a href="http://2014.renren.com/v7/guide"><span class="ui-icon ui-icon-guide ui-iconfont">&#xe880;</span>新版指南</a></li>
                                    <li class="nv-drop-contact"><a href="http://help.renren.com/helpcenter"><span class="ui-icon ui-icon-customerservice ui-iconfont">&#xe816;</span>联系客服</a></li>
                                    <li class="nv-drop-exit"><a href="http://www.renren.com/Logout.do?requesttoken=943671226"><span class="ui-icon ui-icon-out ui-iconfont">&#xe830;</span>退出</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="hd-account-action hd-account-action-vip">
                            <a href="#" class="account-more"><span class="ui-icon ui-iconfont ui-icon-crown ">&#xe882;</span></a>
                            <div class="nx-drop-box nx-simple-drop nx-account-drop">
                                <ul class="nv-account-ctrl clearfix">

                                    <li class="nv-drop-recharge"><a href="http://i.renren.com/pay/pre?wc=huangguan"><span class="ui-icon ui-icon-money ui-iconfont">&#xe807;</span>会员</a></li>
                                    <li class="nv-drop-contact"><a href="http://i.renren.com/index/yearpay/home"><span class="ui-icon ui-icon-calendar ui-iconfont">&#xe881;</span>年付会员</a></li>
                                    <li class="nv-drop-vip"><a href="http://i.renren.com/"><span class="ui-icon ui-icon-crown ui-iconfont">&#xe883;</span>VIP中心</a></li>
                                    <li class="nv-account-sline"></li>
                                    <li class="nv-drop-skin"><a href="http://i.renren.com/store/index/home?wc=huangguan"><span class="ui-icon ui-icon-artist ui-iconfont">&#xe813;</span>装扮商城</a></li>
                                    <li class="nv-drop-skin"><a href="http://gift.renren.com?wc=huangguan"><span class="ui-icon ui-icon-gift ui-iconfont">&#xe81a;</span>礼物中心</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- dj埋码 -->
        {{--<script type="text/javascript">--}}
            {{--function sendStats(url){var n="log_"+(new Date).getTime();var c=window[n]=new Image;c.onload=c.onerror=function(){window[n]=null};c.src=url;c=null}--}}
            {{--function goPAGE() {--}}
                {{--var currentUrl = window.location.href.split('#')[0];--}}
                {{--if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {--}}
                    {{--return "wap";--}}
                {{--}--}}
                {{--else {--}}
                    {{--return "pc";--}}
                {{--}--}}
            {{--}--}}
            {{--var judge = goPAGE();--}}
            {{--(function(){--}}
                {{--sendStats('http://dj.renren.com/seostat?j={"from":"login_'+window.location.hostname+'","dev":"'+judge+'","page":"'+window.location.href+'"}');--}}
                {{--console.log('dj!!');--}}
            {{--})();--}}
        {{--</script>--}}
        <div class="nx-wraper clearfix">          <div class="nx-sidebar"><div id="nxSlidebar" class="slide-fixed-wraper clearfix" style="width:120px"><div class="app-nav-wrap"><div class="app-nav-cont">
                            <ul class="app-nav-list">
                                <li class="app-nav-item app-feed" data-tip="首页">
                                    <a class="app-link" href="http://www.renren.com/">
                                        <img class="app-icon" width="32" height="32" src="http://a.xnimg.cn/a.gif"  />
                                        <h6>首页</h6>
                                    </a>
                                </li>
                               <li class="app-nav-item app-matter" data-tip="与我相关">
                                   <a class="app-link" href="http://matter.renren.com/">
                                       <img class="app-icon" width="32" height="32" src="http://a.xnimg.cn/a.gif" />
                                       <h6>与我相关</h6>
                                   </a>
                               </li>
                              <li class="app-nav-item app-homepage" data-tip="个人主页">
                                    <a class="app-link" href="http://www.renren.com/925826496/profile">
                                        <img class="app-icon" width="32" height="32" src="http://a.xnimg.cn/a.gif" />
                                        <h6 >个人主页</h6>
                                    </a>
                              </li>

                              <li class="app-nav-item app-nav-item-cur app-album" data-tip="我的相册">
                                  <a class="app-link" href="http://photo.renren.com/photo/925826496/albumlist/v7">
                                      <img class="app-icon" width="32" height="32" src="http://a.xnimg.cn/a.gif" />
                                      <h6 >我的相册</h6>
                                  </a>
                              </li>
                              <li class="app-nav-item app-friends" data-tip="好友">
                                    <a class="app-link" href="http://friend.renren.com/managefriends">
                                        <img class="app-icon" width="32" height="32" src="http://a.xnimg.cn/a.gif" />
                                        <h6 >好友</h6>
                                    </a>
                              </li>
                                <li class="app-nav-item app-myapp"  data-tip="应用中心">
                                    <a class="app-link" href="http://app.renren.com/?origin=54171">
                                        <img class="app-icon" width="32" height="32" style="background:none;" src="http://a.xnimg.cn/nx/core/theme/skin/mainframe/icon-app201412.png" />
                                        <h6 >应用中心</h6>
                                    </a>
                                </li>
                                <li class="app-nav-item app-more" data-tip="我的应用">
                                    <a class="app-link" href="http://app.renren.com/app/editApps?origin=44070"><span class="icon-wrap">
                                            <img class="app-icon" width="32" height="32" style="background:none;" src="http://a.xnimg.cn/nx/core/theme/skin/mainframe/icon-myapp201412b.png" alt="我的应用" /></span>
                                        <h6>我的应用</h6></a></li></ul></div></div></div></div>                       <div class="bd-container "><div class="frame-nav-wrap">
                <div id="frameFixedNav" class="frame-nav-fixed-wraper" style="left:120px">
                    <div class="frame-nav-inner">
                        <ul class="fd-nav-list clearfix">
                            <li class="fd-nav-item">
                                <span class="fd-nav-icon fd-sub-nav"></span>
                                <a href="http://www.renren.com/925826496/profile">我的主页</a></li>
                            <li class="fd-nav-item">
                                <a href="http://www.renren.com/925826496/profile?v=info_timeline">资料</a>
                            </li>
                            <li class="fd-nav-item">
                                <a href="http://photo.renren.com/photo/925826496/albumlist/v7">相册</a>
                            </li>
                            <li class="fd-nav-item">
                                <a href="http://share.renren.com/share/v7/925826496">分享</a>
                            </li>
                            <li class="fd-nav-item">
                                <a href="http://status.renren.com/status/v7/925826496">状态</a>
                            </li>
                            <li class="fd-nav-item">
                                <a href="http://blog.renren.com/blog/925826496/myBlogs">日志</a></li>
                            <li class="fd-nav-item">
                                <a href="http://friend.renren.com/managefriends">好友</a>
                            </li>
                            <li class="fd-nav-item fd-nav-showmore">
                                <a href="#">更多<em class="fd-arr-down"><span class="fd-arr-outer"><span class="fd-arr-inner"></span></span></em></a>
                                <div class="nf-group-list-container">
                                    <ul class="nf-group-list">
                                        <li class="nf-group-item">
                                            <a href="http://follow.renren.com/list/925826496/sub/v7">关注</a>
                                        </li>
                                        <li class="nf-group-item">
                                            <a href="http://wiki.renren.com/movie/925826496" target="_blank">电影</a>
                                        </li>
                                        <li class="nf-group-item">
                                            <a href="http://photo.renren.com/photo/zuji/925826496" target="_blank">足迹</a>
                                        </li>
                                        <li class="nf-group-item">
                                            <a href="http://gift.renren.com/show/box/otherbox?userId=925826496" target="_blank">礼物</a>
                                        </li>
                                        <li class="nf-group-item">
                                            <a href="http://page.renren.com/home/mypages" target="_blank">公共主页</a></li>
                                        <li class="nf-group-item">
                                            <a href="http://www.renren.com/lifeevent/index/925826496">生活纪事</a>
                                        </li>
                                        <li class="nf-group-item">
                                            <a href="http://mvideo.renren.com/video/925826496/list">短视频</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            {{--</div> <script type="text/javascript">--}}
                {{--(function(){--}}
                    {{--define(function(require,exports){--}}
                        {{--var responseFrame = require('responseFrame');--}}
                        {{--responseFrame.initFrameSize();--}}
                    {{--});--}}
                {{--})();--}}
            {{--</script>--}}
            @section('content')
            <div>
                1111
                22222
                3333
                4444
            </div>
            @show
            <div class="myFooter" style="width:900px;">
               <div class="ft-wrapper clearfix">

                    <p>
                        <strong>玩转人人</strong>
                        <a href="http://page.renren.com/register/regGuide/" target="_blank">公共主页</a>
                        <a href="http://public.renren.com/" target="_blank">公众平台</a>
                        <a href="http://support.renren.com/helpcenter" target="_blank">客服帮助</a>
                        <a href="http://www.renren.com/siteinfo/privacy" target="_blank">隐私</a>
                    </p>

                    <p>
                        <strong>商务合作</strong>
                        <a href="http://page.renren.com/marketing/index" target="_blank">品牌营销</a>
                        <a href="http://bolt.jebe.renren.com/introduce.htm" class="l-2" target="_blank">中小企业<br />自助广告</a>
                        <a href="http://dev.renren.com/" target="_blank">开放平台</a>
                    </p>

                    <p>
                        <strong>公司信息</strong>
                        <a href="http://www.renren-inc.com/zh/product/renren.html" target="_blank">关于我们</a>
                        <a href="http://page.renren.com/gongyi" target="_blank">人人公益</a>
                        <a href="http://www.renren-inc.com/zh/hr/" target="_blank">招聘</a>
                    </p>

                    <p>
                        <strong>友情链接</strong>
                        <a href="http://www.jingwei.com/" target="_blank">经纬网</a>
                        <a href="http://wan.renren.com/" target="_blank">人人游戏</a>
                        <a href="http://fenqi.renren.com/" target="_blank">人人分期</a>
                        <a href="http://www.nic.ren/" target="_blank">.ren注册局</a>
                    </p>

                    <p>
                        <strong>人人移动客户端下载</strong>
                        <a href="http://mobile.renren.com/showClient?v=platform_rr&psf=42064" target="_blank">iPhone/Android</a>
                        <a href="http://mobile.renren.com/showClient?v=platform_hd&psf=42067" target="_blank">iPad客户端</a>
                        <a href="http://mobile.renren.com" target="_blank">其他人人产品</a>
                    </p>

                    <!--<p class="copyright-info">-->
                    <!-- 临时添加公司信息用 -->
                    <p class="copyright-info" style="margi-left: -20px">
                        <span>公司全称：北京千橡网景科技发展有限公司</span>
                        <span>公司电话：010-84481818</span>
                        <span><a href="mailto:admin@renren-inc.com">公司邮箱：admin@renren-inc.com</a></span>
                        <span>公司地址：北京市朝阳区酒仙桥中路18号<br>国投创意信息产业园北楼5层</span>
                        <span><img id="wenhuajingying_icon" style="height: 28px;float: left; margin-left: 60px;" src="http://s.xnimg.cn/imgpro/civilization/wenhuajingying.png"/><a href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/DFB957BAEB8B417882539C9B9F9547E6" target="_blank">京网文[2013]0136-030号</a></span>
                        <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP证090254号</a></span>
                        <span>人人网&copy;2016</span>
                        <span><a href="#nogo" id="lawInfo">法律声明</a></span>
                    </p>

                </div>
            </div>
        </div></div>
</div>
</div>
<div id="toolBackTo" class="back-to">
    <a href="#nogo" onclick="return false;"></a>
</div>
</body>
{{--<script type="text/javascript" src="http://s.xnimg.cn/a73548/nx/photo/album-list/js/albumList.js"></script>--}}
{{--<script type="text/javascript" src="http://s.xnimg.cn/a70628/nx/photo/album-list/js/dropTips.js"></script>--}}
</html>