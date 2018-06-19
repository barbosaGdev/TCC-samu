@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1 class="Titulo">Bem Vindo Administrador!</h1>
                <br>
                <h2 class="Titulo">O que deseja fazer?</h2>
                <br>

                <ul>
                <li><a href="{{ route('register') }}"><font size="5" class="Texto">Registrar novos Colaboradores</font></a></li>
               
                <li><a href="/adminOuvidoria"><font size="5" class="Texto">Ouvidoria</font></a></li>

                <li><a href="/adminUsers"><font size="5" class="Texto">Lista de quem está realizando os cursos</font></a></li>
                
                <li><a href="/adminAddCurso"><font size="5" class="Texto">Adicionar novos cursos</font></a></li>

                <li><a href="/noticiaInsere"><font size="5" class="Texto">Adicionar uma Notícia</font></a></li>

                <li><a href="/adminEditarCurso"><font size="5" class="Texto">Editar um curso</font></a></li>

                <li><a href="/adminEditarNoticia"><font size="5" class="Texto">Editar uma Notícia</font></a></li>
                
                </ul>
            
        </div>
    </div>
</div>

@endsection