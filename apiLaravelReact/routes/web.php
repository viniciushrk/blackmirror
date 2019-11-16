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

Route::prefix('cargo')->group(function (){

    Route::get('/', 'CargoController@index')->name('cargo.index');

});

Route::prefix('api')->group(function (){

    Route::get('/', 'CargoController@index')->name('cargo.index');

});


Auth::routes(

);

Route::get('/', 'HomeController@index')->name('home');
