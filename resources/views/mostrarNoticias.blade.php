@extends('layouts.app')

@section('content')
<br><br><br>

<div class="container">
<!-- Page Heading/Breadcrumbs -->
<nav class="breadcrumb">
<a class="breadcrumb-item" href="/">Home</a>
<span class="breadcrumb-item active">Notícias</span>
</nav>
<h1 class="mt-4 mb-3">Notícias</h1>
<br>

@foreach ($dados as $v)
<!-- Project One -->
<div class="row">
  <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{$v->imagem1}}" height="700" width="500" >
  </div>
  <div class="col-md-5">
    <h3>{{$v->titulo_noticia}}</h3>
    <p>Data do Post da Notícia: {{$v
    ->created_at}}</p>
    <p class="lead">{{$v->paragrafo1}}</p>
    <a href="/noticia/{{$v->id}}" class="btn btn-primary">ler
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
