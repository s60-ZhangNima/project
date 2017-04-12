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
//登入页
Route::get('/', 'LoginController@login');
//前台首页
Route::get('/index', 'IndexController@index');
//
Route::any('/singin', 'UserController@singin');
//注册页
Route::get('/register', 'UserController@register');
//
Route::post('/store','UserController@store');

Route::get('/verify/{confirmed_code}', 'UserController@emailConfirm');




