@extends('layouts.app')

@section('content')
<br><br><br>
    
    <div class="container">

    <h1>Feedback da Comunidade</h1>
    <br>

    <table class="table table-striped table-hover table-primary">
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