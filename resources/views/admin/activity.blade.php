@extends('mmm\admin')
@section('content')


					<h1>
						用户管理
					</h1>
					<a href="{{url('/admin/addUsers')}}">添加用户</a>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-ysid"></use>
									</svg>
									用户ID
								</th>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-jinlingyingcaiwangtubiao31"></use>
									</svg>
									用户邮箱
								</th>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-ziliaojilu"></use>
									</svg>

									用户资料
								</th>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-zhuangtai"></use>
									</svg>
									用户状态 /
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-riji-neirong"></use>
									</svg>
									故事
								</th>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-haoyou"></use>
									</svg>

									用户好友 /
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-guanzhu1"></use>
									</svg>
									关注
								</th>
								<th>
									<svg class="icon" aria-hidden="true">
										<use xlink:href="#icon-shanchu"></use>
									</svg>
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
									<i class="iconfont icon-changyongxinxi" ></i>
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
									@if($item->prohibit == 1)
										<a href="{{url('admin/canProhibit/'.$item->id)}}">取消禁用</a>
									@else
										<a href="{{url('admin/prohibit/'.$item->id)}}">禁用</a>
									@endif
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


@endsection


