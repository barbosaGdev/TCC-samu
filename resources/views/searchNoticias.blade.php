@extends('layouts.app')

@section('content')
<br><br><br>


<div class="container">
<div class="form-group">
    <form method="get" action="/searchNoticias" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="search" class="Texto form-control" name="search" id="search" list="historico" placeholder="Pesquisar Notícia">
            <datalist id="historico">
                @foreach($dados1 as $n)
                <option value="{{$n->titulo_noticia}}">
                @endforeach
            </datalist>
    </form>
</div>
<!-- Page Heading/Breadcrumbs -->
<nav class="breadcrumb">
<a class="breadcrumb-item Texto" href="/">Home</a>
<span class="breadcrumb-item active Texto">Notícias</span>
</nav>
<h1 class="mt-4 mb-3 Titulo">Notícias</h1>
<br>

@foreach ($dados as $v)
<!-- Project One -->
<div class="row">
  <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{$v->imagem1}}" height="700" width="500" >
  </div>
  <div class="col-md-5">
    <h3 class="Titulo">{{$v->titulo_noticia}}</h3>
    <p class="Texto">Data do Post da Notícia: {{$v
    ->created_at}}</p>

    <a href="/noticia/{{$v->id}}" class="btn btn-primary" style="background-color: orangered;border-color: orangered;">Ver
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
<!-- /.row -->

<hr>
@endforeach 
<br><br><br><br><br><br><br><br><br>
   
</div>
@endsection
