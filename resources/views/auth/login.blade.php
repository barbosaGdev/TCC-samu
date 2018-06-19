@extends('layouts.app')

@section('content')
<br><br><br>
<div class="container">
<center>
    <img src="{{ asset('images/logo1_neu.png') }}"  width="80" height="100" />
</center>
<br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: rgb(25, 25, 112);"><strong><font style="color: white" class="Texto" >Faça seu Login</font></strong></div>
                
                <div class="container">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right Texto">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class=" Texto form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong class="Texto">Email ou Senha inválidos</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right Texto">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class=" Texto form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback Texto">
                                        <strong class="Texto">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary Texto" style="background-color: orangered;border-color: orangered;">
                                    Entrar
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br>
@endsection
