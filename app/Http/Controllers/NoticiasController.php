<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;
use App\Primeiros_socorro;

class NoticiasController extends Controller
{
    public function menuNoticia()
    {
        $noticias = Noticia::all();
        $dados = Primeiros_socorro::all();
        return view('welcome', compact('dados','noticias'));
    }
    
    public function exibirNoticia($id)
    {
        $dados = Noticia::find($id);
        return view('noticia', compact('dados'));
    }

    

}
