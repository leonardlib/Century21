@extends('layouts.app')

@section('titulo')
    Inicio
@endsection

<link href="{{ asset('/css/index/index.css') }}" rel="stylesheet" type="text/css" />
@section('container')
    <div class="container bs-docs-container" id="cont1" >
	<div class="row">
		<div class="col-md-9" role = "main" id="contenedor">
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
			      		<input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
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
			    		<label for="inputCalle" class="col-sm-4 control-label">IFF</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" id="inputCalle" placeholder="Calle">
			    	</div>
			  		</div>
				  </div>
				  <div class="col-md-6">
				  	<div class="form-group">
			    		<label for="inputTelefono" class="col-sm-4 control-label">Algo</label>
			    	<div class="col-sm-8">
			      		<input type="text" class="form-control" id="inputTelefono" placeholder="Telefono">
			    	</div>
			  		</div>
				  </div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-default btn-block" id="borrar">Borrar Registro</button>
			  	</div>
			  	<div class="col-md-2">
				  	<button type="button" class="btn btn-primary btn-block" id="calcular">Calcular Mensualidades</button>
			  	</div>
		  	</div>

				</div> 
			</div>
			

		  	
			</form>
			
            </div>

		</div>
	</div>

    <script type="text/javascript">
        $('#inicio').attr('class', 'active');
    </script>
@endsection