@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
<nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <span class="breadcrumb-item active Texto">Nova Notícia</span>
    </nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3 Texto">Nova Notícia</h1>

<form method="post" action="/noticiaInserir" enctype="multipart/form-data">

    {{ csrf_field() }}

<div class="form-group" >   
<label for="titulo_noticia" class="Texto">Manchete</label>
<input type="text" class="Texto form-control" name="titulo_noticia" id="titulo_noticia">
</div>

<div class="form-group">
<label for="imagem1" class="Texto">Primeira Imagem</label>
<input type="file" class="Texto form-control" name="imagem1" id="imagem1">
</div>

<div class="form-group">
<label for="video1" class="Texto">Primeiro Parágrafo</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="paragrafo1" id="paragrafo1"></textarea>
</div>

<div class="form-group">
<label for="video2" class="Texto">Segunda Imagem</label>
<input type="file" class="Texto form-control" name="imagem2" id="imagem2">
</div>

<div class="form-group">
<label for="video3" class="Texto">Segundo Parágrafo</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="paragrafo2" id="paragrafo2"></textarea>
</div>

<div class="form-group">
<label for="pdf" class="Texto">Terceira Imagem</label>
<input type="file" class="Texto form-control" name="imagem3" id="imagem3">
</div>

<div class="form-group">
<label for="pdf" class="Texto">Terceiro Parágrafo</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="paragrafo3" id="paragrafo3"></textarea>
</div>

<div class="form-group">
<label for="pdf" class="Texto">Quarto Parágrafo</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="paragrafo4" id="paragrafo4"></textarea>
</div>

<button type="submit" class="Texto btn btn-primary" style="background-color: orangered;border-color: orangered;">Enviar</button>
<br><br><br><br>
</form> 
    
</body>
</html>

@endsection