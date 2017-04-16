@extends('mmm\admin')
@section('content')
	<div class="span9">
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
				</div>
@endsection


