@extends('mmm\admin')
@section('content')
<div class="span9">
    <h1>
        角色管理
    </h1>

    <div>
        <ul>
            <li><a href="{{url('admin/role-add')}}">新增角色</a></li>
        </ul>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>权限路由</th>
            <th>权限名称</th>
            <th>权限描述</th>
            <th>角色权限</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $role )
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td>{{$role->perms}}</td>
                <td>
                    <a href="allot-permission/{{$role->id}}">分配权限</a>
                    <a href="role-update/{{$role->id}}">修改</a>
                    <a href="role-delete/{{$role->id}}">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <div class="pagination">
        {{$roles->links()}}
    </div>
</div>
@endsection


