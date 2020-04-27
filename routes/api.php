<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('contas', 'ContaController');
Route::patch('contas/sacar/{conta}', 'ContaController@sacar');
Route::patch('contas/depositar/{conta}', 'ContaController@depositar');
