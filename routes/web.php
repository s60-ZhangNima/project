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
Route::post('home/per_info/upid/{id}','Home\UserController@citys');


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
Route::get('home/per_showfriends','Home\Usercontroller@showFriends');
//查看我的好友
Route::get('home/per_myfriends','Home\Usercontroller@myFriends');


//添加好友
Route::get('home/per_addfri/{id}','Home\Usercontroller@addFriends');
//添加关注和取消关注
Route::get('home/per_mind/{id}','Home\Usercontroller@addOrdelMind');
//查看我关注的
Route::get('home/per_imind/','Home\Usercontroller@showImind');
//查看谁关注我
Route::get('home/per_mmind/','Home\Usercontroller@mindMe');





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

