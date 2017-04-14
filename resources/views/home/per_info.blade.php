@extends('layouts.master')

@section('content')
    <div class="container" style="width: 800px;height: auto;margin-top: 20px;margin-bottom: 10px">
        <div class="row">
            <div class="col-lg-6">
                <div style="width:400px;height:auto;border: 1px solid #ccc;padding: 10px" >
                    <h4>学校信息</h4>
                    @if(empty($school))
                        <form action="{{url('home/per_info/school')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputEmail1">我的大学：</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写学校名称" name="college" value="">
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
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">我的学号：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写学号" name="stn">
                            </div>
                            <input type="submit" class="btn btn-default" value="提交">
                        </form>
                        @else
                    @foreach($school as $item)
                    <form action="{{url('home/per_info/school')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">我的大学：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写学校名称" name="college" value="{{$item->college}}">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">我的系别：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写系别" name="dept" value="{{$item->dept}}">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">我的专业：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写专业" name="prof" value="{{$item->prof}}">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">我的班级：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写班级" name="class" value="{{$item->class}}">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">我的学号：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写学号" name="stn" value="{{$item->stn}}">
                        </div>
                        <input type="submit" class="btn btn-default" value="提交">
                    </form>
                        @endforeach
                        @endif
                </div>
                <div style="border:1px solid #ccc;width:400px;height: 400px;margin-top: 10px;padding: 10px;">
                    <h4>工作信息</h4>
                    @if(empty($work))
                    <form action="{{url('home/per_info/work')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">公司名称：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写公司名称" name="company">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">行业类型：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写行业类型" name="industry">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">职业职位：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写职业职位" name="pp">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">工作时间：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填做工时间写班级" name="work_time">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                    @else
                        @foreach($work as $witem)
                        <form action="{{url('home/per_info/school')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputEmail1">公司名称：</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写公司名称" name="company" value="{{$witem->company}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputPassword1">行业类型：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写行业类型" name="industry"  value="{{$witem->industry}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">职业职位：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写职业职位" name="pp"  value="{{$witem->pp}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">工作时间：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填做工时间写班级" name="work_time"  value="{{$witem->work_time}}">
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>
                        @endforeach
                    @endif

                </div>
                <div style="border:1px solid #ccc;width:400px;height: auto;margin-top: 10px;padding: 10px;margin-bottom: 10px">
                    <h4>喜欢</h4>
                    @if(empty($like))
                    <form action="{{url('home/per_info/like')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">音乐：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="我喜欢的音乐" name="music">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">爱好：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我的爱好" name="hobby">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">书籍：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的书籍" name="book">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">电影：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的电影" name="movie">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">游戏：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的游戏" name="game">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">动漫：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的动漫" name="animation">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">运动：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的运动" name="sport">
                        </div>
                        <button type="submit" class="btn btn-default">提交</button>
                    </form>
                        @else
                        @foreach($like as $litem)
                        <form action="{{url('home/per_info/like')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputEmail1">音乐：</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="我喜欢的音乐" name="music" value="{{$litem->music}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputPassword1">爱好：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我的爱好" name="hobby" value="{{$litem->hobby}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">书籍：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的书籍" name="book" value="{{$litem->book}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">电影：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的电影" name="movie" value="{{$litem->movie}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">游戏：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的游戏" name="game" value="{{$litem->game}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">动漫：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的动漫" name="animation" value="{{$litem->animation}}">
                            </div>
                            <div class="form-group" style="width:200px">
                                <label for="exampleInputFile">运动：</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="我喜欢的运动" name="sport" value="{{$litem->sport}}">
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                        </form>
                        @endforeach
                    @endif

                </div>
            </div>
            <div class="col-lg-6">
                <div style="width:400px;height: 150px;padding:10px;border: 1px solid #ccc;margin-left: 10px;margin-bottom: 10px;">
                    <h4>感情状况</h4>
                    @if(empty($feel))
                        <form action="{{url('home/per_info/feeling')}}" method="post" >
                            {{csrf_field()}}
                            <label for="exampleInputFile" style="float: left;line-height: 34px;">感情状况：</label>
                            <select name="feeling" id="" class="form-control" style="width:200px;float: left;margin-right: 20px;">
                                <option value="不填写">不填写</option>
                                <option value="单身">单身</option>
                                <option value="求勾搭">求勾搭</option>
                                <option value="暧昧期">暧昧期</option>
                                <option value="恋爱中">恋爱中</option>
                                <option value="已婚">已婚</option>
                                <option value="失恋了">失恋了</option>
                            </select>
                            <input type="submit" value="提交"  class="btn btn-default" style="float:left">
                        </form>
                  @else
                        @foreach($feel as $fitem)
                            <div class="form-group" >
                                <label for="exampleInputFile" style="float: left;line-height: 34px;">目　　前：</label>
                                <input type="text" value="{{$fitem->feeling}}"  class="form-control" disabled style="width:100px">
                            </div>
                            <form action="{{url('home/per_info/feeling')}}" method="post" >
                                {{csrf_field()}}
                                <label for="exampleInputFile" style="float: left;line-height: 34px;">感情状况：</label>
                                <select name="feeling" id="" class="form-control" style="width:200px;float: left;margin-right: 20px;">
                                    <option value="不填写">不填写</option>
                                    <option value="单身">单身</option>
                                    <option value="求勾搭">求勾搭</option>
                                    <option value="暧昧期">暧昧期</option>
                                    <option value="恋爱中">恋爱中</option>
                                    <option value="已婚">已婚</option>
                                    <option value="失恋了">失恋了</option>
                                </select>
                                <input type="submit" value="提交"  class="btn btn-default" style="float:left">
                            </form>
                        @endforeach
                    @endif
                </div>
                <div style="border:1px solid #ccc;width:400px;margin-left: 10px;padding:10px">
                    <h4>基本信息</h4>
                    @if(empty($info))
                    <form action="{{url('home/per_info/info')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputEmail1">姓名：</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写真实姓名" name="realname" >
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputPassword1">昵称：</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写昵称" name="nickname" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">性别：</label>
                            <input type="radio" name="sex" id="inlineRadio3" value="0" checked> 男
                            <input type="radio" name="sex" id="inlineRadio3" value="1" > 女
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">家乡：</label>
                            {{--<textarea name='address' id="" cols="30" rows="2" style="resize: none"></textarea>--}}
                            <select name="prov" id="prov"></select>
                            <select name="city" id="city"></select>
                            <select name="area" id="area"></select>
                            <select name="street" id="street"></select>
                        </div>
                        <div class="form-group" style="width:200px">
                            <label for="exampleInputFile">生日：</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="填写生日" name="birthday">
                        </div>

                        <input type="submit" class="btn btn-default" value="提交">
                    </form>
                        @else
                        @foreach($info as $pitem)
                            <form action="{{url('home/per_info/info')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group" style="width:200px">
                                    <label for="exampleInputEmail1">姓名：</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="填写真实姓名" name="realname" value="{{$pitem->realname}}">
                                </div>
                                <div class="form-group" style="width:200px">
                                    <label for="exampleInputPassword1">昵称：</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="填写昵称" name="nickname" value="{{$pitem->nickname}}">
                                </div>
                                <div class="form-group" style="width:200px">
                                    <label for="exampleInputFile">性别：</label>
                                    <input type="radio" name="sex" id="inlineRadio3" value="0" checked> 男
                                    <input type="radio" name="sex" id="inlineRadio3" value="1" > 女
                                </div>
                                <div class="form-group" style="width:200px">
                                    <label for="exampleInputFile">家乡：</label>
                                    {{--<textarea name='address' id="" cols="30" rows="2" style="resize: none" >{{$pitem->address}}</textarea>--}}
                                    <select name="prov" id="prov"></select>
                                    <select name="city" id="city"></select>
                                    <select name="area" id="area"></select>
                                    <select name="street" id="street"></select>
                                </div>
                                <div class="form-group" style="width:200px">
                                    <label for="exampleInputFile">生日：</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="填写生日" name="birthday"  value="{{$pitem->birthday}}">
                                </div>

                                <input type="submit" class="btn btn-default" value="提交">
                            </form>
                        @endforeach
                    @endif
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

                dataType:'json',
                //同步，如果没有第一级的数据第二级触发时自动为0
                async:false
            });

            //2、当前三级出现change事件时触发ajax获取value当作upid寻找下一级数据
//            $('#prov,#city,#area').change(function(){
//                var $upid = $(this).val();
//                alert($upid);
//                //在外层用变量存储$(this);
//                var $_this = $(this);

                //根据传入的upid为下一级select添加选项
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
//            })

            $('#prov').trigger('change');

        })
    </script>
@endsection