@extends('mmm\admin')
@section('mycss')
   <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">

@section('content')
   <h1>状态</h1> <a href="{{url('/admin/activity')}}" class="btn btn-default pull-right">返回用户列表</a>
   @if($states->isEmpty())
      暂无数据
   @else
      @foreach($states as $state)
          <form action="{{url('admin/editState')}}" method="post">
              <input type="hidden" name="uid" value="{{$state->uid}}">
              <input type="hidden" name="id" value="{{$state->id}}">
              {{csrf_field()}}
      <div class="panel panel-default" style="width:600px">
         <div class="panel-body">
            <button class="pull-right delete" style="border:none;background-color: inherit"value="{{$state->id}}">
               <span class="glyphicon glyphicon-trash"></span>
            </button>
             <button class="pull-right count" value="{{$state->id}}" style="background-color: inherit;border: none;cursor: default"></button>
            <a href="{{url('admin/showComments/'.$state->id)}}" class="pull-right">查看评论&nbsp;&nbsp;</a>
            {{date('Y-m-d H:i:s',$state->create_time)}}

         </div>
         <div class="panel-footer" id="test">
             <div class="showFace" style="margin-bottom: 10px">
                 <div style="float: right;">
                   @if($state->praise ==  1)
                     <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" style="color:red;"></span>
                   @else
                     <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true" ></span>

                   @endif
                 </div>
             </div>

             <textarea class='faceCon' name="content" id="" cols="30" rows="2" style="resize: none">{{$state->content}}</textarea>
             <br>
             <input type="submit" value="修改状态" class="btn btn-default">

         </div>
      </div>
          </form>
      @endforeach
   @endif
   <h1>故事</h1>
   @if($stories->isEmpty())
      暂无数据
   @else
      @foreach($stories as $story)
         <div class="panel panel-default" style="width:600px">
            <div class="panel-body">
               {{$story->happen_time}}
               <button value= "{{$story->id}}" class="pull-right delStory" style="border:none;background-color: inherit"><span class="glyphicon glyphicon-trash"></span></button>
            </div>
            <div class="panel-footer">
               {{$story->desc}}：我和{{$story->who}} {{$story->content}}
            </div>
             <br>
             修改故事：
             <br>
         <form action="{{url('admin/editStory')}}" method="post">
             <input type="date" name="time" style="height: 30px;">
             {{csrf_field()}}
             <input type="hidden" name="id" value="{{$story->id}}">
             <input type="hidden" name="uid" value="{{$story->uid}}">
             <select name="desc" id=""  >
                 <option value="工作与学习">工作与学习</option>
                 <option value="家庭和关系">家庭和关系</option>
                 <option value="家居生活">家居生活</option>
                 <option value="健康">健康</option>
                 <option value="旅行和经历">旅行和经历</option>
             </select>
             <select name="who" id=""  style="width:120px">
                 <option value="同学">同学</option>
                 <option value="朋友">朋友</option>
                 <option value="家人">家人</option>
                 <option value="恋人">恋人</option>
                 <option value="伴侣">伴侣</option>
                 <option value="陌生人">陌生人</option>
             </select>

             <br>

             <textarea name="content" id="" cols="50" rows="3" style="resize: none" placeholder="写下要修改的内容..."></textarea>
             <br>
             <input type="submit" value="修改" style="background-color: #005EAC;width: 90px;height: 35px; border: none; color: #fff;left: 286px;">

         </form>
         </div>
      @endforeach
   @endif
   <script>
      $(function(){
          $('.delete').click(function(){
              var $_this = $(this);
              $.ajax({
                  url:"{{url('admin/deleteState')}}",
                  data:{'id':$_this.val()},
                  success:function(data){
                      if(data == 1){
                          alert('删除成功!');
                          location.reload();
                      }
                  },
                  error:function(){
                      alert('失败！');
                  },
                  type:'get'
              })
          })

          $('.delStory').click(function(){
              var $_this = $(this);
              $.ajax({
                  url:"{{url('admin/deleteStory')}}",
                  data:{'id':$_this.val()},
                  success:function(data){
                      if(data == 1){
                          alert('删除成功!');
                          location.reload();
                      }
                  },
                  error:function(){
                      alert('失败！');
                  },
                  type:'get'
              })
          })

          $('.count').html(function(){
//              $(this).html('aaaa');
              var $_this = $(this);
              $.ajax({
                  url:"{{url('admin/count')}}",
                  data:{'sid':$_this.val()},
                  success:function(data){
                    $_this.html('共'+data+'条评论');
                  },
                  error:function(){
                      alert("失败！");
                  }
              })
          })

      })

      function replace_em(str){

          str = str.replace(/\</g,'&lt;');

          str = str.replace(/\>/g,'&gt;');

          str = str.replace(/\n/g,'<br/>');

          str = str.replace(/\[em_([0-9]*)\]/g,'<img src="{{url("home/arclist/$1.gif")}}" border="0" />');

          return str;

      }
     $('.emotion').qqFace({

                  id : 'facebox',

                  assign:'test',

                  path:'arclist/'	//表情存放的路径

              });

              $(".faceCon").val(function(){
                  var str = $(this).val();
                  var $img = replace_em(str);
                  $(this).prev('.showFace').append($img);

              });

   </script>
@endsection