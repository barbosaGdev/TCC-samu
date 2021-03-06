@extends('layouts.app')

@section('content')
<br><br>


    <div class="container">
    <nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/admin">Administrar</a>
    <span class="breadcrumb-item active Texto">Lista de quem está realizando os cursos</span>
    </nav>
        

    <h1 class="Texto">Colaboradores</h1>
        <table class="table table-striped tableAbout">
                <thead>
                    <tr>
                        
                        <th class="Texto thAbout">Nome</th>
                        <th class="Texto thAbout">Email</th>
                        <th class="Texto thAbout"></th>

                    </tr>
                </thead>
                <tbody>
                @foreach($dados as $d)
                    <tr>
                        <td><a href="adminUsersCurso/{{$d->id}}" class="Texto">{{ $d->name }}</a></td>
                        <td class="Texto">{{ $d->email }}</td>
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
            <button class="btn Texto" style="background: #191970;color: white;" onclick="return confirm('Tem certeza que deseja limpar o histórico de acesso?'); return false;">Limpar Histórico</button>
         </form> 

         <a href="/gerarExcel" class="btn Texto" style="background: #191970;color: white;">Gerar Relatório</a>
    </div>
     
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection