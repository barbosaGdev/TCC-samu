@extends('layouts.app')

@section('content')
<br><br><br>

<form method="post" action="/editar">

    {{ csrf_field() }}


    <input type="hidden" name="id" value="{{$dados->id}}">

<label for="nome">Nome do Curso</label>
<input type="text" name="nome" id="nome" value="{{$dados->nome}}"><br><br>

<label for="descricao">Descrição do Curso</label>
<input type="text" name="descricao" id="descricao" value="{{$dados->descricao}}"><br><br>

<label for="video1">Video principal do Curso</label>
<input type="text" name="video1" id="video1" value="{{$dados->video1}}"><br><br>

<label for="video2">video 2 do Curso</label>
<input type="text" name="video2" id="video2" value="{{$dados->video}}2"><br><br>

<label for="video3">video 3 do Curso</label>
<input type="text" name="video3" id="video3" value="{{$dados->video3}}"><br><br>

<label for="pdf">PDF do Curso</label>
<input type="text" name="pdf" id="pdf" value="{{$dados->pdf}}"><br><br>

<button type="submit">ENVIAR</button>
</form> 


@endsection