<?php

use Illuminate\Support\Facades\Route;

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
Route::pattern('id','[0-9]+');

Route::get('home','NewsController@get_all_news')->name('home');

Route::get('post/{news_id}','NewsController@get_news')->name('post');

Route::post('add_news','NewsController@add_news')-> name('add_news');

Route::get('delete_news/{id}','NewsController@delete_news')->where('id','[0-9]+')->name('delete_news');

Route::get('soft_delete_news/{id}','NewsController@soft_delete_news')->where('id','[0-9]+')->name('soft_delete_news');

Route::get('restore','NewsController@restore')->name('restore');
