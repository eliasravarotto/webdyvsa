  @extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">TURNOS</h4>
    <h5 class="card-subtitle mb-2 text-muted">Listado de solicitudes.</h5>
    <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th>Created_at</th>
            <th>F. Turno</th>
            <th>Cliente</th>
            <th>Sucursal</th>
            <th>Comentario</th>
          </tr>
        </thead>
        <tbody>
          @foreach($solicitudes as $solicitud)
          <tr class="pointer" onclick="location.href = '{{route('solicitud_show', $solicitud->id)}}'">
            <td>{{ date('d-m-Y', strtotime($solicitud->created_at))}}</td>
            <td>{{ date('d-m-Y', strtotime($solicitud->fecha))}}</td>
            <td>
               @if(strlen($solicitud->cliente) > 20)
                {{ substr($solicitud->cliente, 0, 20) . '...'}}
              @else
                {{$solicitud->cliente}}
              @endif
            </td>
            <td>{{$solicitud->sucursal}}</td>
            <td>
              @if(strlen($solicitud->comentario) > 35)
                {{ substr($solicitud->comentario, 0, 35) . '...'}}
              @else
                {{$solicitud->comentario}}
              @endif
            </td>
            @endforeach
          </tr>
        </tbody>
    </table>
  </div>
</div>
@stop