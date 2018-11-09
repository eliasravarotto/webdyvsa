@extends('backend.sufee_admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Listado de Solicitudes</strong>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Sucursal</th>
                <th>Servicio</th>
              </tr>
            </thead>
            <tbody>
              @foreach($solicitudes as $solicitud)
              <tr>
                <td>{{$solicitud->id}}</td>
                <td>{{$solicitud->fecha}}</td>
                <td>{{$solicitud->cliente}}</td>
                <td>{{$solicitud->sucursal}}</td>
                <td>{{$solicitud->tipo_de_servicio}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

@stop