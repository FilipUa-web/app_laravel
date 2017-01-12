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

Route::get('/admin',function (){
    return view('admin.index');
});

//Route::group(['middleware' => 'admin'], function (){
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/media', 'AdminMediaController');
//});

Route::get('/post/{post}', 'PostsController@show');
Route::get('/posts', 'PostsController@index');

Route::post('comments/{post_id}', 'CommentsController@store' );

Auth::routes();

Route::get('/home', 'HomeController@index');
