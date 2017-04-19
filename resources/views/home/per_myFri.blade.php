@extends('layouts.master')


@section('style')
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-7">
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" ><a href="{{url('home/per_focus')}}">添加好友</a></li>
                <li role="presentation"  class="active"><a href="{{url('home/per_myFri')}}">我的好友</a></li>
                <li role="presentation"><a href="{{url('home/per_Ifocus')}}">我关注的</a></li>
                <li role="presentation"><a href="{{url('home/per_FocusMe')}}">关注我的</a></li>
                <li role="presentation">
                    <a href="#">
                        <form action="">
                            <input type="search" placeholder="搜索...">
                            <span class="glyphicon glyphicon-search"></span>
                        </form>
                    </a>
                </li>
            </ul>



            <div style="width:600px;height: 600px;border:1px solid #ccc;padding: 11px;margin:30px 0">
                @if(empty($fri))
                    你还没有好友快去添加吧
                    @else
                 @foreach( $fri as $friends)
                <div style="width:172px;padding: 10px;border:solid 2px #666;float: left;margin: 10px">
                    <img src='{{url('home/img').'/'.$friends->icon}}' width=60 style="margin-bottom: 5px">
                   <span style="color:#333;margin-left: 10px" >{{$friends->name}}
                       @if(in_array($friends->id,$arr))
                           <button value="{{$friends->id}}"id="" style="" class="btn btn-default mind">取关</button>
                       @else
                           <button value="{{$friends->id}}"id="" style="" class="btn btn-default mind">关注</button>
                       @endif
                         <button value="{{$friends->id}}"id="" class="btn btn-default friend">删除好友</button>
                   </span>
                </div>
                @endforeach
                    @endif
                 </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    </div>
    </div>
    <script>


        $(function(){

            $('.friend').click(function(){
                var $_this = $(this);
                    $.ajax({
                        url:"{{url('home/per_friend')}}",
                        type:'get',
                        data:{'id':$_this.val()},
                        success:function(data){
                            if(data == 1){
                                alert('删除成功！');
                                location.reload();
                            }
                        },
                        error:function(){
                            alert('失败！');
                        },
                    })

            })
            $(".mind").live('click',function(){
                var $_this = $(this);
                if ($_this.text()=='取关' || $_this.text()=='取消关注'){
                    $.ajax({
                        url:"{{url('home/per_mind')}}",
                        type:'get',
                        data:{'id':$_this.val()},
                        success:function(data){
                            if(data == 1){
                                alert('取关成功！');
                                $_this.text('关注');
                            }
                        },
                        error:function(){
                            alert('失败！');
                        },
                    })
                } else {
                    $.ajax({
                        url:"{{url('home/per_mind')}}",
                        type:'get',
                        data:{'id':$_this.val()},
                        success:function(data){
                            if(data == 1){
                                alert('关注成功！');
                                $_this.text('取关');
                            }
                        },
                        error:function(){
                            alert('失败！');
                        },
                    })
                }
//
            })
        })
    </script>
@endsection