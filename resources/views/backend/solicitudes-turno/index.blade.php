  @extends('backend.layout')

@section('content')
<div class="card border-info">
  <div class="card-header bg-default font-weight-bold">
        SOLICITUDES DE TURNOS
  </div>
  <div class="card-body">
    <table class="table table-sm table-hover">
        <thead>
          <tr class="bg-danger text-light">
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
            <td>{{$solicitud->sucursal->localidad}}</td>
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