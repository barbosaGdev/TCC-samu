@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
<nav class="breadcrumb">
<a class="breadcrumb-item" href="/">Home</a>
<a class="breadcrumb-item" href="/admin">Administrar</a>
<a class="breadcrumb-item" href="/adminEditarCurso">Editar Curso</a>
<span class="breadcrumb-item active">Curso</span>
</nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Editar Curso</h1>


<form method="post" action="/editar">

    {{ csrf_field() }}

<input type="hidden" name="id" value="{{$dados->id}}">

<div class="form-group">    
<label for="nome">Nome do Curso</label>
<input type="text" class="form-control" name="nome" id="nome" value="{{$dados->nome}}">
</div>

<div class="form-group">
<label for="descricao">Descrição</label>
<input rows="6" cols="100" type="text" class="form-control" name="descricao" id="descricao" value="{{$dados->descricao}}"></input>
</div>

<div class="form-group">
<label for="img">Imagem do curso</label>
<input type="text" class="form-control" name="img" id="img" value="{{$dados->img}}">
</div>

<div class="form-group">
<label for="video1">Vídeo Principal</label>
<input type="text" class="form-control" name="video1" id="video1" value="{{$dados->video1}}">
</div>

<div class="form-group">
<label for="video2">Vídeo 2</label>
<input type="text" class="form-control" name="video2" id="video2" value="{{$dados->video2}}">
</div>

<div class="form-group">
<label for="video3">Vídeo 3</label>
<input type="text" class="form-control" name="video3" id="video3" value="{{$dados->video3}}">
</div>

 <div class="form-group">
<label for="pdf">PDF</label>
<input type="text" class="form-control" name="pdf" id="pdf" value="{{$dados->pdf}}">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form> 
</div>
</div>    
</body>
</html>
<br><br><br><br><br><br><br>
@endsection