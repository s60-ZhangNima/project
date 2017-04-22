@extends('mmm\admin')
@section('content')
    <h4>RP商品管理</h4>
    <a href="{{url('admin/RP')}}"> 添加商品</a>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>用户</th>
            <th>商品</th>
            <th>人品值</th>
            <th>时间</th>
            <th>操作</th>
        </tr>

        @if($exchange->isEmpty())
            暂无RP商品，等待添加！
        @else
            @foreach($exchange as $ex)
                <tr>
                    <td>{{$ex->id}}</td>
                    <td>{{$ex->user_name}}</td>
                    <td><img src="{{asset('home/upImg/'.$ex->pic)}}" alt="" width="40px" class="img-circle">
                        {{$ex->name}} *  {{$ex->count}}
                    </td>
                    <td>{{$ex->need_qua}}</td>
                    <td>{{date('Y-m-d H:i:s',$ex->time)}}</td>
                    <td>
                        <a href="{{url('admin/editEx/'.$ex->id)}}">编辑</a>
                        <a href="{{url('admin/deleteEx/'.$ex->id)}}">删除</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection