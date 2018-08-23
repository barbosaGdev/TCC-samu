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


Route::get('/', 'NoticiasController@menuNoticia');


Auth::routes();


Route::get('/admin', ['middleware' => 'authAdmin', 'uses' => 'HomeController@admin' ]);
Route::get('/about', 'OuvidoriaController@sobre');

//rotas ouvidoria
Route::get('/ouvidoria', 'OuvidoriaController@ouvidoria');
Route::post('/saveFeedback', 'OuvidoriaController@saveFeedback');
Route::get('/adminOuvidoria', ['middleware' => 'authAdmin', 'uses' => 'HomeController@ouvidoria' ]);

//rotas curso
Route::get('/adminAddCurso', ['middleware' => 'authAdmin', 'uses' => 'CursoController@adminAddCurso' ]);
Route::post('/salvar', ['middleware' => 'authAdmin', 'uses' => 'CursoController@salvar']);
Route::get('/salvarVideo/{cursos}', ['middleware' => 'authAdmin', 'uses' => 'CursoController@salvarVideo']);
Route::post('/persisteVideo', ['middleware' => 'authAdmin', 'uses' => 'CursoController@persisteVideo']);
Route::get('/insert/{dados}', 'CursoController@insert');
Route::get('/adminUsers', ['middleware' => 'authAdmin', 'uses' => 'CursoController@users']);
Route::get('/adminUsersCurso/{dados}', ['middleware' => 'authAdmin', 'uses' => 'CursoController@adminUsersCurso']);
Route::post('/deleteUsers', ['middleware' => 'authAdmin', 'uses' => 'CursoController@deleteUsers']);
Route::get('/adminEditarCurso', ['middleware' => 'authAdmin', 'uses' => 'CursoController@adminEditarCurso']);
Route::get('/editarCurso/{dados}', ['middleware' => 'authAdmin', 'uses' => 'CursoController@editarCurso']);
Route::post('/editar', ['middleware' => 'authAdmin', 'uses' => 'CursoController@editar']);
Route::post('/deleteCurso/{curso}', ['middleware' => 'authAdmin', 'uses' => 'CursoController@deleteCurso']);
Route::post('/deleteColaborador/{user}', ['middleware' => 'authAdmin', 'uses' => 'CursoController@deleteColaborador']);
Route::get('/cursos', 'CursoController@cursos');
Route::get('/cursosView/{dados}', 'CursoController@cursosView');
Route::get('/searchCursos', 'CursoController@searchCursos');

//rotas notícia
Route::get('/noticiaInsere', ['middleware' => 'authAdmin', 'uses' => 'HomeController@inserirNoticia' ]);
Route::post('/noticiaInserir',['middleware' => 'authAdmin', 'uses' => 'HomeController@persisteNoticia' ] );
Route::get('/adminEditarNoticia', ['middleware' => 'authAdmin', 'uses' => 'HomeController@adminEditarNoticia' ]);
Route::get('/editarNoticia/{dados}', ['middleware' => 'authAdmin', 'uses' => 'HomeController@editarNoticia' ]);
Route::post('/updateNoticia', ['middleware' => 'authAdmin', 'uses' => 'HomeController@updateNoticia' ]);
Route::post('/deleteNoticia/{noticia}', ['middleware' => 'authAdmin', 'uses' => 'HomeController@deleteNoticia' ]);
Route::get('/noticia/{id}', 'NoticiasController@exibirNoticia');
Route::get('/ver/noticias', 'NoticiasController@mostrarNoticias');
Route::get('/searchNoticias', 'NoticiasController@searchNoticias');



