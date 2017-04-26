<!DOCTYPE html>
<html lang="en" class="ie6 ielt7 ielt8 ielt9"><html lang="en" class="ie7 ielt8 ielt9"><html lang="en" class="ie8 ielt9"><html lang="en" class="ie9">
<html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>后台管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/site.css')}}">
    <script type="text/javascript" src="{{asset('home/js/jquery-1.8.3.min.js')}}"></script>
 @yield('mycss')

</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">后台管理系统</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li>
                            <a href="index.html">首页</a>
                        </li>
                        <li>
                            <a href="settings.htm">管理页</a>
                        </li>
                        <li>
                            <a href="help.htm">帮助</a>
                        </li>
                        <li class="dropdown">
                            <a href="help.htm" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('admin/user-list')}}">管理员管理</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/image-list')}}">封面管理</a>
                                </li>

                                <li>
                                    <a href="./activity">用户管理</a>
                                </li>
                                <li>
                                    <a href="{{url('admin/link-list')}}">友情链接</a>
                                </li>
                                <li>
                                    <a href="./activity">相册管理</a>
                                </li>
                                <li class="divider">
                                </li>

                                <li>
                                    <a href="{{url('admin/apply-list')}}">应用管理</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <form class="navbar-search pull-left" action="">
                        <input type="text" class="search-query span2" placeholder="Search" />
                    </form> -->
                    <ul class="nav pull-right">
                        <li>
                            <a>欢迎 【 {{Auth::user()['name']}} 】</a>
                        </li>
                        <li>
                            <a href="./login">退出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span3">
            <div class="well" style="padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">
                        菜单
                    </li>
                    <li class="active">
                        <a href="{{url('admin/admin')}}"><i class="icon-white icon-home"></i>首页</a>
                    </li>
                    <li>
                        <a href="{{url('admin/projects')}}"><i class="icon-folder-open"></i> 项目</a>
                    </li>
                    <li>
                        <a href="{{url('admin/messages')}}"><i class="icon-envelope"></i> 邮件</a>
                    </li>
                    <li>
                        <a href="{{url('admin/files')}}"><i class="icon-file"></i> 文件</a>
                    </li>
                    <li>
                        <a href="{{url('admin/activity')}}"><i class="icon-list-alt"></i> 用户列表</a>
                    </li>
                    <li class="nav-header">
                        权限管理
                    </li>
                    <li>
                        <a href="{{url('admin/privilege')}}"><i class="icon-list-alt"></i> 权限管理</a>
                    </li>
                    <li>
                    <li>
                        <a href="{{url('admin/role-list')}}"><i class="icon-list-alt"></i> 角色管理</a>
                    </li>

                    <li>
                        <a href="{{url('admin/serve-list')}}"><i class="icon-list-alt"></i> 服务管理</a>
                    </li>
                    {{--<li>
                        <a href="./alter"><i class="icon-user"></i> 修改</a>
                    </li>--}}
                    {{--<li>
                        <a href="./profile"><i class="icon-user"></i> 添加</a>
                    </li>--}}
                    <li class="divider">
                    </li>
                    <li>
                        <a href="./help"><i class="icon-info-sign"></i> Help</a>
                    </li>
                    <li class="nav-header">
                        应用
                    </li>
                    <li>
                        <a href="{{url('admin/apply-list')}}"><i class="icon-picture"></i> 应用管理</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="span9" style="width:855px">
            @section('content')
            <h1>
                首页
            </h1>
            <div class="hero-unit">
                <h1>
                    欢迎!
                </h1>
                <p>
                    史上最牛的后台管理系统.
                </p>
                <p>
                    <a href="help.htm" class="btn btn-primary btn-large">Start Tour</a> <a class="btn btn-large">No Thanks</a>
                </p>
            </div>
            <div class="well summary">
                <ul>
                    <li>
                        <a href="#"><span class="count">3</span> 超级管理员</a>
                    </li>
                    <li>
                        <a href="#"><span class="count">27</span>管理员 </a>
                    </li>
                    <li>
                        <a href="#"><span class="count">7</span> 会员</a>
                    </li>
                    <li class="last">
                        <a href="#"><span class="count">5</span> 用户</a>
                    </li>
                </ul>
            </div>
            <h2>
                用户列表
            </h2>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        Project
                    </th>
                    <th>
                        Client
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        View
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        Nike.com Redesign
                    </td>
                    <td>
                        Monsters Inc
                    </td>
                    <td>
                        New Task
                    </td>
                    <td>
                        4 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nike.com Redesign
                    </td>
                    <td>
                        Monsters Inc
                    </td>
                    <td>
                        New Message
                    </td>
                    <td>
                        5 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nike.com Redesign
                    </td>
                    <td>
                        Monsters Inc
                    </td>
                    <td>
                        New Project
                    </td>
                    <td>
                        5 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Twitter Server Consulting
                    </td>
                    <td>
                        Bad Robot
                    </td>
                    <td>
                        New Task
                    </td>
                    <td>
                        6 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Childrens Book Illustration
                    </td>
                    <td>
                        Evil Genius
                    </td>
                    <td>
                        New Message
                    </td>
                    <td>
                        9 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Twitter Server Consulting
                    </td>
                    <td>
                        Bad Robot
                    </td>
                    <td>
                        New Task
                    </td>
                    <td>
                        16 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Twitter Server Consulting
                    </td>
                    <td>
                        Bad Robot
                    </td>
                    <td>
                        New Project
                    </td>
                    <td>
                        16 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Twitter Server Proposal
                    </td>
                    <td>
                        Bad Robot
                    </td>
                    <td>
                        Completed Project
                    </td>
                    <td>
                        20 days ago
                    </td>
                    <td>
                        <a href="#" class="view-link">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <ul class="pager">
                <li class="next">
                    <a href="./activity">More &rarr;</a>
                </li>
            </ul>
            @show
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('admin/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/site.js')}}"></script>

</body>
</html>