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

Route::get('/', 'VagaController@index');

Auth::routes();

Route::get('/registrar-empresa', 'Auth\RegisterController@registrarEmpresaView')
    ->name('registrarEmpresaView');

//Rota para implementar e criar o form para o cadastro de empresa
Route::post('/salvarEmpresa', 'Auth\RegisterController@salvarEmpresa')
    ->name('salvarEmpresa');

//Rota para implementar e criar o form para o cadastro de empresa
Route::post('/salvarCandidato', 'Auth\RegisterController@salvarCandidato')
    ->name('salvarCandidato');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('vagas', 'VagaController');

Route::get('/aplicar-candidato/{idVaga}/{id}', 'VagaController@aplicarCandidato')
    ->name('aplicarCandidato');

Route::get('/minhas-vagas', 'VagaController@minhasVagasView')
    ->name('minhasVagasView');
