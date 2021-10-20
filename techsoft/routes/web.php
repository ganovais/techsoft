<?php

use Illuminate\Support\Facades\Route;

//Site
Route::get('/', 'SiteController@index');
Route::get('/carrinho', 'SiteController@carrinho');
Route::get('/contato', 'SiteController@contato');
Route::get('/produtos', 'SiteController@produtos');
Route::get('/produto/{slug}', 'SiteController@produtoDetalhe');

//Sistema
Route::group(['prefix' => 'sistema'], function() {
    Route::get('/dashboard', 'SistemaController@index');
    Route::resource('categories', 'CategoryController');

    Route::post('/products/{id}', 'ProductController@update');
    Route::resource('products', 'ProductController');
});

Auth::routes();

