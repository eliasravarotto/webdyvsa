@extends('backend.layout')

@section('content')

<div class="card">
  <div class="card-body">
    <h4 class="card-title">EMAILS</h4>
    <h5 class="card-subtitle mb-2 text-muted">Solicitudes de Test Drive</h5>
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