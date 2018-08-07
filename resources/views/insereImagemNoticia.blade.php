@extends('layouts.app')

@section('content')
<br><br>
<h1>Inserir imagens da Notícia</h1>
<form action="/persisteImagem" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

<input type="hidden" name="noticias_id" id="noticias_id" value="{{$noticia->id}}">

<div class="form-group">
<label for="img" class="Texto">Primeira Imagem</label>
<input type="file" class="Texto form-control" name="img" id="img">
</div>

<div class="form-group">
<label for="img" class="Texto">Segunda Imagem</label>
<input type="file" class="Texto form-control" name="img" id="img">
</div>

<div class="form-group">
<label for="img" class="Texto">Terceira Imagem</label>
<input type="file" class="Texto form-control" name="img" id="img">
</div>
<button type="submit" class="Texto btn btn-primary">Enviar</button>
</form>

@endsection