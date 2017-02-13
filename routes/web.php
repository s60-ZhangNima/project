<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/h','IndexController@index');
Route::get('/photo','photoController@photo');
Route::get('/img','per_photoController@per_photo');
Route::get('/a','AdminController@index');
Route::get('/login','AdminloginController@login');
Route::get('/activity','activityController@activity');
Route::get('/blank','blankController@blank');
Route::get('/files','filesController@files');
Route::get('/gallery','galleryController@gallery');
Route::get('/help','activityController@help');
Route::get('/messages','messagesController@messages');
Route::get('/profile','profileController@profile');
Route::get('/projects','projectsController@projects');