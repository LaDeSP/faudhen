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

Auth::routes();

route::middleware('auth')->group(function(){
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/home', 'HomeController@index');
    Route::get('/Preferencia/editar', 'PreferenciaController@editar')->name('Preferencia.editar');
    Route::patch('/Preferencia/atualizar', 'PreferenciaController@atualizar')->name('Preferencia.atualizar');

    Route::resources([
        'Curso' => 'CursoController',   
        'Disciplina' => 'DisciplinaController',
        'Matriz' => 'MatrizController',
        'Sala' => 'SalaController',
        'Oferta' => 'OfertaController',
        'Turma' => 'TurmaController',
        'DisciplinaOferecida' => 'DisciplinaOferecidaController',
        'Ensalamento' => 'TurmaSalaUsuarioController'
    ]);

});




