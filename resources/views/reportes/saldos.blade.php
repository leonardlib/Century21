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
						<h3 class="panel-title">Saldos</h3>
					</div>
					
					<div class="panel-body">

						<center><h2>Reporte Saldos</h2></center>	
<pre>

<b>Fecha:</b> {{date('l jS \of F Y h:i:s A')}}

<b>Total Saldos:</b> {{$total}}

	
</pre>												
						<table id="tabReporteSaldos" class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Cliente</th>
									<th>Colonia</th>
									<th>Calle</th>
									<th>Telefono</th>
									<th>IFE</th>
									<th>Saldo</th>
								</tr>
							</thead>
							<tbody>	
								@foreach($saldos as $saldo)
									<tr>
										<td>{{$saldo->id}}</td>
										<td>{{$saldo->nombre}}</td>
										<td>{{$saldo->colonia}}</td>
										<td>{{$saldo->calle}}</td>
										<td>{{$saldo->telefono}}</td>
										<td>{{$saldo->ife}}</td>
										<td>{{$saldo->saldo}}</td>
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

	<script src="{{ asset('/js/reciboSaldos.js') }}"></script>
    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection