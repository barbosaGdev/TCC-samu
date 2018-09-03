@extends('layouts.app')

@section('content')
<br><br>
    
    <div class="container">
    <nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <span class="breadcrumb-item active Texto">Ouvidoria</span>
    </nav>
    <h1 class="Texto">Feedback da Comunidade</h1>
    <br>

    <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="Texto">Nome</th>
                    <th class="Texto">Telefone para Contato</th>
                    <th class="Texto">Email para Contato</th>
                    <th class="Texto">Texto</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $value)
                <tr>
                    <td class="Texto">{{ $value->nome }}</td>
                    <td class="Texto">{{ $value->telefone }}</td>
                    <td class="Texto">{{ $value->email }}</td>
                    <td class="Texto" style="white-space: initial">{{ $value->texto }}</td>
                </tr>


            @endforeach
            </tbody>
            
        </table>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection