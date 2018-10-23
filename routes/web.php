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

Route::get('/', 'PublicController@index');

Route::get('/books', 'BookController@index');

Route::get('/book/create', 'BookController@create');
Route::get('/book/edit/{id}', "BookController@edit");
Route::get('/book/delete/{id}', 'BookController@delete');
Route::post('/book/{id?}', 'BookController@store');


// Route::resource('/book', 'BookController');

Route::get('/bookshops', 'BookShopController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/private', 'PrivateController@index');

Auth::routes();