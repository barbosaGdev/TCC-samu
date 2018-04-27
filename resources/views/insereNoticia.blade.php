@extends('layouts.app')

@section('content')
<br><br><br>

<form method="post" action="/noticiaInserir">

    {{ csrf_field() }}
<label for="titulo_noticia">Manchete</label>
<input type="text" name="titulo_noticia" id="titulo_noticia"><br><br>

<label for="imagem1">Primeira Imagem</label>
<textarea rows="6" cols="100" type="text" name="imagem1" id="imagem1"></textarea><br><br>

<label for="video1">Primeiro Parágrafo</label>
<input type="text" name="paragrafo1" id="paragrafo1"><br><br>

<label for="video2">Segunda Imagem</label>
<input type="text" name="imagem2" id="imagem2"><br><br>

<label for="video3">Segundo Parágrafo</label>
<input type="text" name="paragrafo2" id="paragrafo2"><br><br>

<label for="pdf">Terceira Imagem</label>
<input type="text" name="imagem3" id="imagem3"><br><br>

<label for="pdf">Terceiro Parágrafo</label>
<input type="text" name="paragrafo3" id="paragrafo3"><br><br>

<label for="pdf">Quarto Parágrafo</label>
<input type="text" name="paragrafo4" id="paragrafo4"><br><br>


<button type="submit">ENVIAR</button>
</form> 
    
</body>
</html>

@endsection