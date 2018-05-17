<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Cursos_has_user;
use App\User;
use DB;

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
        $cursos->img = $request->img;
        $cursos->video1 = str_replace("watch?v=","embed/",$request->video1);
        $cursos->video2 = str_replace("watch?v=","embed/",$request->video2);
        $cursos->video3 = str_replace("watch?v=","embed/",$request->video3);
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
  
    //Retorna a view do curso já com os videos e o PDF
    public function cursosView(Curso $dados)
    {
        $cursando = new Cursos_has_user();
        $loggedUser = \Auth::user();
        
        $cursando->users_id = $loggedUser->id;
        $cursando->cursos_id = $dados->id;
        
        $cursando->save();

        return view('cursosView', compact('dados'));
    }

    //Pega a lista de usuarios cadastrados
    public function users()
    {
        $dados =  User::All();
        return view('users', compact('dados'));
        
    }

    //Lista de acesso do usuario especifico
    public function adminUsersCurso(User $dados)
    {
        $users = DB::table('cursos_has_users')
        ->join('cursos', 'cursos.id', '=', 'cursos_has_users.cursos_id')
        ->join('users', 'users.id', '=', 'cursos_has_users.users_id')
        ->where('users.id', '=', $dados->id)
        ->select('users.name as nome', 'cursos.nome as curso', 'cursos_has_users.created_at as acesso')
        ->get();

        // dd($dados); 
        
        return view('listaUsers', compact('users'));

    }

    //rota que exclui historico de acesso dos usuarios
    public function deleteUsers()
    {
        
        Cursos_has_user::getQuery()->delete();

        return redirect('/adminUsers');
    }

    public function adminEditarCurso()
    {
        $dados = Curso::all();

        return view('adminEditarCurso', compact('dados'));

    }

    public function editarCurso(Curso $dados)
    {
        return view('editarCurso', compact('dados'));
    }

    public function editar(Request $request)
    {
        $cursos = Curso::find($request->id);


        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;
        $cursos->img = $request->img;
        $cursos->video1 = str_replace("watch?v=","embed/",$request->video1);
        $cursos->video2 = str_replace("watch?v=","embed/",$request->video2);
        $cursos->video3 = str_replace("watch?v=","embed/",$request->video3);
        $cursos->pdf = $request->pdf;
        $cursos->save();
        return redirect('/adminEditarCurso');
    }

    public function deleteCurso(Curso $curso)
    {

        $curso->delete();


        // $curso->delete();
        return redirect('/admin');
        
    }
}

