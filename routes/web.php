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

Route::get('/produtos', 'ProdutosController@listarProdutos');
Route::get('/produtos/criar', 'ProdutosController@create');
Route::post('/produtos/criar', 'ProdutosController@store');
Route::delete('/produtos/{id}', 'ProdutosController@destroy');
