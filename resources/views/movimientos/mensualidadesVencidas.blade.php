@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="col-md-12" role = "main" id="contenedor">
            <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Mensualidades Vencidas</h3></div>
                <div class="table-responsive">
                    <table id="tabMensualidadesVencidas" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Cliente</th>
                            <th>Concepto</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Ver</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recibos as $recibo)
                            <tr>
                                <td>{{$recibo->recibo_id}}</td>
                                <td>{{$recibo->nombre}}</td>
                                <td>{{$recibo->concepto}}</td>
                                <td>{{$recibo->fecha}}</td>
                                <td>{{$recibo->monto}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#movimientos').attr('class', 'active');
        $('#mensualidades_vencidas').attr('class', 'active');
    </script>
    <script src="{{ asset('/js/enganches.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
