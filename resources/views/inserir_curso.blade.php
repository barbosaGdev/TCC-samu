@extends('layouts.app')

@section('content')
<br><br><br>

<form method="post" action="/salvar">

    {{ csrf_field() }}
<label for="nome">Nome do Curso</label>
<input type="text" name="nome" id="nome"><br><br>

<label for="descricao">Descrição do Curso</label>
<input type="text" name="descricao" id="descricao"><br><br>

<label for="img">Imagem do curso</label>
<input type="text" name="img" id="img"><br><br>

<label for="video1">Video principal do Curso</label>
<input type="text" name="video1" id="video1"><br><br>

<label for="video2">video 2 do Curso</label>
<input type="text" name="video2" id="video2"><br><br>

<label for="video3">video 3 do Curso</label>
<input type="text" name="video3" id="video3"><br><br>

<label for="pdf">PDF do Curso</label>
<input type="text" name="pdf" id="pdf"><br><br>
<button type="submit">ENVIAR</button>
</form> 
    
</body>
</html>
@endsection