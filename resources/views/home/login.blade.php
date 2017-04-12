@extends('master')
@section('my-css')
    {{--自己的css样式--}}
    <style>
        p a{color:#000}
    </style>
    @endsection
@section('content')

    <div class="row" style="background-color: #F3F3F3">
        {{--左边--}}
        <br>
        <div class="col-md-3 col-md-offset-1 clearfix">
            <form class="form-signin" action="/singin" method="post">
                {{csrf_field()}}
                <br>
                <img src="/home/img/head.jpg" alt="" class="img-circle img-responsive center-block " style="width:50%">
                <br>
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
                <label for="inputEmail" class="sr-only" >邮箱</label>

                <input type="email" id="inputEmail" class="form-control" placeholder="邮箱" name="email">
                <br>
                <label for="inputPassword" class="sr-only">请输入密码</label>
                <br>
                <input type="password" id="inputPassword" class="form-control" placeholder="密码" name="password">
                <br>
                <div class="row">
                    <div class="col-md-7">
                        <label for="inputPassword" class="sr-only">请输入验证码</label>
                        <br>
                        <input type="text" id="inputPassword" class="form-control" placeholder="请输入验证码" name="code">
                    </div>
                    <div class="col-md-4" style="margin-top: 18px; padding-left: 7;">
                        {!! captcha_img() !!}
                    </div>
                </div>


                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-lg btn-primary btn-block " type="submit">
                            登录
                        </button>
                    </div>
                    <div class="col-md-6">

                            <a href="{{url('home/register')}}"  class="btn btn-lg btn-info btn-block">注册</a>

                    </div>

                </div>
            </form>
        </div>
        <br>
        {{--右边--}}
        <div class="col-md-4 clearfix">
            <img src="/home/img/mk.jpg" alt="" style="width: 800px; height: 450px;">
        </div>
    </div>

    {{--底部--}}
    <div class="f_bg" style="color: #444">
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
@endsection