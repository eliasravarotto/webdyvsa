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
    .list-all .list-group-item .drop-menu .btn,
    .list-today .list-group-item .drop-menu .btn,
    .list-previous .list-group-item .drop-menu .btn{
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

  <form class="form-inline d-flex justify-content-end mb-3" autocomplete="off">
    <div class="form-group ml-1">
      <label for="cliente" class="sr-only">Cliente</label>
      <input type="text" name="cliente" class="form-control" id="cliente" placeholder="Cliente" value="{{ Request::get('cliente') }}">
    </div>
    <div class="form-group ml-1">
      <label for="email" class="sr-only">Email</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ Request::get('email') }}">
    </div>
    <div class="form-group ml-1">
      <label for="telefono" class="sr-only">Teléfono</label>
      <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Teléfono" value="{{ Request::get('telefono') }}">
    </div>
    <div class="form-group ml-1">
      <select name="from" class="form-control">
        <option value=""></option>
        <option value="app" @if(Request::get('from') == 'app') selected @endif>app</option>
        <option value="web-site" @if(Request::get('from') == 'web-site') selected @endif>web-site</option>
      </select>
    </div>
    <div class="form-group ml-1">
      <button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i> Filtrar</button>
      <a href="{{ route('solicitudes_index') }}" class="btn btn-default ml-2"><i class="fas fa-trash"></i> Limpiar</a>
    </div>
  </form>

  @if(Request::get('cliente') != null || Request::get('email') != null || Request::get('telefono') != null || Request::get('from') != null)
    <div class="card border-info">
      <div class="card-header bg-default font-weight-bold">
            SOLICITUDES DE TURNOS
      </div>

      <div class="card-body">
        <div class="list-all">
          <ul class="list-group list-group-flush  my-3">
          @foreach($solicitudes as $s)
          <li class="list-group-item list-group-item-md @if(!$s->atendido) list-group-item-danger @endif">
                    <div class="row">
                      <div class="col-12 col-md-2 px-0">
                        {{ date('d-m-Y', strtotime($s->created_at))}}
                      </div>
                      <div class="col-12 col-md-3 px-0">
                        {{ $s->cliente }}
                      </div>
                      <div class="col-12 col-md-2 px-0">
                        {{ $s->telefono }}
                      </div>
                      <div class="col-12 col-md-3 px-0">
                        {{ $s->email }}
                      </div>
                      <div class="col-12 col-md-1 px-0">
                        {{ $s->from }}
                      </div>
                      <div class="col-12 col-md-1 px-0">
                        <div class="drop-menu dropleft">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('solicitud_show', $s->id) }}">Detalles</a>
                            @if($s->atendido)
                              <a class="dropdown-item" href="{{ route('turno_servicio_atender', $s->id) }}">Pendiente</a>
                            @else
                              <a class="dropdown-item" href="{{ route('turno_servicio_atender', $s->id) }}">Atendido</a>
                            @endif
                            <a class="dropdown-item" href="#">Separated link</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Eliminar</a>
                          </div>
                        </div>
                      </div>
                    </div>
          </li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
  @else
    @if(sizeof(Request::all()) == 0)
    <div class="card border-info mb-3">
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
                        <a class="dropdown-item" href="{{ route('solicitud_show', $solicitud->id) }}">Detalles</a>
                        @if($solicitud->atendido)
                          <a class="dropdown-item" href="{{ route('turno_servicio_atender', $solicitud->id) }}">Pendiente</a>
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
          @if($todays->count()==0)
          <div class="alert alert-info" role="alert">
            No hay solicitudes para el dia de hoy.
          </div>
          @endif
        </div>
      </div>
    </div>
    @endif
    <div class="card border-info">
      <div class="card-header bg-default font-weight-bold">
            SOLICITUDES DE TURNOS
      </div>

      <div class="card-body">
        <div class="list-previous">
          <h4>Anteriores</h4>
          <ul class="list-group list-group-flush  my-3">
            @foreach($previous as $prevSolicitud)
              @if( date('d-m-Y', strtotime($prevSolicitud->created_at)) != date('d-m-Y') )
                <li class="list-group-item list-group-item-md @if(!$prevSolicitud->atendido) list-group-item-danger @endif">
                  <div class="row">
                    <div class="col-12 col-md-2 px-0">
                      {{ date('d-m-Y', strtotime($prevSolicitud->created_at))}}
                    </div>
                    <div class="col-12 col-md-3 px-0">
                      {{ $prevSolicitud->cliente }}
                    </div>
                    <div class="col-12 col-md-2 px-0">
                      {{ $prevSolicitud->telefono }}
                    </div>
                    <div class="col-12 col-md-3 px-0">
                      {{ $prevSolicitud->email }}
                    </div>
                    <div class="col-12 col-md-1 px-0">
                      {{ $prevSolicitud->from }}
                    </div>
                    <div class="col-12 col-md-1 px-0">
                      <div class="drop-menu dropleft">
                      <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('solicitud_show', $prevSolicitud->id) }}">Detalles</a>
                        @if($prevSolicitud->atendido)
                          <a class="dropdown-item" href="{{ route('turno_servicio_atender', $prevSolicitud->id) }}">Pendiente</a>
                        @else
                          <a class="dropdown-item" href="{{ route('turno_servicio_atender', $prevSolicitud->id) }}">Atendido</a>
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

        <div class="d-flex justify-content-center mt-3">
            {{ $solicitudes->links('backend.includes.pagination') }}
        </div>
      </div>
    </div>
  @endif
@stop