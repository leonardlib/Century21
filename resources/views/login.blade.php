<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Century 21</title>
        <link rel="icon" href="{{url('/img/logo.png')}}">
        <link rel="stylesheet" href="{{url('/css/bootstrap-3/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('/css/estilos.css')}}">
        <script src="{{url('/js/jquery-3.2.0.js')}}"></script>
        <script src="{{url('/css/bootstrap-3/js/bootstrap.js')}}"></script>
        <style>
            body {
                background-image: url("{{url('/img/ciudad.jpg')}}");
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="div-cuenta" align="center">
                        <!--TODO: Validación de usuarios-->
                        <img id="logo" src="{{url('/img/logo.png')}}" alt="">
                        <h1 class="text-center titulo-login">¡Bienvenido!</h1>
                        <form class="form-iniciar" method="get" action="{{url('/inicio')}}">
                            <input id="email" type="email" class="form-control" placeholder="Correo electronico" required autofocus>
                            <input id="password" type="password" class="form-control" placeholder="Contraseña" required>
                            <button class="btn btn-lg btn-warning btn-block" type="submit">Iniciar sesion</button>
                            <div class="opciones">
                                <a href="#" class="nueva-cuenta">Crear una cuenta</a>
                                <a href="#" class="recuperar">Recuperar contraseña</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>