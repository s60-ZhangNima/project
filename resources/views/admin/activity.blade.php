@extends('mmm\admin')
@section('content')
<<<<<<< HEAD

					<h1>
						用户管理
					</h1>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									用户ID
								</th>
								<th>
									用户邮箱
								</th>
								<th>
									用户资料
								</th>
								<th>
									用户状态/故事
								</th>
								<th>
									用户好友/关注
								</th>
								<th>
									操作
								</th>
							</tr>
						</thead>
						<tbody>
						@foreach($all as $item)
							<tr>
								<td>
									{{$item->id}}
								</td>
								<td>
									{{$item->email}}
								</td>
								<td>
									<a href="{{url('admin/info/'.$item->id)}}">Info</a>
								</td>
								<td>
									<a href="{{url('admin/state_story/'.$item->id)}}">State/Story</a>
								</td>
								<td>
									<a href="{{url('admin/friends_focus/'.$item->id)}}">Friends/Focus</a>
								</td>
								<td>
									<a href="{{url('admin/delete/'.$item->id)}}">删除</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<div class="pagination">
						<ul>
							<li class="disabled">
								<a href="#">&laquo;</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">&raquo;</a>
							</li>
						</ul>
					</div>

=======
	<div class="span9">
		<h1>
			权限管理
		</h1>

		<div>
			<ul>
				<li><a href="{{url('admin/profile')}}">新增权限</a></li>
			</ul>
		</div>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>权限路由</th>
					<th>权限名称</th>
					<th>权限描述</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($activitys as $activity)

					<tr>
						<td>{{$activity->id}}</td>
						<td>{{$activity->name}}</td>
						<td>{{$activity->display_name}}</td>
						<td>{{$activity->description}}</td>
						<td>
							<a href="alter/{{$activity->id}}">修改</a>
							<a href="alter/{{$activity->id}}">删除</a>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>

		<div class="pagination">
			{{$activitys->links()}}
		</div>
	</div>
>>>>>>> 584356ed9f575db344ecf08b60de1db3a50c779a
@endsection


