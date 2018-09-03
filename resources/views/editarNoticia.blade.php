@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
<nav class="breadcrumb">
<a class="breadcrumb-item Texto" href="/">Home</a>
<a class="breadcrumb-item Texto" href="/admin">Administrar</a>
<a class="breadcrumb-item Texto" href="/adminEditarNoticia">Editar Notícia</a>
<span class="breadcrumb-item active Texto">Notícia</span>
</nav>
        <div class="row">
            <div class="col-8">
            <h1 class="display-3 Texto">Editar Notícia</h1>
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
<form method="post" action="/updateNoticia" enctype="multipart/form-data">

    {{ csrf_field() }}

<input type="hidden" name="id" value="{{$dados->id}}">

<div class="form-group">   
<label for="titulo_noticia" class="Texto">Manchete</label>
<input type="text" class="Texto form-control"name="titulo_noticia" id="titulo_noticia" value="{{$dados->titulo_noticia}}">
</div>

<div class="form-group"> 
<label for="imagem1" class="Texto">Imagem Destaque</label>
<input type="file" class="Texto form-control" name="imagem1" id="imagem1" autocomplete="off">
</div>

<div class="form-group">
<label for="texto" class="Texto">Informações</label>
<textarea rows="6" cols="100" class="Texto form-control" type="text" name="texto" id="texto" autocomplete="off">{{$dados->texto}}</textarea>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'texto' );
    </script>
</div>

<button type="submit" class="btn btn-primary Texto" style="background-color: orangered;border-color: orangered;">Enviar</button><br><br><br><br><br><br>
</form> 
</div>    


@endsection