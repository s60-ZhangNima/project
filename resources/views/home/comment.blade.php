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

@endsection
@section('content')

<div class="container min" >
    <h3 class="text-muted">
        发表评论
    </h3>
    <div class="board">
    <div class="col-xs-6 col-sm-3 placeholder root" >
        <img src="{{url('home/img/dog.jpg')}}" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
        <h4>用户名</h4>
        <hr>
    </div>
    <div class="jumbotron min-a">
        <div id="hie">
            <h2 style="margin-left: 120px">评论</h2>
            <form class="form-horizontal" action="{{url('./comment')}}" method="post">
                {{csrf_field()}}
                @foreach($result as $rel)
                    {{--{{$rel->id}}--}}
                    <input type="hidden" name="gid" value="{{$rel->id}}">
                    @endforeach
                <div class="">
                    <textarea class="form-control" rows="6" name="content"></textarea>
                    <input type="hidden" name="uid" value="{{8}}">
                    <input type="hidden" name="posttime" value="{{time()}}">
                    <div class="liuyan" style="margin-left: 250px">
                        <span class=""><input type="submit" class=" btn btn-danger btn-lg " value="提交评论"></span>
                    </div>
                </div>

            </form>
        </div>
        {{--<form class="form-horizontal" action="./board" method="post">--}}
            {{--{{csrf_field()}}--}}
            {{--<div class="">--}}
                    {{--<textarea class="form-control" rows="6" name="content"></textarea>--}}
                    {{--<input type="hidden" name="uid" value="8">--}}
                    {{--<input type="hidden" name="posttime" value="{{time()}}">--}}
                  {{--<div class="liuyan" style="margin-left: 300px">--}}
                      {{--<span class=""><input type="submit" class=" btn btn-danger btn-lg " value="留言"></span>--}}
                  {{--</div>--}}
            {{--</div>--}}
            {{--<div class="pre-scrollable kua">--}}
                {{--@foreach($result as $rel)--}}
            {{--<div class="kuang" style="border-bottom:1px solid black">--}}
            {{--<div>--}}
                {{--<div>--}}
                    {{--@foreach($data as $da)--}}
                    {{--<span><b>{{$da->name}}</b></span>--}}
                    {{--@endforeach--}}
                    {{--<span>{{date('Y-m-d H:i:s',$rel->posttime)}}</span>--}}
                {{--</div>--}}
                {{--<div class="actions del">--}}
                    {{--<a class="" onclick="" href="#nogo">删除</a>--}}
                    {{--<a href="./board/{{$rel->id}}" class="" id="">回复</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="content">--}}
                {{--{{$rel->content}}--}}
            {{--</div>--}}
            {{--</div>--}}
                    {{--@endforeach--}}
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

            {{--</div>--}}


        {{--</form>--}}
    </div>
    </div>
</div>
{{--<script>--}}
    {{--$('#hhi').click(function(){--}}
       {{--$('#hie').css('display','block');--}}
    {{--});--}}
    {{--$('#fa').click(function(){--}}
        {{--$('#hie').css('display','none');--}}
    {{--});--}}


{{--</script>--}}
@endsection