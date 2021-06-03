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

Route::get('/index', 'pagescontroller@index');
Route::get('/about', 'pagescontroller@about');
Route::get('/contact', 'pagescontroller@contact');
Route::get('/welcome', 'pagescontroller@welcome');
Route::get('/thankyou', 'pagescontroller@thankyou');
Route::get('/cart', 'pagescontroller@cart');
Route::get('/home', 'pagescontroller@home');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
