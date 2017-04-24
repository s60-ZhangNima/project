@extends('mmm\admin')
@section('content')
    <form action="{{url('admin/addStory')}}" method="post">
        <input type="date" name="time" style="height:21px;">
        {{csrf_field()}}
        <input type="hidden" name="uid" value="{{$uid}}">
        <select name="desc" id=""  >
            <option value="工作与学习">工作与学习</option>
            <option value="家庭和关系">家庭和关系</option>
            <option value="家居生活">家居生活</option>
            <option value="健康">健康</option>
            <option value="旅行和经历">旅行和经历</option>
        </select>
        <select name="who" id=""  style="width:120px">
            <option value="同学">同学</option>
            <option value="朋友">朋友</option>
            <option value="家人">家人</option>
            <option value="恋人">恋人</option>
            <option value="伴侣">伴侣</option>
            <option value="陌生人">陌生人</option>
        </select>

        <br>

        <textarea name="content" id="" cols="50" rows="3" style="resize: none" placeholder="写下属于你的故事..."></textarea>
        <br>
        <input type="submit" value="添加" style="background-color: #005EAC;width: 90px;height: 35px; border: none; color: #fff;left: 286px;">

    </form>
    <a href="{{url('admin/state_story/'.$uid)}}">返回</a>
@endsection