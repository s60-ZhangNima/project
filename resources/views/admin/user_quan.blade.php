@extends('mmm\admin')
@section('content')
    <h4>用户RP管理</h4>
    <table class="table">
        <tr>
            <th>用户ID</th>
            <th>用户级别</th>
            <th>人品值</th>
            <th>操作</th>
        </tr>

        @if($quan->isEmpty())
            暂无用户，等待添加！
        @else
            @foreach($quan as $qu)
                <tr>
                    <td>{{$qu->uid}}</td>
                    <td>LV{{$qu->level}}</td>
                    <td>{{$qu->surplus}}</td>
                    <td><a href="{{url('admin/RP_del/'.$qu->uid)}}">清空</a></td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection