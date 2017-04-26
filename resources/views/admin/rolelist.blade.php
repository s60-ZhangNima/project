@extends('mmm\admin')
@section('content')
<div class="span9">
    <h1>
        角色管理
    </h1>

    <div>
        <ul>
            <li><a href="{{url('/admin/role-add')}}">新增角色</a></li>
        </ul>
    </div>
    <table class="table table-bordered table-striped" style="width: 100%;">
        <thead>
        <tr>
            <th>Id</th>
            <th style="width: 60px;">权限路由</th>
            <th style="width: 80px;">权限名称</th>
            <th style="width: 100px;">权限描述</th>
            <th style="width: 510px;">角色权限</th>
            <th style="width: 80px;">操作</th>
        </tr>
        </thead>
        <tbody style="width: 100%;">
        @foreach($roles as $role )
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td>{{$role->perms}}</td>
                <td>
                    <a href="{{url('/admin/assignment/'.$role->id)}}">分配权限</a>
                    <br>
                    <a href="{{url('/admin/role-update/'.$role->id)}}">修改</a>
                    <br>
                    <a href="{{url('/admin/role-delete/'.$role->id)}}">删除</a>
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


