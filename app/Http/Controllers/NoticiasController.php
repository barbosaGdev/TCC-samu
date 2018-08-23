<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;
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
        return view('noticia', compact('dados'));
    }

    public function mostrarNoticias()
    {
        $dados = Noticia::all();

        // dd($dados);

        return view('mostrarNoticias', compact('dados'));

    }    
    
    public function searchNoticias(Request $request)
    {
        $dados = DB::table('noticias')
                            ->Where('titulo_noticia', 'like', '%' . $request->search . '%')
                            ->get();
        
        $search = $request->search;
        return view('searchNoticias', compact('dados', 'search'));
    }

}
