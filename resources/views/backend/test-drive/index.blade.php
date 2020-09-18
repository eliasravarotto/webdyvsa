@extends('backend.layout')

@section('content')

<div class="card">
  <div class="card-header bg-default font-weight-bold">
    SOLICITUDES TEST DRIVE
  </div>
  <div class="card-body">
        <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th>Fecha Estimada</th>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Modelo</th>
                <th>Sucursal</th>
                <th>Enviado a</th>
                <th>Created_at</th>
              </tr>
            </thead>
            <tbody>
              @foreach($solicitudes as $solicitud)
              <tr>
                <td>{{$solicitud->fecha_estimada}}</td>
                <td>{{$solicitud->cliente}}</td>
                <td>{{$solicitud->telefono}}</td>
                <td>{{$solicitud->modelo}}</td>
                <td>{{$solicitud->sucursal->localidad}}</td>
                <td>{{$solicitud->enviar_a}}</td>
                <td>{{ date('d-m-Y H:m', strtotime($solicitud->created_at))}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

@stop