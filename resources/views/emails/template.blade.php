<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	    <meta charset="UTF-8">
    <title>WebDyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; justify-content: flex-end;">
	<img src="https://derkayvargas.com/_files/200000213-36c2937c1a/200/logonavidadpng.png" style="height: 50px; width: 50px">
</div>
<div>
	<h4>Datos</h4>
	{{-- <label style="font-weight: bold;">Nomnbre:</label> {{ $data->nombre }} <br>
	<label style="font-weight: bold;">Telefono:</label> {{ $data->telefono }} <br>
	<label style="font-weight: bold;">Email:</label> {{ $data->email }} <br>
	<label style="font-weight: bold;">Unidad:</label> {{ $data->marca }} {{ $data->modelo }}
	<h4>Mensaje</h4>			
	<div class="well">
		<p>{{$data->mensaje}}</p>
	</div> --}}
</div>
</body>
</html>