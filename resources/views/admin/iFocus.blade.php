@extends('mmm\admin')
@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="{{url('admin/friends_focus/'.$id)}}">我的好友</a></li>
        <li role="presentation"><a href="{{url('admin/focusMe/'.$id)}}">关注我的</a></li>
        <li role="presentation" class="active"><a href="{{url('admin/iFocus/'.$id)}}">我关注的</a></li>
        <li role="presentation"><a href="{{url('admin/friends_addFri/'.$id)}}">添加好友</a></li>
        <li role="presentation"><a href="{{url('admin/activity/')}}">返回用户列表</a></li>
    </ul>
    <table class="table ">
        <tr>
            <th>ID</th>
            <th>ICON</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
        @if(empty($fri))
            <tr>
                <td colspan="4">该用户暂无关注他人</td>
            </tr>
        @else
            @foreach($fri as $friends)
                <tr>
                    <td>{{$friends->id}}</td>
                    @if( $friends->icon == 'men_main.jpg')
                        <td><img src="{{url('home/img').'/'.$friends->icon}}" width=60></td>
                    @else
                        <td><img src="{{url('home/upImg').'/'.$friends->icon}}">{{$friends->icon}}</td>
                    @endif
                    <td>{{$friends->name}}</td>
                    <td>
                        @if(in_array($friends->id,$arr))
                            <a href="{{url('admin/delOrAddFri/'.$id.'/'.$friends->id)}}">删除好友</a> /
                        @else
                            <a href="{{url('admin/delOrAddFri/'.$id.'/'.$friends->id)}}">添加好友</a> /
                        @endif
                            <a href="{{url('admin/delOrAddMind/'.$id.'/'.$friends->id)}}">取消关注</a>
                    </td>
                </tr>
            @endforeach
            @endif
    </table>
@endsection