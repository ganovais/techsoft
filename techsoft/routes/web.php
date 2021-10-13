<?php

use Illuminate\Support\Facades\Route;

//Site
Route::get('/', 'SiteController@index');
Route::get('/carrinho', 'SiteController@carrinho');
Route::get('/contato', 'SiteController@contato');
Route::get('/produto/{slug}', 'SiteController@produtoDetalhe');

//Sistema
Route::get('/dashboard', 'SistemaController@index');

Auth::routes();

