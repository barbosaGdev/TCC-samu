@extends('layouts.app')

@section('content')

<br><br><br>
    <div class="container">
    <nav class="breadcrumb">
    <a class="breadcrumb-item" href="/">Home</a>
    <a class="breadcrumb-item" href="/admin">Administrar</a>
    <a class="breadcrumb-item" href="/adminUsers">Lista de quem está realizando os cursos</a>
    <span class="breadcrumb-item active">Acesso do Usuário</span>
    </nav>
    <div class="align align-right">
    </div>
        <table class="table table-striped table-hover">
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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection