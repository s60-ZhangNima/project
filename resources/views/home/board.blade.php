@extends('mmm\master')
@section('title','相册')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/theme.min.css')}}">
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('home/js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('home/js/bootstrap.min.js')}}"></script>
@endsection

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
 .kua{
    height:150px;
    }
    .kuang
     border-bottom:1px solid black;
    {{--height:350px;--}}
    }
    .liuyan{
      margin-left:230px;
    }
    .root{
    margin-left:180px;
    width:200px;
    }
    .del{
     margin-left:300px;
    }

@endsection
@section('content')

<div class="container min" >
    <h3 class="text-muted">
        留言板
    </h3>
    <div class="board">
    <div class="col-xs-6 col-sm-3 placeholder root" >
        <img src="{{asset('home/img/dog.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>用户名</h4>
        <span class="text-muted">留言条数</span>
        <hr>
    </div>
    <div class="jumbotron min-a">
        <form class="form-horizontal">
            <div class="">
                    <textarea class="form-control" rows="7"></textarea>
                  <div>
                      <span><a href="" class=" btn btn-success">添加表情</a></span>
                      <span class="liuyan"><input type="submit" class=" btn btn-danger" value="留言"></span>
                  </div>
            </div>
            <div class="pre-scrollable kua">
            <div class="kuang ">
            <div>
                <div>
                    <span><b>用户名</b></span>
                    <span>2017-04-13 10:01</span>
                </div>
                <div class="actions del">
                    <a class="" onclick="" href="#nogo">删除</a>
                </div>
            </div>
            <div class="content">
                sdasdasd
            </div>
            </div>
                <div class="kuang ">
                    <div>
                        <div>
                            <span><b>用户名</b></span>
                            <span>2017-04-13 10:01</span>
                        </div>
                        <div class="actions del">
                            <a class="" onclick="" href="#nogo">删除</a>
                        </div>
                    </div>
                    <div class="content">
                        sdasdasd
                    </div>
                </div>
                <div class="kuang ">
                    <div>
                        <div>
                            <span><b>用户名</b></span>
                            <span>2017-04-13 10:01</span>
                        </div>
                        <div class="actions del">
                            <a class="" onclick="" href="#nogo">删除</a>
                        </div>
                    </div>
                    <div class="content">
                        sdasdasd
                    </div>
                </div>
            </div>


        </form>
    </div>
    </div>
</div>
@endsection