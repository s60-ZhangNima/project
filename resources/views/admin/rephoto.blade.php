@extends('mmm\admin')
@section('content')
				<div class="span9">
					@foreach($result as $rel)
			<form id="edit-profile" class="form-horizontal" action="{{url('admin/adminrephoto')}}" method="post" enctype="multipart/form-data">
				 {{csrf_field()}}
						<fieldset>
							<legend>编辑相册</legend>
							<div class="control-group">
								<label class="control-label" for="input01">相册名</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="{{$rel->name}}" name="name" />
									<input type="hidden" value="{{$rel->id}} " name="id">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="textarea">描述</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="4" name="desc">{{$rel->desc}}</textarea>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="optionsCheckbox">是否公开</label>
								<div class="controls">
									<input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
								</div>
							</div>						
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">确认修改</button>
							</div>
						</fieldset>
					</form>
						@endforeach
				</div>
	@endsection
