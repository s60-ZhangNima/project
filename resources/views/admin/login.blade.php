<!DOCTYPE html>
<html lang="en" class="ie6 ielt7 ielt8 ielt9"><html lang="en" class="ie7 ielt8 ielt9"><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>欢迎登陆</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-responsive.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin/css/site.css')}}">
		<style>
			#login-page{margin-top: 10%}
		</style>
	</head>
	<body>
		<div id="login-page" class="container">
			<h1>欢迎登陆</h1>
			<form id="login-form" class="well" action="index.htm">
			用户名:<input type="text" class="span2" placeholder="name" /><br />
			密码:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" class="span2" placeholder="Password" /><br />
			<label class="checkbox"> <input type="checkbox" /> 记住我 </label>
			<button type="submit" class="btn btn-primary">登陆</button>
			<button type="submit" class="btn">忘记密码</button>
		</form>	
		</div>
		<script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/site.js')}}"></script>
	</body>
</html>