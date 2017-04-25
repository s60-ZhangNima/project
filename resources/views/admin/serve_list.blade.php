@extends('mmm\admin')
@section('content')
    <div class="span9">
        <h1>
            服务管理
        </h1>

        <div>
            <ul>
                <form action="{{url('/admin/serve-add')}}" method="post" enctype="multipart/form-data">
                    <input type="file" name="icon">
                    <input type="submit">
                    {{csrf_field()}}
                </form>
            </ul>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>服务</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($serves as $serve)
                <tr>
                    <td>{{$serve->id}}</td>
                    <td><img src="{{asset($serve->icon)}}" alt="" style="width: 100px; height: 100px  "></td>
                    <td>
                        <a href="{{url('/admin/serve-update/'.$serve->id)}}">修改</a>
                        <a href="{{url('/admin/serve-delete/'.$serve->id)}}">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        <div class="pagination">
            {{$serves->links()}}
        </div>
    </div>
@endsection


