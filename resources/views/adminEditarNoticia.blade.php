@extends('layouts.app')

@section('content')
<br><br><br>

<div class="container">

    
    @foreach ($dados as $v)
    
        {{ $v->titulo_noticia }} 

    <div class="align-right">
      <a href="/editarNoticia/{{$v->id}}" class="btn btn-primary" method="post">Editar</a>
    <br>
    <form method="post" style="display: inline;" action="/deleteNoticia/{{$v->id}}">
        {{csrf_field()}}
        <button class="btn btn-danger">Excluir Noticia</button>
    </form>
    <br>
    @endforeach
    </div> 
</div>
@endsection
