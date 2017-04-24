@extends('mmm.admin')
@section('content')
    <form action="{{url('admin/addState')}}" method="post" >
        {{csrf_field()}}
        <input type="hidden" name="uid" value="{{$uid}}">
        <textarea  id="test" cols="46" rows="3" style="resize: none" placeholder="写下你此刻的心情吧..."  name="content"></textarea>
        <div style="height:30px;line-height: 30px;font-weight: bold;">
            <input type="submit" value="发布" id="sub_btn" class="btn-default btn" >
        </div>

    </form>
    <a href="{{url('admin/state_story/'.$uid)}}">返回</a>

    @endsection