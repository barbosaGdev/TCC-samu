@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
@section('content')
<br><br><br>

<div class="container">

    
    @foreach ($dados as $v)
    
        {{ $v->titulo_noticia }} 

    <div class="align-right">
      <a href="/editarNoticia/{{$v->id}}" class="btn btn-primary fa fa-wrench" method="post"></a>
      <form method="post" style="display: inline;" action="/deleteNoticia/{{$v->id}}">
        {{csrf_field()}}
        <button class="btn btn-danger fa fa-trash"></button>
    </form>
    <br>
    @endforeach
    </div> 
</div>
@endsection
