@extends('layouts.master')
@section('title','人人网-张群艳')


@section('content')
    <div class="container" style="width: 800px;height: auto">
        <div class="jumbotron" style="background-color: #DDE8EF">

            <p class="lead">
            <ul style="float: right;font-size: 16px;">
                <li style="margin-bottom: 20px;margin-right: 200px;">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"> <a href="{{url('home/per_home')}}">我的主页</a></span>

                </li>
                <li style="margin-bottom: 20px">
                    <span class="glyphicon glyphicon-file" aria-hidden="true"> <a href="{{url('home/per_info')}}">资　　料</a></span>
                </li>
                <li style="margin-bottom: 20px">
                    <span class="glyphicon glyphicon-picture" aria-hidden="true"> <a href="">相　　册</a></span>
                </li>
                <li style="margin-bottom: 20px"><span class="glyphicon glyphicon-comment" aria-hidden="true"> <a href="{{url('home/per_state')}}">状　　态</a></span></li>
                <li style="margin-bottom: 20px"> <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"> <a href="{{url('home/per_focus')}}">好　　友</a></span></li>
                <li> <span class="glyphicon glyphicon-cog" aria-hidden="true"> <a href="{{url('home/per_settings')}}">设　　置</a></span></li>

            </ul>

            <div style="border:5px solid #fff;width:180px" >
                <img src="{{asset('home/img/men_main.jpg')}}" alt="" width="170">
            </div>
            </p>
            <p><a class="btn btn-lg btn-success" href="{{url('home/per_icon')}}" role="button">上传头像</a></p>
        </div>

        <div class="row marketing">

            <div class="col-lg-3" style="font-size: 20px;" >
                <ul style="width:152px;text-align:center;line-height:50px;">
                    <li style="border:1px solid #ccc;background-color: #fff;" id="states" > 状态 &nbsp;
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>

                    </li>
                    <li style="border:1px solid #ccc;margin-top:20px;background-color: #fff;" id="pics"> 那些照片
                        <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>

                    </li>
                    <li id='stories' style="border:1px solid #ccc;margin-top:20px;background-color: #fff;">
                        我的故事
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </li>
                </ul>


            </div>

            <div class="col-lg-5" >
                    <div id="content" >
                        <p>我的状态：</p>
                        @if(empty($states))
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    暂无数据
                                </div>
                            </div>
                        @else
                            @foreach($states as $item)
                            <div class="panel panel-default">
                            <div class="panel-body">
                              {{date('Y-m-d H:i:s',$item->create_time)}}
                            </div>
                            <div class="panel-footer">{{$item->content}}
                                <div style="float: right;">
                                   <span class="glyphicon glyphicon-list-alt " aria-hidden="true" name="comments" style="cursor: pointer;"></span>
                                </div>
                            </div>
                            <div name="comment" style="width:285px;height:auto;display: none;margin: 20px 0 ;margin-left: 5px">
                               <form action="{{url('home/per_home/com')}}" method="post" >
                                   {{csrf_field()}}
                                   <input type="hidden" value="{{$item->id}}" name="sid">
                                   <span class="glyphicon glyphicon-remove pull-right" style="border:1px solid #DDE8EF;padding:3px;" onclick="cancel(4)"></span>
                                <textarea name="content" id="" cols="35" rows="3" style="resize: none" placeholder="评论..."></textarea>
                                <div style="height: 55px">
                                    <input type="submit" value="评论" style="background-color: #005EAC; width: 60px;height: 35px; border: none; color: #fff;float: right;margin-right: 60px">
                                </div>
                               </form>
                            </div>

                        </div>
                            @endforeach
                        @endif

                    </div>
                <div id="state" style="width:373px;height:auto;background-color: #fff;display: none">
                    <form action="{{url('home/per_home')}}" method="post" >
                        <span class="glyphicon glyphicon-remove" style="float: right;border:1px solid #DDE8EF;padding: 3px;cursor: pointer" onclick="cancel(1)"></span>
                        <textarea  id="test" cols="46" rows="3" style="resize: none" placeholder="写下你此刻的心情吧..."  onKeyUp="cal_words()" name="content"></textarea>
                        {{csrf_field()}}
                        <div style="height:30px;line-height: 30px;font-weight: bold;">
                        <span style="position: absolute;left: 316px;" id="num">240</span>
                        </div>
                           <input type="submit" value="发布" style="background-color: #005EAC; position: absolute; top: 112px;width: 90px;height: 35px; border: none; color: #fff;left: 278px;">

                    </form>
                </div>
                <div id="pic" style="display: none;">
                    <form action="" enctype="multipart/form-data" method="post">
                        <span class="glyphicon glyphicon-remove" style="float: right;border:1px solid #DDE8EF;padding: 3px;cursor: pointer"  onclick="cancel(2)"></span>
                        <input type="file"><br>
                        <textarea name="state" id="" cols="50" rows="3" style="resize: none" placeholder="描述..."></textarea>
                            <input type="submit" value="上传" style="background-color: #005EAC; position: absolute; top: 153px;width: 90px;height: 35px; border: none; color: #fff;left: 286px;">

                    </form>
                </div>
                <div id="story" style="display: none;">
                    <form action="{{url('home/per_home/story')}}" method="post">
                        <span class="glyphicon glyphicon-remove" style="float: right;border:1px solid #DDE8EF;padding: 3px;cursor: pointer"  onclick="cancel(3)"></span>
                        <input type="date" name="time" style="height: 24px;">
                        {{csrf_field()}}
                        <select name="desc" id=""  >
                            <option value="工作与学习">工作与学习</option>
                            <option value="家庭和关系">家庭和关系</option>
                            <option value="家居生活">家居生活</option>
                            <option value="健康">健康</option>
                            <option value="旅行和经历">旅行和经历</option>
                        </select>
                        <select name="who" id=""  >
                            <option value="同学">同学</option>
                            <option value="朋友">朋友</option>
                            <option value="家人">家人</option>
                            <option value="恋人">恋人</option>
                            <option value="伴侣">伴侣</option>
                            <option value="陌生人">陌生人</option>
                        </select>

                        <br>
                        <br>
                        <textarea name="content" id="" cols="50" rows="3" style="resize: none" placeholder="写下那些让你印象深刻的故事吧..."></textarea>

                            <input type="submit" value="发布" style="background-color: #005EAC; position: absolute; top: 153px;width: 90px;height: 35px; border: none; color: #fff;left: 286px;">

                    </form>

                </div>

            </div>
            <div class="col-lg-4">
                <div id="gushi">
                    <p>我的故事：</p>
                 @if(empty($story))
                         <div class="panel panel-default">
                            <div class="panel-body">
                                暂无数据
                            </div>
                        </div>
                    @else
                        @foreach($story as $items)
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    {{$items->happen_time}}
                                    <button onclick = "del({{$items->id}})" class="pull-right" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-trash"></span></button>
                                </div>
                                <div class="panel-footer">
                                    {{$items->desc}}：我和{{$items->who}} {{$items->content}}
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
    </div>
    <script>
        var state = document.getElementById('state');
        var states = document.getElementById('states');
        var content = document.getElementById('content');
        var gushi = document.getElementById('gushi');
        var pics = document.getElementById('pics');
        var pic = document.getElementById('pic');
        var story = document.getElementById('story');
        var stories = document.getElementById('stories');
        var coms = document.getElementsByName('comments');
        var com = document.getElementsByName('comment');


        states.onclick = function(){
            content.style.display='none';
            gushi.style.display='none';
            pic.style.display='none';
            story.style.display='none';
            state.style.display='block';
            states.style.border ='1px solid #DDE8EF';
            pics.style.border ='1px solid #ccc';
            stories.style.border ='1px solid #ccc'
        }

        pics.onclick = function(){
            content.style.display='none';
            gushi.style.display='none';
            state.style.display='none';
            story.style.display='none';
            pic.style.display='block';
            pics.style.border ='1px solid #DDE8EF';
            states.style.border ='1px solid #ccc';
            stories.style.border ='1px solid #ccc';

        }

        stories.onclick = function(){
            content.style.display='none';
            gushi.style.display='none';
            state.style.display='none';
            pic.style.display='none';
            story.style.display='block';
            stories.style.border ='1px solid #DDE8EF';
            pics.style.border ='1px solid #ccc';
            states.style.border ='1px solid #ccc';

        }

        function cancel(n) {
                switch (n) {
                    case 1:
                        content.style.display = 'block';
                        gushi.style.display = 'block';
                        state.style.display = 'none';
                        states.style.border ='1px solid #ccc';
                    break;
                    case 2:
                        gushi.style.display = 'block';
                        content.style.display = 'block';
                        pic.style.display = 'none';
                        pics.style.border ='1px solid #ccc';
                        break;
                    case 3:
                        content.style.display = 'block';
                        story.style.display = 'none';
                        stories.style.border ='1px solid #ccc';
                        gushi.style.display = 'block';
                        break;

                    case 4:
                        for(var i=0;i<com.length;i++){
                            (function(i){
                                com[i].style.display='none';
                            })(i)
                        }
                    break;

                }
        }

        function cal_words(){
            var length = document.getElementById("test").value.length;
            document.getElementById("num").innerHTML = 240-length;
        }


        for(var i=0;i<coms.length;i++){
            (function(i){
                coms[i].onclick=function(){
                    if(com[i].style.display == 'block'){
                        com[i].style.display = 'none';
                    }else{
                        com[i].style.display='block';
                    };
                }
            })(i)
        }

        var del = function(n){
            if(window.XMLHttpRequest){
                var xhr = new XMLHttpRequest();
            }else{
                var xhr = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    if(xhr.responseText == 1){
                        location.reload(true);
                    }
                }
            }

            xhr.open('get', "/home/per_home/"+n, true);
            xhr.send();
        }
    </script>
@endsection
