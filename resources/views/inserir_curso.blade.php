@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Novo Curso</h1>


<form method="post" action="/salvar">

    {{ csrf_field() }}

<div class="form-group">    
<label for="nome">Nome do Curso</label>
<input type="text" class="form-control" name="nome" id="nome">
</div>

<div class="form-group">
<label for="descricao">Descrição</label>
<textarea rows="6" cols="100" type="text" class="form-control" name="descricao" id="descricao"></textarea>
</div>

<div class="form-group">
<label for="img">Imagem do curso</label>
<input type="text" class="form-control" name="img" id="img">
</div>

<div class="form-group">
<label for="video1">Vídeo Principal</label>
<input type="text" class="form-control" name="video1" id="video1">
</div>

<div class="form-group">
<label for="video2">Vídeo 2</label>
<input type="text" class="form-control" name="video2" id="video2">
</div>

<div class="form-group">
<label for="video3">Vídeo 3</label>
<input type="text" class="form-control" name="video3" id="video3">
</div>

 <div class="form-group">
<label for="pdf">PDF</label>
<input type="text" class="form-control" name="pdf" id="pdf">
</div>

<button type="submit" class="btn btn-primary" style="background:#191970">Enviar</button>
</form>
<br><br><br><br> 
</div>  
  
@endsection