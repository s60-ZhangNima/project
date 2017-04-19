@extends('mmm\admin')
@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"><a href="{{url('admin/friends_focus/'.$id)}}">我的好友</a></li>
        <li role="presentation" class="active"><a href="{{url('admin/focusMe/'.$id)}}">关注我的</a></li>
        <li role="presentation"><a href="{{url('admin/iFocus/'.$id)}}">我关注的</a></li>
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
        @if(empty($mmid))
            <tr>
                <td colspan="4">该用户暂无人关注</td>
            </tr>
        @else
            @foreach($mmid as $mmids)
                <tr>
                    <td>{{$mmids->id}}</td>
                    @if( $mmids->icon == 'men_main.jpg')
                        <td><img src="{{url('home/img').'/'.$mmids->icon}}" width=60></td>
                    @else
                        <td><img src="{{url('home/upImg').'/'.$mmids->icon}}">{{$mmids->icon}}</td>
                    @endif
                    <td>{{$mmids->name}}</td>

                    <td>
                        @if(in_array($mmids->id,$arr))
                            <a href="{{url('admin/delOrAddFri/'.$id.'/'.$mmids->id)}}">删除好友</a> /
                        @else
                            <a href="{{url('admin/delOrAddFri/'.$id.'/'.$mmids->id)}}">添加好友</a> /
                        @endif
                            <a href="{{url('admin/delOrAddMind/'.$id.'/'.$mmids->id)}}">关注</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection