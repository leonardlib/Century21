@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Contrato</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="input-contrato-vencido" class="col-sm-4 control-label">Contrato</label>
                            <div class="col-sm-8">
                                <select name="contrato_id" class="form-control" id="input-contrato-vencido">
                                    <option value="0" selected>Ninguno</option>
                                    @foreach($contratos as $contrato)
                                        <option value="{{$contrato->id}}">{{$contrato->id}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Mensualidades Vencidas</h3></div>
            <div class="table-responsive">
                <table id="tabContratosVencidos" class="table table-striped">
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
                                    <label for="input-contrato-vencido" class="col-sm-4 control-label">Contrato</label>
                                    <div class="col-sm-8">
                                        <select name="contrato_id" class="form-control" id="input-contrato-vencido">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($contratos as $contrato)
                                                <option value="{{$contrato->id}}">{{$contrato->id}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
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
        $('#mensualidades_vencidas').attr('class', 'active');
    </script>
    <script src="{{ asset('/js/mensualidades.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
