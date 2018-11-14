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
    </div>

    <div align="center">

    <div class="col-sm-12">
    <table class="table table-striped tableOuvidoria">
            <thead>
                <tr>
                    <th class="Texto thAbout">Nome</th>
                    <th class="Texto thAbout">Telefone para Contato</th>
                    <th class="Texto thAbout">Email para Contato</th>
                    <th class="Texto thAbout">Texto</th>
                    
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $value)
                <tr>
                    <td class="Texto">{{ $value->nome }}</td>
                    <td class="Texto">{{ $value->telefone }}</td>
                    <td class="Texto">{{ $value->email }}</td>
                    <td class="Texto tdOuvidoria">{{ $value->texto }}</td>
                </tr>


            @endforeach
            </tbody>
            
        </table>
        </div>
        </div>
        <br>
        <form method="post" style="display: inline;" action="/deleteOuvidoria">
            {{csrf_field()}}
                                                                                                                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn Texto" style="background: #191970;color: white;" onclick="return confirm('Tem certeza que deseja limpar o histórico da ouvidoria?'); return false;">Limpar Histórico</button>
         </form> 
    
     


    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection