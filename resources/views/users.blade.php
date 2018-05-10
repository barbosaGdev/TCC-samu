@extends('layouts.app')

@section('content')
<br><br><br>
    <div class="container">
        <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Nome</th>
                        <th>Email</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($dados as $d)

                    <tr>
                        <td><a href="adminUsersCurso/{{$d->id}}">  {{ $d->name }}</a></td>
                        <td>{{ $d->email }}</td>
                    </tr>

                @endforeach
                
                </tbody>
        </table>
    </div>
</body>
</html>
@endsection