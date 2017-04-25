@extends('layouts.app')

@section('container')
    <div class="row">
        <div class="col-md-3 col-sm-3">
            <img src="{{url('/img/nosotros/people_01.webp')}}" width="100%" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
            <img src="{{url('/img/nosotros/people_02.webp')}}" width="100%" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
            <img src="{{url('/img/nosotros/century21.webp')}}" width="100%" alt="">
        </div>
        <div class="col-md-3 col-sm-3">
            <img src="{{url('/img/nosotros/finger_01.webp')}}" width="100%" alt="">
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <span style="color: #f6bc35; font-size: 58px; font-weight: bold;">Nosotros</span>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 style="color: white;">Misión</h2>
        </div>
        <div class="panel-content" style="padding: 10px;">
            <p>
                CENTURY 21 México, promueve y desarrolla la marca globalmente reconocida CENTURY 21 para asesores de bienes raíces,
                afiliados, propietarios y compradores, tanto en el área residencial y comercial, en México y globalmente.
                <br/>
                Atraemos a afiliados y formamos asesores de bienes raíces altamente calificados.
                <br/>
                Asistimos a nuestros afiliados en la administración eficiente de sus oficinas.
                <br/>
                Proveemos herramientas y sistemas para reclutamiento y capacitación de nuevos y expertos profesionales en ventas,
                que tienen el deseo de alcanzar los máximos estándares profesionales para los cuales nos esforzamos en la industria de bienes raíces.
                <br/>
                Nos proponemos desarrollar clientes de por vida, con cada contacto y en todo momento.
                <br/>
                Dirigimos a nuestros clientes escuchando sus deseos y necesidades.
                <br/>
                Nuestros clientes merecen y recibirán el más alto servicio ofrecido por cualquier organización de bienes raíces.
            </p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 style="color: white;">Visión</h2>
        </div>
        <div class="panel-content" style="padding: 10px;">
            <p>
                Estamos construyendo una organización orientada a inspirar e impulsar los sueños de asesores y afiliados de bienes raíces.
                <br/>
                Nuestro éxito futuro dependerá de nuestra habilidad para enseñar a nuestros asesores y afiliados a pensar de manera diferente,
                no solo sobre como brindar un servicio excepcional, sino también sobre cómo cambiar el negocio de bienes raíces en México.
            </p>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 style="color: white;">Valores</h2>
        </div>
        <div class="panel-content" style="padding: 10px;">
            <ul>
                <li>Pasión. Siendo apasionado en todos nuestros tratos.</li>
                <li>Conocimiento. Incrementando el conocimiento del mercado de bienes raíces, tanto con clientes como con colegas.</li>
                <li>Innovación. Promoviendo la innovación mediante sistemas y herramientas tecnológicas.</li>
                <br/>
                <li>Integridad, Honestidad y Respeto.</li>
                <li>Servicio de Calidad a nuestros Clientes.</li>
                <li>Mantener una imagen de prestigio.</li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        $('#inicio').attr('class', 'active');
    </script>
@endsection