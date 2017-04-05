@extends('layouts.app')

<link href="{{ asset('/css/clientes/index.css') }}" rel="stylesheet" type="text/css" />
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
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
</div>			
            </div>

		</div>
	</div>

    <script type="text/javascript">
        $('#inicio').attr('class', 'active');
    </script>
@endsection