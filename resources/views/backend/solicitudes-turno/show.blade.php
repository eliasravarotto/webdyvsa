@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Solicitud de Turno</strong> 
        <span class="float-right">Creado: {{ date('d-m-Y H:m', strtotime($solicitud->created_at))}}</span>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
        <tbody>
          <tr>
            <th>Apellido y Nombre</th>
            <td>{{ $solicitud->cliente }}</td>
          </tr>
          <tr>
            <th>Teléfono</th>
            <td>{{ $solicitud->telefono }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $solicitud->email }}</td>
          </tr>
          <tr>
            <th>Fecha</th>
            <td>{{ date('d-m-Y', strtotime($solicitud->fecha)) }}</td>
          </tr>
          <tr>
            <th>Sucursal</th>
            <td>{{ $solicitud->sucursal->nombre }}</td>
          </tr>
          <tr>
            <th>Unidad</th>
            <td><b>Modelo:</b> {{ $solicitud->modelo }}  <b>Dominio:</b> {{ $solicitud->dominio }}</td>
          </tr>
          <tr>
            <th>Tipo de Servicio</th>
            <td> {{ $solicitud->servicio->nombre }}</td>
          </tr>
          <tr>
            <th>Comentario</th>
            <td>{{ $solicitud->comentario }}</td>
          </tr>
        </tbody>
  </table>
    	
	    <div class="row">
	    	<div class="col">
	    		<a href="{{route('solicitudes_index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Atras</a>
	    	</div>
	    </div>
    	
    </div>
</div>

@stop