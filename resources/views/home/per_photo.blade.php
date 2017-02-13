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

@endsection
    
    <div class="container min" >
        <h3 class="text-muted">
            照片上传
        </h3>
        <div class="jumbotron min-a">
            <div>
                <img  class="abc" src="{{('home/img/dog.jpg')}}" alt="">
            </div>
            
            <div class="pull-right ">
                <from action="{{url('home/per_photo')}}" method="post" enctpy="multipart/from-data">
                    {{csrf_field()}}
                    <div class="form-group ab" style="....">
                        <input type="file" name="pic" class="form-control ">
                        <br>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">相册选择
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                            </ul>
                        </div>

                    </div>
                    
                </from>
                
            </div>
            
            
        </div>
    </div>
@endsection