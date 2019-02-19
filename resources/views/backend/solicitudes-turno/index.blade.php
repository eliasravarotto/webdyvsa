@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">TURNOS</h4>
    <h5 class="card-subtitle mb-2 text-muted">Listado de solicitudes.</h5>
    <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Sucursal</th>
            <th>Servicio</th>
            <th>Comentario</th>
            <th>Created_at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($solicitudes as $solicitud)
          <tr>
            <td>{{$solicitud->fecha}}</td>
            <td>{{$solicitud->cliente}}</td>
            <td>{{$solicitud->sucursal}}</td>
            <td>{{$solicitud->tipo_de_servicio}}</td>
            <td>{{$solicitud->comentario}}</td>
            <td>{{$solicitud->created_at}}</td>
            @endforeach
          </tr>
        </tbody>
    </table>
  </div>
</div>
@stop