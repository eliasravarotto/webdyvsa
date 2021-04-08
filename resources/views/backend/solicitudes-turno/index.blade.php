@extends('backend.layout')

@section('stylesheet')
  <style type="text/css">
    .list-today,
    .list-previous{
      margin-bottom: 2.8rem;
    }
    .dropleft .dropdown-toggle:before {
      display: none;
    }
    .list-today .list-group-item .drop-menu .btn {
      border-radius: 50%;
      width: 25px;
      height: 25px;
      border: none;
    }
  </style>
@stop
@section('content')
  @php

    $todays = collect();
    $previous = collect();

    foreach($solicitudes as $solicitud){
      if( date('d-m-Y', strtotime($solicitud->created_at)) == date('d-m-Y') ){
        $todays->put($solicitud->id, $solicitud);
      }else{
        $previous->put($solicitud->id, $solicitud);
      }
    }

  @endphp

  <div class="card border-info">
    <div class="card-header bg-default font-weight-bold">
          SOLICITUDES DE TURNOS
    </div>

    <div class="card-body">
      <div class="list-today">
        <h4>Hoy</h4>
        <ul class="list-group list-group-flush  my-3">
          @foreach($todays as $solicitud)
            @if( date('d-m-Y', strtotime($solicitud->created_at)) == date('d-m-Y') )
              <li class="list-group-item list-group-item-md @if(!$solicitud->atendido) list-group-item-danger @endif">
                <div class="row">
                  <div class="col-12 col-md-2 px-0">
                    {{ date('d-m-Y', strtotime($solicitud->created_at))}}
                  </div>
                  <div class="col-12 col-md-3 px-0">
                    {{ $solicitud->cliente }}
                  </div>
                  <div class="col-12 col-md-2 px-0">
                    {{ $solicitud->telefono }}
                  </div>
                  <div class="col-12 col-md-3 px-0">
                    {{ $solicitud->email }}
                  </div>
                  <div class="col-12 col-md-1 px-0">
                    {{ $solicitud->from }}
                  </div>
                  <div class="col-12 col-md-1 px-0">
                    <div class="drop-menu dropleft">
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('solicitudes_show', $solicitud->id) }}">Detalles</a>
                      @if($solicitud->atendido)
                        <a class="dropdown-item" href="{{ route('turno_servicio_atender', $solicitud->id) }}">No atendido</a>
                      @else
                        <a class="dropdown-item" href="{{ route('turno_servicio_atender', $solicitud->id) }}">Atendido</a>
                      @endif
                      <a class="dropdown-item" href="#">Separated link</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Eliminar</a>
                    </div>
                  </div>
                  </div>
                </div>
              </li>
            @endif
          @endforeach
        </ul>
      </div>

      <div class="list-previous">
        <h4>Anteriores</h4>
        <ul class="list-group list-group-flush  my-3">
          @foreach($previous as $prevSolicitud)
            @if( date('d-m-Y', strtotime($prevSolicitud->created_at)) != date('d-m-Y') )
              <li class="list-group-item list-group-item-md">{{ date('d-m-Y', strtotime($prevSolicitud->created_at))}}</li>
            @endif
          @endforeach
        </ul>
      </div>


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