@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="{{url('admin/serve-updates/'.$id)}}" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>修改服务与功能图片</legend>
                {{csrf_field()}}


                <br><br>
                <tr>
                    <input type="file" name="icon">
                </tr>

                <br><br>
                <tr>
                    <td></td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/image-list')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
