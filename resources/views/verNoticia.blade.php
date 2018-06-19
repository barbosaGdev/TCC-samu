@extends('layouts.app')

@section('content')
<br><br><br>

    @foreach($dados as $v)
    
    <h1 class="mt-4 mb-3 Titulo">{{$dados->titulo_noticia}}</h1>
    <br>
    @if ($v->imagem1 == '')
    @else
    <div>
    <img width="560" height="315" src="{{$v->imagem1}}"></img>
    </div>
     @endif
    <br>
    <div class="align-right">
    <a href="/noticia/{{$v->id}}" class="btn btn-primary Texto" method="get">Ver Notícia</a>
    </div>
<br>
    @endforeach

@endsection