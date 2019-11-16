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

Route::get('/teste', function () {
    return view('teste');
})->name('teste');

Route::get('/login', function () {
    return view('login');
});

Route::get('/mensagem', function () {
    return view('conversas.mensagem');
});
Route::get('/bar', function () {
    return view('template.bar');
})->name('cargo');

Route::get('/menu', function () {
    return view('template.menu');
});



Auth::routes(

);

Route::get('/', function (){
    return view('auth.login');
})->name('login');

Route::get('/register', 'Auth\RegisterController@index')->name('Register');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', ['as' => 'logout', 'uses' => 'AcessoController@logout'])->name('logout');

Route::post('/validaRegister','Auth\RegisterController@create')->name('validaRegister');
Route::post('/validaLogin','Auth\LoginController@validaLogin')->name('validaLogin');
