@extends('mmm\master')
@section('title','相册')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/theme.min.css')}}">
@endsection
@section('script')
    <script type="text/javascript" src="{{('home/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{('home/js/bootstrap.min.js')}}"></script>
@endsection
@section('content')
@section('style')

    .min{
    width:1350px;
    height:478px;
    {{--background-color:black;--}}
  {{--text-algin:center;--}}
    }
    .min-a{
    width:500px;
    height:400px;
    background-color:#F3F3F3;
    border:2px solid black;

    margin:0 auto;

    }
    .left{
    margin-left:10px;
    }
    .right{
    margin-left:300px;

    }
    .abc{
  margin-top:-40px;
    margin-left:60px;
    }

    .ab{
    margin-right:50px;
    margin-top:10px;
    }
    h3{margin-left:410px;}
    .ti{
      margin-top:10px;
    }

@endsection
    
    <div class="container min" >
        <div>
        <h3 class="text-muted">
            照片上传
        </h3>
        </div>
        <div>
         {{--<div><img src="{{asset('home/upImg/'.$img[0]->img)}}" alt=""></div>--}}
        <div class="jumbotron min-a">
            <div>
                <img  class="abc" src="{{asset('home/img/default.jpg')}}" alt="">
               <b> 当前相册:{{$result[0]->name}}</b>
            </div>
            
            <div class="pull-right ">
                {{--<form class="form-horizontal" action="./createphoto" method="post">--}}
                <form action="{{url('home/imgs')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group ab" style="....">
                        <input type="file" name="pic" class="form-control ">
                        <input type="hidden" name="gid" value="{{$result[0]->id}}">
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">相册选择
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                @foreach($result as $rel)
                                    <li><a href="{{('home/imgs/').$rel->id}}">{{$rel->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="form-actions ti">
                            <button type="submit" class="btn btn-primary btn-lg">提交</button>
                        </div>

                    </div>
                    
                </form>
                
            </div>
            
            
        </div>
        </div>
    </div>
@endsection