<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
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

Route::get('/', [NewsController::class , 'get_all_news'])->name('home');

Route::pattern('id','[0-9]+');

// Route::get('home', [NewsController::class , 'get_all_news'])->name('home');

Route::get('post/{news_id}', [NewsController::class , 'get_news'])->name('post');

Route::post('add_news', [NewsController::class , 'add_news'])-> name('add_news');

Route::get('create_new', [NewsController::class , 'create_new'])-> name('create_new');

Route::get('delete_news/{id}', [NewsController::class , 'delete_news'])->where('id','[0-9]+')->name('delete_news');

Route::get('soft_delete_news/{id}', [NewsController::class , 'soft_delete_news'])->where('id','[0-9]+')->name('soft_delete_news');

Route::get('restore', [NewsController::class , 'restore'])->name('restore');