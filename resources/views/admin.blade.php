@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Bem Vindo Administrador!</h1>
                <h2>O que deseja fazer?</h2>

                <a href="{{ route('register') }}">Registrar novos Colaboradores</a>
                <p>Lista de quem está realizando o cursos</p>

                <a href="/adminOuvidoria">Ouvidoria</a>
                
                <a href="/adminAddCurso" >Adicionar novos cursos</a>

            </div>
        </div>
    </div>
</div>
@endsection