@extends('layouts.app')

@section('content')

<br><br><br>
    <div class="container">
    <nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <a class="breadcrumb-item Texto" href="/adminUsers">Lista de quem está realizando os cursos</a>
    <span class="breadcrumb-item active Texto">Acesso do Usuário</span>
    </nav>
    <div class="align align-right">
    </div>
        <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        
                        <th class="Texto">Nome</th>
                        <th class="Texto">Curso</th>
                        <th class="Texto">Data do ultimo acesso</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($users as $d)

                    <tr>
                        <td class="Texto">{{ $d->nome }}</td>
                        <td class="Texto">{{ $d->curso }}</td>
                        <td class="Texto">{{ $d->acesso }}</td>
                    </tr>

                @endforeach
                
                </tbody>
        </table>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection