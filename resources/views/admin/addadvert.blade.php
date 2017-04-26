@extends('mmm\admin')
@section('content')
				<div class="span9">
					{{--@foreach($result as $rel)--}}
					<form id="edit-profile" class="form-horizontal" action="{{url('/admin/adminaddadvert')}}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
						<fieldset>
							<legend>新增图片</legend>
							<div class="control-group">
								{{--<label class="control-label" for="input01">当前相册:</label>--}}
								{{--<div class="controls"><b>{{$rel->name}}</b></div>--}}
								<img  class="abc" src="{{asset('home/img/10.jpg')}}" alt="" style="width:300px;height: 300px; ">

							</div>
							<div class="control-group">
								<label class="control-label" for="fileInput"><b>选择图片:</b></label>
								<div class="controls">
									<input class="input-file" id="fileInput" type="file"  name="img"/>
									{{--<input type="hidden" value="{{$rel->id}}" name="gid">--}}
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">图片上传</button>
							</div>
						</fieldset>
					</form>
						{{--@endforeach--}}
				</div>
	@endsection
