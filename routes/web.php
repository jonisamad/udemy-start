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
    dan pada bagian ini anda bisa menambahlan catatan catan 
|
*/

Route::get('/' , 'HomeController@home')->name('home');
Route::get('/contact2', 'HomeController@contact')->name('contact');

Route::resource('/posts','PostController')->only(['index','show']);