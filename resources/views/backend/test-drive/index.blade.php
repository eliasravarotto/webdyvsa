@extends('backend.sufee_admin.index')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/admin">Dashboard</a></li>
                    <li class="active">Solicitud Test Drive</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Listado de Solicitudes</strong>
    </div>

    <div class="card-body">
        <table class="table">
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
                <td>{{$solicitud->created_at}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

@stop