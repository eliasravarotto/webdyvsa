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


  @include('backend.solicitudes-turno.filter-form')

  <div class="card">
    <div class="card-body">
      <div class="card-panel">
          <div class="row">
              <div class="col-12 col-md-12">
                  <div class="d-flex align-items-center">
                      <div class="icon-header bg-warning"><i class="fa fa-ticket-alt"></i></div>
                      <div class="d-block">
                          <h5 class="card-title mb-0">SOLICITUDES DE TURNOS</h5>
                          <small class="text-muted">{{ $solicitudes->total() }} solicitudes encontradas.</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>

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
                          <button type="button" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('solicitud_show', $s->id) }}">Detalles</a>
                            @if($s->atendido)
                              <a class="dropdown-item" href="{{ route('turno_servicio_atender', $s->id) }}">Pendiente</a>
                            @else
                              <a class="dropdown-item" href="{{ route('turno_servicio_atender', $s->id) }}">Atendido</a>
                            @endif
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

      <div class="d-flex justify-content-center mt-3">
          {{ $solicitudes->links('backend.includes.pagination') }}
      </div>
    </div>
  </div>

@stop