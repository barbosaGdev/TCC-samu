@extends('layouts.app')

@section('content')

<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
           @for ($i = 0; $i < count($dados); $i++)
            <li data-target="#carouselIndicators" data-slide-to="{{ $i }}" class="{{$i == 0 ? 'active' : ''}}"></li>
           @endfor
       </ol>
       <!--REPETIR--> 
        
         <div class="carousel-inner" role="listbox">
         <?php $i = 0;?>
         @foreach($dados as $v) 
          <div class="{{$i == 0 ? 'carousel-item active' : 'carousel-item' }}" style="background-image: url('{{$v->imagem1}}')">
          <div class="carousel-caption d-none d-md-block">
              <h3><font color="black">{{$v->titulo_noticia}}</font></h3>
               <a href="/noticia/{{$v->id}}" class="btn-dark" method="get">Ver Notícia</a>
            </div>
          </div>
        </div>
        <?php $i++;?>
      @endforeach

      
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
       </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
     

    </div>
  

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
            <h4 class="card-header">Hipoglicemia</h4>
            <div class="card-body">
              <p class="card-text">A Hipoglicemia ocorre quando há falta de açúcar no sangue (falta de glicose). Geralmente acontece no período da manhã e não ocorre necessariamente com pessoas diabéticas. A glicose é responsável por levar o oxigênio para o cérebro; com a diminuição ocorre tonturas , confusão mental e até parada respiratória.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
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
            <h4 class="card-header">Convulsão</h4>
            <div class="card-body">
              <p class="card-text">Convulsões geralmente são problemas neurológicos causados por uma descarga elétrica no cérebro. 
Em alguns casos ocorrem devidos a TCE's ( Trauma Crânio Encefálico) e overdoses.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Leia Mais</a>
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
            <h4 class="card-header">Traumas</h4>
            <div class="card-body">
              <p class="card-text">Os Traumas podem ocorrer por quedas acidentais ou quedas da própria altura além de acidentes de trânsito. 
Um exemplo de queda acidental, seria quando se cai de uma escada ou de uma cadeira. Enquanto uma queda da própria altura, seria basicamente tropeçar e cair.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Leia Mais</a>
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
            <h4 class="card-header">Parada Cardiorrespiratória</h4>
            <div class="card-body">
              <p class="card-text">Parada Cardiorrespiratória
A Parada Cardiorrespiratória é o momento em que o coração deixa de funcionar e o indivíduo deixa de respirar. 
A Hipoglicemia e a Convulsão pode levar a uma parada respiratória, em seguida parada cardíaca. O Trauma pode levar diretamente a parada cardíaca.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Leia Mais</a>
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
            <h4 class="card-header">Cortes Profundos</h4>
            <div class="card-body">
              <p class="card-text">Nessa situação você deverá limpar o local do ferimento com água corrente independente se o corte estiver ou não sujo. Feito isso, estanque com gaze ou um pedaço de pano ou toalha limpa. Não coloque nada dentro do ferimento e procure um pronto socorro imediatamente.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>dipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                                    <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
                                   
                                    <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                                    <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>

                                    <p>Pellentesque faucibus magna vel lacus bibendum sodales. Donec eget pellentesque magna. Pellentesque urna urna, ultricies sit amet nulla sed, suscipit tempus mi. Cras non vehicula felis. Donec placerat malesuada purus sit amet fermentum. Nulla ultricies sodales nibh. Mauris et ante eget urna pellentesque efficitur id sed ante. Aliquam vel justo tincidunt, tincidunt diam ac, pulvinar massa.</p>
                                    <h4>THE FUN NEVER STOPS</h4>
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
          <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cortes Profundos</h4>
            <div class="card-body">
              <p class="card-text">Nessa situação você deverá limpar o local do ferimento com água corrente independente se o corte estiver ou não sujo. Feito isso, estanque com gaze ou um pedaço de pano ou toalha limpa. Não coloque nada dentro do ferimento e procure um pronto socorro imediatamente.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p> malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                                    <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
                                   
                                    <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                                    <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>

                                    <p>Pellentesque faucibus magna vel lacus bibendum sodales. Donec eget pellentesque magna. Pellentesque urna urna, ultricies sit amet nulla sed, suscipit tempus mi. Cras non vehicula felis. Donec placerat malesuada purus sit amet fermentum. Nulla ultricies sodales nibh. Mauris et ante eget urna pellentesque efficitur id sed ante. Aliquam vel justo tincidunt, tincidunt diam ac, pulvinar massa.</p>
                                    <h4>THE FUN NEVER STOPS</h4>
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
      

    
    <!-- /.container -->

@endsection