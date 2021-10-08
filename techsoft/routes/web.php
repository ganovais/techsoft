<?php

use Illuminate\Support\Facades\Route;

//Site
Route::get('/', 'SiteController@index');


//Sistema
Route::get('/dashboard', 'SistemaController@index');

Auth::routes();

