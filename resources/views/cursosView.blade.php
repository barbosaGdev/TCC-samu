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

       @if ($dados->videoP == '')
          @else
        <div class="col-md-8 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="750" height="500" src="{{$dados->videoP}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
          @endif

      <!-- Portfolio Item Row -->
      <div class="row">
      @foreach($videos as $v)
          @if ($v->video == '')
          @else
        <div class="col-md-8 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="750" height="500" src="{{$v->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
          @endif
      @endforeach
        <div class="col-md-4">
        <h2>Descrição</h2>  
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
        <center><iframe src="{{$dados->pdf}}" width= "840" height= "680"></iframe></center>
      </p>
        @endif
      </div>
      <br><br><br><br><br><br>
</body>
</html>
@endsection