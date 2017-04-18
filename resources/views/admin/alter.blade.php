@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="" method="post">
            <fieldset>
                <legend>修改权限</legend>
                {{csrf_field()}}
                <tr>
                    <td><b>分&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类</b>:   </td>
                    <td><select class="add_select">
                            <option value="" selected><--请选择--></option>
                            <option>查看权限</option>
                            <option>修改权限</option>
                            <option>删除权限</option>
                            <option>管理权限</option>
                        </select>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td><b>权限路由</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="name" value="{{$alters->name}}"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>权限名称</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="display_name" value="{{$alters->display_name}}"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>描&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;述</b>:   </td>
                    <td><textarea class="form-control" rows="3" name="description" value="{{$alters->description}}"></textarea></td>
                </tr>
                <br><br>
                <tr>
                    <td></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/activity')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
