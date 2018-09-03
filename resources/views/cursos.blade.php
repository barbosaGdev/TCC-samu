@extends('layouts.app')

@section('content')
<br><br>


<div class="container">
<div class="form-group">
    <form method="get" action="/searchCursos" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="search" name="search" class="Texto form-control animated fadeInDown" id="search" list="cursos" placeholder="Pesquisar Cursos" autocomplete="off">
            <datalist id="cursos">
                @foreach($dados as $n)
                <option value="{{$n->nome}}">
                @endforeach
            </datalist>
    </form>
</div>
<!-- Page Heading/Breadcrumbs -->
<nav class="breadcrumb animated fadeInDown">
<a class="breadcrumb-item Texto animated fadeInDown" href="/">Home</a>
@if($loggedUser->email == 'admin@samu.com')
<a class="breadcrumb-item Texto animated fadeInDown" href="/admin">Admin</a>
@endif
<span class="breadcrumb-item active Texto animated fadeInDown">Meus Cursos</span>
</nav>
<h1 class="mt-4 mb-3 Titulo animated fadeInDown">Meus Cursos
  <small class="Titulo animated fadeInDown">- Núcleo de Educação Permanente</small>
</h1>
<br>

@foreach ($dados as $v)
<!-- Project One -->
<div class="row">
  <div class="col-md-7 img-fluid">
      <img class="img-fluid rounded mb-3 mb-md-0  animated fadeInRight" src="{{ $v->img }}" height="500" width="500" >
  </div>
  <div class="col-md-5">
    <h3 class="Titulo animated fadeInDown">{{$v->nome}}</h3>
    <p class="Texto animated fadeInDown"  align="justify">{{$v->descricao}}</p>
    <a href="/cursosView/{{$v->id}}" class="btn btn-primary Texto animated fadeInDown" style="background-color: orangered;border-color: orangered;">Cursar
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
