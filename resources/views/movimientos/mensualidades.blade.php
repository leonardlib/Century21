@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="col-md-12" role = "main" id="contenedor">
            <form class="form-horizontal" action="mensualidades.store" method="post">
                <br>
                <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Pago de Mensualidades</h3></div>
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
                                        <select name="fraccionamiento_id" class="form-control" id="input-fraccionamiento" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->fraccionamiento->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-cliente" class="col-sm-6 control-label">Cliente</label>
                                    <div class="col-sm-6">
                                        <select name="cliente_id" class="form-control" id="input-cliente" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->cliente->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-lote" class="col-sm-6 control-label">Lote</label>
                                    <div class="col-sm-6">
                                        <select name="no_lote" class="form-control" id="input-lote" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->no_lote }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-manzana" class="col-sm-6 control-label">Manzana</label>
                                    <div class="col-sm-6">
                                        <select name="manzana" class="form-control" id="input-manzana" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->manzana }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-frente" class="col-sm-6 control-label">Frente (mt)</label>
                                    <div class="col-sm-6">
                                        <select name="frente" class="form-control" id="input-frente" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->frente }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fondo" class="col-sm-6 control-label">Fondo (mt)</label>
                                    <div class="col-sm-6">
                                        <select name="fondo" class="form-control" id="input-fondo" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->fondo }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-superficie" class="col-sm-6 control-label">Superficie (mt<sup>2</sup>)</label>
                                    <div class="col-sm-6">
                                        <select name="superficie" class="form-control" id="input-superficie" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->superficie }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-metro" class="col-sm-6 control-label">Precio por metro $</label>
                                    <div class="col-sm-6">
                                        <select name="precio_metro" class="form-control" id="input-precio-metro" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->precio_metro }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-enganche" class="col-sm-6 control-label">Enganche (%)</label>
                                    <div class="col-sm-6">
                                        <select name="enganche" class="form-control" id="input-enganche" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->enganche }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-total" class="col-sm-6 control-label">Precio total $</label>
                                    <div class="col-sm-6">
                                        <select name="precio_total" class="form-control" id="input-precio-total" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->precio_total }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-contrato" class="col-sm-6 control-label">Contrato</label>
                                    <div class="col-sm-6">
                                        <select name="contrato_id" class="form-control" id="input-contrato">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                @foreach($solicitud->contrato as $contrato)
                                                    <option value="{{$contrato->id}}"> {{ $contrato->id }} </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fecha-pago" class="col-sm-6 control-label">Fecha próximo pago</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="plazo" id="input-fecha-pago" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-pago" class="col-sm-6 control-label">Cantidad de pago $</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="monto" id="input-pago" class="form-control" readonly>
                                        <input type="hidden" name="id_mensualidad" id="input-id-mensualidad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="panel-footer">
                            <div align="right">
                                <button class="btn btn-warning" type="submit">Pagar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Mensualidades Pagadas</h3></div>
                <div class="table-responsive">
                    <table id="tabContratos" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Contrato</th>
                            <th>Monto $</th>
                            <th>Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mensualidades as $mensualidad)
                            <tr>
                                <td>{{$mensualidad->id}}</td>
                                <td>{{$mensualidad->contrato_id}}</td>
                                <td>{{$mensualidad->monto}}</td>
                                <td>{{$mensualidad->fecha}}</td>
                                <td><button type="button" class="boton_modificar btn btn-success"  data-toggle="modal" data-target="#modalModificar" value="{{$mensualidad->id}}">Editar</button></td>
                                <td><button  value="{{$mensualidad->id}}" type="button" class="btn btn-warning btn-circle btn-xl boton_eliminar"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="solicitudes.editar" method="post">
        <div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Editar Solicitud</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

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
                                        <select name="fraccionamiento_id" class="form-control" id="input-fraccionamiento" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->fraccionamiento->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-cliente" class="col-sm-6 control-label">Cliente</label>
                                    <div class="col-sm-6">
                                        <select name="cliente_id" class="form-control" id="input-cliente" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->cliente->nombre }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-lote" class="col-sm-6 control-label">Lote</label>
                                    <div class="col-sm-6">
                                        <select name="no_lote" class="form-control" id="input-lote" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->no_lote }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="input-manzana" class="col-sm-6 control-label">Manzana</label>
                                    <div class="col-sm-6">
                                        <select name="manzana" class="form-control" id="input-manzana" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->manzana }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-frente" class="col-sm-6 control-label">Frente (mt)</label>
                                    <div class="col-sm-6">
                                        <select name="frente" class="form-control" id="input-frente" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->frente }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fondo" class="col-sm-6 control-label">Fondo (mt)</label>
                                    <div class="col-sm-6">
                                        <select name="fondo" class="form-control" id="input-fondo" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->fondo }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-superficie" class="col-sm-6 control-label">Superficie (mt<sup>2</sup>)</label>
                                    <div class="col-sm-6">
                                        <select name="superficie" class="form-control" id="input-superficie" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->superficie }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-metro" class="col-sm-6 control-label">Precio por metro $</label>
                                    <div class="col-sm-6">
                                        <select name="precio_metro" class="form-control" id="input-precio-metro" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->precio_metro }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-enganche" class="col-sm-6 control-label">Enganche (%)</label>
                                    <div class="col-sm-6">
                                        <select name="enganche" class="form-control" id="input-enganche" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->enganche }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-total" class="col-sm-6 control-label">Precio total $</label>
                                    <div class="col-sm-6">
                                        <select name="precio_total" class="form-control" id="input-precio-total" disabled>
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}"> {{ $solicitud->precio_total }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-contrato" class="col-sm-6 control-label">Contrato</label>
                                    <div class="col-sm-6">
                                        <select name="contrato_id" class="form-control" id="input-contrato">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                @foreach($solicitud->contrato as $contrato)
                                                    <option value="{{$contrato->id}}"> {{ $contrato->id }} </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fecha-pago" class="col-sm-6 control-label">Fecha próximo pago</label>
                                    <div class="col-sm-6">
                                        <input type="date" name="plazo" id="input-fecha-pago" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-pago" class="col-sm-6 control-label">Cantidad de pago $</label>
                                    <div class="col-sm-6">
                                        <input type="number" name="monto" id="input-pago" class="form-control" readonly>
                                        <input type="hidden" name="id_mensualidad" id="input-id-mensualidad">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                    </div>

                        <input type="hidden" name="id" id="id">


                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" id="modalGuardar" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
    <script type="text/javascript">
        $('#movimientos').attr('class', 'active');
        $('#pagos_mensuales').attr('class', 'active');
    </script>
    <script src="{{ asset('/js/mensualidades.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
