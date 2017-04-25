@extends('layouts.master')

@section('content')
    <div class='max'style=" width: 72%; margin-left: 14%; overflow: hidden;">
        <div>
            {{--标题--}}
            <div style="width: 900px; height: 50px;margin: 0 auto;">
                <span style="line-height: 50px; font-size: 30px">
                    游戏专区
                </span>
            </div>
            <br>
            {{--列表--}}
            <div style=" width: 900px;height: 300px;margin: 0 auto; border-top: 1px solid #cccccc;">
                <br>
                <a href="{{url('apply/flappy/index.html')}}">
                    <div style="width: 250px; height: 300px;  margin-right: 50px; float: left;text-align: center;">
                        <img src="{{asset('home/img/head.jpg')}}" alt="" style="width: 250px; height: 220px;">
                        <br><br>
                        <span style="font-size: 30px;">推箱子</span>
                    </div><img src="" alt="">
                </a>
            </div>
        </div>
    </div>


@endsection