@extends('layouts.app')

@section('content')
<br><br><br>

<div class="container">
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Meus Cursos
  <small>- Núcleo de Educação e Pesquisa</small>
</h1>
<br>

@foreach ($dados as $v)
<!-- Project One -->
<div class="row">
  <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0" src="{{$v->img}}" height="700" width="500" >
  </div>
  <div class="col-md-5">
    <h3>{{$v->nome}}</h3>
    <p>{{$v->descricao}}</p>
    <a href="/cursosView/{{$v->id}}" class="btn btn-primary">Cursar
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
