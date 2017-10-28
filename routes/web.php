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
/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();

/*======= BLOG =========*/
Route::get('/', 'PostController@index')->name('home');
/*All Post*/
Route::get('/blog/allposts', 'PostController@allposts')->name('blog.allposts');

Route::get('/blog/create', 'PostController@create')->name('blog.create');

/*              link         Controller     fungsi         alias name*/
Route::post('/blog/create', 'PostController@store')->name('blog.store');
/*Delete*/
Route::delete('/blog/{post}/delete', 'PostController@destroy')->name('blog.destroy');

/*Single Post*/
Route::get('/blog/singlepost/{post}', 'PostController@show')->name('blog.singlepost');

/*Edit*/
Route::get('/blog/edit/{post}', 'PostController@edit')->name('blog.edit');
Route::patch('/blog/{post}/update', 'PostController@update')->name('blog.update');

/*==== Comment Post*/
Route::post('blog/{post}/comment','CommentController@store')->name('blog.comment.store');