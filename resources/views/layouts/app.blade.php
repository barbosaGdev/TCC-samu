<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    
</head>
<body>
 
 
 <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fixed-top" style="background-color: #191970">
      <div class="container">
          <img src="{{ asset('images/samu_logo.png') }}">
        <a class="navbar-brand" href="/">Samu Baixa Mogiana</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/about"><font color="white">Sobre</font></a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="/ouvidoria"><font color="white">Ouvidoria</font></a>
            </li>

               @guest
                    <li><a class="nav-link" href="{{ route('login') }}"><font color="white">NEP</font></a></li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <font color="white">{{ Auth::user()->name }}</font> <span class="caret"></span>
                        </a>

                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/cursos">
                                        Meus Cursos
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        Logout
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
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>

</body>
</html>