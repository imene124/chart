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

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get(
     '/chartjs', 'chart@index');

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/accountsetting', function () {
    return view('acount');
});
