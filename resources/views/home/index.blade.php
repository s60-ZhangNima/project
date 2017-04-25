
@extends('layouts.master')
@section('content')
    <div class="container" style="margin: 30px 0">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                @if($sel->isEmpty())
                    暂无任何,快去写些状态吧~
                    @else

                @foreach($sel as $user)
                    <div class="panel-body" style="border:1px solid #ccc;margin-bottom: 20px;border:0;border-top: 1px solid #ccc">
                        @if($user->icon == 'men_main.jpg')
                        <img src="{{asset('home/img/'.$user->icon)}}" alt="" width="30px">
                        @else
                            <img src="{{asset('home/upImg/'.$user->icon)}}" alt="" width="30px">
                        @endif
                            &nbsp;&nbsp;&nbsp;发表时间：{{date('Y-m-d H:i:s',$user->create_time)}}
                            <br>
                            <br>
                            <input type="hidden" class="faceCon" value="{{$user->content}}">
                             <div class="showFace"></div>

                    </div>
                @endforeach
                    @endif
            </div>
            <div class="col-lg-3">
                <div style="width:200px;height: 70px;border: 1px solid #ccc;float: right">
                    <img src="{{asset('home/img/111.bmp')}}" alt="" class="pull-left">
                    @foreach($quan as $qu)
                        <a href="{{url('home/per_character')}}">
                            <span class="pull-left" style="margin: 10px">总RP : {{$qu->surplus}}</span>
                            <br>
                            <span class="pull-left">随机获得 : {{$qu->rand_get}}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="map" id="map" >
        <img src="{{asset('home/img/timg.jpg')}}" alt="" id='tu' onclick="dis()" style='position: relative;left:1185px;top:-80px'>
    </div>
    <div class="bigmap" id="bigmap"  style="display:none" >
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
            <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
            <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
            <title>百度地图API自定义地图</title>
            <!--引用百度地图API-->
            <style type="text/css">
                html,body{margin:0;padding:0;}
                .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap;}
                .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
            </style>
            <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
        </head>

        <body>
        <!--百度地图容器-->
        <span style='position: relative;left: 1200px;' onclick="up()">收起地图</span>
        <div style="width:290px;height:250px;border:#ccc solid 1px;left:1050px;top:-10px" id="dituContent">

        </div>
        </body>
        <script type="text/javascript">
          var mapp = document.getElementById('bigmap');
          var tu = document.getElementById('tu');
            var dis = function(){
                bigmap.style.display = 'block';
                tu.style.display = 'none';
            }
            var up = function(){
                bigmap.style.display = 'none';
                tu.style.display = 'block';
            }

            //创建和初始化地图函数：
            function initMap(){
                createMap();//创建地图
                setMapEvent();//设置地图事件
                addMapControl();//向地图添加控件
            }

            //创建地图函数：
            function createMap(){
                var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                var point = new BMap.Point(121.448122,31.29858);//定义一个中心点坐标
                map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
                window.map = map;//将map变量存储在全局
            }

            //地图事件设置函数：
            function setMapEvent(){
                map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                map.enableKeyboard();//启用键盘上下左右键移动地图
            }

            //地图控件添加函数：
            function addMapControl(){
                //向地图中添加缩放控件
                var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                map.addControl(ctrl_nav);
                //向地图中添加比例尺控件
                var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                map.addControl(ctrl_sca);
            }


            initMap();//创建和初始化地图
        </script>

        </html>

        <script src="{{url('home/js/jquery-1.8.3.min.js')}}"></script>
        <script src="{{url('home/js/bootstrap.min.js')}}"></script>
    </div>
    <script>
        function replace_em(str){

            str = str.replace(/\</g,'&lt;');

            str = str.replace(/\>/g,'&gt;');

            str = str.replace(/\n/g,'<br/>');

            str = str.replace(/\[em_([0-9]*)\]/g,'<img src="{{url("home/arclist/$1.gif")}}" border="0" />');

            return str;

        }

        $(".faceCon").val(function(){
            var str = $(this).val();
            var $img = replace_em(str);
//                alert($img);
            $(this).next('.showFace').append($img);

        });
    </script>
@endsection