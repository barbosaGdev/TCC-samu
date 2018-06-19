@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
<nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <span class="breadcrumb-item active Texto">Novo Curso</span>
    </nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3 Texto">Novo Curso</h1>


<form method="post" action="/salvar">

    {{ csrf_field() }}

<div class="form-group">    
<label for="nome" class="Texto">Nome do Curso</label>
<input type="text" class="Texto form-control" name="nome" id="nome">
</div>

<div class="form-group">
<label for="descricao" class="Texto">Descrição</label>
<textarea rows="6" cols="100" type="text" class="Texto form-control" name="descricao" id="descricao"></textarea>
</div>

<div class="form-group">
<label for="img" class="Texto">Imagem Principal</label>
<input type="text" class="Texto form-control" name="img" id="img">
</div>

<div class="form-group">
<label for="video1" class="Texto">Vídeo Principal</label>
<input type="text" class="Texto form-control" name="video1" id="video1">
</div>

<div class="form-group">
<label for="video2" class="Texto">Vídeo 2</label>
<input type="text" class="Texto form-control" name="video2" id="video2">
</div>

<div class="form-group">
<label for="video3">Vídeo 3</label>
<input type="text" class="Texto form-control" name="video3" id="video3">
</div>

 <div class="form-group">
<label for="pdf" class="Texto">PDF</label>
<input type="text" class="Texto form-control" name="pdf" id="pdf">
</div>

<button type="submit" class="Texto btn btn-primary" style="background-color: orangered;border-color: orangered;">Enviar</button>
</form>
<br><br><br><br> 
</div>  
  
@endsection