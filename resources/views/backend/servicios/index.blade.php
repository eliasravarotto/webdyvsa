@extends('backend.layout')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">SERVICIOS</h4>
    <h6 class="card-subtitle mb-2 text-muted">Lista de precios</h6>
    <table class="table table-sm table-hover">
    <thead>
    <tr>
      <th>Tipo de Servicio</th>
      <th>Etios</th>
      <th>Corolla</th>
      <th>Hilux</th>
      <th>Hilux/SW4 4x4</th>
      <th>Actualizado</th>
      <th><a class="btn btn-primary text-center" href="{{ route('servicios.create') }}">Nuevo</a></th>
    </tr>
    </thead>
    <tbody>
    @foreach($servicios as $servicio)
    <tr>
      <td>{{$servicio->nombre}}</td>
      <td>{{$servicio->etios}}</td>
      <td>{{$servicio->corolla}}</td>
      <td>{{$servicio->hilux}}</td>
      <td>{{$servicio->hilux_sw4_4x4}}</td>
      <td>{{ date('d-m-Y', strtotime($servicio->updated_at))}}</td>
      <td>
        {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
        <form action="{{ url('admin/servicios', ['id' => $servicio->id]) }}" method="post">
            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
            {!! method_field('delete') !!}
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
        </form>
      </td>
      @endforeach
    </tr>
    </tbody>
    </table>
  </div>
</div>

       

@stop