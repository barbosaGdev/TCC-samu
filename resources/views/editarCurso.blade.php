<?php 
$i='';
$j='';
?>
@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
<nav class="breadcrumb">
<a class="breadcrumb-item Texto" href="/">Home</a>
<a class="breadcrumb-item Tex   to" href="/admin">Administrar</a>
<a class="breadcrumb-item Texto" href="/adminEditarCurso">Editar Curso</a>
<span class="breadcrumb-item active Texto">Curso</span>
</nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3 Texto">Editar Curso</h1>

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
</div>

<form method="post" action="/editar" enctype="multipart/form-data">

    {{ csrf_field() }}

<input type="hidden" name="id" value="{{$dados->id}}">

@foreach ($videos as $v)
<input type="hidden" name="VideoId{{$i}}" value="{{$v->id}}">
<?php $i++;?>
@endforeach
<div class="form-group">    
<label for="nome" class="Texto">Nome do Curso</label>
<input type="text" class="Texto form-control" name="nome" id="nome" value="{{$dados->nome}}">
</div>

<div class="form-group">
<label for="descricao"class="Texto">Descrição</label>
<textarea rows="6" cols="100" type="text" class="Texto form-control" name="descricao" id="descricao" >{{$dados->descricao}}</textarea>
</div>

<div class="form-group">
<label for="img" class="Texto">Imagem do curso</label>
<input type="file" class="Texto form-control" name="img" id="img" value="{{$dados->img}}">
</div>

 <div class="form-group">
<label for="pdf" class="Texto">PDF</label>
<input type="file" class="Texto form-control" name="pdf" id="pdf" value="{{$dados->pdf}}">
</div>

<div class="form-group">
<label for="videoP" class="Texto">Aula Principal</label>
<input type="text" class="Texto form-control" name="videoP" id="videoP" autocomplete="off" value="{{$dados->videoP}}">
</div>

<div class="form-group">
<label for="video" class="Texto">Aulas Complementares</label>


@foreach ($videos as $v)

<input type="text" class="Texto form-control" name="video{{$j}}" id="video" autocomplete="off" value="{{$v->video}}">
<?php $j++;?>
@endforeach
</div> 

<button type="submit" class="btn btn-primary Texto" style="background-color: orangered;border-color: orangered;">Enviar</button>
</form> 
</div>
</div>    
</body>
</html>
<br><br><br><br><br><br><br>
@endsection