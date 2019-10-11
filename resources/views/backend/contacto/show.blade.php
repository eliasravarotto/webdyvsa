@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Mensaje</strong> 
        <span class="float-right">Creado: {{ date('d-m-Y H:m', strtotime($mensaje->created_at))}}</span>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
        <tbody>
          <tr>
            <th style="width: 20%;">Apellido y Nombre</th>
            <td>{{ $mensaje->cliente }}</td>
          </tr>
          <tr>
            <th>Teléfono</th>
            <td>{{ $mensaje->telefono }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $mensaje->email }}</td>
          </tr>        
          <tr>
            <th>Comentario</th>
            <td>{{ $mensaje->mensaje }}</td>
          </tr>
          <tr>
            <th>Creado</th>
            <td>{{ date('d-m-Y H:m', strtotime($mensaje->created_at))}}</td>
          </tr>
        </tbody>
  </table>
    	
	    <div class="row">
	    	<div class="col">
	    		<a href="{{URL::previous()}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Atras</a>
	    	</div>
	    </div>
    	
    </div>
</div>
@stop