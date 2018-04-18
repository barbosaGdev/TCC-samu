@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach ($dados as $v)
    
            {{ $v->nome }} 

            <form action="/insert" method="post">

                <input type="hidden" value="{{$v->id}}" name="id">
                <button class="btn btn-primary">Cursar</button> <br>

            </form>
        @endforeach
                </div>
            </div>
        </div>
@endsection
