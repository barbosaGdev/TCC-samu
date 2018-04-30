@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="container">

    <h4>{{$dados->titulo_noticia}}<h4>
    <br>
            @if ($dados->imagem1 == '')
            @else
            <div>
            <img width="560" height="315" src="{{$dados->imagem1}}"></img>
            </div>
            @endif
           
            @if ($dados->paragrafo1 == '')
            @else
            <div>
                <p>{{$dados->paragrafo1}}</p>
            </div>
            @endif

             @if ($dados->imagem2 == '')
            @else
            <div>
            <img width="560" height="315" src="{{$dados->imagem2}}"></img>
            </div>
            @endif

             @if ($dados->paragrafo2 == '')
            @else
            <div>
                <p>{{$dados->paragrafo2}}</p>
            </div>
            @endif

             @if ($dados->imagem3 == '')
            @else
            <div>
            <img width="560" height="315" src="{{$dados->imagem3}}"></img>
            </div>
            @endif

            @if ($dados->paragrafo3 == '')
            @else
            <div>
                <p>{{$dados->paragrafo3}}</p>
            </div>
            @endif

            @if ($dados->paragrafo4 == '')
            @else
            <div>
                <p>{{$dados->paragrafo4}}</p>
            </div>
            @endif
            


           
           
            
            
    </div>
</body>
</html>

@endsection