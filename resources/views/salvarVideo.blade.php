@extends('layouts.app')

@section('content')
<br><br>

<h1>Enviar vídeo aulas</h1>
<form action="/persisteVideo" method="post" enctype="multipart/form-data">
    
    {{ csrf_field() }}

    <input type="hidden" name="cursos_id" id="cursos_id" value="{{$cursos->id}}">
<div class="form-group">
<label for="video" class="Texto">Aula Principal</label>
<input type="text" class="Texto form-control" name="video" id="video"><br>
<button type="submit" class="Texto btn btn-primary">Enviar</button><br>
</div><br>
</form>



@endsection