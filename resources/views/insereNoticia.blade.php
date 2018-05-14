@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Nova Notícia</h1>

<form method="post" action="/noticiaInserir">

    {{ csrf_field() }}

<div class="form-group"    
<label for="titulo_noticia">Manchete</label>
<input type="text" class="form-control"name="titulo_noticia" id="titulo_noticia">
</div>

<div class="form-group"
<label for="imagem1">Primeira Imagem</label>
<input type="text" class="form-control" name="imagem1" id="imagem1">
</div>

<div class="form-group"
<label for="video1">Primeiro Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo1" id="paragrafo1"></textarea>
</div>

<div class="form-group"
<label for="video2">Segunda Imagem</label>
<input type="text" class="form-control" name="imagem2" id="imagem2">
</div>

<div class="form-group"
<label for="video3">Segundo Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo2" id="paragrafo2"></textarea>
</div>

<div class="form-group"
<label for="pdf">Terceira Imagem</label>
<input type="text" class="form-control" name="imagem3" id="imagem3">
</div>

<div class="form-group"
<label for="pdf">Terceiro Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo3" id="paragrafo3"></textarea>
</div>

<div class="form-group"
<label for="pdf">Quarto Parágrafo</label>
<textarea rows="6" cols="100" class="form-control" type="text" name="paragrafo4" id="paragrafo4"></textarea>
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form> 
    
</body>
</html>

@endsection