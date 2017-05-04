<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Century 21</title>
        <link rel="icon" href="{{url('/img/icono.png')}}">
        <link rel="stylesheet" href="{{url('/css/bootstrap-3/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('/css/estilos.css')}}">
        <script src="{{url('/js/jquery-3.2.0.js')}}"></script>
        <script src="{{url('/css/bootstrap-3/js/bootstrap.js')}}"></script>
        <style>
            body {
                background-image: url("{{url('/img/ciudad.jpg')}}");
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }

            html {
                height: 100%
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="div-cuenta" align="center">
                        <img id="logo" src="{{url('/img/logo.png')}}" alt="">
                        <h1 class="text-center titulo-login">¡Bienvenido!</h1>
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>