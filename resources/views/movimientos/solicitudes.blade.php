@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="row">
        <div class="col-md-12" role = "main" id="contenedor">
            <form class="form-horizontal">
                <br>
                <div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Solicitudes</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-numero-solicitud" class="col-sm-4 control-label">No. Solicitud</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">#</span>
                                            <input type="number" class="form-control" id="input-numero-solicitud" aria-label="Amount (to the nearest dollar)" placeholder="Solicitud">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fecha-solicitud" class="col-sm-4 control-label">Fecha</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="input-fecha-solicitud">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-numero-fraccionamiento" class="col-sm-4 control-label">No. Fraccionamiento</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">#</span>
                                            <input type="number" class="form-control" id="input-numero-fraccionamiento" aria-label="Amount (to the nearest dollar)" placeholder="Fraccionamiento">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fraccionamiento" class="col-sm-4 control-label">Fraccionamiento</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-fraccionamiento" placeholder="Fraccionamiento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-nombre" class="col-sm-4 control-label">Nombre</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-nombre" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-vendedor" class="col-sm-4 control-label">Vendedor</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-vendedor" placeholder="Vendedor">
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
                                            <input type="number" class="form-control" id="input-lote" aria-label="Amount (to the nearest dollar)" placeholder="Lote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-manzana" class="col-sm-4 control-label">Manzana</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="input-manzana" placeholder="Manzana">
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
                                        <input type="number" class="form-control" id="input-frente" placeholder="metros">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-fondo" class="col-sm-4 control-label">Fondo</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="input-fondo" placeholder="metros">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-superficie" class="col-sm-4 control-label">Superficie</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="input-superficie" placeholder="metros">
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
                                            <input type="number" class="form-control" id="input-precio-metro" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="input-enganche" class="col-sm-4 control-label">Enganche</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon">%</span>
                                            <input type="number" class="form-control" id="input-enganche" aria-label="Amount (to the nearest dollar)" placeholder="Enganche">
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
                                            <input type="number" class="form-control" id="input-precio-total" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                                        </div>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                            <tr>
                                <td>0001</td>
                                <td>Luis Alberto</td>
                                <td>344 456 54 54</td>
                                <td><button type="button" class="btn btn-success">Editar</button></td>
                                <td><button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#movimientos').attr('class', 'active');
        $('#solicitudes').attr('class', 'active');
    </script>
@endsection