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

Route::get('/', 'HomeController@index')->name('home');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clientes', 'ClientesController@index')->name('clientes');
Route::get('/clientes/novo', 'ClientesController@novo')->name('novo');
Route::post('/clientes/salvar', 'ClientesController@salvar')->name('salvar');

//salvar(atualizar)
Route::patch('/clientes/{cliente}', 'ClientesController@atualizar')->name('atualizar');

//excluir e editar
Route::delete('/clientes/{cliente}', 'ClientesController@deletar')->name('deletar');
Route::get('/clientes/{cliente}/editar', 'ClientesController@editar')->name('editar');
