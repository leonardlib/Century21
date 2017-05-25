@extends('layouts.app')

<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

	<div class="row">
		<div class="col-md-12" role = "main" id="contenedor">
			<form class="form-horizontal" action="fraccionamientos.store" method="post">			
				<br>
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

			
				<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Fraccionamientos</h3></div>
					<div class="panel-body">
						
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
								<div align="right">
									<button class="btn btn-warning" type="submit">Agregar Nuevo Fraccionamiento</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>

			<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Clientes Registrados</h3></div>
				<div class="table-responsive">
					<table id="tabFraccionamientos" class="table table-striped">
						<thead>
						<tr>
							<th>#</th>
							<th>Nombre</th>
							<th>Modificar</th>
							<th>Eliminar</th>
							<th>Ver</th>
						</tr>
						</thead>
						<tbody>
						@foreach($fraccionamientos as $fracc)
							<tr>
								<td>{{$fracc->id}}</td>
								<td>{{$fracc->nombre}}</td>
								<td><button type="button" class="boton_modificar btn btn-success"  data-toggle="modal" data-target="#modalModificar" value="{{$fracc->id}}">Editar</button></td>
								<td><button  value="{{$fracc->id}}" type="button" class="btn btn-warning btn-circle btn-xl boton_eliminar"><i class="glyphicon glyphicon-remove"></i></button></td>
								<td><button  value="{{$fracc->id}}" type="button" class="btn btn-default btn-PDF">PDF</button></td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<form action="fraccionamientos.editar" method="post">
	<div class="modal fade" id="modalModificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  	       aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Editar Fraccionamiento</h4>
        </div>
            <div class="modal-body">
            

            	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">
            	
        
						<div class="row">
		
							<!--<div class="col-md-6">
								<div class="form-group">
									<label for="inputClienteNo" class="col-sm-4 control-label">No. Fraccionamiento</label>
									<div class="col-sm-8">
										<div class="input-group">
											<span class="input-group-addon">#</span>
											<input type="text" class="form-control" id="inputId" aria-label="Amount (to the nearest dollar)" placeholder="Cliente">
										</div>
									</div>
								</div>
							</div>-->
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="inputNombre" class="col-sm-4 control-label">Nombre</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Nombre">
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
        $('#catalogos').attr('class', 'active');
        $('#fraccionamientos').attr('class', 'active');
	</script>







    <script src="{{ asset('/js/fraccionamiento.js') }}"></script>
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