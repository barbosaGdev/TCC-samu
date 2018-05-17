@extends('layouts.app')

@section('content')
<br><br><br>

     <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Ouvidoria<br>
        <small>Base: Delta1</small>
      </h1>    

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d548.6027544297151!2d-46.95040854364868!3d-22.333052022193026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8572367c99203%3A0xd506867208d04cb2!2sSAMU!5e0!3m2!1spt-BR!2sbr!4v1526059506897"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contato</h3>
          <p>
            Mogi-Guaçu, São Paulo, Brazil
            
            <br>
          </p>
          <p>
            Disk Emergência: 192
          </p>
          <p>
             Email:
            <a href="mailto:name@example.com">nepsamu.machado@gmail.com
            </a>
          </p>
          <p>
          Horário de Atendimento: Todos os dias: 24 Horas
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Deixe sua Sugestão,Reclamação ou Crítica que atenderemos você!</h3><br>
          <form method="post" action="/saveFeedback">

          {{ csrf_field() }}

            <div class="control-group form-group">
              <div class="controls">
                <label>Nome Completo:</label>
                <input type="text" class="form-control" name="nome" id="nome" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefone para Contato:</label>
                <input type="tel" class="form-control" name="telefone" id="telefone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensagem:</label>
                <textarea rows="10" cols="100" class="form-control" name="texto" id="texto" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    
</body>
</html>