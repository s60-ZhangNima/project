@extends('mmm\admin')
@section('content')
    <form action="{{url('/admin/addWork')}}"  method="post">
        {{csrf_field()}}
        <input type="hidden" value ="{{$uid}}" name='uid'>
        <div class="form-group">
            <label for="exampleInputPassword1">公司姓名:</label>
            <input type="text" class="form-ckontrol" name="company">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">职业类型:</label>
            <input type="text" class="form-control" name="industry">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">职务职位:</label>
            <input type="text" class="form-control"  name="pp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">工作时间:</label>
            <input type="text" class="form-control"  name="work_time">
        </div>
        <input type="submit" class="btn btn-default" value="添加">
        <a href="{{url('/admin/info/'.$uid)}}" class="btn btn-default">返回</a>
    </form>
@endsection