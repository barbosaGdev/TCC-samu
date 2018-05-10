@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Editar Notícia</h1>

<form method="post" action="/updateNoticia">

    {{ csrf_field() }}

<input type="hidden" name="id" value="{{$dados->id}}">

<div class="form-group"    
<label for="titulo_noticia">Manchete</label>
<input type="text" class="form-control"name="titulo_noticia" id="titulo_noticia" value="{{$dados->titulo_noticia}}">
</div>

<div class="form-group"
<label for="imagem1">Primeira Imagem</label>
<input type="text" class="form-control" name="imagem1" id="imagem1" value="{{$dados->imagem1}}">
</div>

<div class="form-group"
<label for="video1">Primeiro Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo1" id="paragrafo1" value="{{$dados->paragrafo1}}"></textarea>
</div>

<div class="form-group"
<label for="video2">Segunda Imagem</label>
<input type="text" class="form-control" name="imagem2" id="imagem2" value="{{$dados->imagem2}}">
</div>

<div class="form-group"
<label for="video3">Segundo Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo2" id="paragrafo2" value="{{$dados->paragrafo2}}"></textarea>
</div>

<div class="form-group"
<label for="pdf">Terceira Imagem</label>
<input type="text" class="form-control" name="imagem3" id="imagem3" value="{{$dados->imagem3}}">
</div>

<div class="form-group"
<label for="pdf">Terceiro Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo3" id="paragrafo3" value="{{$dados->paragrafo3}}"></textarea>
</div>

<div class="form-group"
<label for="pdf">Quarto Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo4" id="paragrafo4" value="{{$dados->paragrafo4}}"></textarea>
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form> 
</div>    
</body>
</html>

@endsection