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


Route::get('/admin', ['middleware' => 'authAdmin', 'uses' => 'HomeController@admin' ]);

//rotas ouvidoria
Route::get('/ouvidoria', 'OuvidoriaController@ouvidoria');
Route::post('/saveFeedback', 'OuvidoriaController@saveFeedback');
Route::get('/adminOuvidoria', ['middleware' => 'authAdmin', 'uses' => 'HomeController@ouvidoria' ]);

//rotas curso
Route::get('/adminAddCurso', ['middleware' => 'authAdmin', 'uses' => 'CursoController@adminAddCurso' ]);
Route::post('/salvar', 'CursoController@salvar');
Route::get('/cursos', 'CursoController@cursos');
Route::get('/cursosView/{dados}', 'CursoController@cursosView');
Route::get('/insert/{dados}', 'CursoController@insert');
Route::get('/adminUsers', 'CursoController@users');
Route::get('/adminUsersCurso/{dados}', 'CursoController@adminUsersCurso');
Route::get('/deleteListUsers', 'CursoController@deleteListUsers');
Route::get('/adminEditarCurso', 'CursoController@adminEditarCurso');
Route::get('/editarCurso/{dados}', 'CursoController@editarCurso');
Route::post('/editar', 'CursoController@editar');

//rotas notícia
Route::get('/noticiaInsere', ['middleware' => 'authAdmin', 'uses' => 'HomeController@inserirNoticia' ]);
Route::post('/noticiaInserir', 'HomeController@persisteNoticia');
Route::get('/verNoticia', 'NoticiasController@menuNoticia');
Route::get('/adminEditarNoticia', 'HomeController@adminEditarNoticia');
Route::get('/editarNoticia/{dados}', 'HomeController@editarNoticia');
Route::post('/updateNoticia', 'HomeController@updateNoticia');
Route::post('/deleteNoticia/{noticia}', 'HomeController@deleteNoticia');


