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
    <h3 class="text-muted">
        创建新相册
    </h3>

    <div class="jumbotron min-a">
        @if(count($errors) >0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal" action="./createphoto" method="post">
                {{csrf_field()}}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">名称</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="相册名称" name="name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">描述</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="desc"></textarea>
                </div>
            </div>
            <div class="form-group ab" style="....">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"name="display">公开
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">公开</a></li>
                        <li><a href="#">非公开</a></li>
                    </ul>
                </div>
                <div class="form-actions ti">
                    <button type="submit" class="btn btn-primary btn-lg">提交</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection