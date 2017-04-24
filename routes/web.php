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
Route::get('/home/delC','Home\UserController@delComments');

//评论点赞
Route::get('/home/pra','Home\UserController@perCpraise');


//资料
Route::get('/home/per_info','Home\UserController@perInfo');

//地址
Route::get('home/per_info/upid','Home\UserController@citys');


//状态
Route::get('/home/per_state','Home\UserController@perState');

//点赞
Route::get('/home/praises','Home\UserController@perPraise');



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
Route::post('home/per_changepwd','Home\UserController@changePwd');
//修改邮箱
Route::post('home/per_changeEmail','Home\UserController@changeEmaile');

//删除状态
Route::get('home/deleteState','Home\UserController@delStates');

//短信验证
Route::get('/sendSMS','Home\UserController@sendSMS');


//查看我的积分
Route::get('home/per_character','Home\UserController@showCharacter');
//人品商品商城
Route::get('home/per_store','Home\UserController@showStore');
//查看商品的详情
Route::get('home/RP_desc/{id}','Home\UserController@descRp');
//我可兑换的
Route::get('home/per_canChange','Home\UserController@canChange');
//获得随机人品
Route::get('home/get_RP','Home\UserController@getRP');
//购买rp商品
Route::get('home/buy_goods','Home\UserController@buyGoods');
//跳转到我兑换的页面
Route::get('home/exchange','Home\UserController@exchange');

//删除我的订单
Route::get('home/delOr/{id}','Home\UserController@delOr');


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

//用户禁用
Route::get('admin/prohibit/{id}','activityController@prohibit');
Route::get('admin/canProhibit/{id}','activityController@canProhibit');

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
//用户的添加页面
Route::get('admin/addUsers','activityController@addUsers');
//用户添加
Route::post('admin/doAdd','activityController@doAdd');

//感情信息的添加页面
Route::get('admin/showFeel/{uid}','activityController@showFeel');
//学校信息添加页面
Route::get('admin/showSchool/{uid}','activityController@showSchool');
//喜欢信息添加页面
Route::get('admin/showLike/{uid}','activityController@showLike');
//工作信息的添加页面
Route::get('admin/showWork/{uid}','activityController@showWork');
//基本信息的添加页面
Route::get('admin/showBase/{uid}','activityController@showBase');

//感情添加
Route::post('admin/addFeeling','activityController@addFeel');

//工作添加
Route::post('admin/addWork','activityController@addWork');

//喜欢添加
Route::post('admin/addLike','activityController@addLike');

//学校添加
Route::post('admin/addSchool','activityController@addSchool');

//基本信息添加
Route::post('admin/addBase','activityController@addBase');

//显示state的添加页面
Route::get('admin/showState/{uid}','activityController@showState');
//显示story的页面
Route::get('admin/showStory/{uid}','activityController@showStory');

//添加状态
Route::post('admin/addState','activityController@addState');

//添加故事
Route::post('admin/addStory','activityController@addStory');

//查看评论页面
Route::get('admin/showCom/{uid}','activityController@showCom');


//添加评论
Route::post('admin/addCom/{sid}','activityController@addCom');


//查看用户RP
Route::get('admin/user_quan','activityController@user_quan');

//删除RP用户
Route::get('admin/RP_del/{id}','activityController@RP_del');


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


//人品管理
Route::get('admin/quantity','activityController@showQuantity');
//人品添加页面
Route::get('admin/RP','activityController@showAddRp');
//删除商品
Route::get('admin/deleteGoods/{id}','activityController@deleteGoods');
Route::get('admin/editGoods/{id}','activityController@showeditGoods');
Route::post('admin/editGOODS','activityController@editGoods');

//添加人品商品
Route::post('admin/addGoods','activityController@addGoods');
//rp兑换订单
Route::get('admin/exchange','activityController@exchange');
//删除订单
Route::get('admin/deleteEx/{id}','activityController@exchangeDel');




//权限管理
    //权限列表,分页显示

Route::get('/admin/privilege','Auth\PermissionController@privilege');
    //添加
Route::any('/admin/profile','Auth\PermissionController@permissionAdd');
    //修改
Route::any('/admin/alter/{permission_id}', 'Auth\PermissionController@permissionUpdate')->middleware('rbac');
    //删除
Route::get('/admin/delete/{permission_id}', 'Auth\PermissionController@permissionDelete');


//角色管理
    //角色列表
Route::get('/admin/role-list', 'Admin\RoleController@roleList')->middleware('rbac');
    //增加
Route::any('/admin/role-add', 'Admin\RoleController@roleAdd')->middleware('rbac');
    //修改
Route::any('/admin/role-update/{role_id}', 'Admin\RoleController@roleUpdate')->middleware('rbac');
    //删除
Route::get('/admin/role-delete/{role_id}', 'Admin\RoleController@roledelete')->middleware('rbac');
    //分配权限
Route::any('/admin/assignment/{role_id}', 'Admin\RoleController@assignment')->middleware('rbac');


//管理员管理
Route::get('/admin/user-list', 'Admin\UserController@userList')->middleware('rbac') ;
Route::any('/admin/user-add', 'Admin\UserController@userAdd');
Route::any('/admin/user-update/{user_id}', 'Admin\UserController@userupdate');
Route::any('/admin/user-delete/{user_id}', 'Admin\UserController@userdelete');
Route::any('/admin/attach-role/{user_id}', 'Admin\UserController@allotrole');










