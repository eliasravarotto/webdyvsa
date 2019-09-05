<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

  <h4>Consulta desde el sitio web Derka y Vargas</h4>
  <table class="table table-striped" style="width: 80%">
      <tbody>
        <tr>
          <th>Nombre</th>
          <td>{{ $consulta->cliente }}</td>
        </tr>
        <tr>
          <th>Teléfono</th>
          <td>{{ $consulta->telefono }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $consulta->email }}</td>
        </tr>
        <tr>
          <th>Mensaje</th>
          <td>{{$consulta->mensaje}}</td>
        </tr>
      </tbody>
  </table>

</body>
</html>