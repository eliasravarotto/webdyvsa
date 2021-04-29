@extends('backend.layout')

@section('content')

<div class="card">
  <div class="card-body">
          <div class="card-panel">
          <div class="row">
              <div class="col-12 col-md-12">
                  <div class="d-flex align-items-center">
                      <div class="icon-header bg-warning"><i class="stm-icon-steering_wheel"></i></div>
                      <div class="d-block">
                          <h5 class="card-title mb-0">SOLICITUDES TEST DRIVE</h5>
                          <small class="text-muted">{{ $solicitudes->total() }} solicitudes encontradas.</small>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    
        <table class="table table-sm table-hover">
            <thead class="thead-light">
              <tr>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Modelo</th>
                <th>Sucursal</th>
                <th>Fecha Estimada</th>
                <th>Created_at</th>
              </tr>
            </thead>
            <tbody>
              @foreach($solicitudes as $solicitud)
              <tr>
                <td>{{$solicitud->cliente}}</td>
                <td>{{$solicitud->telefono}}</td>
                <td>{{$solicitud->modelo}}</td>
                <td>{{$solicitud->sucursal}}</td>
                <td>{{$solicitud->fecha_estimada}}</td>
                <td>{{ date('d-m-Y H:m', strtotime($solicitud->created_at))}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>

          <div class="d-flex justify-content-center mt-5">
              {{ $solicitudes->links('backend.includes.pagination') }}
          </div>
    </div>
</div>

@stop