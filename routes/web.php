<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('saldo', 'HomeController@saldo');

Route::apiResource('movimientos', 'MovimientoController')->middleware('auth');;