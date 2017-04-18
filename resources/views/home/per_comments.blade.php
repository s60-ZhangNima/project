@extends('layouts.master')


@section('content')
    <div class="container" style="height: auto;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div id="content" >
                <h3>状态：</h3>
                    <div class="panel panel-default">
                        @foreach($states as $item)
                        <div class="panel-body">
                            {{date('Y-m-d H:i:s',$item->create_time)}}
                            <button class="pull-right" style="border:none;background-color: inherit">
                        </div>
                        <div class="panel-footer">{{$item->content}}
                            <div style="float: right;">
                                @if($item->praise ==  1)
                                    <button id='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit;color:red"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>
                                @else
                                    <button id='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>

                                @endif
                                &nbsp;

                            </div>
                        </div>
                            @endforeach
                        </div>
                <h6>评论：</h6>
                    @if(!empty($comment))
                       @foreach($comment as $value)
                        <div class="panel panel-default">
                            <div class="panel-body">
                               {{date('Y-m-d H:i:s',$value->create_time)}}
                                <div style="float: right;">
                                    @if($value->praise ==  1)
                                        <button name='cpras' onclick="cpra({{$value->id}})" style="border:none;background-color: inherit;color:red"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>
                                    @else
                                        <button name='cpras' onclick="cpra({{$value->id}})" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>

                                    @endif
                                    &nbsp;

                                </div>
                                <button onclick = "del({{$value->id}})" class="pull-right" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-trash"></span></button>
                                <div class="panel-footer">
                                    {{$value->content}}

                                </div>

                            </div>
                       </div>
                       @endforeach
                        @else
                        <div class="panel panel-default">
                            <div class="panel-body">
                                请先去评论一条吧...
                            </div>
                        </div>
                     @endif
            </div>
        </div>
        <div class="col-lg-3"><h3><a href="{{url('home/per_state')}}" class="pull-right">返回</a></h3></div>
    </div>
    <script>
        var n = 0;
        var praises = document.getElementById('praises');
        var cpras = document.getElementsByName('cpras');

        var praise = function(n){
            if(window.XMLHttpRequest){
                var xhr = new XMLHttpRequest();
            }else{
                var xhr = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    if(xhr.responseText == 1){
                        praises.style.color = "red";
                    }else{
                        praises.style.color = "#444444";
                    }
                }
            }

            xhr.open('get', "/home/per_state/"+n, true);
            xhr.send();
        }

        var cpra = function(n){
            if(window.XMLHttpRequest){
                var xhr = new XMLHttpRequest();
            }else{
                var xhr = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xhr.onreadystatechange = function(){
                if(xhr.readyState == 4 && xhr.status == 200){
                    if(xhr.responseText == 1){
                        for (var i=0;i<cpra.length;i++){
                            (function (i) {
                                cpras[i].style.color = "red";
                            })(i)

                        }
                    }else{
                        for (var i=0;i<cpra.length;i++){
                            (function (i) {
                                cpras[i].style.color = "#444444";
                            })(i)
                        }
                    }
                }
            }

            xhr.open('get', "/home/per_comments/pra/"+n, true);
            xhr.send();
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

            xhr.open('get', "/home/per_comments/cid/"+n, true);
            xhr.send();
        }

    </script>
    @endsection