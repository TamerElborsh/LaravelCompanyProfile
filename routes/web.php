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
Route::group(['prefix'=> 'dashboard', 'middleware'=>'auth', 'namespace' => 'dashboard'], function () {
    Route::get('/', 'DashboardController@showIndex')->name('admin');
    Route::resource('posts ', 'PostController');
    Route::resource('users ', 'UserController');
    Route::resource('contacts ', 'ContactsController');
    Route::resource('categories ', 'CategoryController');
});

Route::get('login', 'AuthController@login')->name('login');
Route::post('authenticate', 'AuthController@authenticate')->name('authenticate');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('register', 'AuthController@register')->name('register');
Route::post('register', 'AuthController@do_register')->name('do_register');





Route::get('/','FrontController@showIndex')->name('home');
Route::get('/aboutUs','FrontController@ShowAboutUs')->name('aboutUs');
Route::get('/services','FrontController@ShowServices')->name('services');
Route::get('/portfolio','FrontController@ShowPortfolio')->name('portfolio');
Route::get('/contact','FrontController@ShowContact')->name('contact');
Route::get('/404','FrontController@Show404')->name('404');
Route::get('/blog','FrontController@ShowBlog')->name('blog');
