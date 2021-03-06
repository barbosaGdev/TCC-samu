@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
@section('content')
<br>
<br><br>
<div class="container">
<nav class="breadcrumb">
<a class="breadcrumb-item Texto" href="/">Home</a>
<a class="breadcrumb-item Texto" href="/admin">Administrar</a>
<span class="breadcrumb-item active Texto">Editar Notícia</span>
</nav>
    
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
    <p class="lead Texto">{{$v->paragrafo1}}</p>
    <div class="align-right">
      <a href="/editarNoticia/{{$v->id}}" class="btn btn-primary fa fa-wrench" method="post"></a>
      <form method="post" style="display: inline;" action="/deleteNoticia/{{$v->id}}">
        {{csrf_field()}}
        <button class="btn btn-danger fa fa-trash" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"></button>
    </form>
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
</div>
<!-- /.row -->

<hr>
@endforeach 
        </div>
    </div> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
