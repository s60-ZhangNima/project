@extends('mmm\admin')
@section('content')
    <form action="{{url('/admin/addSchool')}}"  method="post" >
        {{csrf_field()}}
        <input type="hidden" value ="{{$uid}}"  name='uid'>
        <div class="form-group">
            <label for="exampleInputPassword1">大学名字：</label>
            <input type="text" class="form-control" name="college">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">系别：</label>
            <input type="text" class="form-control" name="dept">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">专业：</label>
            <input type="text" class="form-control"  name="prof">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">班级：</label>
            <input type="text" class="form-control" name="class">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">学号：</label>
            <input type="text" class="form-control" name="stn">
        </div>
        <input type="submit" class="btn btn-default" value="添加">
        <a href="{{url('/admin/info/'.$uid)}}" class="btn btn-default">返回</a>
    </form>

@endsection