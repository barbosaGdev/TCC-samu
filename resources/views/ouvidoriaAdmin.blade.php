@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <div class="container">

    <h1>Feedback da Comunidade</h1>
    <br>

    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone para Contato</th>
                    <th>Email para Contato</th>
                    <th>Texto</th>
                    
                
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $value)
                <tr>
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->telefone }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->texto }}</td>
                
                <td>
                
                   
                    
                </td>
                
            </tr>

            @endforeach
            
            </tbody>
        </table>
    </div>
</body>
</html>

@endsection