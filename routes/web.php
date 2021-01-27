<?php

use Illuminate\Support\Facades\Route;

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

//Listado de contratos
Route::get('/', 'contratoController@index');
//crear contrato
Route::get('/form','contratoController@create');
//guardar contrato
Route::post('/save','contratoController@save');
//Eliminar contrato
Route::post('/delete/{id}','contratoController@delete')->name('delete');
//Editar contrato
Route::get('/editform/{id}/edit','contratoController@editform')->name('editform');
//Actualizar contrato
Route::post('/edit/{id}/update', 'contratoController@edit')->name('edit');
