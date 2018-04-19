@extends('layouts.app')

@section('content')
<br><br><br>
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
            
            </tbody

    </table>
</body>
</html>
@endsection