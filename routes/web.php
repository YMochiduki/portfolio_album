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
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('albums', 'AlbumController');
Route::resource('users', 'UserController')->only([
    'show', 'update'
]);
Route::resource('likes', 'LikeController')->only([
    'index', 'store', 'destroy'
]);
Route::patch('/posts/{post}/toggle_like', 'PostController@toggleLike')->name('posts.toggle_like');

