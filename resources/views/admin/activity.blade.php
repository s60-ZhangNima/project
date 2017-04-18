@extends('mmm\admin')
@section('content')
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
@endsection


