@extends('mmm\admin')
@section('content')
    <div class="span9">
        <h1>
            友情链接管理
        </h1>

        <div>
            <ul>
                <li><a href="{{url('/admin/link-add')}}">新增连接</a></li>
            </ul>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>链接名称</th>
                <th>链接地址</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($links as $link)
                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->name}}</td>
                    <td>{{$link->url}}</td>
                    <td>
                        <a href="{{url('/admin/link-update/'.$link->id)}}">修改</a>
                        <a href="{{url('/admin/link-delete/'.$link->id)}}">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <div class="pagination">
            {{$links->links()}}
        </div>
    </div>
@endsection


