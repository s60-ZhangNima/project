@extends('mmm\admin')
@section('content')
	<div class="span9">
					<h1>
						反馈信息
					</h1>
					<h2>
					</h2>
					<ul class="messages">
						@foreach($result as $rel)
						<li class="well">
							<p class="message">
								{{$rel->content}}
							</p>
							<span class="meta"><b>反馈人:</b>{{$rel->username}}&nbsp;&nbsp;&nbsp;<em>反馈时间:{{date('Y-m-d H:i:s',$rel->time)}}</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a
											href="{{url('/admin/admindelfeedback/'.$rel->id)}}">删除</a></b></span>
						</li>
						@endforeach

					</ul>
					{{--<a class="toggle-link" href="#message-reply"><i class="icon-plus"></i> Reply</a>--}}
					{{--<form id="message-reply" class="form-horizontal hidden">--}}
						{{--<fieldset>--}}
							{{--<legend>Reply</legend>--}}
							{{--<div class="control-group">--}}
								{{--<label class="control-label" for="textarea">Message</label>--}}
								{{--<div class="controls">--}}
									{{--<textarea class="input-xlarge" id="textarea" rows="4"></textarea>--}}
								{{--</div>--}}
							{{--</div>--}}
							{{--<div class="form-actions">--}}
								{{--<button type="submit" class="btn btn-primary">Create</button> <button class="btn">Cancel</button>--}}
							{{--</div>--}}
						{{--</fieldset>--}}
					{{--</form>--}}
				</div>
	@endsection

