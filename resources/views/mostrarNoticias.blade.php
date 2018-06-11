@extends('layouts.app')
@section('content')
<br><br>
    <body>
        <div class="container">

            @foreach($dados as $v)

            <a href="/noticia/{{$v->id}}"><p>Nome: {{$v->titulo_noticia}}</p></a> <br>               
            <p>{{$v->paragrafo}}</p> <br>   
            <br><br><br>

            @endforeach

        </div>
    </body>




@endsection