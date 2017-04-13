@extends('layouts.master')


@section('content')
    <div class="container" style="width: 800px;height: auto;margin-top: 20px;margin-bottom: 10px">
        <div class="row">
            <div class="col-lg-6">
                <div style="width:400px;height: 400px;border: 1px solid #ccc;padding: 10px" >
                    <h4>学校信息</h4>
                    <form>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">我的大学：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写学校名称" name="school">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">我的系别：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写系别" name="dept">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">我的专业：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写专业" name="prof">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">我的班级：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写班级" name="class">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                </div>
                <div style="border:1px solid #ccc;width:400px;height: 400px;margin-top: 10px;padding: 10px;">
                    <h4>工作信息</h4>
                    <form>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">公司名称：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写公司名称" name="school">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">行业类型：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写行业类型" name="dept">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">职业职位：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写职业职位" name="prof">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">工作时间：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填做工时间写班级" name="class">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>

                </div>
                <div style="border:1px solid #ccc;width:400px;height: auto;margin-top: 10px;padding: 10px;">
                    <h4>喜欢</h4>
                    <form>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">音乐：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="我喜欢的音乐" name="school">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">爱好：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我的爱好" name="dept">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">书籍：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的书籍" name="prof">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">电影：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的电影" name="class">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">游戏：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的游戏" name="class">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">动漫：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的动漫" name="class">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">运动：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的运动" name="class">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6">
                <div style="width:400px;height: 100px;padding:10px;border: 1px solid #ccc;margin-left: 10px;margin-bottom: 10px;">
                    <h4>感情状况</h4>
                    <form action="" >
                        <label for="exampleInputFile" style="float: left;line-height: 34px;">感情状况：</label>
                        <select name="" id="" class="form-control" style="width:200px;float: left;margin-right: 20px;">
                            <option value="0">不填写</option>
                            <option value="1">单身</option>
                            <option value="2">求勾搭</option>
                            <option value="3">暧昧期</option>
                            <option value="4">恋爱中</option>
                            <option value="5">已婚</option>
                            <option value="6">失恋了</option>
                        </select>
                        <input type="submit" value="提交"  class="btn btn-default" style="float:left">
                    </form>
                </div>
                <div style="border:1px solid #ccc;width:400px;margin-left: 10px;padding:10px">
                    <h4>基本信息</h4>
                    <form>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">姓名：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写真是姓名" name="school">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">昵称：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写昵称" name="dept">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">性别：</label>
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 男
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 女
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">家乡：</label>
                            <select name="prov" id="prov"></select>
                            <select name="city" id="city"></select>
                            <select name="area" id="area"></select>
                            <select name="street" id="street"></select>
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">生日：</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="填写班级" name="class">
                        </div>

                        <input type="submit" class="btn btn-default" value="提交">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            //1、载入页面完成后即对php请求数据添加省一级列表项
            $.ajax({
                url:"{{url('home/per_info/upid/0')}}",
                success:function(data){
                    for (var i = 0;i < data.length; i++ ) {
                        $('#prov').append("<option value='"+data[i].id+' name='+data[i].name+"'>"+data[i].name+"</option>");
                    };
                },
                error:function(){
                    alert('失败！');
                },
                type:'post',
                data: { _token : '<?php echo csrf_token()?>'},
                dataType:'json',
                //同步，如果没有第一级的数据第二级触发时自动为0
                async:false
            });

            //2、当前三级出现change事件时触发ajax获取value当作upid寻找下一级数据
            {{--$('#prov,#city,#area').change(function(){--}}
                {{--var $upid = $(this).val();--}}
                {{--//在外层用变量存储$(this);--}}
                {{--var $_this = $(this);--}}

                {{--//根据传入的upid为下一级select添加选项--}}
                {{--$.ajax({--}}
                    {{--url:"{{url('home/per_info/pid/'.$upid.')}}",--}}
                    {{--success:function(data){--}}
                        {{--//判断数据是否存在，如果没有隐藏下几级--}}
                        {{--if(!data){--}}
                            {{--$_this.nextAll('select').hide();--}}
                            {{--return;--}}
                        {{--}--}}

                        {{--//在添加新数据之前清空select--}}
                        {{--$_this.next('select').empty().show();--}}

                        {{--for (var i = 0;i < da.ta.length; i++ ) {--}}
                            {{--$_this.next('select').append("<option value='"+data[i].id+' name='+data[i].name+"'>"+data[i].name+"</option>");--}}
                        {{--};--}}
                        {{--//添加完为下一级选中一下--}}
                        {{--$_this.next('select').trigger('change');--}}
                    {{--},--}}
                    {{--error:function(){--}}
                        {{--alert('失败！');--}}
                    {{--},--}}
                    {{--dataType:'json'--}}
                {{--});--}}
            {{--})--}}

            $('#prov').trigger('change');

        })
    </script>
@endsection