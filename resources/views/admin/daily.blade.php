@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						日志管理
					</h1>
		{{--<h3><a href="{{url('./adminaddboard')}}" class="view-link">管理员留言</a></h3>--}}
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									日志\ID
								</th>
								<th>
									用户\ID
								</th>
								<th>
									标题\caption
								</th>
								<th>
									内容\content
								</th>
								<th>
									时间\posttime
								</th>
								<th>
									图片\img
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
									{{$rel->caption}}
								</td>
								<td>
									{{$rel->content}}
								</td>
								<td>
									{{$rel->posttime}}
								</td>
								<td>
									<img style="width: 50px;height: 50px;" src="{{asset('home/upImg/'.$rel->img)}}" alt="">
								</td>
								<td>
									<a href="{{url('./admin/admindeldaily/'.$rel->id)}}" class="view-link">删除</a>
									<a href="{{url('/admin/admincomment/'.$rel->id)}}" class="view-link">评论</a>
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


