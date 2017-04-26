@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						留言板管理
					</h1>
		<h3><a href="{{url('/admin/adminboard')}}" class="view-link">管理员留言</a></h3>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									留言\ID
								</th>
								<th>
									用户\ID
								</th>
								<th>
									内容\content
								</th>
								<th>
									时间\posttime
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
									{{$rel->content}}
								</td>
								<td>
									{{$rel->posttime}}
								</td>
								<td>
									<a href="{{url('/admin/admindelboard/'.$rel->id)}}" class="view-link">删除</a>
									<a href="{{('/admin/adminbboard/'.$rel->id)}}" class="view-link">回复留言</a>
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


