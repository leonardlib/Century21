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
                                Catalogos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li id="fraccionamientos"><a href="{{ url('/catalogos/fraccionamientos') }}">Fraccionamiento</a></li>

                                <li id="clientes"><a href="{{ url('/catalogos/clientes') }}">Clientes</a></li>
                                <li id="vendedores"><a href="{{ url('/catalogos/vendedores') }}">Vendedores</a></li>
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
                        <div class="col-sm-3 hidden-xs">
                            <img src="{{url('/img/logo.png')}}" alt="">
                            <br><br>
                            <p>
                                &nbsp;
                                <a href="http://www.facebook.com/Century21Mexico"><img src="{{url('/img/footer/fb.webp')}}"></a>
                                &nbsp;
                                <a href="http://twitter.com/c21mexico"><img src="{{url('/img/footer/twitter.webp')}}"></a>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <samp class="titulofooter">NOSOTROS</samp><br>
                            <br>
                            <a href="/mision">MISIÓN, VISIÓN Y VALORES</a><br>
                            <br>
                            CENTURY 21 MÉXICO<br>
                            MIGUEL DE CERVANTES SAAVEDRA NO. 301 TORRE NORTE, PISO 15<br>
                            COLONIA AMPLIACIÓN GRANADA<br>
                            11520 MÉXICO, D.F.<br>
                        </div>
                        <div class="col-sm-3">
                            <samp class="titulofooter">EXPLORA</samp><br>
                            <br>
                            <a href="/franquicias">FRANQUICIAS</a><br>
                            <a href="/acercade">ACERCA DE C21MX</a><br>
                            <a href="http://century21global.com">BÚSQUEDA INTERNACIONAL</a><br>
                            <a href="/noticias">NOTICIAS</a><br>
                            <a href="http://aprivada.century21mexico.com">PAGINA PRIVADA</a><br>
                            <a href="/directorio">DIRECTORIO DE OFICINAS</a><br>
                            <a href="/venta">PROPIEDADES EN VENTA</a><br>
                            <a href="/renta">PROPIEDADES EN RENTA</a><br>
                            <a href="https://eventoscentury21mexico.wordpress.com/">CONVENCIÓN NACIONAL 2017</a>
                        </div>
                        <div class="col-sm-3">
                            <samp class="titulofooter">CONTÁCTANOS</samp><br>
                            <br>
                            <a href="/contactanos">CONTÁCTANOS</a><br>
                            <a href="/enviar-comentario">ENVÍANOS UN COMENTARIO</a><br>
                            <a href="/ofrezco-propiedad">OFREZCO PROPIEDAD</a><br>
                            <a href="/reportar-anomalia">REPORTAR ANOMALÍA</a><br>
                            <a href="/franquicias">SOLICITUD DE FRANQUICIA</a><br>
                            <a href="/unete">RECLUTAMIENTO</a><br>
                        </div>
                    </div>
                    <div class="row avisorow">
                        <div class="col-sm-12 aviso">
                            <a href="/avisodeprivacidad">AVISO DE PRIVACIDAD - CENTURY 21 MÉXICO</a><br>
                        </div>
                        <div class="col-sm-12 minaviso">
                            Cada Oficina es de Propiedad y Operación Independiente. | ® la marca y el logotipo CENTURY 21 son propiedad de CENTURY 21 Real Estate Corporation, LLC. | Diseño: CENTURY 21 México, S.A. de C.V., Dirección de Mercadotecnia. | CENTURY 21 México, no es responsable por la exactitud o complementos de la información de los Afiliados, de los asesores y de las propiedades y de otra información provista por los franquiciatarios en este sitio. | La información puede cambiar sin previo aviso. | La opinión de algunos artículos es responsabilidad de sus autores y han sido publicados solo para fines informativos y no expresa el punto de vista de CENTURY 21 México, S.A. de C.V.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>