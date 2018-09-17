<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::apiResource('movimientos', 'MovimientoController')->middleware('auth');

Route::apiResource('cuentas', 'CuentaController')->middleware('auth');