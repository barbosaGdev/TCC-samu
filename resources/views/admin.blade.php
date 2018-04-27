@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1>Bem Vindo Administrador!</h1>
                <br>
                <h2>O que deseja fazer?</h2>
                <br>

                <ul>
                <li><a href="{{ route('register') }}">Registrar novos Colaboradores</a></li>
               

                <li><a href="/adminOuvidoria">Ouvidoria</a></li>
                
                <li><a href="/adminAddCurso" >Adicionar novos cursos</a></li>

                <li><a href="/adminUsers">Lista de quem está realizando o cursos</a></li>

                <li><a href="/adminEditarCurso">Editar um curso</a></li>
                
                
                </ul>
            
        </div>
    </div>
</div>
@endsection