<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{url('/css/bootstrap-3/css/bootstrap.css')}}">
        <script src="{{url('/js/jquery-3.2.0.js')}}"></script>
        <script src="{{url('/css/bootstrap-3/js/bootstrap.js')}}"></script>
        <style>
            #logo {
                background: #000000;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron" align="center" id="logo">
            <img src="{{url('/img/logo.png')}}" alt="">
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li id="inicio"><a href="#">Inicio</a></li>
                        <li id="catalogos"><a href="#">Catalogos</a></li>
                        <li id="movimientos"><a href="#">Movimientos</a></li>
                        <li id="reportes"><a href="#">Reportes</a></li>
                        <li id="utilerias"><a href="#">Utilerias</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi cuenta</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('container')
        </div>
    </body>
</html>