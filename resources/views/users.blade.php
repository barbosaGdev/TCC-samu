@extends('layouts.app')

@section('content')
<br><br><br>


    <div class="container">

        

    <h1>Colaboradores</h1>
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
        <form method="post" style="display: inline;" action="/deleteUsers">
            {{csrf_field()}}
            <button class="btn btn-danger fa fa-trash" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;">Limpar Histórico</button>
         </form> 
    </div>
     
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection