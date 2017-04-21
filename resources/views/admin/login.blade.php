<!DOCTYPE html>
<html lang="en" class="ie6 ielt7 ielt8 ielt9"><html lang="en" class="ie7 ielt8 ielt9"><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>欢迎登陆</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-responsive.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/site.css')}}">
		<style>
			#login-page{margin-top: 10%}
		</style>
	</head>
	<body>
		<div id="login-page" class="container">
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;欢迎登陆</h1>
			<br><br>
			<form id="login-form" class="well" action="/admin/login-verify" method="post">
				{{csrf_field()}}
				{{--显示错误信息--}}
				@if(count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif

				邮&nbsp;&nbsp;&nbsp;&nbsp;箱:&nbsp;<input type="email" class="span2" placeholder="email" name="email"/><br />
					<br>
				密&nbsp;&nbsp;&nbsp;&nbsp;码&nbsp;:&nbsp;<input type="password" class="span2" placeholder="Password" name="password"/><br />
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="submit" class="btn btn-primary">登陆</button>
				<button type="submit" class="btn">忘记密码</button>
			</form>
		</div>
		<script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/site.js')}}"></script>
	</body>
</html>