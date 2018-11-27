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
    <h2 class="Titulo animated fadeInDown">Samu</h2>
    <p class="Texto animated fadeInDown" align="justify">O SERVIÇO DE ATENDIMENTO MÓVEL DE URGÊNCIA (SAMU) é um serviço Pré-hospitalar de Atendimento Móvel de Urgência e Emergência, tendo como objetivo chegar precocemente à vítima após ter ocorrido um agravo à sua saúde (de natureza clínica, cirúrgica, traumática, obstétrica, pediátrica, psiquiátrica, entre outras). </p></font>
    <h2 class="Titulo animated fadeInDown">Samu no Brasil</h2>
    <p class="Texto animated fadeInDown"  align="justify">Teve inicio a partir de um acordo bilateral entre Brasil e França, baseado
       no modelo Frances considerado por especialistas o melhor do mundo. 
       O Serviço é oferecido pelo Governo Federal em parcerias  com Estados e Municípios, com o objetivo de padronização e cobertura em todo território nacional,  regulamentada pela portaria 1010/MS e 2048/MS. 
    </p>
    
  </div>
</div>
<!-- /.row -->
<hr>

<h2 class="Titulo">Quando e como chamar o Samu</h2>
<br>
<div class="table-responsive">
<table class="table table-hover tableAbout">
    <thead> 
      <tr>
        <th class="thAbout">Quando chamar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="Texto">Em trabalhos de parto onde haja risco de morte da mãe e o feto</td>
      </tr>
      <tr>
        <td class="Texto">Em casos de tentativa de suicídio</td>
      </tr>
      <tr>
        <td class="Texto">Quando houver acidentes com vítimas</td>
      </tr>
      <tr>
        <td class="Texto">Em acidentes de trânsito (atropelamentos)</td>
      </tr>
      <tr>
        <td class="Texto">Intoxicação exógena</td>
      </tr>
      <tr>
        <td class="Texto">Afogamento </td>
      </tr>
      <tr>
        <td class="Texto">Choque elétrico </td>
      </tr>
      <tr>
        <td class="Texto">Problema cardiorrespiratório</td>
      </tr>
      <tr>
        <td class="Texto">Crise hipertensiva</td>
      </tr>
      <tr>
        <td class="Texto">Acidentes com produtos perigosos</td>
      </tr>
      <tr>
        <td class="Texto">Queimaduras graves</td>
      </tr>

    </tbody>

 </table> 
<br>
<table class="table table-hover tableAbout">
    <thead> 
      <tr>
        <th class="thAbout">COMO CHAMAR</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><strong>1º</strong> Por meio do número 192 você tem acesso ao Serviço de Atendimento Móvel de Urgência</td>
      </tr>
      <tr>
        <td><strong>2º</strong> O acionamento é feito pela central telefônica. Após o contato você deve dizer seu nome, o que e onde aconteceu</td>
      </tr>
      <tr>
        <td><strong>3º</strong> A partir do relato será feita a classificação do risco: que pode ser desde uma orientação por telefone até o envio de uma ambulância básica ou avançada para o local</td>
      </tr> 
      <tr>
        <td><strong>4º</strong> Não mexa na vítima. Isso pode acarretar outra sequela mais grave.</td>
      </tr> 
    </tbody>
</table>
</div>
<br>


<!-- /.row -->
<br>
<!-- Our Customers -->
<h2 class="Titulo">Hierarquia</h2><br>
<div class="row">
&nbsp;&nbsp;&nbsp;
<img class="img-fluid rounded mb-4 animated fadeInRight" src="https://github.com/barbosaGdev/TCC-samu/blob/master/public/images/Capturar.PNG?raw=true" alt="">

</div><br><br>

<!-- Desenvolvedores -->
<div class="container-fluid">
  <h1 class="text-center mb-3">Desenvolvedores</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('images/b1.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Gabriel Barbosa</h4>
            <p class="card-text">Gerente</p>
            <p class="card-text">Estudante, capoeirista, poeta, amante de programação e filosofia.</p>
            <p class="card-text"><small class="text-muted">biki.jam@hotmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('images/jp2.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">João Pedro</h4>
            <p class="card-text">Programador</p>
            <p class="card-text">Estudante, jogador de Fortnite, amante do mundo dos games</p>
            <p class="card-text"><small class="text-muted">jpfreitas2001@gmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('images/eu2.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">João Vitor</h4>
            <p class="card-text">Designer</p>
            <p class="card-text">Estudante, músico, atleta, adora tecnologia e jogos</p>
            <p class="card-text"><small class="text-muted">vitorsilvestre9@hotmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('images/ju4.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Julia Souza</h4>
            <p class="card-text">Programadora</p>
            <p class="card-text">Estudante, ex atleta, garota gamer, adora memes e cachorros</p>
            <p class="card-text"><small class="text-muted">jsouzajj27@gmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ asset('images/v1.jpg') }}" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Victor Marques</h4>
            <p class="card-text">Banco de Dados</p>
            <p class="card-text">Estudante, atleta, gosta de ler e de arte</p>
            <p class="card-text"><small class="text-muted">victormarques090600@gmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Bárbara</h4>
            <p class="card-text">Escritora</p>
            <p class="card-text">Estudante, apreciadora do mundo automotivo, adora animais como gatos.</p>
            <p class="card-text"><small class="text-muted">ba.burgo@gmail.com</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Murilo</h4>
            <p class="card-text">Escritor</p>
            <p class="card-text">Estudante, jogador profissional de qualquer jogo eletrônico, amante de RPGs e outras coisas do mundo geek</p>
            <p class="card-text"><small class="text-muted">murilo.camilo.martins@hotmail.com<</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
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

    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    
@endsectione