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

Route::get('/', 'pagescontroller@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories/create', 'Categoriescontroller@create')->name('categories.create');
Route::get('/categories', 'Categoriescontroller@index')->name('categories.index');
Route::get('/categories/{id}', 'Categoriescontroller@destroy')->name('categories.destroy');
Route::get('/categories/{id}/edit', 'Categoriescontroller@edit')->name('categories.edit');
Route::post('/categories/{id}/update', 'Categoriescontroller@update')->name('categories.update');
Route::post('/categories/store', 'Categoriescontroller@store')->name('categories.store');
Route::get('/products/create', 'Productscontroller@create')->name('products.create');
Route::get('/products', 'Productscontroller@index')->name('products.index');
Route::get('/products/{id}', 'Productscontroller@destroy')->name('products.destroy');
Route::get('/products/{id}/edit', 'Productscontroller@edit')->name('products.edit');
Route::post('/products/{id}/update', 'Productscontroller@update')->name('products.update');
Route::post('/products/store', 'Productscontroller@store')->name('products.store');
Route::get('/brands/create', 'Brandscontroller@create')->name('brands.create');
Route::get('/brands', 'Brandscontroller@index')->name('brands.index');
Route::get('/brands/{id}', 'Brandscontroller@destroy')->name('brands.destroy');
Route::get('/brands/{id}/edit', 'Brandscontroller@edit')->name('brands.edit');
Route::post('/brands/{id}/update', 'Brandscontroller@update')->name('brands.update');
Route::post('/brands/store', 'Brandscontroller@store')->name('brands.store');
Route::get('/photos/create', 'Imagescontroller@create')->name('photos.create');
Route::get('/photos', 'Imagescontroller@index')->name('photos.index');
Route::get('/photos/{id}', 'Imagescontroller@destroy')->name
('photos.destroy');
Route::get('/photos/{id}/edit', 'Imagescontroller@edit')->name
('photos.edit');
Route::post('/photos/{id}/update', 'Imagescontroller@update')->name
('photos.update');
Route::post('/photos/store', 'Imagescontroller@store')->name
('photos.store');
Route::get('/calibers/create', 'Caliberscontroller@create')->name('calibers.create');
Route::get('/calibers', 'Caliberscontroller@index')->name('calibers.index');
Route::get('/calibers/{id}', 'Caliberscontroller@destroy')->name
('calibers.destroy');
Route::get('/calibers/{id}/edit', 'Caliberscontroller@edit')->name
('calibers.edit');
Route::post('/calibers/{id}/update', 'Caliberscontroller@update')->name
('calibers.update');
Route::post('/calibers/store', 'Caliberscontroller@store')->name
('calibers.store');
Route::get('/teams/create', 'Teamscontroller@create')->name('teams.create');
Route::get('/teams', 'Teamscontroller@index')->name('teams.index');
Route::get('/teams/{id}', 'Teamscontroller@destroy')->name
('teams.destroy');
Route::get('/teams/{id}/edit', 'Teamscontroller@edit')->name
('teams.edit');
Route::post('/teams/{id}/update', 'Teamscontroller@update')->name
('teams.update');
Route::post('/teams/store', 'Teamscontroller@store')->name
('teams.store');
Route::get('/pharmacies/create', 'pharmaciescontroller@create')->name('pharmacies.create');
Route::get('/pharmacies', 'pharmaciescontroller@index')->name('pharmacies.index');
Route::get('/pharmacies/{id}', 'pharmaciescontroller@destroy')->name
('pharmacies.destroy');
Route::get('/pharmacies/{id}/edit', 'pharmaciescontroller@edit')->name
('pharmacies.edit');
Route::post('/pharmacies/{id}/update', 'pharmaciescontroller@update')->name
('pharmacies.update');
Route::post('/pharmacies/store', 'pharmaciescontroller@store')->name
('pharmacies.store');

