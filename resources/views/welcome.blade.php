@extends('layouts.app')

@section('content')


 <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <?php $i = 0;?>
        
        <div class="carousel-inner" role="listbox">

          @foreach($dados as $v) 
          <div class="{{$i == 0 ? 'carousel-item active' : 'carousel-item' }}" style="background-image: url('{{$v->imagem1}}')">
            <div class="carousel-caption d-none d-md-block">
              <h3><font color="black">{{$v->titulo_noticia}}</font></h3>
               <a href="/noticia/{{$v->id}}" class="btn-dark" method="get">Ver Notícia</a>
            </div>
          </div>
          <?php $i++; ?>
          @endforeach
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>










  

    <!-- Page Content -->
    <div class="container">

        
        
          <h2>Samu:</h2>
          <p>O SERVIÇO DE ATENDIMENTO MÓVEL DE URGÊNCIA (SAMU) <br>
              é um serviço Pré-hospitalar de Atendimento Móvel <br>
              de Urgência e Emergência, tendo como objetivo <br>
              chegar precocemente à vítima após ter ocorrido <br>
              um agravo à sua saúde (de natureza clínica, <br>
              cirúrgica, traumática, obstétrica, pediátrica, <br>
              psiquiátrica, entre outras). </p>
          
          
        
        
        
      <h1 class="my-4">Primeiros Socorros</h1>

      <!-- Marketing Icons Section -->
  
       <!-- Marketing Icons Section -->
       <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Hipoglicemia</font></h4>
            <div class="card-body">
              <p class="card-text">A Hipoglicemia ocorre quando há falta de açúcar no sangue (falta de glicose). Geralmente acontece no período da manhã e não ocorre necessariamente com pessoas diabéticas. A glicose é responsável por levar o oxigênio para o cérebro; com a diminuição ocorre tonturas , confusão mental e até parada respiratória.</p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Hipoglicemia</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				          <div class="modal-body">
                                    <p> O que é a Hipoglicemia? <br><br>                             

                                        A Hipoglicemia ocorre quando há falta de açúcar no sangue (falta de glicose). Geralmente acontece no período da manhã e não ocorre necessariamente com pessoas diabéticas.<br> 
                                        A glicose é responsável por levar o oxigênio para o cérebro; com a diminuição ocorre tonturas , confusão mental e até parada respiratória.<br> <br> 


                                        Como reconhecer? Sinais e sintomas:<br> <br> 
                                        Mal estar geral;<br> 
                                        Palidez cutânea;<br> 
                                        Sudorese intensa (suor intenso);<br> 
                                        Confusão mental;<br> 
                                        Agitação e agressividade (em alguns casos);<br> 
                                        Perda de consciência (casos mais graves);<br> 
                                        Dificuldade respiratória.<br> <br> 

                                        Como proceder? <br><br>

                                        Ligar 192;<br>
                                        Se possível colocar a pessoa em um local ventilado;<br>
                                        Se consciente, oferecer algo doce (menos da metade de um copo de água, com 3 colheres cheias de açúcar);<br>
                                        Deitar a pessoa (com as pernas mais elevadas que a cabeça);<br>
                                        Aguardar o atendimento chegar.<br><br>

                                        Como proceder em casos mais graves? (pessoa inconsciente)<br><br>

                                        Ligar 192;<br>
                                        Se possível colocar a pessoa em um local ventilado;<br>
                                        Hiperestender (esticar) a cabeça da pessoa para trás;<br>
                                        Não dar nada por via oral para a pessoa;<br>
                                        Aguardar o atendimento chegar.<br>

                                    </p>

                                    
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Convulsão</font></h4>
            <div class="card-body">
              <p class="card-text">Convulsões geralmente são problemas neurológicos causados por uma descarga elétrica no cérebro. 
Em alguns casos ocorrem devidos a TCE's ( Trauma Crânio Encefálico) e overdoses.</p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	      	<div class="modal-dialog" role="document">
                    <div class="modal-content">
		      	<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Convulsão</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				    <div class="modal-body">
                                    <p> O que são as Convulsões? <br><br>
                                      
                                        Convulsões geralmente são problemas neurológicos causados por uma descarga elétrica no cérebro.<br>
                                        Em alguns casos ocorrem devidos a TCE's ( Trauma Crânio Encefálico) e overdoses.<br><br>

                                        Como reconhecer? Sinais e sintomas:<br><br>

                                        Os sintomas para a pessoa, geralmente são imperceptíveis;<br>
                                        Espasmos (tremores);<br>
                                        Salivação excessiva;<br>
                                        Travamento do maxilar;<br>
                                        Sudorese intensa;<br>
                                        Liberação de esfíncter (urinar ou defecar) em alguns casos.<br><br>

                                        Como proceder?<br><br>

                                        Ligar 192;<br>
                                        Segurar a cabeça da pessoa lateralmente para evitar que ela broncoaspire (devido ao excesso de salivação);<br>
                                        Nunca colocar a mão na boca da pessoa convulsionando (devido ao travamento do maxilar);<br>
                                        Aguardar o atendimento chegar.<br>
                                    </p>
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Traumas</font></h4>
            <div class="card-body">
              <p class="card-text">Os Traumas podem ocorrer por quedas acidentais ou quedas da própria altura além de acidentes de trânsito. 
Um exemplo de queda acidental, seria quando se cai de uma escada ou de uma cadeira. Enquanto uma queda da própria altura, seria basicamente tropeçar e cair.</p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Traumas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p> O que é um Trauma? <br><br>

                                        Os Traumas podem ocorrer por quedas acidentais ou quedas da própria altura além de acidentes de trânsito.<br>
                                        Um exemplo de queda acidental, seria quando se cai de uma escada ou de uma cadeira. Enquanto uma queda da própria altura, seria basicamente tropeçar e cair.<br><br>

                                        Como reconhecer? Sinais e sintomas:<br><br>

                                        Vítima com dores em determinada região;<br>
                                        Pode ocorrer deformidades;<br>
                                        Edemas (inchaço);<br>
                                        Encurtamento ou rotação dos membros inferiores (pernas);<br>
                                        Hematomas.<br><br>
                                        
                                        Como proceder?<br><br>

                                        Ligar 192 ou 193;<br>
                                        Estabilizar a pessoa, acalmando-a;<br>
                                        Segurar a cabeça, para estabilizar a cervical (não mexer o pescoço);<br>
                                        Não mexer mais na vítima (se tiver hemorragia, comprimir a hemorragia);<br>
                                        Aguardar o atendimento chegar.<br>
                                        </p>
                      </div>
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Parada Cardiorrespiratória</font></h4>
            <div class="card-body">
              <p class="card-text">Parada Cardiorrespiratória
A Parada Cardiorrespiratória é o momento em que o coração deixa de funcionar e o indivíduo deixa de respirar. 
A Hipoglicemia e a Convulsão pode levar a uma parada respiratória, em seguida parada cardíaca. O Trauma pode levar diretamente a parada cardíaca.</p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Parada Cardiorrespiratória</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p> O que é uma Parada Cardiorrespiratória? <br><br>

                                        A Parada Cardiorrespiratória é o momento em que o coração deixa de funcionar e o indivíduo deixa de respirar.<br>
                                        A Hipoglicemia e a Convulsão podem levar a uma parada respiratória, em seguida parada cardíaca. O Trauma pode levar diretamente a parada cardíaca.<br><br>

                                        Como reconhecer? Sinais e sintomas:<br>
                                        Sintomas para a vítima:<br><br>

                                        Dor forte no peito;<br>
                                        Falta de ar;<br>
                                        Suores frios;<br>
                                        Sensação de palpitação;<br>
                                        Tonturas e desmaio;<br>
                                        Visão turva ou embaçada.<br><br>

                                        Sinais de que uma pessoa está tendo uma parada:<br><br>

                                        Falta de pulso;<br>
                                        Falta de movimento respiratório.<br><br>

                                        Como proceder?<br><br>

                                        Ligar 192 ou 193 (avisar que iniciou a massagem);<br>
                                        Deitar a pessoa sobre um local plano e rígido;<br>
                                        Manter a cabeça flexionada e reta;<br>
                                        Iniciar a massagem contínua durante 2 minutos (em torno de 100 massagens por minuto);<br>
                                        Verificar se possue pulso a cada 2 minutos;<br>
                                        Aguardar o atendimento chegar.<br><br>

                                        Como fazer a massagem:<br><br>

                                        Ajoelhe-se ao lado da pessoa;<br>
                                        Localizar o final do osso do externo ou criar uma linha imaginária entre os dois mamilos;<br>
                                        Entrelace suas mãos com os cutuvelos esticados;<br>
                                        Inicie a massagem afundando cerca de 5 centímetros;<br>
                                        Massagem contínua durante 2 minutos, pare e verifique se há pulso (troque de massagista se necessário);<br>
                                        Obs: Não é necessário realizar respiração boca a boca.

                                    </p>
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Engasgo</font></h4>
            <div class="card-body">
              <p class="card-text">Denominamos engasgo quando ocorre o bloqueio da traqueia ( órgão responsável em enviar e retirar o ar dos pulmões) por um objeto estranho, por vômito ou até mesmo sangue. Fisiologicamente, a traqueia é frequentemente protegida pela epiglote; esta nada mais serve como uma porta que abre e fecha, conforme a necessidade de ar. </p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal5" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p> O que é engasgo? <br><br>

                                        Denominamos engasgo quando ocorre o bloqueio da traqueia ( órgão responsável em enviar e retirar o ar dos pulmões) por um objeto estranho, por vômito ou até mesmo sangue. Fisiologicamente, a traqueia é frequentemente protegida pela epiglote; esta nada mais serve como uma porta que abre e fecha, conforme a necessidade de ar. Assim, quando ocorre a passagem de ar, a epiglote permanece aberta, porém quando ocorre a alimentação, a epiglote é fechada, impedindo que qualquer alimento ou corpo estranho, alcance a traqueia e, posteriormente, os pulmões.<br><br>
 
                                        Dessa forma, quando a epiglote falha em sua função, os alimentos, líquidos ou qualquer tipo de objeto estranho, ultrapassa a epiglote, alcançando a traqueia, ocasionando o bloqueio do ar. Por isso que, em alguns casos, o engasgo pode levar à morte por asfixia e, às vezes, pode até deixar a pessoa parcialmente ou totalmente inconsciente.<br>

                                        É necessário saber que dependendo da gravidade do engasgo, este é uma situação de emergência médica, sendo necessário chamar o serviço de atendimento especializado em emergência o mais rápido possível; pode ser uma questão de vida ou morte!<br><br>
                                      
                                        Como proceder?<br><br>

                                        Em caso de engasgo por corpos estranhos como: moedas, pequenos brinquedos, pedra ou qualquer outro objeto pequeno, a manobra que se realiza é a conhecida mundialmente como Manobra de Heimlich. Esta manobra tem como objetivo realizar uma pressão positiva na região do epigastro (“boca do estômago”), a qual fica localizada dois dedos abaixo do fim do esterno (osso longo que une as costelas), colaborando com a desobstrução e consequente passagem de ar.<br><br>

 
                                        Como realizar a Manobra de Heimlich nos adultos e crianças maiores que um ano?<br><br>

                                        Abraçar a pessoa engasgada pelo abdômen;<br>
                                        No caso de adultos, posicionar-se atrás da pessoa ainda consciente;<br>
                                        No caso de crianças, posicionar-se atrás, mas de joelhos;<br>
                                        Atrás da vítima coloque uma das mãos sobre a região da “boca do estômago” e com a outra mão, comprima a primeira mão, ao mesmo tempo em que empurra a região dentro e para cima, parecendo que está levantando a pessoa;<br>
                                        Continue o movimento até que a pessoa elimine o objeto que está causando a obstrução.<br>
                                        Em caso de pessoa inconsciente, não realize a manobra e contate imediatamente o serviço de emergência.<br><br>
 
                                        Como realizar a manobra em crianças menores de um ano e bebês?<br><br>

                                        Bebê consciente:<br><br>

                                        Coloque o bebê de bruços em cima de seu braço e faça 5 compressões entre as escápulas ( no meio das costas);<br>
                                        Depois, vire o bebê de barriga para cima e faça 5 compressões sobre o esterno (osso do meio);<br>
                                        Se conseguir visualizar o objeto, retire o mesmo;<br>
                                        Caso não seja possível a visualização do objeto, nem a retirada, continue realizando as compressões até a chegada do serviço de emergência.<br><br>

                                        Bebê inconsciente:<br><br>

                                        Deite o bebê de barriga para cima sem seu braço e abra boca e nariz;<br>
                                        Verifique se o bebê está respirando;<br>
                                        Se o bebê não estiver respirando, realize duas respirações que boca-boca, bloqueando a boca e o nariz;<br>
                                        Observe se há expansão do peito; em caso negativo, realize novamente a respiração;<br>
                                        Contate imediatamente o serviço de atendimento de emergência.<br>
                                        Em todas as situações de primeiros socorros é necessário manter a calma, para poder agir com segurança e inteligência.<br>

                                    </p>
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="background-color: rgb(25, 25, 112);"><font color="white">Traumas</font></h4>
            <div class="card-body">
              <p class="card-text">É a lesão corporal resultado da exposição à energia (mecânica, térmica, elétrica, química ou radiação) que interagiu com o corpo em quantidades acima da suportada fisiologicamente. O tempo de exposição e o surgimento da lesão devem ser curtos (alguns minutos). O trauma pode ser intencional ou não intencional e varia de leve a grave.</p>
            </div>
            <div class="card-footer" style="background-color: rgb(25, 25, 112);">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal6" style="background-color: #FE9A2E;">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Traumas</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p> O que é trauma (traumatismo)? <br><br>

                                      É a lesão corporal resultado da exposição à energia (mecânica, térmica, elétrica, química ou radiação) que interagiu com o corpo em quantidades acima da suportada fisiologicamente. Pode ainda em alguns casos ser resultado da insuficiência de algum elemento vital (afogamento, estrangulamento, congelamento). O tempo de exposição e o surgimento da lesão devem ser curtos (alguns minutos). O trauma pode ser intencional ou não intencional e varia de leve a grave.

                                    </p>   
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
        </div>    
          
      </div>
      
      
      
      <!-- /.row -->

      <!-- Portfolio Section -->
    
      <!-- /.row -->
      <hr>

      <!-- Call to Action Section -->
     
        <div class="col-md-4">
          
        </div>
      

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- /.container -->

@endsection