@extends('mmm.admin')
@section('content')
    <form action="{{url('admin/addCom')}}">
        {{csrf_field()}}
        <input type="hidden" value="{{$sid}}" name="sid">
        <br>
        <br>
        <b>添加评论:</b><br>
        <textarea name="content" id="" cols="30" rows="3" style="resize: none"></textarea>
        <br>
        <input type="submit" class="btn">
    </form>
    <a href="{{url('admin/showComments/'.$sid)}}"> 返回</a>
    @endsection