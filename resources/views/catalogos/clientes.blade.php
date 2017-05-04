@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

	<div class="row">
		<div class="col-md-12" role = "main" id="contenedor">
			<form class="form-horizontal" action="clientes_store" method="post">
			
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
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputNombre" class="col-sm-4 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Colonia</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputTelefono" name="colonia" placeholder="Colonia">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCalle" class="col-sm-4 control-label">Calle</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="calle" id="inputCalle" placeholder="Calle">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Telefono</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="telefono" id="inputTelefono" placeholder="Telefono">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCalle" class="col-sm-4 control-label">IFE</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="ife" id="inputCalle" placeholder="IFE">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputTelefono" class="col-sm-4 control-label">Saldo</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="saldo" id="inputTelefono" placeholder="Saldo">
									</div>
								</div>
								<br><br>
							</div>
						</div>
						<div class="panel-footer">
							<div align="right">
								<button class="btn btn-warning" type="submit">Guardar Registro</button>
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
							<th>Saldo</th>
							<th>Telefono</th>
							<th>Colonia</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						</tr>
						</thead>
						<tbody>
						
							
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Modificar Instalacion</h4>
        </div>
            <div class="modal-body">
            <div class="row">
                
            
            <input type="hidden" name="id" id="cliente_id">
            
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div>
        </div>
	<script type="text/javascript">
        $('#catalogos').attr('class', 'active');
        $('#clientes').attr('class', 'active');
	</script>
@endsection