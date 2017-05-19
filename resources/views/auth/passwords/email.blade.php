@extends('layouts.login')

@section('titulo', 'Recuperar contraseña')

@section('form')
    @if (session('status'))
        <div class="alert alert-success" style="margin-top: 10px; margin-bottom: -5px;">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-iniciar" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-md-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-lg btn-warning btn-block">
                    Restablecer
                </button>
            </div>
            <div class="col-md-12" style="margin-top: 5px;">
                <span style="color: white; font-size: 12px;">Te enviaremos un correo con los pasos para recuperar tu contraseña.</span>
            </div>
        </div>
    </form>
@endsection
