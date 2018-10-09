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
<div class="panel-body">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
             <li>{{$error}}</li>  
            @endforeach          
            </ul>
        </div>
        @endif

<form method="post" action="/salvar" enctype="multipart/form-data">

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
<input type="file" class="Texto form-control" name="img" id="img" autocomplete="off">
</div>

<div class="form-group">
<label for="pdf" class="Texto">PDF</label>
<input type="file" class="Texto form-control" name="pdf" id="pdf" autocomplete="off">
</div>


<div class="form-group">
<label for="videoP" class="Texto">Aula Principal</label>
<input type="text" class="Texto form-control" name="videoP" id="videoP" autocomplete="off">
</div>

<div class="form-group">
<label for="video" class="Texto">Aulas Complementares</label>
<input type="text" class="Texto form-control" name="video" id="video" autocomplete="off">
<input type="text" class="Texto form-control" name="video1" id="video1" autocomplete="off">
</div> 

<button type="submit" class="Texto btn btn-primary" style="background-color: orangered;border-color: orangered;">Enviar</button>
</form>
<br><br><br><br> 
</div>  
  
@endsection