<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'SistemaController@index');

Auth::routes();

