<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Curso_has_user;

class CursoController extends Controller
{


    //para acessar as funções desse controlador, será necessário realizar o login
    
    public function __construct()
    {
        $this->middleware('auth');
    }

  


    public function adminAddCurso()
    {
        return view('inserir_curso');
    }

    public function salvar(Request $request)
    {
        $cursos = new Curso();

        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;
        $cursos->video = $request->video;
        $cursos->imagem = $request->imagem;
        $cursos->pdf = $request->pdf;
        $cursos->save();
        return redirect('/cursos');


    }

    public function cursos()
    {   

        $dados = Curso::All();

        return view('home', compact('dados'));

    }

    public function insert(Request $request)
    {
        $cursando = new Curso_has_user();
        
        $loggedUser = \Auth::user();
        
        $cursando->users_id = $loggedUser['id'];
        $cursando->cursos_id = $request->id;

        $cursando->save();
        return redirect('/cursos');
        


    }

    public function cursosView(Curso $dados)
    {
        return view('cursosView', compact('dados'));
    }



}

