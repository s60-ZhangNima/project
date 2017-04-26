@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						留言板管理
					</h1>
		{{--<h3><a href="" class="view-link">新增回复</a></h3>--}}
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									回复\ID
								</th>
								<th>
									用户\UID
								</th>
								<th>
									留言\GID
								</th>
								<th>
									回复内容
								</th>
								<th>
									时间\POSTTIME
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
									{{$rel->gid}}
								</td>
								<td>
									{{$rel->content}}
								</td>
								<td>
									{{$rel->posttime}}
								</td>
								<td>
									<a href="{{url('./admindelbboard/'.$rel->id)}}" class="view-link">删除</a>
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


