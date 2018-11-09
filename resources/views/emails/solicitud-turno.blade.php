<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	    <meta charset="UTF-8">
    <title>WebDyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div style="display: flex; justify-content: flex-end;">
	<img src="https://derkayvargas.com/_files/200000005-b0396b1366/200/dyv_logo_700px-01.png" style="height: 50px; width: 50px">
</div>
<div>
	<h4>Solicitud de Turno</h4>
<table class="table table-striped" style="width: 50%">
        <tbody>
          <tr>
            <th>Apellido y Nombre</th>
            <td>{{ $turno->cliente }}</td>
          </tr>
          <tr>
            <th>Teléfono</th>
            <td>{{ $turno->telefono }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $turno->email }}</td>
          </tr>
          <tr>
            <th>Fecha</th>
            <td>{{ $turno->fecha }}</td>
          </tr>
          <tr>
            <th>Sucursal</th>
            <td>{{ $turno->sucursal }}</td>
          </tr>
          <tr>
            <th>Unidad</th>
            <td>Modelo: {{ $turno->modelo }} - Dominio: {{ $turno->dominio }}</td>
          </tr>
          <tr>
            <th>Tipo de Servicio</th>
            <td> {{ $turno->tipo_de_servicio }}</td>
          </tr>
          <tr>
            <th>Comentario</th>
            <td>{{ $turno->comentario }}</td>
          </tr>
        </tbody>
  </table>
</div>
</body>
</html>