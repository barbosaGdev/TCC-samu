@extends('layouts.app')

@section('content')
<br><br><br>

<div class="container">

    
    @foreach ($dados as $v)
    
        {{ $v->titulo_noticia }} 

    <div class="align-right">
      <a href="/editarNoticia/{{$v->id}}" class="btn btn-primary" method="post">Editar</a>
    </div>
    <br>
    @endforeach
</div>
@endsection
