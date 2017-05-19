
@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="col-md-12" role = "main" id="contenedor">
            <form class="form-horizontal" action="solicitudes.store" method="post">
                <br>
                <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Solicitudes</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-nombre" class="col-sm-4 control-label">Cliente</label>
                                    <div class="col-sm-8">
                                        <select name="cliente_id" class="form-control" id="input-cliente">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($solicitudes as $solicitud)
                                                <option value="{{$solicitud->id}}">{{$solicitud->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-nombre" class="col-sm-4 control-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input type="text" name="nombre" class="form-control" id="input-nombre" placeholder="Nombre Cliente">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-" class="col-sm-4 control-label">Fraccionamiento</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="fraccionamiento" id="input-fraccionamiento" placeholder="Fraccionamiento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lote" class="col-sm-4 control-label">Lote</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="no_lote" id="lote" placeholder="No. Lote">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="manzana" class="col-sm-4 control-label">Manzana</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="manzana" id="manzana" placeholder="Manzana">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-superficie" class="col-sm-4 control-label">Saldo Enganche</label>
                                    <div class="col-sm-8">
                                        <input type="number" readonly class="form-control" name="enganche" id="enganche" placeholder="Salgo enganche">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="panel-footer">
                            <div align="right">
                                <button class="btn btn-warning">Guardar Registro</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Solicitudes Registradas</h3></div>
                <div class="table-responsive">
                    <table id="tabSolicitudes" class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Fraccionamiento</th>
                            <th>Cliente</th>
                            <th>Vendedor</th>
                            <th>No. Lote</th>
                            <th>Manzana</th>
                            <th>Frente (mt)</th>
                            <th>Fondo (mt)</th>
                            <th>Superficie (mt<sup>2</sup>)</th>
                            <th>Precio por metro</th>
                            <th>Enganche (5%)</th>
                            <th>Precio total</th>
                        </tr>
                        </thead>
                        <tbody>
                        
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
                                    <label for="input-nombre" class="col-sm-4 control-label">Cliente</label>
                                    <div class="col-sm-8">
                                        <select name="cliente_id" class="form-control" id="input-cliente">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fecha-solicitud" class="col-sm-4 control-label">Fecha</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="input-fecha-solicitud" name="fecha">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fraccionamiento" class="col-sm-4 control-label">Fraccionamiento</label>
                                    <div class="col-sm-8">
                                        <select name="fraccionamiento_id" class="form-control" id="input-fraccionamiento">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($fraccionamientos as $fraccionamiento)
                                                <option value="{{$fraccionamiento->id}}">{{$fraccionamiento->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-vendedor" class="col-sm-4 control-label">Vendedor</label>
                                    <div class="col-sm-8">
                                        <select name="vendedor_id" class="form-control" id="input-vendedor">
                                            <option value="0" selected>Ninguno</option>
                                            @foreach($vendedores as $vendedor)
                                                <option value="{{$vendedor->id}}">{{$vendedor->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-lote" class="col-sm-4 control-label">No. Lote</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">#</span>
                                            <input type="number" name="no_lote" class="form-control" id="input-lote" aria-label="Amount (to the nearest dollar)" placeholder="Lote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-manzana" class="col-sm-4 control-label">Manzana</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="manzana" id="input-manzana" placeholder="Manzana">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-frente" class="col-sm-4 control-label">Frente</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="frente" id="input-frente" placeholder="metros">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fondo" class="col-sm-4 control-label">Fondo</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" name="fondo" id="input-fondo" placeholder="metros">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-superficie" class="col-sm-4 control-label">Superficie</label>
                                    <div class="col-sm-8">
                                        <input type="number" readonly class="form-control" name="superficie" id="input-superficie" placeholder="metros cuadrados">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-metro" class="col-sm-4 control-label">Precio por metro</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" class="form-control" name="precio_metro" id="input-precio-metro" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-enganche" class="col-sm-4 control-label">Enganche (5%)</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" class="form-control" name="enganche" readonly id="input-enganche" aria-label="Amount (to the nearest dollar)" placeholder="Enganche">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-precio-total" class="col-sm-4 control-label">Precio total</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="number" class="form-control" name="precio_total" readonly id="input-precio-total" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                                        </div>
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
        $('#solicitudes').attr('class', 'active');
    </script>

    <script src="{{ asset('/js/solicitudes.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection
