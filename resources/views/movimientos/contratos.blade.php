@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="col-md-12" role = "main" id="contenedor">
            <form class="form-horizontal" action="contratos.store" method="post">
                <br>
                <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Contratos</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-solicitud" class="col-sm-6 control-label">Solicitud</label>
                                    <div class="col-sm-6">
                                        <select name="solicitud_id" class="form-control" id="input-solicitud">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}">{{$solicitud->id}}  -  {{$solicitud->cliente->nombre}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fraccionamiento" class="col-sm-6 control-label">Fraccionamiento</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="fraccionamiento_id" id="input-fraccionamiento" class="form-control" placeholder="Fraccionamiento" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-cliente" class="col-sm-6 control-label">Cliente</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cliente_id" id="input-cliente" class="form-control" placeholder="Cliente" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-lote" class="col-sm-6 control-label">Lote</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="lote" id="input-lote" class="form-control" placeholder="Lote" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-manzana" class="col-sm-6 control-label">Manzana</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="manzana" id="input-manzana" class="form-control" placeholder="Manzana" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div align="right">
                                <button class="btn btn-warning">Imprimir</button>
                                <button class="btn btn-warning">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Pagos Registrados</h3></div>
                <div class="table-responsive">
                    <table id="tabSolicitudes" class="table table-striped">
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
                        @foreach($contratos as $contrato)
                            <tr>
                                <td>{{$contrato->id}}</td>
                                <td>{{$contrato->saldo}}</td>
                                <td>{{$contrato->plazo}}</td>
                                <td>{{$contrato->monto_mensual}}</td>
                                <td>{{$contrato->fecha}}</td>
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
        $('#contratos').attr('class', 'active');
    </script>
    <script src="{{ asset('/js/enganches.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
