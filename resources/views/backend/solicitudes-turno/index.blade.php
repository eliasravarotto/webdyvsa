  @extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">TURNOS</h4>
    <h5 class="card-subtitle mb-2 text-muted">Listado de solicitudes.</h5>
    <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th>Fecha Solicitud</th>
            <th>Fecha Turno</th>
            <th>Cliente</th>
            <th>Teléfono</th>
            {{-- <th>Sucursal</th> --}}
            {{-- <th>Servicio</th> --}}
            <th>Comentario</th>
          </tr>
        </thead>
        <tbody>
          @foreach($solicitudes as $solicitud)
          <tr class="pointer" onclick="location.href = '{{route('solicitud_show', $solicitud->id)}}'">
            <td>{{ date('d-m-Y', strtotime($solicitud->created_at))}}</td>
            <td>{{ date('d-m-Y', strtotime($solicitud->fecha))}}</td>
            <td>{{$solicitud->cliente}}</td>
            <td>{{$solicitud->telefono}}</td>
            {{-- <td>{{$solicitud->sucursal}}</td> --}}
            {{-- <td>{{$solicitud->tipo_de_servicio}}</td> --}}
            <td>{{str_limit(strip_tags($solicitud->comentario), 40, '...')}}</td>
            @endforeach
          </tr>
        </tbody>
    </table>
  </div>
</div>
@stop