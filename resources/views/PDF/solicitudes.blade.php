<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	  
	   
        <style type="text/css">
         
            html {
              margin: 0;
            }
            body {
              font-family: "Times New Roman", serif;
              margin: 10mm 10mm 10mm 10mm;
            }     

           table {
           	   font-size: 8;
			   width: 100%;
			   border: 1px solid #999;
			   text-align: left;
			   border-collapse: collapse;
			   margin: 0 0 1em 0;
			   caption-side: top;
			}
			caption, td, th {
			   padding: 0.3em;
			}
			th, td {
			   border-bottom: 1px solid #999;
			   
			}
			caption {
			   font-weight: bold;
			   font-style: italic;
			}

        </style>
</head>
<body>

<center><h2>Reporte Solicitudes</h2></center>
<pre>

	<p><b>Total Solicitudes:</b> {{ count($solicitudes)}}</p>

	<p><b>Fecha:</b> {{date('l jS \of F Y h:i:s A')}}</p>

</pre>
	<table>
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
	
</body>
</html>
