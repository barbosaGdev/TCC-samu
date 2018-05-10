@extends('layouts.app')

@section('content')
<br><br><br>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{$dados->nome}}
        <small>Nep</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
          @if ($dados->video1 == '')
          @else
        <div class="col-md-8">
            <iframe width="750" height="500" src="{{$dados->video1}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
          @endif

        <div class="col-md-4">
          <h3 class="my-3">Descrição do Curso</h3>
          <p>{{$dados->descricao}}</p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Videos</h3>

      <div class="row">
          
          @if ($dados->video2 == '')
          @else
        <div class="text-align-left">
       
        <iframe width="500" height="300" src="{{$dados->video2}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>          
        </div>
         &nbsp; &nbsp; &nbsp; &nbsp;
          @endif
          
          @if ($dados->video3 == '')
          @else
        <div class="text-align-right">
            <iframe width="500" height="300" src="{{$dados->video3}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
          @endif
     

      </div>
      
         @if ($dados->pdf == '')
        @else
       <center>
                                
        <iframe src="{{$dados->pdf}}" width="740" height="580"></iframe>
           
       </center>
        @endif

    </div>
   
</body>
</html>
@endsection