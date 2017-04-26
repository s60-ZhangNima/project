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
     padding.margin{
     0px;
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
    h3{margin-left:580px;}
    .ti{
    margin-top:10px;
    }
 .kua{
    height:1000px;
    height:800px;
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
       我的日志
    </h3>
    <div class="board">
    {{--<div class="col-xs-6 col-sm-3 placeholder root" >--}}
        {{--<img src="{{('home/img/dog.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">--}}
        {{--<h4>用户名</h4>--}}
        {{--<span class="text-muted">留言条数</span>--}}
        {{--<hr>--}}
    {{--</div>--}}
            <div class="pre-scrollable kua" style="width: 1000px;margin: 0 auto;height: 500px;">
                @foreach($result as $rel)
            <div class="kuang" style="border:1px solid black; width: 1000px;margin: 0 auto">
            <div style="border-bottom:1px solid #ccc">
                <div>
                    @foreach($data as $da)
                    <span><b>{{$da->name}}</b></span>
                    @endforeach
                    <span>{{date('Y-m-d H:i:s',$rel->posttime)}}</span>
                </div>
                <div class="actions del">
                    <a class="" onclick="" href="./comdel/{{$rel->id}}">删除</a>
                    <a href="./daily/{{$rel->id}}" class="" id="">评论</a>
                </div>
            </div>
            <div class="content" style="width: 1000px; word-wrap:break-word">
                <p style="margin-left: 20px;"><h3>标题:&nbsp;&nbsp;《{{$rel->caption}}》</h3></p>
                <img src="{{('home/upImg/'.$rel->img)}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                <p style="width: 500px;">{{$rel->content}}</p>
            </div>
            </div>
                    @foreach($replay as $rep)
                        @if($rep->gid==$rel->id)
                        <div class="kuang" style="border-bottom:1px solid black">
                            <div>
                                <div>
                                    @foreach($data as $da)
                                        <span><b>{{$da->name}}</b></span>
                                    @endforeach
                                    <span>{{date('Y-m-d H:i:s',$rep->posttime)}}</span>
                                </div>
                                <div class="actions del">
                                    <a class="" onclick="" href="./comdel/{{$rep->id}}">删除</a>
                                    <a href="./daily/{{$rep->id}}" class="" id="">评论</a>
                                </div>
                            </div>
                            <div class="content">
                                <b>评论</b>@foreach($data as $da)
                                    <span>{{$da->name}}</span>
                                @endforeach:{{$rep->content}}
                            </div>
                        </div>
                   @endif
                    @endforeach
                @endforeach

            {{--@foreach($replay as $rep)--}}
                {{--<div class="kuang" style="border-bottom:1px solid black">--}}
                    {{--<div>--}}
                        {{--<div>--}}
                            {{--@foreach($name as $na)--}}
                                {{--<span><b>{{$na->name}}</b></span>--}}
                            {{--@endforeach--}}
                            {{--<span>{{date('Y-m-d H:i:s',$rep->posttime)}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="actions del">--}}
                            {{--<a class="" onclick="" href="#nogo">删除</a>--}}
                            {{--<a href="./board/{{$rep->id}}" class="" onclick="">回复</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="content">--}}
                        {{--{{$rep->content}}--}}
                    {{--</div>--}}
                {{--</div>--}}
                    {{--@endforeach--}}

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