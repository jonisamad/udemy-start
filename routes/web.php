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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::view('/','home'); //sebelum di buat controller
//Route::view('/contact','contact'); //sebelum di buat controller
Route::get('/' , 'HomeController@home')->name('home');
Route::get('/contact2', 'HomeController@contact')->name('contact');
// Route::get('/blog-spot/{id}/{welcome?}','HomeController@blogspot')->name('blog-spot');
Route::resource('/posts','PostController')->only(['index','show']);