@extends('mmm\admin')
@section('content')
    <div class="span9">
        <form id="edit-profile" class="form-horizontal" action="" method="post">
            <fieldset>
                <legend>修改</legend>
                {{csrf_field()}}

                <tr>
                    <td><b>用&nbsp;&nbsp;户&nbsp;&nbsp;名</b>:   </td>
                    <td><input type="text" name="name" class="form-control" placeholder="User name" value="{{$user->name}}"></td>
                </tr>
                <br><br>
                <tr>
                    <td><b>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</b>:   </td>
                    <td><input type="email" name="email" class="form-control" placeholder="Email" value="{{$user->email}}"></td>
                </tr>
                <br><br>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-success" value="提交" style="width: 100px;">
                        <a href="{{url('admin/user-List')}}" class="btn btn-primary">返回</a>
                    </td>
                </tr>
            </fieldset>
        </form>
    </div>
@endsection
