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
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
    <input type="hidden" id="url" value="{{'/'}}">
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
                        <li id="inicio"><a href="{{url('/inicio')}}">Inicio</a></li>
                        <li class="dropdown" id="catalogos">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Catálogos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="fraccionamientos"><a href="{{ url('/catalogos/fraccionamientos') }}">Fraccionamiento</a></li>

                                <li id="clientes"><a href="{{ url('/catalogos/clientes') }}">Clientes</a></li>
                                <li id="vendedores"><a href="{{ url('/catalogos/vendedores') }}">Vendedores</a></li>
                                <li id="usuarios"><a href="{{ url('/catalogos/usuarios') }}">Usuarios</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="movimientos">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Movimientos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="solicitudes"><a href="{{url('/movimientos/solicitudes')}}">Solicitudes</a></li>
                                <li id="pago_solicitudes"><a href="{{url('/movimientos/enganches')}}">Pago de Solicitudes</a></li>
                                <li id="contratos"><a href="{{url('/movimientos/contratos')}}">Contratos</a></li>
                                <li id="pagos_mensuales"><a href="{{url('/movimientos/mensualidades')}}">Pago de Mensualidades</a></li>
                                <li id="mensualidades_vencidas"><a href="{{url('/movimientos/mensualidades_vencidas')}}">Mensualidades Vencidas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown" id="reportes">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Reportes
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="lista_solicitudes"><a href="{{url('/reportes/solicitudesR')}}">Lista de Solicitudes</a></li>
                                <li id="saldos"><a href="{{url('/reportes/saldosR')}}">Saldos</a></li>
                                <li id="estado_cuenta"><a href="{{url('/reportes/estado_cuentaR')}}">Estado de Cuenta</a></li>
                                <li id="saldos_vencidos"><a href="{{url('/reportes/saldos_vencidosR')}}">Saldos Vencidos</a></li>
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
                        <li><a href="{{url('/salir')}}"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('container')
        </div>
        <div class="panel-footer" align="center">
            <div class="footercontainer">
                <div class="container">
                    <div class="row" style="text-aling: center;">
                        <div class="col-md-2">
                            <img src="{{url('/img/logo.png')}}" alt="">
                            <br><br>
                            <p>
                                &nbsp;
                                <a href="http://www.facebook.com/Century21Mexico"><img src="{{url('/img/footer/fb.webp')}}"></a>
                                &nbsp;
                                <a href="http://twitter.com/c21mexico"><img src="{{url('/img/footer/twitter.webp')}}"></a>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h4 class="seccion-footer">Nosotros</h4>
                            <br/>
                            <a href="{{url('/inicio')}}">Misión, Visión y Valores</a>
                            <br/>
                            <br/>
                            <p class="seccion-footer">
                                Century 21 México<br/>
                                Miguel De Cervantes Saavedra No. 301 Torre Norte, Piso 15<br/>
                                Colonia Ampliación Granada<br/>
                                11520 México, D.F.<br/>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h4 class="seccion-footer">Catálogos</h4>
                            <br/>
                            <a href="{{ url('/catalogos/fraccionamientos') }}">Fraccionamiento</a><br/>
                            <a href="{{ url('/catalogos/clientes') }}">Clientes</a><br/>
                            <a href="{{ url('/catalogos/vendedores') }}">Vendedores</a><br/>
                            <a href="#">Usuarios</a><br/>
                        </div>
                        <div class="col-md-2">
                            <h4 class="seccion-footer">Movimientos</h4>
                            <br/>
                            <a href="{{url('/movimientos/solicitudes')}}">Solicitudes</a><br/>
                            <a href="#">Pago de Solicitudes</a><br/>
                            <a href="#">Contratos</a><br/>
                            <a href="#">Pago de Mensualidades</a><br/>
                            <a href="#">Mensualidades Vencidas</a><br/>
                        </div>
                        <div class="col-md-2">
                            <h4 class="seccion-footer">Reportes</h4>
                            <br/>
                            <a href="#">Lista de Solicitudes</a><br/>
                            <a href="#">Saldos</a><br/>
                            <a href="#">Estado de Cuenta</a><br/>
                            <a href="#">Saldos Vencidos</a><br/>
                        </div>
                        <div class="col-md-2">
                            <h4 class="seccion-footer">Utilerias</h4>
                            <br/>
                            <a href="#">Respaldar Informacion</a><br/>
                            <a href="#">Regenerar Indices</a><br/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12 aviso">
                            <a href="#">Aviso de Privacidad - Century 21 México</a><br>
                        </div>
                        <div class="col-sm-12 minaviso seccion-footer">
                            <p>
                                Cada Oficina es de Propiedad y Operación Independiente. | ® la marca y el logotipo
                                CENTURY 21 son propiedad de CENTURY 21 Real Estate Corporation, LLC. | Diseño: CENTURY
                                21 México, S.A. de C.V., Dirección de Mercadotecnia. | CENTURY 21 México, no es responsable
                                por la exactitud o complementos de la información de los Afiliados, de los asesores y
                                de las propiedades y de otra información provista por los franquiciatarios en este
                                sitio. | La información puede cambiar sin previo aviso. | La opinión de algunos
                                artículos es responsabilidad de sus autores y han sido publicados solo para fines
                                informativos y no expresa el punto de vista de CENTURY 21 México, S.A. de C.V.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
