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
                    <span>&nbsp;&nbsp;&nbsp;修改密码时，需要输入原密码和新密码。</span>
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
                            <div class="form-group" style="width:200px"　>
                                {{csrf_field()}}
                                <label for="exampleInputFile">　原密码：</label>
                                　<input type="password" class="form-control" id="opwd" placeholder="原密码" name="opwd">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">　新密码：</label>
                                　<input type="password" class="form-control" id="npwd" placeholder="新密码" name="npwd">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">　再次确认：</label>
                                　<input type="password" class="form-control" id="repwd" placeholder="再次确认" name="repwd">
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

</script>
@endsection
