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

Route::get('/index', 'PrincipalController@index')->middleware('auth');
Route::get('/register', 'PrincipalController@register');
Route::get('/welcome', 'PrincipalController@welcome');


/* FORMS CADASTRAR */
Route::get('/criarclube', 'ClubeController@index')->middleware('auth');
Route::get('/cadastraratleta', 'AtletaController@cadastrarAtleta')->middleware('auth');
Route::get('/cadastrarprofissional', 'PrincipalController@cadastrarProfissional')->middleware('auth');
Route::get('/cadastrarcampeonato', 'CampeonatoController@index')->middleware('auth');
Route::get('/cadastrartime', 'PrincipalController@cadastrarTime')->middleware('auth');

/* DESEMPENHO */
Route::post('/rank_desempenho', 'PrincipalController@desempenho');

/* BUSCAR TIME */
Route::post('/buscar_times','PrincipalController@buscarTime');

/* CADASTRO */
Route::post('/store_time', 'TimeController@store')->middleware('auth');
Route::post('/store_atleta', 'AtletaController@store')->middleware('auth');
Route::post('/store_profissional', 'ProfissionalController@store')->middleware('auth');
Route::post('/store_campeonato', 'CampeonatoController@store')->middleware('auth');
Route::post('/store_clube', 'ClubeController@store')->middleware('auth');

/* UPDATE */
Route::post('/update_atleta', 'AtletaController@update');
Route::post('/update_profissional', 'ProfissionalController@update');

/* VISUALIZAR */
Route::get('/visualizaratleta', 'PrincipalController@verAtleta')->middleware('auth');
Route::get('/visualizartime', 'TimeController@index')->middleware('auth');
Route::get('/visualizarprofissional', 'PrincipalController@verProfissional')->middleware('auth');

/* USERS */
Auth::routes();
