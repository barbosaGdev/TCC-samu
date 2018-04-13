@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    Olá,Colaborador!

                    @foreach ($dados as $v)
                    {{ $v->nome }} 
                     <a href="/insert/{{$v->id}}" class="btn btn-primary">Cursar</a> <br>
                     @endforeach
                </div>
            </div>
        </div>
@endsection
