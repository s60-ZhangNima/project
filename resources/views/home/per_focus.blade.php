@extends('layouts.master')


@section('style')

    #select .chose{height:25px;background:#fff;}
    #box{width:800px;}
    #select {height:50px;border-bottom:1px solid #ccc;}
    #select li{float:left; width:160px; height:50px; border:1px solid #ccc; border-bottom:none; border-right:none;background:#FAFAFA;line-height:50px;text-align:center}
    #select .chose{height:50px;background:#fff;}
    #content{border:1px solid #ccc; border-top:none; padding:20px;height: 300px;}
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-7">

            <div id='box' style="margin:100px 0;">
                <ul id='select' style="margin-bottom:0px">
                    <li class="chose" id="add">添加好友</li>
                    <li id="myfriend">我的好友</li>
                    <li id="imind">我关注的 </li>
                    <li id="mindme">关注我的</li>
                    <li style="background-color: #fff;border-right: 1px solid #ccc;">
                        <form action="">
                            <input type="search" placeholder="搜索..." style="width:120px;height:50px;border:none;text-align: center;">
                            <span class="glyphicon glyphicon-search"></span>
                        </form>
                    </li>
                </ul>

                <div id='content' style="border:1px solid #ccc; border-top:none; padding:20px;height: 300px;">
                    <div id="show" style="display:block;height: auto"></div>
                    <div style="display:none" id="firends"></div>
                    <div style="display:none">呵呵呵</div>
                    <div style="display:none">好好好</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    </div>
    <script>
        var box = document.getElementById('box');
        var lis = box.getElementsByTagName('li');  //拿到li数组
        var con = document.getElementById('content');
        var divs = con.getElementsByTagName('div');  //拿到盒子数组


        // 进行循环绑定
        for(var i=0;i<lis.length-1;i++){
            //进行闭包将值存起来
            (function(i){
                lis[i].onclick = function(){
                    for (var j=0;j<lis.length-1;j++) {
                        divs[j].style.display='none';   //将所有的先隐藏
                        lis[j].className='';  //将class名字取消 ，取消css样式
                    }
                    this.className='chose'; //再将选中的取名字 给予样式
                    divs[i].style.display='block';   //选中的盒子给显示
                }
            })(i)
        }

        $(function(){

            $('#add').click(function(){
                $.ajax({
                    url:"{{url('home/per_showfriends')}}",
                    type:'get',
                    success:function(data){
                        $('#show').empty();
                        for(var i=0;i<data.length;i++){
                            if (data[i]['icon'] == 'men_main.jpg'){
                                $("#show").append(
                                    '<div id="showFri'+[i]+'" style="width:172px;padding: 10px;margin: 8px;border:solid 2px #666;float: left">' +
                                    "<img src='http://project.dev/home/img/"+data[i]['icon']+"'style='width:90px;margin-bottom: 10px;'> "+
                                    '<span style="color:#333;margin-left: 10px">'+data[i]['name']+
                                    '<button value="'+data[i]['id']+'"id="mind" style="margin-right:10px" class="btn btn-default">关注</button>' +
                                    '<button value="'+data[i]['id']+'"id="addfri" class="btn btn-default">添加好友</button>' +
                                    '</span></div>'
                                );
                            }else{
                                $("#show").append(
                                    '<div id="showFri'+[i]+'" style="width:172px;padding: 10px;margin: 8px;border:solid 2px #666;float: left">' +
                                    "<img src='http://project.dev/home/upImg/"+data[i]['icon']+"'style='width:90px;margin-bottom: 10px;'> "+
                                    '<span style="color:#333;margin-left: 10px">'+data[i]['name']+
                                    '<button value="'+data[i]['id']+'"id="mind" style="margin-right:10px" class="btn btn-default">关注</button>' +
                                    '<button value="'+data[i]['id']+'"id="addfri" class="btn btn-default">添加好友</button>' +
                                    '</span></div>'
                                );
                            }
                        }
                    },
                    error:function(){
                        alert('失败！');
                    },
                    dataType:'json'

                })
            })
            $('#myfriend').click(function(){
                $.ajax({
                    url:"{{url('home/per_myfriends')}}",
                    type:'get',
                    success:function (data) {
                        if(data != ''){
                            $('#friends').empty();
                            $('#friends').css('display','block');
                            for(var i=0;i<data.length;i++){
                                if (data[i]['icon'] == 'men_main.jpg'){
                                    $("#show").append(
                                        '<div id="showFri'+[i]+'" style="width:172px;padding: 10px;margin: 8px;border:solid 2px #666;float: left">' +
                                        "<img src='http://project.dev/home/img/"+data[i]['icon']+"'style='width:90px;margin-bottom: 10px;'> "+
                                        '<span style="color:#333;margin-left: 10px">'+data[i]['name']+
                                        '<button value="'+data[i]['id']+'"id="mind" style="margin-right:10px" class="btn btn-default">关注</button>' +
                                        '<button value="'+data[i]['id']+'"id="addfri" class="btn btn-default">添加好友</button>' +
                                        '</span></div>'
                                    );
                                }else{
                                    $("#show").append(
                                        '<div id="showFri'+[i]+'" style="width:172px;padding: 10px;margin: 8px;border:solid 2px #666;float: left">' +
                                        "<img src='http://project.dev/home/upImg/"+data[i]['icon']+"'style='width:90px;margin-bottom: 10px;'> "+
                                        '<span style="color:#333;margin-left: 10px">'+data[i]['name']+
                                        '<button value="'+data[i]['id']+'"id="mind" style="margin-right:10px" class="btn btn-default">关注</button>' +
                                        '<button value="'+data[i]['id']+'"id="addfri" class="btn btn-default">添加好友</button>' +
                                        '</span></div>'
                                    );
                                }
                            }
                        }else{
                            alert('你还没有好友，快去添加吧');
                        }
                    },
                    error:function () {
                        alert('失败！');
                    },
                    dataType:'json'
                })
            })
            $('#imind').click(function(){})
            $('#mindme').click(function(){})
            $('#add').trigger('click');
        })
    </script>
@endsection