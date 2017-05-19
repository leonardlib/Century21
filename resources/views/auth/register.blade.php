@extends('layouts.login')

@section('titulo', 'Únete a Century 21')

@section('form')
<form class="form-iniciar" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-md-12" style="margin-bottom: 5px;">
            <input id="name" type="text" class="form-control" placeholder="Nombre completo" name="name" value="{{ old('name') }}" required autofocus>
        </div>
    </div>

    <div class="form-group" >
        <div class="col-md-12" style="margin-bottom: 0">
            <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12" style="margin-bottom: -4px;">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12" style="margin-bottom: 0;">
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar" name="password_confirmation" required>
            @if (isset($errors))
                <span class="help-block">
                    <strong>{{ $errors->first() }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-lg btn-warning btn-block">
                Comenzar
            </button>
        </div>
    </div>
</form>
<style>
    .div-cuenta {
        min-height: 475px;
    }
</style>
@endsection
