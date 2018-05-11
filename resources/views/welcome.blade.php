@extends('layouts.app')

@section('content')

    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">


   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://www.servidoresmt.com.br/storage/news/3161/59923c370fba8.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
              <a href="blog-post.html" class="btn-dark">Ver Notícia</a>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://www.saobentodosul.sc.gov.br/img/noticias/foto/28796.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://www.pfalves.com.br/images/logos/logo_etec3.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
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
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cortes Profundos</h4>
            <div class="card-body">
              <p class="card-text">Nessa situação você deverá limpar o local do ferimento com água corrente independente se o corte estiver ou não sujo. Feito isso, estanque com gaze ou um pedaço de pano ou toalha limpa. Não coloque nada dentro do ferimento e procure um pronto socorro imediatamente.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                                    <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
                                   
                                    <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                                    <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>

                                    <p>Pellentesque faucibus magna vel lacus bibendum sodales. Donec eget pellentesque magna. Pellentesque urna urna, ultricies sit amet nulla sed, suscipit tempus mi. Cras non vehicula felis. Donec placerat malesuada purus sit amet fermentum. Nulla ultricies sodales nibh. Mauris et ante eget urna pellentesque efficitur id sed ante. Aliquam vel justo tincidunt, tincidunt diam ac, pulvinar massa.</p>
                                    <h4>THE FUN </h4>
                                </div>	
			
                    </div>
                 </div>
               </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Dedo preso na porta</h4>
            <div class="card-body">
              <p class="card-text">Procure se acalmar e coloque gelo no local, para que não forme um hematoma ou então para que este diminua. Não massageie o local do ferimento e nem aperte as laterais do dedo que foi preso, quando houver sangramento.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                                    <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
                                   
                                    <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                                    <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>

                                    <p>Pellentesque faucibus magna vel lacus bibendum sodales. Donec eget pellentesque magna. Pellentesque urna urna, ultricies sit amet nulla sed, suscipit tempus mi. Cras non vehicula felis. Donec placerat malesuada purus sit amet fermentum. Nulla ultricies sodales nibh. Mauris et ante eget urna pellentesque efficitur id sed ante. Aliquam vel justo tincidunt, tincidunt diam ac, pulvinar massa.</p>
                                    <h4>THE FUN aaa</h4>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                                    <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>
                                   
                                    <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                                    <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>

                                    <p>Pellentesque faucibus magna vel lacus bibendum sodales. Donec eget pellentesque magna. Pellentesque urna urna, ultricies sit amet nulla sed, suscipit tempus mi. Cras non vehicula felis. Donec placerat malesuada purus sit amet fermentum. Nulla ultricies sodales nibh. Mauris et ante eget urna pellentesque efficitur id sed ante. Aliquam vel justo tincidunt, tincidunt diam ac, pulvinar massa.</p>
                                    <h4>THE FUN</h4>
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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

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
              <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Leia Mais</a>
              <!-----Modal ---->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
                    <div class="modal-content">
			<div class="modal-header">
                           <h4 class="modal-title text-center" id="myModalLabel">Termo de Uso</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
				<div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

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