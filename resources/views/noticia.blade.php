@extends('layouts.app')

@section('content')
<br><br>
    <!-- Page Content -->
    <div class="container">
 
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3 Titulo">{{$dados->titulo_noticia}}
      </h1>

      <div class="row">

        <!-- Post Content Column -->
        
        <div class="col-lg-8">

          <hr>

          <!-- Date/Time -->
          <p class="Texto">Data do Post da Notícia: {{$dados->created_at}}</p>

          <hr>    
          <p class="lead Texto"><?php echo htmlspecialchars_decode(stripslashes($dados->texto)); ?></p>

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