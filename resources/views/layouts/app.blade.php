<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OnSamu BM</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
</head>
<body>
 
 
 <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" id="nav">
      <div class="container">
          <img src="{{ asset('images/logoo.png') }}" width="45">
        <a class="navbar-brand navHome" href="/">SAMU Baixa Mogiana</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link navHome" href="/about"><font color="white" size="3px">Sobre</font></a>
            </li>           

            <li class="nav-item">
              <a class="nav-link navHome" href="/ouvidoria"><font color="white" size="3px">Ouvidoria</font></a>
            </li>

            <li class="nav-item">
              <a class="nav-link navHome" href="/ver/noticias"><font color="white" size="3px">Noticias</font></a>
            </li>

               @guest
                    <li><a class="nav-link navHome" href="{{ route('login') }}"><font color="white" size="3px">NEP</font></a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle navHome" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <font color="white" size="3px">{{ Auth::user()->name }}</font> <span class="caret"></span>
                        </a>

                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/cursos">
                                        Meus Cursos
                    </a>

                    <a class="dropdown-item " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        Sair
                    </a>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    </div>
                </li>
                        @endguest
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
        <main>
            @yield('content')
        </main>
    </div>

   <!-- Footer -->
    <footer class="footer" >
        <br><br>
        <div class="container">
        <h5 class="m-0 text-left text-white" ><i>Plataforma Web do SAMU da Baixa Mogiana</h5>&nbsp;&nbsp;&nbsp;&nbsp;   <img id="imgFooter" src="{{ asset('images/logo.png') }}"> <br> 
        <p class="text-white">Acesse a nossa página no  <a href="https://www.facebook.com/samubaixamogiana/?rf=287489251342339"<i style="margin: 2px" class="	fa fa-facebook-square"> Facebook</a></p>
        <p class="text-white"><i style="margin: 2px" class="fa fa-phone"> Telefone Administrativo: (19) 3811-7450</i> </p> 
        <a href="https://github.com/barbosaGdev/TCC-samu" class="text-white"> Copyright © OnSamu BM 2018</a>
        
      </div>
  
      <!-- /.container -->

      <div class="footer-copyright py-3 text-center">
        
      </div>
    </footer>
                      
 
    

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>

</body>
</html>