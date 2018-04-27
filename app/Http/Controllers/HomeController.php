<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Feedback;
use App\Noticia;

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
        $noticia->imagem1 = $request->imagem1;
        $noticia->imagem2 = $request->imagem2;
        $noticia->imagem3 = $request->imagem3;
        $noticia->paragrafo1 = $request->paragrafo1;
        $noticia->paragrafo2 = $request->paragrafo2;
        $noticia->paragrafo3 = $request->paragrafo3;
        $noticia->paragrafo4 = $request->paragrafo4;

        $noticia->save();

        return redirect('/noticiaInsere');

    }
    
    


    

  
    
}
