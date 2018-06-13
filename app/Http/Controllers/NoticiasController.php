<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;


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
        return view('noticia', compact('dados'));
    }

    public function mostrarNoticias()
    {
        $dados = Noticia::all();

        // dd($dados);

        return view('mostrarNoticias', compact('dados'));

    }    
    

}
