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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/edit/{post}', 'PostsController@edit')->where('post', '[0-9]+');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy')->where('post', '[0-9]+');

Route::post('/posts/comments/{post}', 'CommentsController@store')->where('post', '[0-9]+');
Route::delete('/posts/comments/{comment}', 'CommentsController@destroy')->where('comment', '[0-9]+');