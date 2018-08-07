@extends('layouts.app')

@section('content')
<br><br>
    <!-- Page Content -->
    <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <nav class="breadcrumb">
    <a class="breadcrumb-item Texto" href="/">Home</a>
    <a class="breadcrumb-item Texto" href="/cursos">Meus Cursos</a>
    <span class="breadcrumb-item active Texto">Curso</span>
    </nav>
      <h1 class="mt-4 mb-3 Titulo">{{$dados->nome}}
        <small class="Titulo">- Nep</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
          @if ($videos->video == '')
          @else
        <div class="col-md-8 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="750" height="500" src="{{$videos->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
          @endif

        <div class="col-md-4">
          <p class="Texto">{{$dados->descricao}}</p>
        </div>

      </div>
      <!-- /.row -->
     

      </div>
      <br>
         @if ($dados->pdf == '')
        @else
      <div class="main-container threecolumns">      
      <p>                  
        <iframe src="{{$dados->pdf}}" width= "840" height= "680"></iframe>
      </p>
        @endif
      </div>
      <br><br><br><br><br><br>
</body>
</html>
@endsection