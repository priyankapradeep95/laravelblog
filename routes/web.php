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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add', 'ProductController@create')->name('add');
Route::post('/add', 'ProductController@store')->name('add');
Route::get('/list', 'ProductController@index')->name('list');
Route::get('/show/{id}', 'ProductController@show')->name('show');
Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
Route::post('/edit/{id}', 'ProductController@update');
Route::get('/delete/{id}', 'ProductController@destroy')->name('delete');