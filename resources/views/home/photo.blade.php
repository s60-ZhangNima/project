@extends('mmm\master')
@section('title','我的相册')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/theme.min.css')}}">
@endsection
@section('script')
    <script type="text/javascript" src="{{('home/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{('home/js/bootstrap.min.js')}}"></script>
@endsection
@section('style')

    .min{
    width:1350px;
    height:478px;
    {{--background-color:black;--}}

    }
     .min-a{
      width:868px;
      height:413px;
    background-color:#F3F3F3;

    margin:0 auto;
    margin-top:50px;
    }
    .left{
    margin-left:10px;
    }
    .right{
    margin-left:300px;

    }
@endsection
@section('content')
<div class='min'>
    <div class='min-a'>
        <div class="'min-b">
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最近照片</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">被圈照片</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">我的相册</a></li>
                    <li class="right">

                            <button type="button" class="btn btn-default btn-lg " aria-label="Left Align">
                                <a href="./img"><span class="glyphicon glyphicon-open" aria-hidden="true">上传照片</span></a>
                            </button>

                    </li>
                    <li class="left">
                        <button type="button" class="btn btn-default btn-lg" aria-label="Left Align">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 新建相册
                        </button>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <h1>最近照片</h1>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <h1>被圈照片</h1>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        <h1>我的相册</h1>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>


@endsection