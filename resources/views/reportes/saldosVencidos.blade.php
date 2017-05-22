@extends('layouts.app')
<link href="{{url('/css/index.css')}}" rel="stylesheet" type="text/css" />
@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

	<div class="row">
		
		<div class="col-md-12" role = "main" id="contenedor">
			
			<form class="form-horizontal" action="clientes_store" method="post">			
				
				<br>
				
				<input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

			
				<div class="panel panel-default">
				
					<div class="panel-heading">
						<h3 class="panel-title">Saldos Vencidos</h3>
					</div>
					
					<div class="panel-body">
					</div>
				
				</div>

			</form>
		
		</div>
	
	</div>


	<script type="text/javascript">
        $('#catalogos').attr('class', 'active');
        $('#clientes').attr('class', 'active');
	</script>

    <script src="{{ asset('/js/jquery-3.2.0.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
	<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
@endsection