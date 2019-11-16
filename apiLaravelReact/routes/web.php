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
<<<<<<< HEAD
Route::get('/teste', function () {
    return view('teste');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/mensagem', function () {
    return view('conversas.mensagem');
});
Route::get('/bar', function () {
    return view('template.bar');
});

Route::get('/menu', function () {
    return view('template.menu');
});
=======


Auth::routes(

);

Route::get('/', 'HomeController@index')->name('home');
>>>>>>> 515ff881b7d61b9d348df75aad7e1f7bf68cf49d
