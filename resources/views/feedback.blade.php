@extends('layouts.app')

@section('content')
<br><br><br>

     <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <nav class="breadcrumb animated fadeInDown">
      <a class="breadcrumb-item Texto animated fadeInDown" href="/">Home</a>
      <a class="breadcrumb-item Texto animated fadeInDown" href="/about">Sobre</a>
      <span class="breadcrumb-item active Texto animated fadeInDown">Ouvidoria</span>
      </nav>
      <h1 class="mt-4 mb-3 Titulo animated fadeInDown">Ouvidoria<h1>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <small class="Titulo animated fadeInDown">Base Delta1</small>
      </h1>    

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4 animated fadeInRight">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d548.6027544297151!2d-46.95040854364868!3d-22.333052022193026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8572367c99203%3A0xd506867208d04cb2!2sSAMU!5e0!3m2!1spt-BR!2sbr!4v1526059506897"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 animated fadeInDown">
          <h3 class="Titulo">Contato</h3>
          <p class="Texto">
            Mogi-Guaçu, São Paulo, Brazil
            
            <br>
          </p>
          <p class="Texto">
            Disk Emergência: 192
          </p>
          <p class="Texto">
             Email:
            <a href="mailto:name@example.com">nepsamu.machado@gmail.com
            </a>
          </p>
          <p class="Texto"> 
          Horário de Atendimento: Todos os dias: 24 Horas
          </p>
        </div>
      </div>
      <!-- /.row -->
      <br>
        <h2 class="Titulo">Fake news / Trote e o SAMU</h2><br>
        <p class="Texto">
            Segundo levantamento nacional do Ministério
            da Saúde, em 2007, cerca de 40% das ligações para o
            SAMU, eram trotes. Os horários de pico desses trotes
            são justamente o de intervalo das escolas, tanto
            de manhã quanto à tarde, e o de saída dos alunos. Os
            deslocamentos das ambulâncias em razão desses trotes
            geram gastos e perda de tempo ao serviço. Mas a
            consequência mais preocupante é fazer com que uma
            pessoa que necessite realmente de socorro tenha que
            aguardar mais do que precisaria, agravando seu estado,
            ou, em alguns casos, vindo a falecer.<br>
            O trote além de desviar as ações das equipes para casos 
            inverídicos pode render pena de detenção de 1 a 3 anos, e multa.
        </p>
      <br>
      <h2 class="Titulo">Deixe sua sugestão, reclamação ou crítica que atenderemos você!</h2><br> 
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        
        <div class="col-lg-8 mb-4">
          <form method="post" action="/saveFeedback">

          {{ csrf_field() }}

            <div class="control-group form-group">
              <div class="controls">
                <label class="Texto">Nome Completo:</label>
                <input type="text" class="Texto form-control" name="nome" id="nome" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label class="Texto">Telefone para Contato:</label>
                <input type="tel" class="Texto form-control" name="telefone" id="telefone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label class="Texto">Email:</label>
                <input type="email" class="Texto form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label class="Texto">Mensagem:</label>
                <textarea rows="10" cols="100" class="Texto form-control" name="texto" id="texto" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary Texto" id="sendMessageButton" style="background-color: orangered;border-color: orangered;">Enviar</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
   
    
</body>
</html>