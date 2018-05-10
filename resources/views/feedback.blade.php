@extends('layouts.app')

@section('content')
<br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="display-3">Ouvidoria do Samu</h1>

    <form action="/saveFeedback" method="post">
        {{ csrf_field() }}
       
       <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" id="nome" name="nome">
       </div>
       
       <div class="form-group">
    
        <label for="">Telefone</label>
        <input class="form-control" type="text" id="telefone" name="telefone">
        </div>
    
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" id="email" name="email">
        </div>
        
        <div class="form-group">
    
        <label for="texto">Críticas,Sugestões e Reclamações</label>
        <textarea rows="6" cols="100" type="text" class="form-control" name="texto" id="texto"></textarea>
        </div>

        <button class="btn btn-primary">Enviar</button>
    </form>
            
            </div>
        </div>
    </div>

    
</body>
</html>