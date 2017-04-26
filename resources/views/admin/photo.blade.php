@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						相册管理
					</h1><h3><a href="{{url('/admin/adminaddphoto')}}" class="view-link">新增</a></h3>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									相册\ID
								</th>
								<th>
									用户\UID
								</th>
								<th>
									相册名\NAME
								</th>
								<th>
									相册描述\DESC
								</th>
								<th>
									状态
								</th>
								<th>
									操作\DO IT
								</th>
							</tr>
						</thead>
						<tbody>
						  @foreach($result as $rel)
							<tr>
								<td>
									{{$rel->id}}
								</td>
								<td>
									{{$rel->uid}}
								</td>
								<td>
									{{$rel->name}}
								</td>
								<td>
									{{$rel->desc}}
								</td>
								<td>
									{{$rel->display}}
								</td>
								<td>
									<a href="./admindelphoto/{{$rel->id}}" class="view-link">删除</a>
									<a href="./adminrephoto/{{$rel->id}}" class="view-link">编辑</a>
									<a href="./adminphotolist/{{$rel->id}}" class="view-link">照片管理</a>
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


