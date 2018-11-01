@extends('layouts.app')

@section('content')
<div class="form-group">
    <form method="get" action="/searchNoticias" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="search" class="Texto form-control" id="search" list="historico" placeholder="Pesquisar Notícia">
            <datalist id="historico">
                @foreach($dados as $n)
                <option value="{{$n->titulo_noticia}}">
                @endforeach
            </datalist>
    </form>
</div>

<br><br><br>

    @foreach($dados as $v)
    
    <h1 class="mt-4 mb-3 Titulo">{{$dados->titulo_noticia}}</h1>
    <br>
    @if ($v->imagem1 == '')
    @else


    <img width="560" height="315" class="img-fluid" src="{{$v->imagem1}}">

   
     @endif
    <br>
    <div class="align-right">
    <a href="/noticia/{{$v->id}}" class="btn btn-primary Texto" method="get">Ver Notícia</a>
    </div>
<br>
    @endforeach

@endsection