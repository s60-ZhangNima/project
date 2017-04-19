@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="{{url('admin/assignment').'/'.$role_id}}" method="post">
            {{csrf_field()}}
            <tr>
                <td><b>分配权限</b>:</td>
                <td>  @foreach($permissions as $permission)
                        <div class="checkbox">
                            <label><input type="checkbox" name="permission_id[]" value="{{$permission->id}}">{{$permission->display_name}}</label>
                        </div>
                    @endforeach</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="btn btn-success" value="提交" style="width: 100px">
                    <a  type="button" class="btn btn-info" onclick="history.go(-1)">返回</a>
                </td>
            </tr>
        </form>
    </div>
@endsection
