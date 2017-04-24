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
                        <li class="dropdown" id="catalogos">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Catalogos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="fraccionamientos"><a href="#">Fraccionamiento</a></li>

                                <li id="clientes"><a href="{{ url('/catalogos/clientes') }}">Clientes</a></li>
                                <li id="vendedores"><a href="#">Vendedores</a></li>
                                <li id="usuarios"><a href="#">Usuarios</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="movimientos">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Movimientos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="solicitudes"><a href="{{url('/movimientos/solicitudes')}}">Solicitudes</a></li>
                                <li id="pago_solicitudes"><a href="#">Pago de Solicitudes</a></li>
                                <li id="contratos"><a href="#">Contratos</a></li>
                                <li id="pagos_mensuales"><a href="#">Pago de Mensualidades</a></li>
                                <li id="mensualidades_vencidas"><a href="#">Mensualidades Vencidas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="reportes">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Reportes
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="lista_solicitudes"><a href="#">Lista de Solicitudes</a></li>
                                <li id="saldos"><a href="#">Saldos</a></li>
                                <li id="estado_cuenta"><a href="#">Estado de Cuenta</a></li>
                                <li id="saldos_vencidos"><a href="#">Saldos Vencidos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="utilerias">
                            <a class="dropdown-toogle" data-toggle="dropdown" href="#">
                                Utilerias
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="respaldar_info"><a href="#">Respaldar Informacion</a></li>
                                <li id="regenerar_indices"><a href="#">Regenerar Indices</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Mi cuenta</a></li>
                        <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('container')
        </div>
    </body>
</html>