@extends('mmm\admin')
@section('content')
    <div class="span9">
        <h1>
            管理员管理
        </h1>

        <div>
            <ul>
                <li><a href="{{url('admin/user-add')}}">新增管理员</a></li>
            </ul>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>角色名称</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->roles}}</td>
                    <td>
                        <a href="{{url('/admin/attach-role/'.$user->id)}}">分配角色</a>
                        <a href="{{url('/admin/user-update/'.$user->id)}}">修改</a>
                        <a href="{{url('/admin/user-delete/'.$user->id)}}">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <div class="pagination">
            {{$users->links()}}
        </div>
    </div>
@endsection


