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

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('posts', 'PostsController@index')->name('posts');
Route::get('post/{id}', 'PostsController@show')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new_post', 'AdminController@index')->name('new_post');
Route::post('/store_post', 'AdminController@store')->name('store_post');

