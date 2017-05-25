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

<center><h2>Reporte Saldos</h2></center>
<pre>


	<p><b>Fecha:</b> {{$fecha}}</p>

	<p><b>Total Saldos:</b> {{$total}}</p>

</pre>
	<table>
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
	
</body>
</html>
