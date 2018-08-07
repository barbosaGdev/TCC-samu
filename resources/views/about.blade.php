@extends('layouts.app')
@section('content')
<br><br>
  <!-- Page Content -->
  <div class="container">
  <nav class="breadcrumb animated fadeInDown">
  <a class="breadcrumb-item Texto animated fadeInDown" href="/">Home</a>
  <span class="breadcrumb-item active Texto animated fadeInDown">Sobre</span>
  </nav>
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3 Titulo animated fadeInDown">Quem Somos
  <small></small>
</h1>



<!-- Intro Content -->
<div class="row">
  <div class="col-lg-6">
    <img class="img-fluid rounded mb-4 animated fadeInRight" src="http://www.saobentodosul.sc.gov.br/img/noticias/foto/28796.jpg" alt="">
  </div>
  <div class="col-lg-6">
    <h2 class="Titulo animated fadeInDown">SAMU</h2>
    <p class="Texto animated fadeInDown">O SERVIÇO DE ATENDIMENTO MÓVEL DE URGÊNCIA (SAMU) é um serviço Pré-hospitalar de Atendimento Móvel de Urgência e Emergência, tendo como objetivo chegar precocemente à vítima após ter ocorrido um agravo à sua saúde (de natureza clínica, cirúrgica, traumática, obstétrica, pediátrica, psiquiátrica, entre outras). </p><br>
    <h2 class="Titulo animated fadeInDown">SAMU NO BRASIL</h2>
    <p class="Texto animated fadeInDown">Teve inicio a partir de um acordo bilateral entre Brasil e França, baseado
       no modelo Frances considerado por especialistas o melhor do mundo. 
       O Serviço é oferecido pelo Governo Federal em parcerias  com Estados e Municípios, com o objetivo de padronização e cobertura em todo território nacional,  regulamentada pela portaria 1010/MS e 2048/MS. 
    </p>
    
  </div>
</div>
<!-- /.row -->

<h2 class="Titulo">QUANDO E COMO CHAMAR O SAMU</h2><br>
  <h3 class="Titulo">Quando chamar </h3>
    <ul class="inside">
      <li class="Texto">Em trabalhos de parto onde haja risco de morte da mãe e o feto</li> 
      <li class="Texto">Em casos de tentativa de suicídio</li>  
      <li class="Texto">Quando houver acidentes com vítimas </li> 
      <li class="Texto">Em acidentes de trânsito (atropelamentos)</li> 
      <li class="Texto">Intoxicação exógena </li>  
      <li class="Texto">Afogamento </li>  
      <li class="Texto">Choque elétrico </li> 
      <li class="Texto">Problema cardiorrespiratório </li> 
      <li class="Texto">Crise hipertensiva </li>  
      <li class="Texto">Acidentes com produtos perigosos </li> 
      <li class="Texto">Queimaduras graves.</li>  
</ul>
<h3 class="Titulo">Como chamar</h3>
<ul class="inside">
   <li class="Texto">Por meio do número 192 você tem acesso ao Serviço de Atendimento Móvel de Urgência</li>
   <li class="Texto">O acionamento é feito pela central telefônica. Após o contato você deve dizer seu nome, o que e onde aconteceu</li>
   <li class="Texto">A partir do relato será feita a classificação do risco: que pode ser desde uma orientação por telefone até o envio de uma ambulância básica ou avançada para o local</li>
   <li class="Texto">Não mexa na vítima. Isso pode acarretar outra sequela mais grave.</li>   
</ul>
<br>
<!-- Team Members -->
<h2 class="Titulo">Desenvolvedores</h2>

<div class="row">
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/G1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Gabriel Barbosa</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Geral</h6>
        <p class="card-text Texto">Estudante, capoeirista, atleta, amante da programação e da arte de fazer amor</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">gabriel.david@hotmail.com</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Eu1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">João Vitor</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Front-End</h6>
        <p class="card-text Texto">Estudante, músico, atleta, toca vários instrumentos inclusive o coração das novinhas</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">vitorsilvestre9@hotmail.com</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Vi1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Vitor Marques</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Back-End</h6>
        <p class="card-text Texto">Estudante, atleta, gosta de ler e algumas artes como a de ganhar campeonatos de beleza</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">vitor.marques@hotmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Jo1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">João Pedro</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Banco de Dados</h6>
        <p class="card-text Texto">Estudante, jogador de overwatch, profissional da arte do embelezamento</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">mysfer.pedro@hotmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Ju1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Júlia Souza</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Banco de Dados</h6>
        <p class="card-text Texto">Estudante, ex atleta, garota gamer, adora memes e cachorros</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">julinha.souza@hotmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Mu1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Murilo Martins</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Escritor</h6>
        <p class="card-text Texto">Estudante, jogador profissional de qualquer jogo eletrônico, amante de RPGs e outras coisas do mundo geek</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">murilo.martins@hotmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center">
      <img class="card-img-top" src="{{ asset('images/Ba1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Bárbara</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Escritora</h6>
        <p class="card-text Texto">Estudante, apreciadora do mundo automotivo, adora animais como gatos, não se deixa levar pelo "tamanho" do problema</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">barbara.burgo@hotmail.com</a>
      </div>
    </div>
  </div>
</div>

<!-- /.row -->
<br>
<!-- Our Customers -->
<h2 class="Titulo">Hierarquia</h2><br>
<div class="row">
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
  <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="http://placehold.it/500x300" alt="">
  </div>
    
    
        
</div>
<center>
    
    <div class="col-lg-2 col-sm-4 mb-4">
    <img class="img-fluid" src="img/joao.jpg" alt="">
  </div>
    
</center>
<!-- /.row -->

</div>
<!-- /.container -->

@endsection