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

<center><h2>Reporte Fraccionamiento {{$fraccionamiento->nombre}}</h2></center>
<pre>


	<p><b>Fecha:</b> {{$fecha}}</p>

</pre>
<table>
	<thead>
	<tr>
		<th>#</th>
		<th>Cliente</th>
		<th>Fraccionamiento</th>
		<th>Solicitud</th>
		<th>Superficie (mt<sup>2</sup>)</th>
		<th>Precio Total ($)</th>
	</tr>
	</thead>
	<tbody>
	@foreach($solicitudes as $solicitud)
		<tr>
			<td>{{$fraccionamiento->id}}</td>
			<td>{{$solicitud->cliente->nombre}}</td>
			<td>{{$fraccionamiento->nombre}}</td>
			<td>{{$solicitud->id}}</td>
			<td>{{$solicitud->superficie}}</td>
			<td>{{$solicitud->precio_total}}</td>
		</tr>
	@endforeach
	</tbody>

</table>

</body>
</html>
