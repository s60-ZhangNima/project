@extends('mmm\admin')
@section('content')
    <div class="span9">
        <h1>
            图片管理
        </h1>

        <div>
            <ul>
                <form action="{{url('/admin/image-add')}}" method="post" enctype="multipart/form-data">
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
                <th>图片</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

            @foreach($images as $image )
                <tr>
                    <td>{{$image->id}}</td>
                    <td><img src="{{url($image->icon)}}" alt="" style="width: 100px; height: 100px  "></td>
                    <td>
                        {{--<a href="/admin/image-update/{{$image->id}}">替换</a>--}}
                        <a href="image-delete/{{$image->id}}">删除</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>


    </div>
    @endsection