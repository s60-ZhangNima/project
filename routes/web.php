<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('welcome');
//});

//个人主页
Route::get('/home/per_home','Home\UserController@perHome');

//写状态
Route::post('/home/per_home','Home\UserController@writeState');

//写评论
Route::post('/home/per_home/com','Home\UserController@writeComment');

//看评论
Route::get('/home/per_comments/{id}','Home\UserController@showComment');

//写故事
Route::post('/home/per_home/story','Home\UserController@writeStory');

//删除故事
Route::get('/home/per_home/{id}','Home\UserController@delStory');

//删除评论
Route::get('/home/per_comments/cid/{id}','Home\UserController@delComments');

//评论点赞
Route::get('/home/per_comments/pra/{id}','Home\UserController@perCpraise');


//资料
Route::get('/home/per_info','Home\UserController@perInfo');

//地址
Route::get('home/per_info/upid','Home\UserController@citys');


//状态
Route::get('/home/per_state','Home\UserController@perState');

//点赞
Route::get('/home/per_state/{id}','Home\UserController@perPraise');



//关注
Route::get('/home/per_focus','Home\UserController@perFocus');


//设置
Route::get('/home/per_settings','Home\UserController@perSettings');

//头像
Route::get('/home/per_icon/{name?}','Home\UserController@perIcon');


//上传头像
Route::post('/home/per_icon','Home\UserController@upIcon');

//填写资料
//学校信息
Route::post('/home/per_info/school','Home\UserController@writeSchool');
//工作信息
Route::post('/home/per_info/work','Home\UserController@writeWork');
//喜欢爱好信息
Route::post('/home/per_info/like','Home\UserController@writeLike');
//个人信息
Route::post('/home/per_info/info','Home\UserController@writeInfo');
//情感信息
Route::post('/home/per_info/feeling','Home\UserController@writeFeel');


//展示其他用户
//Route::get('home/per_myfri','Home\Usercontroller@showFriends');
//查看我的好友
Route::get('home/per_myFri','Home\Usercontroller@myFriends');


//添加好友
Route::get('home/per_friend','Home\Usercontroller@addOrdelFriends');
//添加关注和取消关注
Route::get('home/per_mind','Home\Usercontroller@addOrdelMind');
//查看我关注的
Route::get('home/per_Ifocus/','Home\Usercontroller@showImind');
//查看谁关注我
Route::get('home/per_FocusMe/','Home\Usercontroller@mindMe');

//修改密码
Route::post('home/per_changepwd','Home\Usercontroller@changePwd');
//修改邮箱
Route::post('home/per_changeEmail','Home\Usercontroller@changeEmaile');

//删除状态
Route::get('home/deleteState','Home\UserController@delStates');

//短信验证
Route::get('/sendSMS','Home\Usercontroller@sendSMS');

//登入页
Route::get('/', 'LoginController@login');
//前台首页
Route::get('/index', 'IndexController@index');
Route::any('/singin', 'UserController@singin');
//注册页
Route::get('/home/register', 'UserController@register');
Route::post('/store','UserController@store');


Route::get('/verify/{confirmed_code}', 'UserController@emailConfirm');
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/{confirmed_code}', 'UserController@emailConfirm');



//李进楷

//Route::get('/h','IndexController@index');
Route::get('/home/photo','photoController@photo');
Route::get('/home/per_photo','per_photoController@per_photo');
//后台主页
Route::get('/admin/admin','adminController@admin');
//后台登录
Route::get('/admin/login','AdminloginController@login');
Route::get('/admin/blank','blankController@blank');
Route::get('/admin/files','filesController@files');
Route::get('/admin/gallery','galleryController@gallery');
Route::get('/admin/help','activityController@help');
Route::get('/admin/messages','messagesController@messages');
Route::get('/admin/projects','projectsController@projects');
Route::get('/home/createphoto','createphotoController@createphoto');
Route::get('/home/photolist','photolistController@photolist');
Route::get('/home/board','boardController@board');
Route::get('/admin/activity','activityController@activity');


//用户管理：

//用户信息
Route::get('/admin/info/{id}','activityController@showInfo');
//编辑感情
Route::post('/admin/info/feeling','activityController@writeFeel');
//编辑基本信息
Route::post('/admin/info/baseInfo','activityController@writeInfo');
//编辑爱好
Route::post('/admin/info/like','activityController@writeLike');
//编辑工作信息
Route::post('/admin/info/work','activityController@writeWork');
//编辑学校信息
Route::post('/admin/info/school','activityController@writeSchool');


//删除感情信息
Route::get('/admin/delFel/{id}','activityController@delFeel');

//删除基本信息
Route::get('/admin/baseInfo/{id}','activityController@delBaseInfo');

//删除爱好
Route::get('/admin/like/{id}','activityController@delLike');

//删除工作信息
Route::get('/admin/work/{id}','activityController@delWork');

//删除学校信息
Route::get('/admin/school/{id}','activityController@delSchool');









//删除状态
Route::get('admin/deleteState','activityController@delStates');

//删除故事
Route::get('admin/deleteStory','activityController@delStory');
//编辑状态
Route::post('/admin/editState','activityController@editStates');

//编辑故事editStory
Route::post('/admin/editStory','activityController@editStory');

//查看评论
Route::get('admin/showComments/{id}','activityController@showComments');
//删除评论
Route::get('admin/delComments','activityController@delComments');
//编辑评论
Route::post('admin/editComment','activityController@editComments');

//统计评论
Route::get('admin/count','activityController@count');

//状态
Route::get('/admin/state_story/{id}','activityController@showStaSto');
//朋友关心
Route::get('/admin/friends_focus/{id}','activityController@showMyfri');
Route::get('/admin/iFocus/{id}','activityController@showIfocus');
Route::get('/admin/focusMe/{id}','activityController@showFocusMe');
Route::get('/admin/friends_addFri/{id}','activityController@showFriFoc');

//删除用户
Route::get('/admin/delete/{id}','activityController@delete');

//删除好友
Route::get('/admin/delOrAddFri/{id}/{fid}','activityController@delOrAddFri');

//取消关注和关注
Route::get('/admin/delOrAddMind/{id}/{fid}','activityController@delOrAddMind');










//权限管理
    //权限列表,分页显示
//Route::get('/admin/activity','Auth\PermissionController@activity');
    //添加
//Route::any('/admin/profile','Auth\PermissionController@permissionAdd');
//    //修改
//Route::any('/admin/alter/{permission_id}', 'Auth\PermissionController@permissionUpdate')/*->middleware('rbac')*/;
//    //删除
//Route::get('/admin/alter/{permission_id}', 'Auth\PermissionController@permissionDelete');








//角色管理
//Route::get('/admin/role-list', 'Admin\RoleController@roleList')/*->middleware('rbac')*/;
//Route::any('/admin/role-add', 'Admin\RoleController@roleAdd')/*->middleware('rbac')*/;
//Route::any('/admin/role-update/{role_id}', 'RoleController@roleUpdate')/*->middleware('rbac')*/;
//Route::get('/admin/role-delete/{role_id}', 'RoleController@roleDelete')/*->middleware('rbac')*/;
//Route::any('/admin/attach-permission/{role_id}', 'RoleController@attachPermission')/*->middleware('rbac')*/;


//管理员管理
//Route::get('/user-list', 'UserController@userList')->middleware('rbac');
//Route::any('/user-add', 'UserController@userAdd');
//Route::any('/attach-role/{user_id}', 'UserController@attachRole');









