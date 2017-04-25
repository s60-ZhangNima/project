@extends('layouts.master')

@section('content')
<div class="container" style="margin: 20px 0">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-4" >
            <a href="" style="text-decoration: none;color: black">
                <div class="panel panel-default">
                    <div class="panel-body">
                       <h2>安全邮箱</h2>
                    </div>
                    <div class="panel-footer">已设置{{$em}}
                        <span class="glyphicon glyphicon-ok-circle" style="color:limegreen"></span></div>
                    <span>&nbsp;&nbsp;&nbsp;修改邮箱时，需要输入原邮箱和密码。</span>
                </div>
            </a>
        </div>
        <a href="" style="text-decoration: none;color: black">
            <div class="col-lg-4" >
                <div class="panel panel-default" >
                    <div class="panel-body">
                        <h2>安全密码</h2>
                    </div>
                    <div class="panel-footer">已设置 ********
                    <span class="glyphicon glyphicon-ok-circle" style="color:limegreen"></span></div>
                    <span>&nbsp;&nbsp;&nbsp;修改密码时，需要输入进行手机验证。</span>
                </div>
            </div>
        </a>

    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body" id="cphone">
                    更换邮箱
                    {{$em}} <span class="caret"></span>
                    <div id="phone" style="display: none">
                        <form action="{{url('home/per_changeEmail')}}"style="padding:10px;"  method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="width:200px"　>
                                <label for="exampleInputFile">　邮箱：</label>
                                　<input type="email" class="form-control" id="exampleInputPassword1" placeholder="原邮箱" name="oemail">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">密码验证：
                                    　<input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="pwd">
                                　
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">　新邮箱：</label>
                                　<input type="email" class="form-control" id="exampleInputPassword1" placeholder="新邮箱" name="nemail">
                            </div>
                            <input type="submit" class="btn btn-default" value="提交">
                            <button class="btn btn-default" onclick="cancel(1)">取消</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" >
                <div class="panel-body" id="cpwd">
                    修改密码
                    ********
                    <span class="caret"></span>
                </div>
                    <div id="pwd" style="display: none">
                        <form style="padding:10px;" action="{{url('home/per_changepwd')}}" method="post">
                                {{csrf_field()}}
                            <div class="form-group" style="width:400px">
                                <label for="exampleInputFile" style="float: left">手机号码：</label>
                                <br>
                                <br>
                                <input type="text" name="tel" id="tel" required  class="form-control" style="float: left;width: 200px;margin-right: 10px">
                                    <span class="btn btn-default" id="get_code" style="float: left">获取验证码</span>
                                <br>
                                <br>
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile" style="float: left">填写验证码：</label>
                                　<input type="text" class="form-control" id="write_code" placeholder="填写验证码" name="code" disabled="true" >
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">　新密码：</label>
                                　<input type="password" class="form-control" id="npwd" placeholder="新密码" name="npwd">
                            </div>
                            <input type="submit" value="提交" class="btn btn-default" id="changePwd">
                            <button class="btn btn-default" onclick="cancel(2)">取消</button>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
    var cpwd = document.getElementById('cpwd');
    var pdw = document.getElementById('pwd');
    var cphone = document.getElementById('cphone');
    var phone = document.getElementById('phone');

    cpwd.onclick = function(){
        pwd.style.display='block';
        phone.style.display='none';
    }

    cphone.onclick = function(){
        phone.style.display = 'block';
        pwd.style.display = 'none';
    }

    function cancel(n){
        switch(n){
            case 1:
                phone.style.display='none';
            break;
            case 2:
                pwd.style.display='none';
            break;
        }
    }
    $(function(){
        $('#get_code').click(function(){
            var pattern = /^1[34578]\d{9}$/; //对输入的手机号进行验证

            if (pattern.test($('#tel').val())){
                $.ajax({
                url:"{{url('home/get_code')}}",
                data:{'tel':$('#tel').val()},
                success:function(data){
                eval('var obj ='+data);
                if(obj.status == 0){
                alert('发送成功！');
                $('#write_code').attr('disabled',false);
                }else{
                alert('发送失败！请重新尝试');
                }
                },
                error:function(){
                alert('失败！');
                }
                })
            }else{
                alert('请输入的有效的手机号');
            }

        })
    })

</script>
@endsection
