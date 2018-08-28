<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Cursos_has_user;
use App\Video_curso;
use App\User;
use App\StringUtil;
use DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

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

        $this->validate($request,[
            'nome' => 'required',
            'img' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            'pdf' => 'required|mimes:pdf'
        ],[
            'nome.required' => 'Insira o título do curso',
            'img.required' => 'Insira uma imagem',
            'img.image' => 'A imagem principal precisa ser uma imagem',
            'img.mimes' => 'A imagem precisa estar no formato jpg, jpeg, png ou gif',
            'img.max' => 'Imagem muito pesada',
            'pdf.required' => 'Insira um PDF',
            'pdf.mimes' => 'Insira um PDF',
        ]);
        

        $cursos->videoP = StringUtil::convertToYoutubeUrl($request->videoP);
        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;

        $path = Storage::disk('public')->putFile('cursos',$request->img);
        $cursos->img = ( URL::to('/storage') . "/" . $path);

        

        $path = Storage::disk('public')->putFile('cursos',$request->pdf);
        $cursos->pdf = ( URL::to('/storage') . "/" . $path);

        $cursos->save();
        
        if(isset($request->video))
        {
            $video = new Video_curso();
            $video->cursos_id = $cursos->id;
            $video->video = StringUtil::convertToYoutubeUrl($request->video);
            $video->save();
        }

        if(isset($request->video1))
        {
            $video1 = new Video_curso();
            $video1->cursos_id = $cursos->id;
            $video1->video = StringUtil::convertToYoutubeUrl($request->video1);
            $video1->save();
        }

        return redirect('/cursos');
        
        // return view('salvarVideo', compact('cursos'));

    }


    //Pagina de lista de cursos
    public function cursos()
    {   

        $dados = Curso::All();
        $loggedUser = \Auth::user();
        return view('cursos', compact('dados','loggedUser'));

    }   

    //Controller que gerencia os usuarios que acessam o curso
  
    //Retorna a view do curso já com os videos e o PDF
    public function cursosView(Curso $dados)
    {
        $cursando = new Cursos_has_user();

        $videos = DB::table('video_cursos')
                ->where('cursos_id', '=' , $dados->id)
                ->get();


        $loggedUser = \Auth::user();
        
        $cursando->users_id = $loggedUser->id;
        $cursando->cursos_id = $dados->id;
        
        $cursando->save();

        return view('cursosView', compact('dados','videos'));
    }

    //Pega a lista de usuarios cadastrados
    public function users()
    {
        $loggedUser = \Auth::user();
        $dados =  User::All();
        return view('users', compact('dados','loggedUser'));
        
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

    public function deleteColaborador(User $user)
    {
        $user->delete();

        return redirect('/adminUsers');
    }

    public function adminEditarCurso()
    {
        $dados = Curso::all();
        $videos = Video_curso::all();

        return view('adminEditarCurso', compact('dados','videos'));

    }

    public function editarCurso(Curso $dados)
    {
        $videos = Video_curso::Where('cursos_id', '=', $dados->id)->get();
        return view('editarCurso', compact('dados', 'videos'));
    }

    public function editar(Request $request)
    {
        $cursos = Curso::find($request->id);
        $video = Video_curso::find($request->VideoId);
        $video1 = Video_curso::find($request->VideoId1);

        $this->validate($request,[
            'img' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            'pdf' => 'required|mimes:pdf'
        ],[
            'img.required' => 'Insira novamente uma imagem',
            'img.image' => 'A imagem principal precisa ser uma imagem',
            'img.mimes' => 'A imagem precisa estar no formato jpg, jpeg, png ou gif',
            'img.max' => 'Imagem muito pesada',
            'pdf.required' => 'Insira novamente um PDF',
            'pdf.mimes' => 'Insira um PDF',
        ]);
        
        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;
        
        $path = Storage::disk('public')->putFile('cursos',$request->img);
        $cursos->img = ( URL::to('/storage') . "/" . $path);

        $cursos->videoP = str_replace("watch?v=","embed/",$request->videoP);
        
        $path = Storage::disk('public')->putFile('cursos',$request->pdf);
        $cursos->pdf = ( URL::to('/storage') . "/" . $path);

        $cursos->save();

        if(isset($request->video))
        {
            $video->video = str_replace("watch?v=","embed/",$request->video);
            $video->cursos_id = $cursos->id;
            $video->save();
        }

        if(isset($request->video1))
        {
            $video1->cursos_id = $cursos->id;
            $video1->video = str_replace("watch?v=","embed/",$request->video1);
            $video1->save();
        }

        return redirect('/adminEditarCurso');
    }

    //deletar curso
    public function deleteCurso(Curso $curso)
    {
        $curso->delete();
        
        return redirect('/adminEditarCurso');
        
    }

    
    
    public function searchCursos(Request $request)
    {
        $dados1 = Curso::All();
        $dados = DB::table('cursos')
                            ->Where('nome', 'like', '%' . $request->search . '%')
                            ->get();

        $search = $request->search;
        $loggedUser = \Auth::user();


        return view('searchCursos', compact('dados', 'search', 'loggedUser', 'dados1'));
    }
}

