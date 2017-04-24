@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form class="form-horizontal" action="{{url('admin/doAdd')}}" method="post">
            <fieldset>
                <legend>添加用户</legend>
                {{csrf_field()}}
                <tr>
                    <td><b>用&nbsp;&nbsp;户&nbsp;&nbsp;名</b>:   </td>
                    <td><input type="text" name="name" class="form-control" placeholder="" ></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</b>:   </td>
                    <td><input type="email" name="email" class="form-control" placeholder="" ></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</b>:   </td>
                    <td><input type="password" name="password" class="form-control" placeholder=""></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>确认密码</b>:   </td>
                    <td><input type="password" name="password" class="form-control" placeholder=""></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>上传头像</b>:    </td>
                    <input type="file" name="pic"  class="form-control">
                </tr>
                <br><br>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-default" value="提交" style="width: 100px;">
                        <a href="{{url('admin/activity')}}" class="btn btn-default">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
