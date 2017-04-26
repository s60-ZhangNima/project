@extends('mmm\admin')
@section('content')
	<div class="span9">

		<h2>应用管理</h2>
		<li><a href="{{url('/admin/apply-add')}}">新增应用</a></li>
		<br><br>
		<ul class="thumbnails">
			@foreach($applys as $apply)
			<li class="span3">
					<div class="thumbnail">
						<img src="{{asset($apply->icon)}}" alt="" style="width: 300px; height: 300px;"/>
						<div class="caption" style="text-align: center;">
							<h5>{{$apply->name}}</h5>
							<p>
								<a href="{{url('admin/apply-update/'.$apply->id)}}">修改</a>
								<a href="{{url('admin/apply-delete/'.$apply->id)}}">删除</a>
							</p>
						</div>
					</div>

			</li>
				@endforeach
		</ul>
		<div class="pagination">
			{{$applys->links()}}
		</div>
	</div>

	@endsection

