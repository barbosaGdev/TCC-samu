@extends('layouts.app')

@section('content')
<br><br><br>
    <div class="container">
        <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th>Nome</th>
                        <th>Curso</th>
                        <th>Data do ultimo acesso</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($users as $d)

                    <tr>
                        <td>{{ $d->nome }}</td>
                        <td>{{ $d->curso }}</td>
                        <td>{{ $d->acesso }}</td>
                    </tr>

                @endforeach
                
                </tbody>
        </table>
    </div>
</body>
</html>
@endsection