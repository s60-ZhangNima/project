@extends('layouts.master')
@section('title','人人网-张群艳')

@section('content')
    <div class="container" style="height: auto;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div id="content" >
                <h3>状态 :</h3>
                @foreach($states as $item)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <button class="pull-right" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-trash"></span></button>
                        <a href="{{url('home/per_comments/'.$item->id)}}" class="pull-right">查看评论&nbsp;&nbsp;</a>
                        {{date('Y-m-d H:i:s',$item->create_time)}}

                    </div>
                    <div class="panel-footer">{{$item->content}}
                        <div style="float: right;">
                            @if($item->praise ==  1)
                                <button name='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit;color:red"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>
                            @else
                                <button name='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>

                            @endif
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true" name="comments" style="cursor: pointer;"></span>
                        </div>
                    </div>

                </div>
                <div name="comment" style="width:373px;height:auto;background-color: #fff;display: none;margin-bottom: 20px">
                    <form action="{{url('home/per_home/com')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$item->id}}" name="sid">
                        <span class="glyphicon glyphicon-remove" style="float: right;border:1px solid #DDE8EF;padding:3px;margin-right: 26px;cursor: pointer;" name="cancel"></span>
                        <textarea name="content" id="" cols="42" rows="3" style="resize: none" placeholder="评论..."></textarea>
                        <div style="height: 55px">
                            <input type="submit" value="评论" style="background-color: #005EAC; width: 60px;height: 35px; border: none; color: #fff;float: right;margin-right: 60px">
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <script>
        var coms = document.getElementsByName('comments');
        var com = document.getElementsByName('comment');
        var cancel = document.getElementsByName('cancel');
        var n = 0;
        var praises = document.getElementsByName('praises');
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

        for(var i=0;i<cancel.length;i++){
            (function(i){
                cancel[i].onclick = function(){
                    com[i].style.display='none';
                }
                })(i)
        }

    var praise = function(n){
        if(window.XMLHttpRequest){
            var xhr = new XMLHttpRequest();
        }else{
            var xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                 if(xhr.responseText == 1){
                     for (var i=0;i<praises.length;i++){
                         (function (i) {
                             praises[i].style.color = "red";
                         })(i)
                     }
                 }else{
                     for (var j=0;j<praises.length;j++){
                         (function (j) {
                             praises[j].style.color = "#444444";
                         })(j)
                     }
                 }
            }
        }

        xhr.open('get', "/home/per_state/"+n, true);
        xhr.send();
        }
    </script>
@endsection