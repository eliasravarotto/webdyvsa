<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Test Drive</title>
	    <meta charset="UTF-8">
    <title>WebDyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <div>
  <h4>Nueva Solicitud de Test Drive</h4>
  <table class="table table-striped" style="width: 80%">
          <tbody>
            <tr>
              <th>Apellido y Nombre</th>
              <td>{{ $solicitudTD->cliente }}</td>
            </tr>
            <tr>
              <th>Teléfono</th>
              <td>{{ $solicitudTD->telefono }}</td>
            </tr>
            <tr>
              <th>Fecha Estimada</th>
              <td>{{ $solicitudTD->fecha_estimada }}</td>
            </tr>
            <tr>
              <th>Sucursal</th>
              <td>{{ $solicitudTD->sucursal }}</td>
            </tr>
            <tr>
              <th>Modelo</th>
              <td>{{ $solicitudTD->modelo }}</td>
            </tr>
          </tbody>
    </table>
  </div>
</body>
</html>