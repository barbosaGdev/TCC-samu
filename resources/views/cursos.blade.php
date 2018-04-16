@extends('layouts.app')

@section('content')
    
    @foreach ($dados as $v)
    
        {{ $v->nome }} 

    <form action="/insert" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$v->id}}" name="id" id="id">
    <button class="btn btn-primary" type="submit">Cursar</button> <br>
    </form>
    @endforeach

@endsection
