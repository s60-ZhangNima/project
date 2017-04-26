@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="" method="post">
            <fieldset>
                <legend>修改链接</legend>
                {{csrf_field()}}

                <br><br>
                <tr>
                    <td><b>连接名称</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="name" value="{{$link->name}}"></td>
                </tr> <br><br>
                <tr>
                    <td><b>连接地址</b>:   </td>
                    <td><input type="text" class="form-control" placeholder="" name="url" value="{{$link->url}}"></td>
                </tr>

                <br><br>
                <tr>
                    <td></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/link-list')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
