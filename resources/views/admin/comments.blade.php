@extends('mmm\admin')
@section('mycss')
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">

@section('content')
    <h1>状态</h1>
    @if($states->isEmpty())
        暂无数据
    @else
        @foreach($states as $state)
            <div class="panel panel-default" style="width:600px">
                <div class="panel-body">
                    <button class="pull-right delete" style="border:none;background-color: inherit"value="{{$state->id}}">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                    <a href="{{url('admin/state_story/'.$state->uid)}}" class="pull-right">返回状态&nbsp;&nbsp;</a>
                    {{date('Y-m-d H:i:s',$state->create_time)}}

                </div>
                <div class="panel-footer">

                        <div class="showFace">
                            <div style="float: right;">
                            @if($state->praise ==  1)
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:red;"></span>
                        @else
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span>
                        @endif
                        </div>
                        </div>
                           {{$state->content}}
                </div>
            </div>
        @endforeach
    @endif
    <h6>评论</h6>
    <a href="{{url('admin/showCom/'.$id)}}">添加</a>
    <br>
    @if($comments->isEmpty())
        暂无数据
    @else
        @foreach($comments as $comment)
            <form action="{{url('admin/editComment')}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$comment->id}}">
                <input type="hidden" name="sid" value="{{$comment->sid}}">
            <div class="panel panel-default" style="width:600px">
                <div class="panel-body">
                    {{date('Y-m-d H:i:s',$comment->create_time)}}
                    <button value= "{{$comment->id}}" class="pull-right delComment" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-trash"></span></button>
                </div>
                <div class="panel-footer">
                    <textarea name="content" id="" cols="30" rows="2" style="resize: none">{{$comment->content}}</textarea>
                    <br>
                    <input type="submit" class="btn btn-default" value="提交">
                </div>

            </div>
            </form>
        @endforeach
    @endif
    <script>
        $(function(){
            $('.delComment').click(function(){
                var $_this = $(this);
                $.ajax({
                    url:"{{url('admin/delComments')}}",
                    data:{'id':$_this.val()},
                    success:function(data){
                        if(data == 1){
                            alert('删除成功!');
                            location.reload();
                        }
                    },
                    error:function(){
                        alert('失败！');
                    },
                    type:'get'
                })
            })


        });

    </script>

@endsection