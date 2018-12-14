@extends('backend.sufee_admin.index')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-12">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Listado de Mensajes</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Listado de Mensajes</strong>
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Enviado a</th>
                <th>Created_at</th>
              </tr>
            </thead>
            <tbody>
              @foreach($mensajes as $mensaje)
              <tr>
                <td>{{$mensaje->cliente}}</td>
                <td>{{$mensaje->telefono}}</td>
                <td>{{$mensaje->email}}</td>
                <td>{{$mensaje->mensaje}}</td>
                <td>{{$mensaje->enviar_a}}</td>
                <td>{{$mensaje->created_at}}</td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

@stop