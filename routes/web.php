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
//luisgmore@gmail.com
//Jonathan Vargas

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'ImagesController@index');
Route::get('/home', 'ImagesController@index');
Route::post('/home', 'ImagesController@index');
Route::put('/home', 'ImagesController@index');
Route::delete('/home', 'ImagesController@index');