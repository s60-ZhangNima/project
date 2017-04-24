@extends('mmm\admin')
@section('content')
    <form action="{{url('/admin/addLike')}}"  method="post">
        {{csrf_field()}}
        <input type="hidden" value = "{{$uid}}" name='uid'>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的音乐：</label>
            <input type="text" class="form-control"  name='music'>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">爱　　好：</label>
            <input type="text" name="hobby" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的书籍：</label>
            <input type="text" class="form-control"   name="book">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的电影：</label>
            <input type="text" class="form-control" name="movie">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的游戏：</label>
            <input type="text" class="form-control" name="game">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的动漫：</label>
            <input type="text" class="form-control" name="animation">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">喜欢的运动：</label>
            <input type="text" class="form-control" name="sport">
        </div>
        <input type="submit" class="btn btn-default" value="添加">
        <a href="{{url('/admin/info/'.$uid)}}" class="btn btn-default">返回</a>
    </form>
@endsection