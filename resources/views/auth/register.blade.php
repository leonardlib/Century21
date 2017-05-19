@extends('layouts.login')

@section('form')
<form class="form-iniciar" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-md-12" style="margin-bottom: 5px;">
            <input id="name" type="text" class="form-control" placeholder="Nombre completo" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar" name="password_confirmation" required>
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
@endsection
