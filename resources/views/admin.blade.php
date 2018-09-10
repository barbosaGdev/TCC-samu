@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <h1 class="Titulo animated fadeInDown">Bem Vindo Administrador!</h1>
                <br>
                <h2 class="Titulo animated fadeInDown">O que deseja fazer?</h2>
                <br>

                <ul class="animated fadeInDown">

                <li class="animated fadeInDown"><a href="/ajuda"><font size="5" class="Texto">Manual de Instrução</font></a></li>

                <li class="animated fadeInDown"><a href="{{ route('register') }}"><font size="5" class="Texto">Registrar novos Colaboradores</font></a></li>
               
                <li class="animated fadeInDown"><a href="/adminOuvidoria"><font size="5" class="Texto">Ouvidoria</font></a></li>

                <li class="animated fadeInDown"><a href="/adminUsers"><font size="5" class="Texto">Lista de quem está realizando os cursos</font></a></li>
                
                <li class="animated fadeInDown"><a href="/adminAddCurso"><font size="5" class="Texto">Adicionar novos cursos</font></a></li>

                <li class="animated fadeInDown"><a href="/noticiaInsere"><font size="5" class="Texto">Adicionar uma Notícia</font></a></li>

                <li class="animated fadeInDown"><a href="/adminEditarCurso"><font size="5" class="Texto">Editar um curso</font></a></li>

                <li class="animated fadeInDown"><a href="/adminEditarNoticia"><font size="5" class="Texto">Editar uma Notícia</font></a></li>
                
                </ul>
            
        </div>
    </div>
</div>

@endsection