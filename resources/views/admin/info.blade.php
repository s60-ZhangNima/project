@extends('mmm\admin')
@section('content')

   <h2>用户信息</h2>
          <a href="{{url('/admin/activity')}}" class="btn btn-default pull-right">返回用户列表</a>
      <div class="form-group">
         <label for="exampleInputEmail1">用户名：</label>
         <input type="text" class="form-control"  value="{{$res->name}}">
      </div>

      <div class="form-group">
         <label for="exampleInputPassword1">用户邮箱：</label>
         <input type="text" class="form-control"   value="{{$res->email}}">
      </div>

         <br>
         <br>

      <h2>感情信息</h2>
         @if($feeling->isEmpty())
            暂无信息
         @else
         @foreach($feeling as $feel)
       目前感情： <input type="text" class="form-control" value="{{$feel->feeling}}" disabled>

         <form action="{{url('admin/info/feeling')}}" method="post">
             <div class="form-group">
            {{csrf_field()}}
            <input type="hidden" value ="{{$id}}" name='uid'>
             <label for="exampleInputPassword1">感情状态：</label>
             <select name="feeling" id="" class="form-control" style="width:200px;float: left;margin-right: 20px;">
                 <option value="不填写">不填写</option>
                 <option value="单身">单身</option>
                 <option value="求勾搭">求勾搭</option>
                 <option value="暧昧期">暧昧期</option>
                 <option value="恋爱中">恋爱中</option>
                 <option value="已婚">已婚</option>
                 <option value="失恋了">失恋了</option>
             </select>
         </div>
             <input type="submit" class="btn btn-default" value="编辑">
             <a href="{{url('/admin/delFel/'.$feel->id)}}" class="btn btn-default">删除</a>
         </form>
         @endforeach
         @endif
         <br>
         <br>

   <h2>基本信息</h2>
      @if($info->isEmpty())
         暂无信息
      @else
      @foreach($info as $infos)
      <form action="{{url('/admin/info/baseInfo')}}" method="post">
          {{csrf_field()}}
          <input type="hidden" value = "{{$id}}" name='uid'>
          <div class="form-group">
              <label for="exampleInputPassword1">用户真实姓名：</label>
              <input type="text" class="form-control" value="{{$infos->realname}}" name="realname">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">用户昵称：</label>
              <input type="text" class="form-control" value="{{$infos->nickname}}" name="nickname">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">用户性别：</label>
              <input type="radio"  name='sex' class="form-control" value="0" {{$infos->sex ==1 ?'':'checked'}}>女
              <input type="radio" name='sex' class="form-control" value="1" {{$infos->sex ==1 ?'checked':''}}>男
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">用户生日：</label>
              <input type="date" name="birthday" class="form-control"  value="{{$infos->birthday}}" name="birthday">
          </div>
          <div class="form-group">
              <label for="exampleInputPassword1">用户地址：</label>
              <input type="text" name='address' class="form-control" value="{{$infos->address}}" name="address">
          </div>
          <input type="submit" class="btn btn-default" value="编辑">
          <a href="{{url('/admin/baseInfo/'.$infos->id)}}" class="btn btn-default">删除</a>
      </form>
      @endforeach
         @endif
         <br>
         <br>
         <br>
   <h2>学校信息</h2>
         @if($school->isEmpty())
            暂无信息
         @else
          @foreach($school as $schools)
          <form action="{{url('/admin/info/school')}}"  method="post" >
              {{csrf_field()}}
              <input type="hidden" value ="{{$id}}"  name='uid'>
          <div class="form-group">
             <label for="exampleInputPassword1">大学名字：</label>
             <input type="text" class="form-control" value="{{$schools->college}}" name="college">
          </div>

          <div class="form-group">
             <label for="exampleInputPassword1">系别：</label>
             <input type="text" class="form-control" value="{{$schools->dept}}" name="dept">
          </div>
          <div class="form-group">
             <label for="exampleInputPassword1">专业：</label>
             <input type="text" class="form-control"  value="{{$schools->prof}}" name="prof">
          </div>
          <div class="form-group">
             <label for="exampleInputPassword1">班级：</label>
             <input type="text" class="form-control" value="{{$schools->class}}" name="class">
          </div>
          <div class="form-group">
             <label for="exampleInputPassword1">学号：</label>
             <input type="text" class="form-control" value="{{$schools->stn}}" name="stn">
          </div>
              <input type="submit" class="btn btn-default" value="编辑">
              <a href="{{url('/admin/school/'.$schools->id)}}" class="btn btn-default">删除</a>
          </form>
          @endforeach
         @endif
         <br>
         <br>
         <br>

         <h2>工作信息</h2>
         @if($work->isEmpty())
            暂无信息
         @else
         @foreach($work as $works)
          <form action="{{url('/admin/info/work')}}"  method="post">
              {{csrf_field()}}
              <input type="hidden" value ="{{$id}}" name='uid'>
            <div class="form-group">
               <label for="exampleInputPassword1">公司姓名:</label>
               <input type="text" class="form-ckontrol" value="{{$works->company}}" name="company">
            </div>

            <div class="form-group">
               <label for="exampleInputPassword1">职业类型:</label>
               <input type="text" class="form-control" value="{{$works->industry}}" name="industry">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">职务职位:</label>
               <input type="text" class="form-control"  value="{{$works->pp}}" name="pp">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">工作时间:</label>
               <input type="text" class="form-control" value="{{$works->work_time}}" name="work_time">
            </div>
              <input type="submit" class="btn btn-default" value="编辑">
              <a href="{{url('/admin/work/'.$works->id)}}" class="btn btn-default">删除</a>
          </form>
         @endforeach
         @endif
         <br>
         <br>
         <br>

         <h2>爱好信息</h2>
         @if($like->isEmpty())
            暂无信息
         @else
          @foreach($like as $likes)
          <form action="{{url('/admin/info/like')}}"  method="post">
              {{csrf_field()}}
              <input type="hidden" value = "{{$id}}" name='uid'>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的音乐</label>
                   <input type="text" class="form-control"  name='music' value="{{$likes->music}}">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">爱好</label>
                   <input type="text" name="hobby" class="form-control" value="{{$likes->hobby}}">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的书籍</label>
                   <input type="text" class="form-control"  value="{{$likes->book}}" name="book">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的电影</label>
                   <input type="text" class="form-control" value="{{$likes->movie}}" name="movie">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的游戏</label>
                   <input type="text" class="form-control" value="{{$likes->game}}" name="game">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的动漫</label>
                   <input type="text" class="form-control" value="{{$likes->animation}}" name="animation">
                </div>
                <div class="form-group">
                   <label for="exampleInputPassword1">喜欢的运动</label>
                   <input type="text" class="form-control" value="{{$likes->sport}}" name="sport">
                </div>
              <input type="submit" class="btn btn-default" value="编辑">
              <a href="{{url('/admin/like/'.$likes->id)}}" class="btn btn-default">删除</a>
          </form>
          @endforeach
         @endif
         <br>
         <br>


@endsection