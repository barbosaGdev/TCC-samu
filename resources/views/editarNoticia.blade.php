@extends('layouts.app')

@section('content')
<br><br><br>

<form method="post" action="/updateNoticia">

    {{ csrf_field() }}


    <input type="hidden" name="id" value="{{$dados->id}}">

<label for="titulo_noticia">Manchete</label>
<input type="text" name="titulo_noticia" id="titulo_noticia" value="{{$dados->titulo_noticia}}"><br><br>

<label for="imagem1">Imagem Destaque</label>
<input type="text" name="imagem1" id="imagem1" value="{{$dados->imagem1}}"><br><br>

<label for="paragrafo1">Parágrafo 1</label>
<input type="text" name="descrica" id="paragrafo1" value="{{$dados->paragrafo1}}"><br><br>

<label for="imagem2">Imagem 2</label>
<input type="text" name="imagem2" id="imagem2" value="{{$dados->imagem2}}"><br><br>

<label for="paragrafo2">Parágrafo 2</label>
<input type="text" name="paragrafo2" id="paragrafo2" value="{{$dados->paragrafo2}}"><br><br>

<label for="imagem3">Imagem 3</label>
<input type="text" name="imagem3" id="imagem3" value="{{$dados->imagem3}}"><br><br>

<label for="paragrafo3">Parágrafo 3</label>
<input type="text" name="paragrafo3" id="paragrafo3" value="{{$dados->paragrafo3}}"><br><br>

<label for="paragrafo4">Parágrafo 4</label>
<input type="text" name="paragrafo4" id="paragrafo4" value="{{$dados->paragrafo4}}"><br><br>

<button type="submit">ENVIAR</button>
</form> 


@endsection