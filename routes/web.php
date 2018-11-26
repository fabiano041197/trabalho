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

Route::get('/app', function () {
    return view('app/app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', "ProdutoController@lista")->middleware('auth');
Route::get('/produtos/mostra/{id}', "ProdutoController@mostra")->middleware('auth');
Route::get('/produtos/{id}/remover', "ProdutoController@remove")->middleware('auth');
Route::get('/produtos/novo', "ProdutoController@novo")->middleware('auth');
Route::get('/produtos/alterar/{id}', "ProdutoController@formAlt")->middleware('auth');

Route::get('/vendas', "VendaController@lista")->middleware('auth');
Route::get('/vendas/novo', "VendaController@novo")->middleware('auth');
Route::get('/vendas/mostra/{id}', "VendaController@mostra")->middleware('auth');
Route::get('/vendas/{id}/remover', "VendaController@remove")->middleware('auth');
Route::get('/vendas/alterar/{id}', "VendaController@formAlt")->middleware('auth');

Route::get('/clientes', "ClienteController@lista")->middleware('auth');
Route::get('/cliente/novo', "ClienteController@novo")->middleware('auth');
Route::get('/clientes/alterar/{id}', "ClienteController@formAlt")->middleware('auth');
Route::get('/clientes/mostra/{id}', "ClienteController@mostra")->middleware('auth');
Route::get('/clientes/{id}/remover', "ClienteController@remove")->middleware('auth');

Route::get('/baixas', "BaixaController@lista")->middleware('auth');
Route::get('/baixas/novo', "BaixaController@novo")->middleware('auth');
Route::get('/baixas/alterar/{id}', "BaixaController@formAlt")->middleware('auth');
Route::get('/baixas/mostra/{id}', "BaixaController@mostra")->middleware('auth');
Route::get('/baixas/{id}/remover', "BaixaController@remove")->middleware('auth');

//ROTAS PARA ALTERAÇÃO E INCLUSAO DE REGISTROS
Route::post('/produtos/adiciona', "ProdutoController@adiciona");
Route::post('/produtos/alterar', "ProdutoController@alterar");
Route::post('/venda/adiciona', "VendaController@adiciona");
Route::post('/venda/alterar', "VendaController@alterar");
Route::post('/baixa/adiciona', "BaixaController@adiciona");
Route::post('/baixa/alterar', "BaixaController@alterar");
Route::post('/cliente/adiciona', "ClienteController@adiciona");
Route::post('/clientes/altera', "ClienteController@alterar");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
