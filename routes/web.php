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



Route::get('/', 'PostController@index');
Route::get('/posts/create', 'PostController@create')->middleware('auth');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update')->middleware('auth');
Route::delete('/posts/{post}', 'PostController@destroy')->middleware('auth');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store')->middleware('auth');
Auth::routes();
Route::get('/home', 'PostController@home');