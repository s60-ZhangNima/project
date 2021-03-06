@extends('mmm\admin')
@section('content')
				<div class="span9">
					{{--<form action="{{url('./img')}}" method="post" enctype="multipart/form-data">--}}
					<form id="edit-profile" class="form-horizontal" action="{{url('/admin/adminaddboard')}}" method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<fieldset>
							<legend>管理员留言</legend>
							<div class="control-group">
								<label class="control-label" for="textarea">内容</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="4" name="content"></textarea>
									<input type="hidden" name="posttime" value="{{time()}}">
									<input type="hidden" name="uid" value="8">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="optionsCheckbox">是否公开</label>
								<div class="controls">
									<input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">确认留言</button>
							</div>
						</fieldset>
					</form>
				</div>
	@endsection
