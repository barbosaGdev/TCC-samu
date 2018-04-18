@extends('layouts.app')

@section('content')
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <h1>{{$dados->nome}}</h1>
    </div><br>

    <div class="row">
        <p>{{$dados->descricao}}</p>
    </div><br>

    @if ($dados->video1 == '')
    @else
    <div>
    <iframe width="560" height="315" src="{{$dados->video1}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<<<<<<< HEAD
    </div><br>

    <div>
    <iframe width="560" height="315" src="{{$dados->video2}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
=======
>>>>>>> 7292a87bbcb2c05781a663d00167fe40339ebea0
    </div><br>
    @endif

    @if ($dados->video2 == '')
    @else
    <div>
<<<<<<< HEAD
    <iframe width="560" height="315" src="{{$dados->video3}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
=======
    <iframe width="560" height="315" src="{{$dados->video2}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
>>>>>>> 7292a87bbcb2c05781a663d00167fe40339ebea0
    </div><br>
    @endif


    @if ($dados->video3 == '')
    @else
    <div>
    <iframe width="560" height="315" src="{{$dados->video3}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div><br>
    @endif
    
    @if ($dados->pdf == '')
    @else
    <div class>
    <iframe src="{{$dados->pdf}}" width="740" height="580"></iframe>
    </div><br>
    @endif
</body>
</html>
@endsection