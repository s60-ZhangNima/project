@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>添加应用</legend>
                {{csrf_field()}}
                <tr>
                    <td><b>应用名称</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="name" value="{{$apply->name}}"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>应用地址</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="game" value="{{$apply->game}}"></td>
                </tr>
                <br><br>
                <tr>
                    <input type="file" name="icon" value="{{$apply->icon}}">
                </tr>
                <br><br>
                <tr>
                    <td></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/apply-list')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
