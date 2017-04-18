@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="" method="post">
            <fieldset>
                <legend>添加角色</legend>
                {{csrf_field()}}
                <tr>
                    <td><b>角色名称</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="name"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>角色描述</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="display_name"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>描&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;述</b>:   </td>
                    <td><textarea class="form-control" rows="3" name="description"></textarea></td>
                </tr>
                <br><br>
                <tr>
                    <td></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/role-list')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
