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
     border-bottom:2px solid black;
    {{--height:350px;--}}
    }
    .liuyan{
      margin-left:100px;
    }
    .root{
    margin-left:180px;
    width:200px;
    }
    .del{
     margin-left:280px;
    }
   #hie{
    width: 500px;height: 400px;
    background-color: #ccc;
    display:none;
    position:fixed;
    top:230px;
    left:425px;
    }
@endsection
@section('content')

<div class="container min" >
    <h3 class="text-muted">
       日志发表
    </h3>
    <div class="board">
    <div class="col-xs-6 col-sm-3 placeholder root" >
        <img src="{{asset('home/img/dog.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4></h4>
        {{--<span class="text-muted">留言条数</span>--}}
        <hr>
    </div>
    <div class="jumbotron min-a">
        <div id="hie">
            <h2 style="margin-left: 180px;"></h2>
            <form class="form-horizontal" action="" method="">
                <div class="">

                    <textarea class="form-control" rows="6" name="content"></textarea>
                    <input type="hidden" name="uid" value="8">
                    <input type="hidden" name="posttime" value="{{time()}}">
                    <div class="liuyan" style="margin-left: 300px">
                        <span class=""><input type="submit" class=" btn btn-danger btn-lg " value="发表日志"></span>
                    </div>
                </div>

            </form>
        </div>
        <form class="form-horizontal" action="{{url('home/daily')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="">
                       <b>标题:</b><input type="text" name="caption"style="margin-bottom: 10px;">
                    <textarea class="form-control" rows="6" name="content"></textarea>
                    <input type="hidden" name="uid" value="8">
                    <input type="hidden" name="posttime" value="{{time()}}">
                  <div class="liuyan" style="margin-left: 120px; margin-top: 10px;   ">
                      <b>添加图片：</b><input type="file" name="img">
                      <input  style="margin-top: 10px;" type="submit" class=" btn btn-danger btn-lg " value="发表日志">

                  </div>
            </div>


        </form>
    </div>
    </div>
</div>
<script>
    $('#hhi').click(function(){
       $('#hie').css('display','block');
    });
    $('#fa').click(function(){
        $('#hie').css('display','none');
    });


</script>
@endsection