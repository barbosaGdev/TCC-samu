<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
    <h1>{{$dados->nome}}</h1>
    </div>

    <div>
        <p>{{$dados->descricao}}</p>
    </div>

    <div>
    <iframe width="420" height="315" src="{{$dados->video}}"></iframe>
    </div>

    <div>
        <img src="{{$dados->imagem}}">
    </div>

    <div>
    <iframe src="{{$dados->pdf}}" width="740" height="580"></iframe>
    </div>
</body>
</html>