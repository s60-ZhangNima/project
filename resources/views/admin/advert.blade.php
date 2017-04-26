@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						广告管理
					</h1><h3><a href="{{url('/admin/adminaddadvert')}}" class="view-link">新增</a></h3>
					<table class="table table-bordered table-striped" style="text-align: center;">
						<thead>
							<tr>
								<th>
									图片\ID
								</th>
								<th>
									图片\IMG
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
									<img  class="abc" src="{{asset('home/upImg/'.$rel->img)}}" alt=""style="width: 50px;height: 50px;">
								</td>
								<td>
									<a href="{{url('/admin/admindeladvert/'.$rel->id)}}" class="view-link">删除</a>
									<a href="{{url('/admin/adminreadvert/'.$rel->id)}}" class="view-link">编辑</a>
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


