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
