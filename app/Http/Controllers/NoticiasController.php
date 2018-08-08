<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;
use App\Img_noticia;
use DB;

class NoticiasController extends Controller
{
    public function menuNoticia()
    {
        $dados = Noticia::orderBy('id', $direction = 'desc')->take(3)->get();

        // dd($dados);

        return view('welcome', compact('dados'));
    }
    
    public function exibirNoticia($id)
    {
        $dados = Noticia::find($id);

        $imagens = DB::table('img_noticias')
                ->where('noticias_id', '=' , $id)
                ->get();

        return view('noticia', compact('dados', 'imagens'));
    }

    public function mostrarNoticias()
    {
        $dados = Noticia::all();

        // dd($dados);

        return view('mostrarNoticias', compact('dados'));

    }    
    

}
