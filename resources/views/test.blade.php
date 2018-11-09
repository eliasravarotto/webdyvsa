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
<style type="text/css">
    th{
        width: 35%;
    }
</style>
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
            <td>Lastname</td>
          </tr>
          <tr>
            <th>Teléfono</th>
            <td>Doe</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>Doe</td>
          </tr>
          <tr>
            <th>Fecha</th>
            <td>Doe</td>
          </tr>
          <tr>
            <th>Sucursal</th>
            <td>Doe</td>
          </tr>
          <tr>
            <th>Unidad</th>
            <td>Doe</td>
          </tr>
          <tr>
            <th>Comentario</th>
            <td>Doe</td>
          </tr>
        </tbody>
  </table>
</div>
</body>
</html>