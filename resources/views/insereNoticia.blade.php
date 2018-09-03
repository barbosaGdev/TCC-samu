@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
<nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <span class="breadcrumb-item active Texto">Nova Notícia</span>
    </nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3 Texto">Nova Notícia</h1>

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


<form method="post" action="/noticiaInserir" enctype="multipart/form-data">

    {{ csrf_field() }}

<div class="form-group" >   
<label for="titulo_noticia" class="Texto">Manchete</label>
<input type="text" class="Texto form-control" name="titulo_noticia" id="titulo_noticia" autocomplete="off">
</div>

<div class="form-group" > 
<label for="imagem1" class="Texto">Imagem Destaque</label>
<input type="file" class="Texto form-control" name="imagem1" id="imagem1" autocomplete="off">
</div>
    
<div class="form-group">
<label for="texto" class="Texto">Informações</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="texto" id="texto" autocomplete="off"></textarea>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'texto' );
    </script>

<br>
<button type="submit" class="Texto btn btn-primary" style="background-color: orangered;border-color: orangered;">Enviar</button>
</div>

<br><br><br><br>
</form> 
    
</body>
</html>

@endsection

