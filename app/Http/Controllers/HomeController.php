<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedback;
use App\Noticia;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin');
    }

    public function ouvidoria()
    {
        $dados = Feedback::all();

        return view('ouvidoriaAdmin', compact('dados'));
    }
   
    public function inserirNoticia(){

        return view('insereNoticia');

    }

    public function persisteNoticia(Request $request){

        $noticia = new Noticia();

        $noticia->titulo_noticia = $request->titulo_noticia;


        $noticia->texto = $request->texto;
        

        $noticia->save();

        return redirect('/admin');

    }


    public function persisteImagem(Request $request)
    {
        $imagens = new Img_noticia();

        $imagens->noticias_id = $request->noticias_id;
        $path = Storage::disk('public')->putFile('img_noticias',$request->img);
        $imagens->imagem = ( URL::to('/storage') . "/" . $path);


        $imagens->save();

        return redirect('/admin');
    }



    public function adminEditarNoticia()
    {
        $dados = Noticia::all();

        return view('adminEditarNoticia', compact('dados'));

    }

    public function editarNoticia(Noticia $dados)
    {
        return view('editarNoticia', compact('dados'));
    }

    public function updateNoticia(Request $request)
    {
        $noticia = Noticia::find($request->id);

        $noticia->titulo_noticia = $request->titulo_noticia;
        
        $path = Storage::disk('public')->putFile('cursos',$request->imagem1);
        $noticia->imagem1 = ( URL::to('/storage') . "/" . $path);

        $noticia->paragrafo1 = $request->paragrafo1;
        
        $path = Storage::disk('public')->putFile('cursos',$request->imagem2);
        $noticia->imagem2 = ( URL::to('/storage') . "/" . $path);

        $noticia->paragrafo2 = $request->paragrafo2;
        
        $path = Storage::disk('public')->putFile('cursos',$request->imagem3);
        $noticia->imagem3 = ( URL::to('/storage') . "/" . $path);


        $noticia->paragrafo3 = $request->paragrafo3;
        $noticia->paragrafo4 = $request->paragrafo4;
        $noticia->save();
        return redirect('/adminEditarNoticia');
    }

    public function deleteNoticia(Noticia $noticia)
    {
        $noticia->delete();
        return redirect('/adminEditarNoticia');
        
        //return 'ok';
    }

    
    


    

  
    
}
