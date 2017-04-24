@extends('mmm\admin')
@section('content')
    <form action="{{url('admin/addFeeling')}}" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" value="{{$uid}}" name="uid">
            <label for="exampleInputPassword1">感情状态：</label>
            <select name="feeling" id="" class="form-control" style="width:200px;float: left;margin-right: 20px;">
                <option value="不填写">不填写</option>
                <option value="单身">单身</option>
                <option value="求勾搭">求勾搭</option>
                <option value="暧昧期">暧昧期</option>
                <option value="恋爱中">恋爱中</option>
                <option value="已婚">已婚</option>
                <option value="失恋了">失恋了</option>
            </select>
        </div>
        <br><br>
        <input type="submit" class="btn btn-default" value="添加">
        <a href="{{url('/admin/info/'.$uid)}}" class="btn btn-default">返回</a>
    </form>
@endsection