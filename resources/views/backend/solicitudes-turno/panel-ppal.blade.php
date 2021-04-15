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
    .cards-stats .card{
      border: solid 1px #cad1d8;
    }
  </style>
@stop
@section('content')

  @include('backend.solicitudes-turno.filter-form')

  <div class="card border-info">
    <div class="card-body">
      <div class="card-panel">
          <div class="row">
              <div class="col-12 col-md-12">
                  <div class="d-flex align-items-center">
                      <div class="icon-header bg-warning"><i class="fa fa-ticket-alt"></i></div>
                      <div class="d-block">
                          <h5 class="card-title mb-0">SOLICITUDES DE TURNOS</h5>
                          <small class="text-muted">{{ $solicitudes->count() }} solicitudes ingresadas hoy.</small>
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

      <div class="cards-stats mt-6">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="card _card-stats">
               <!-- Card body -->
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Total solicitudes</h5>
                        <span class="h2 font-weight-bold mb-0">{{ $total }}</span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                           <i class="fa fa-ticket-alt"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                     <span class="text-success mr-2"><i class="fa fa-ticket-alt"></i> 100%</span>
                     <span class="text-nowrap"></span>
                  </p>
               </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="card bg-danger">
               <!-- Card body -->
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Pendientes</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{ $pendientes }}</span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                           <i class="fas fa-clock"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                     <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> {{ round($pendientes*100/$total, 2) }}%</span>
                     <span class="text-nowrap text-light">Sobre el total</span>
                  </p>
               </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="card bg-warning">
               <!-- Card body -->
               <div class="card-body">
                  <div class="row">
                     <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0 text-white">Atendidas</h5>
                        <span class="h2 font-weight-bold mb-0 text-white">{{ $atendidas }}</span>
                     </div>
                     <div class="col-auto">
                        <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                           <i class="fas fa-check-circle"></i>
                        </div>
                     </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                     <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> {{ round($atendidas*100/$total, 2) }}%</span>
                     <span class="text-nowrap text-light">Sobre el total</span>
                  </p>
               </div>
            </div>
          </div>
          </div>
      </div>

    </div>
  </div>



@stop