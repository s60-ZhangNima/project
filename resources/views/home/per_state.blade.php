@extends('layouts.master')

@section('content')
    <div class="container" style="height: auto;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div id="content" >
                @if(empty($states))
                   <div class="panel panel-default">
                       <div class="panel-body">
                           先去写一条状态吧...
                       </div>
                   </div>
                @else
                <h3>状态 :</h3>
                @foreach($states as $item)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <button class="pull-right delState" style="border:none;background-color: inherit" value="{{$item->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                        <a href="{{url('home/per_comments/'.$item->id)}}" class="pull-right">查看评论&nbsp;&nbsp;</a>
                        {{date('Y-m-d H:i:s',$item->create_time)}}

                    </div>
                    <div class="panel-footer" id="test">
                        <input type="hidden" class="faceCon" value="{{$item->content}}">
                        <div class="showFace">
                        <div style="float: right;">
                            @if($item->praise ==  1)
                                <button name='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit;color:red"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>
                            @else
                                <button name='praises' onclick="praise({{$item->id}})" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span></button>

                            @endif
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true" name="comments" style="cursor: pointer;"></span>
                        </div></div>
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
                    @endif
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <script>
        var coms = document.getElementsByName('comments');
        var com = document.getElementsByName('comment');
        var cancel = document.getElementsByName('cancel');
        var test = document.getElementById('test');

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


        function replace_em(str){

            str = str.replace(/\</g,'&lt;');

            str = str.replace(/\>/g,'&gt;');

            str = str.replace(/\n/g,'<br/>');

            str = str.replace(/\[em_([0-9]*)\]/g,'<img src="{{url("home/arclist/$1.gif")}}" border="0" />');

            return str;

        }

        $(function(){

            $('.emotion').qqFace({

                id : 'facebox',

                assign:'test',

                path:'arclist/'	//表情存放的路径

            });

//            alert($('.aa').html());
            $(".faceCon").val(function(){
                var str = $(this).val();
                var $img = replace_em(str);
//                alert($img);
                $(this).next('.showFace').append($img);

            });

            $('.delState').click(function(){
                var $_this = $(this);
                $.ajax({
                    url:"{{url('home/deleteState')}}",
                    data:{'id':$_this.val()},
                    success:function(data){
                        if(data == 1){
                            alert('删除成功！');
                            location.reload();
                        }
                    },
                    error:function(){
                        alert('失败');
                    }
                })
            })

        });
    </script>
@endsection