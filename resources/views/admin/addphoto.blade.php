@extends('mmm\admin')
@section('content')
				<div class="span9">
					{{--<form action="{{url('./img')}}" method="post" enctype="multipart/form-data">--}}
					<form id="edit-profile" class="form-horizontal" action="{{url('/admin/adminaddphoto')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<fieldset>
							<legend>创建相册</legend>
							<div class="control-group">
								<label class="control-label" for="input01">相册名</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" name="name"  />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="textarea">描述</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="4" name="desc"></textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="optionsCheckbox">是否公开</label>
								<div class="controls">
									<input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">增加相册</button>
							</div>
						</fieldset>
					</form>
				</div>
	@endsection
