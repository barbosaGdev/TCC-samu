@extends('layouts.app')

@section('content')
<br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    @foreach ($dados as $v)
    
        {{ $v->nome }} 

    <form action="/insert" method="post">
    {{ csrf_field() }}
    <input type="hidden" value="{{$v->id}}" name="id" id="id">
    <button class="btn btn-primary" type="submit">Cursar</button> <br>
    </form>
    @endforeach

@endsection
