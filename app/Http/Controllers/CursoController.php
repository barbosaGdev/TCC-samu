<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Cursos_has_user;
use App\User;

class CursoController extends Controller
{


    //para acessar as funções desse controlador, será necessário realizar o login
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Retorna a view de cadastrar cursos
    public function adminAddCurso()
    {
        return view('inserir_curso');
    }

    //Controller que coloca os dados do curso no banco, como os videos de PDF  
    public function salvar(Request $request)
    {
        $cursos = new Curso();

        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;
        $cursos->video1 = $request->video1;
        $cursos->video2 = $request->video2;
        $cursos->video3 = $request->video3;
        $cursos->pdf = $request->pdf;
        $cursos->save();
        return redirect('/cursos');


    }

    //Pagina de lista de cursos
    public function cursos()
    {   

        $dados = Curso::All();
        return view('cursos', compact('dados'));

    }

    //Controller que gerencia os usuarios que acessam o curso
    public function insert(Curso $dados)
    {
        $cursando = new Cursos_has_user();
        $loggedUser = \Auth::user();
        
        $cursando->users_id = $loggedUser['id'];
        $cursando->cursos_id = $dados['id'];
        
        $cursando->save();
        
        return redirect('/cursosView')->with('dados', $dados->id);

    }

    //Retorna a view do curso já com os videos e o PDF
    public function cursosView(Curso $dados)
    {
        return view('cursosView', compact('dados'));
    }

    //Pega a lista de usuarios cadastrados
    public function users()
    {
        $dados =  User::All();
        return view('users', compact('dados'));
        
    }


}

