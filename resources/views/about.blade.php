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
<hr>

<h2 class="Titulo">QUANDO E COMO CHAMAR O SAMU</h2>
<br>
<div class="table-responsive">
<table class="table table-hover tableAbout">
    <thead> 
      <tr>
        <th class="thAbout">QUANDO CHAMAR</th>
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



  </div><br><br>


<!-- Team Members -->
<h2 class="Titulo">Desenvolvedores</h2><br>

<div class="row">
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/G1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Gabriel Barbosa</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Gerente</h6>
        <p class="card-text Texto">Estudante, capoeirista, poeta, amante de programação e filosofia</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">biki.jam@hotmail.com</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Eu.jpg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">João Vitor</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Designer</h6>
        <p class="card-text Texto">Estudante, músico, atleta, adora tecnologia e jogos</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">vitorsilvestre9@hotmail.com</a>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Vi1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Vitor Marques</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Banco de Dados</h6>
        <p class="card-text Texto">Estudante, atleta, gosta de ler e de arte</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">victormarques090600@gmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Jo1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">João Pedro</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Programador</h6>
        <p class="card-text Texto">Estudante, jogador de overwatch, amante do mundo dos games</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">jpfreitas2001@gmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Ju.jpg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Júlia Souza</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Programadora</h6>
        <p class="card-text Texto">Estudante, ex atleta, garota gamer, adora memes e cachorros</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">jsouzajj27@gmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Mu1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Murilo Martins</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Escritor</h6>
        <p class="card-text Texto">Estudante, jogador profissional de qualquer jogo eletrônico, amante de RPGs e outras coisas do mundo geek</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">murilo.camilo.martins@hotmail.com</a>
      </div>
    </div>
  </div>

<div class="col-lg-4 mb-4">
    <div class="card h-100 text-center shadowCard">
      <img class="card-img-top" src="{{ asset('images/Ba1.jpeg') }}" height="210">
      <div class="card-body">
        <h4 class="card-title Titulo">Bárbara</h4>
        <h6 class="card-subtitle mb-2 text-muted Titulo">Escritora</h6>
        <p class="card-text Texto">Estudante, apreciadora do mundo automotivo, adora animais como gatos, não se deixa levar pelo "tamanho" do problema</p>
      </div>
      <div class="card-footer">
        <a href="#" class="Texto">ba.burgo@gmail.com</a>
      </div>
    </div>
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

@endsection