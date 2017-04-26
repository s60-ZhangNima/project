@extends('mmm\admin')
@section('content')
				<div class="span9">
					@foreach($result as $rel)
					<form id="edit-profile" class="form-horizontal" action="{{url('admin/adminaddphotolist')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
						<fieldset>
							<legend>新增照片</legend>
							<div class="control-group">
								<label class="control-label" for="input01">当前相册:</label>
								<div class="controls"><b>{{$rel->name}}</b></div>
								<img  class="abc" src="{{asset('home/img/default.jpg')}}" alt="">

							</div>
							<div class="control-group">
								<label class="control-label" for="fileInput">照片</label>
								<div class="controls">
									<input class="input-file" id="fileInput" type="file"  name="pic"/>
									<input type="hidden" value="{{$rel->id}}" name="gid">
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">照片上传</button>
							</div>
						</fieldset>
					</form>
						@endforeach
				</div>
	@endsection
