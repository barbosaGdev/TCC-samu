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

    public function ajuda()
    {
        return view('ajuda');    
    }

    public function ouvidoria()
    {
        $dados = Feedback::all();

        return view('ouvidoriaAdmin', compact('dados'));
    }


    public function DelOuvidoria()
    {
        Feedback::getQuery()->delete();

        return redirect('/adminOuvidoria');
    }
   
    public function inserirNoticia(){

        return view('insereNoticia');

    }

    public function ajudaColaborador()
    {
        return view('ajudaColaborador');    
    }

    public function persisteNoticia(Request $request){


        $this->validate($request,[
            'titulo_noticia' => 'required',
            'imagem1' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            'texto' => 'required'
        ],[
            'titulo_noticia.required' => 'Insira a manchete',
            'imagem1.required' => 'Insira a imagem principal da notícia',
            'imagem1.required' => 'Insira a imagem principal da notícia',
            'imagem1.image' => 'A imagem principal precisa ser uma imagem',
            'imagem1.mimes' => 'A imagem precisa estar no formato jpg, jpeg, png ou gif',
            'imagem1.max' => 'Imagem muito pesada',
            'texto.required' => 'Insira o texto da notícia',
        ]);

        $noticia = new Noticia();
        
        $noticia->titulo_noticia = $request->titulo_noticia;
        $noticia->texto = $request->texto;
        $path = Storage::disk('public')->putFile('noticias',$request->imagem1);
        $noticia->imagem1 = ( URL::to('/storage') . "/" . $path);
        

        $noticia->save();

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
        $this->validate($request,[
            'titulo_noticia' => 'required',
            'imagem1' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            'texto' => 'required'
        ],[
            'titulo_noticia.required' => 'Insira a manchete',
            'imagem1.required' => 'Insira a imagem principal da notícia',
            'imagem1.image' => 'A imagem principal precisa ser uma imagem',
            'imagem1.mimes' => 'A imagem precisa estar no formato jpg, jpeg, png ou gif',
            'imagem1.max' => 'Imagem muito pesada',
            'texto.required' => 'Insira o texto da notícia',
        ]);
        
        $noticia = Noticia::find($request->id);

        $noticia->titulo_noticia = $request->titulo_noticia;
        $noticia->texto = $request->texto;
        $path = Storage::disk('public')->putFile('noticias',$request->imagem1);
        $noticia->imagem1 = ( URL::to('/storage') . "/" . $path);
    
        $noticia->save();

        return redirect('/adminEditarNoticia');
    }

    public function deleteNoticia(Noticia $noticia)
    {
        $noticia->delete();
        return redirect('/adminEditarNoticia');
        
        //return 'ok';
    }

    
    
    public function alterarSituacao(Request $request){

        $dados = Feedback::find($request->id);

        $dados->resolvido = $request->situacao;
        $dados->save();

        return redirect("/adminOuvidoria");
    }

    

  
    
}
