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

Route::get('/filmes', 'FilmesController@index')->name('listar-filmes');
Route::get('/filmes/create', 'FilmesController@create') ->name('form-criar-filme');
Route::post('/filmes/create', 'FilmesController@store');
Route::delete('/filmes/{id}', 'FilmesController@destroy');

