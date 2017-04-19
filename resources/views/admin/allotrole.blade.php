@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="{{url('admin/attach-role').'/'.$user_id}}" method="post">
            {{csrf_field()}}
            <tr>
                <td><b>分配角色</b>:</td>
                <td>  @foreach($roles as $role)
                        <div class="checkbox">
                            <label><input type="checkbox" name="role_id[]" value="{{$role->id}}">{{$role->display_name}}</label>
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
