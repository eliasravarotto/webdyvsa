@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Solicitud de Turno</strong> 
    </div>
    <div class="card-body">
      <form class="form-inline justify-content-end" action="{{ route('turno_servicio_update', $solicitud->id) }}" method="POST">
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group mb-2 mr-2">
          <select class="form-control" name="atendido">
            <option value="1" @if($solicitud->atendido) selected @endif>Atendido</option>
            <option value="0" @if(!$solicitud->atendido) selected @endif>Pendiente</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Guardar</button>
      </form>
      <form>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="cliente">Fecha</label>
            <input type="text" class="form-control form-control" id="cliente" value="{{ date('d-m-Y H:m', strtotime($solicitud->created_at))}}" readonly>
          </div>
          <div class="form-group col-md-1">
            <label for="email">Desde</label>
            <input type="email" class="form-control" id="email" value="{{ $solicitud->from }}" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="cliente">Cliente</label>
            <input type="text" class="form-control" id="cliente" value="{{ $solicitud->cliente }}" readonly>
          </div>
          <div class="form-group col-md-5">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="{{ $solicitud->email }}" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" value="{{ $solicitud->telefono}}" readonly>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="sucursal">Sucursal</label>
            <input type="text" class="form-control" id="sucursal" value="{{ $solicitud->sucursal }}" readonly>
          </div>
          <div class="form-group col-md-2">
            <label for="fecha_turno">Fecha Turno</label>
            <input type="text" class="form-control" id="fecha_turno" value="{{ date('d-m-Y', strtotime($solicitud->fecha)) }}" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="modelo">Modelo</label>
            <input type="text" class="form-control" id="modelo" value="{{ $solicitud->modelo }}" readonly>
          </div>
          <div class="form-group col-md-2">
            <label for="dominio">Dominio</label>
            <input type="text" class="form-control" id="dominio" value="{{ $solicitud->dominio }}" readonly>
          </div>
          <div class="form-group col-md-3">
            <label for="servicio">Servicio</label>
            <input type="text" class="form-control" id="servicio" value="{{ $solicitud->servicio }}" readonly>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="servicio">Comentario</label>
            <textarea class="form-control" rows="2" readonly>{{ $solicitud->comentario }}</textarea>
          </div>
        </div>
      </form>
   	
    </div>
</div>

<div class="row mt-4">
	<div class="col">
		<a href="{{route('solicitudes_index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Atras</a>
	</div>
</div>

@stop