<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;


class NoticiasController extends Controller
{
    public function menuNoticia()
    {
        $dados = Noticia::all();
        return view('welcome', compact('dados'));
    }
    
    public function exibirNoticia($id)
    {
        $dados = Noticia::find($id);
        return view('noticia', compact('dados'));
    }

    

}
