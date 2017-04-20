@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
	<div class="row">
		<div class="col-md-12" role = "main" id="contenedor">
			<form class="form-horizontal">
				<br>
				<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Clientes</h3></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputClienteNo" class="col-sm-4 control-label">No. Cliente</label>
									<div class="col-sm-8">
										<div class="input-group">
											<span class="input-group-addon">#</span>
											<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Cliente">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputNombre" class="col-sm-4 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCalle" class="col-sm-4 control-label">Calle</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCalle" placeholder="Calle">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Colonia</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputTelefono" placeholder="Colonia">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCalle" class="col-sm-4 control-label">Calle</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCalle" placeholder="Calle">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Telefono</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCalle" class="col-sm-4 control-label">IFE</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputCalle" placeholder="IFE">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Algo</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputTelefono" placeholder="Algo">
									</div>
								</div>
								<br><br>
							</div>
						</div>
						<div class="panel-footer">
							<div align="right">
								<button class="btn btn-warning">Guardar Registro</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Clientes Registrados</h3></div>
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
        $('#catalogos').attr('class', 'active');
        $('#clientes').attr('class', 'active');
	</script>
@endsection