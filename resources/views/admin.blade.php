@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1>Bem Vindo Administrador!</h1>
                <br>
                <h2>O que deseja fazer?</h2>
                <br>

                <ul>
                <li><a href="{{ route('register') }}"><font size="5">Registrar novos Colaboradores</font></a></li>
               
                <li><a href="/adminOuvidoria"><font size="5">Ouvidoria</font></a></li>

                <li><a href="/adminUsers"><font size="5">Lista de quem está realizando os cursos</font></a></li>
                
                <li><a href="/adminAddCurso" ><font size="5">Adicionar novos cursos</font></a></li>

                <li><a href="/noticiaInsere"><font size="5">Adicionar uma Notícia</font></a></li>

                <li><a href="/adminEditarCurso"><font size="5">Editar um curso</font></a></li>

                <li><a href="/adminEditarNoticia"><font size="5">Editar uma Notícia</font></a></li>
                
                </ul>
            
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>
@endsection