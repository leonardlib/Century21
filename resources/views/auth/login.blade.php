@extends('layouts.login')

@section('form')
<form class="form-iniciar" role="form" method="POST" action="{{ route('login') }}">
    <div class="form-group">
        <div class="col-md-12">
            <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" required autofocus>

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
            @if (isset($errors))
                @foreach($errors as $error)
                    <span class="help-block">
                        <strong>{{ $error }}</strong>
                    </span>
                @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="btn btn-lg btn-warning btn-block">
                Iniciar sesión
            </button>

            <a class="btn btn-link links" style="float: left;" href="{{ route('password.request') }}">
                ¿Olvidaste tu contraseña?
            </a>
            &nbsp;
            <a class="btn btn-link links" style="float: right;" href="{{ route('register') }}">
                Registrarme
            </a>
        </div>
    </div>
</form>
@endsection
