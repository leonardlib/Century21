@extends('layouts.login')

@section('titulo', 'Restablece tu contraseña')

@section('form')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-iniciar" role="form" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{">
            <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Correo electrónico" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12" style="margin-bottom: -4px;">
                <input id="password" type="password" class="form-control" name="password" placeholder="Nueva" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar" required>
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
                    Cambiar contraseña
                </button>
            </div>
        </div>
    </form>
    <style>
        .div-cuenta {
            min-height: 450px;
        }
    </style>
@endsection
