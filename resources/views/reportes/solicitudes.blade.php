@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

	<div class="row">
		
		<div class="col-md-12" role = "main" id="contenedor">
			
						
				
				<br>
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

			
				<div class="panel panel-default">
				
					<div class="panel-heading">
						<h3 class="panel-title">Solicitudes</h3>
					</div>
					
					<div class="panel-body">

						<center><h2>Reporte Solicitudes</h2></center>	
<pre>

<b>Total Solicitudes:</b> {{ count($solicitudes)}}

<b>Fecha:</b> {{date('l jS \of F Y h:i:s A')}}
	
</pre>												
						<table id="tabReporteSolicitudes" class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Fraccionamiento</th>
									<th>Cliente</th>
									<th>Vendedor</th>
									<th>Lote</th>
									<th>Manzana</th>
									<th>Enganche</th>
									<th>Precio Total</th>
									<th>Fecha</th>
								</tr>
							</thead>
							<tbody>
								@foreach($solicitudes as $solicitud)
									<tr>
										
										<td>{{$solicitud->id}}</td>
										<td>{{$solicitud->fraccionamiento}}</td>
										<td>{{$solicitud->cliente}}</td>
										<td>{{$solicitud->vendedor}}</td>
										<td>{{$solicitud->no_lote}}</td>
										<td>{{$solicitud->manzana}}</td>
										<td>{{$solicitud->enganche}}</td>
										<td>{{$solicitud->precio_total}}</td>
										<td>{{$solicitud->fecha}}</td>
										
									</tr>
								@endforeach	
							</tbody>
						</table>
						<div class="panel-footer">
							<div align="right">
								<button class="btn btn-warning" id="ver_recibo">Version Pdf</button>
							</div>
						</div>
					</div>
				
				</div>

		
		</div>
	
	</div>


	<script type="text/javascript">
        $('#catalogos').attr('class', 'active');
        $('#clientes').attr('class', 'active');
	</script>

	<script src="{{ asset('/js/reciboSolicitudes.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection