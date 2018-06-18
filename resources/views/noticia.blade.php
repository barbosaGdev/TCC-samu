@extends('layouts.app')

@section('content')
<br><br>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{$dados->titulo_noticia}}
      </h1>

      <div class="row">

        <!-- Post Content Column -->
        
        <div class="col-lg-8">
        @if ($dados->imagem1 == '')
        @else
          <!-- Preview Image -->
          <img class="img-fluid rounded" width="400" height="500" src="{{$dados->imagem1}}" ><br><br>
        @endif   

          <hr>

          <!-- Date/Time -->
          <p>Data do Post da Notícia: {{$dados->created_at}}</p>

          <hr>

          <!-- Post Content -->
          <p class="lead">{{$dados->paragrafo1}}</p>

        @if ($dados->imagem2 == '')
        @else
          <!-- Preview Image -->
          <img class="img-fluid rounded" width="400" height="500" src="{{$dados->imagem2}}" ><br><br>
        @endif   

          <p class="lead">{{$dados->paragrafo2}}</p><br>
        
        
        @if ($dados->imagem3 == '')
        @else
          <!-- Preview Image -->
          <img class="img-fluid rounded" width="600" height="700" src="{{$dados->imagem3}}" ><br><br>
        @endif   
        
          <p class="lead">{{$dados->paragrafo3}}</p>

          <p class="lead">{{$dados->paragrafo4}}</p>

        </div>  
          <hr>

          <!-- Comments Form -->
         

          <!-- Single Comment -->
          

          <!-- Comment with nested comments -->
          <div class="media mb-4">
            
            <div class="media-body">
              

              

            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        

        </div>
      
      </div>
      <!-- /.row -->
      <br><br><br><br><br><br>
    
    <!-- /.container -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
@endsection