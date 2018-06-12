@extends('layouts.app')

@section('content')
<br><br><br>


    <div class="container">
    <nav class="breadcrumb">
    <a class="breadcrumb-item" href="/">Home</a>
    <a class="breadcrumb-item" href="/admin">Administrar</a>
    <span class="breadcrumb-item active">Lista de quem está realizando os cursos</span>
    </nav>
        

    <h1>Colaboradores</h1>
        <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th>Nome</th>
                        <th>Email</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                @foreach($dados as $d)
                    <tr>
                        <td><a href="adminUsersCurso/{{$d->id}}">  {{ $d->name }}</a></td>
                        <td>{{ $d->email }}</td>
                        <td>
                        @if($d->email != 'admin@samu.com') 
                            <form method="post" style="display: inline;" action="/deleteColaborador/{{$d->id}}">
                                {{csrf_field()}}
                                    <button class="btn btn-danger fa fa-trash" onclick="return confirm('Tem certeza que deseja deletar esse colaborador?'); return false;"></button>
                            </form> 
                        @endif    
                        </td>

                    </tr>
                    

                @endforeach
                
                </tbody>
        </table>
        <form method="post" style="display: inline;" action="/deleteUsers">
            {{csrf_field()}}
            <button class="btn" style="background: #191970;color: white;" onclick="return confirm('Tem certeza que deseja limpar o histórico de acesso?'); return false;">Limpar Histórico</button>
         </form> 
    </div>
     
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection