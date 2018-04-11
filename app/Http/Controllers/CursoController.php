<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;

class CursoController extends Controller
{

    public function inserir()
    {
        return view('inserir_curso');
    }
    public function salvar(Request $request)
    {
        $cursos = new Curso();

        $cursos->nome = $request->nome;
        $cursos->descricao = $request->descricao;
        $cursos->video = $request->video;
        $cursos->imagem = $request->imagem;
        $cursos->pdf = $request->pdf;
        $cursos->save();
        return redirect('/cursos');


    }

    public function cursos()
    {
        $dados = Curso::All();

        return view('cursos', compact('dados'));

    }


    public function cursosView(Curso $dados)
    {
        return view('cursosView', compact('dados'));
    }



}

