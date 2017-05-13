@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

	<div class="row">
		<div class="col-md-12" role = "main" id="contenedor">
			<form class="form-horizontal" action="vendedores.store" method="post">			
				<br>
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

			
				<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Vendedor</h3></div>
					<div class="panel-body">
						<br><br>
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
										<input type="text" class="form-control" id="inputColonia" name="colonia" placeholder="Colonia">
									</div>
								</div>
							</div>
						</div>
						<br>
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
						<br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCelular1" class="col-sm-4 control-label">Celular 1</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="celular1" id="inputCelular1" placeholder="Celular 1">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCelular2" class="col-sm-4 control-label">Celular 2</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="celular2" id="inputCelular2" placeholder="Celular 2">
									</div>
								</div>
								<br><br>
							</div>
						</div>    
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputEmail" class="col-sm-4 control-label">E-mail</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="email" id="inputEmail" placeholder="E mail">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputComision" class="col-sm-4 control-label">Comision</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="comision" id="inputComision" placeholder="Comision">
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

			<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Vendedores Registrados</h3></div>
				<div class="table-responsive">
					<table id="tabClientes" class="table table-striped">
						<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Calle</th>
							<th>Colonia</th>
							<th>Telefono</th>
							<th>Celuar 1</th>
							<th>Celular 2</th>
							<th>Email</th>
							<th>Comision</th>
							<th>Modificar</th>
							<th>Eliminar</th>
						</tr>
						</thead>
						<tbody>
						@foreach($vendedores as $vendedor)
							<tr>
								<td>{{$vendedor->id}}</td>
								<td>{{$vendedor->nombre}}</td>
								<td>{{$vendedor->calle}}</td>
								<td>{{$vendedor->colonia}}</td>
								<td>{{$vendedor->telefono}}</td>
								<td>{{$vendedor->celular1}}</td>
								<td>{{$vendedor->celular2}}</td>
								<td>{{$vendedor->email}}</td>
								<td>{{$vendedor->comision}}</td>
								<td><button type="button" class="boton_modificar btn btn-success"  data-toggle="modal" data-target="#modalModificar" value="{{$vendedor->id}}">Editar</button></td>
								<td><button  value="{{$vendedor->id}}" type="button" class="btn btn-warning btn-circle btn-xl boton_eliminar"><i class="glyphicon glyphicon-remove"></i></button></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<form action="vendedores.editar" method="post">
	<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  	       aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Vendedor</h4>
        </div>
            <div class="modal-body">
            

            	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">
            	
        
						<br>
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
										<input type="text" class="form-control" id="inputColonia" name="colonia" placeholder="Colonia">
									</div>
								</div>
							</div>
						</div>
						<br>
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
						<br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCelular1" class="col-sm-4 control-label">Celular 1</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="celular1" id="inputCelular1" placeholder="Celular 1">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputCelular2" class="col-sm-4 control-label">Celular 2</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="celular2" id="inputCelular2" placeholder="Celular 2">
									</div>
								</div>
								<br><br>
							</div>
						</div>    
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputEmail" class="col-sm-4 control-label">E-mail</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="email" id="inputEmail" placeholder="E mail">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputComision" class="col-sm-4 control-label">Comision</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="comision" id="inputComision" placeholder="Comision">
									</div>
								</div>
								<br><br>
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
        $('#catalogos').attr('class', 'active');
        $('#clientes').attr('class', 'active');
	</script>







    <script src="{{ asset('/js/vendedores.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<!--
	

    <script src="{{ asset('/js/clientes.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

 -->
@endsection