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

    <div>
        <img src="{{$dados->imagem}}">
    </div><br>

    <div>
    <iframe width="560" height="315" src="{{$dados->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div><br>

    

    <div class>
    <iframe src="{{$dados->pdf}}" width="740" height="580"></iframe>
    </div><br>
</body>
</html>