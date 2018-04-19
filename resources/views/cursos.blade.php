@extends('layouts.app')

@section('content')
<br><br><br>


<br><br><div class="container">

    
    @foreach ($dados as $v)
    
        {{ $v->nome }} 

    <div class="align-right">
    <a href="/insert/{{$v->id}}" class="btn btn-primary" method="post">Cursar</a>
    </div>
    <br>
    @endforeach
</div>
@endsection
