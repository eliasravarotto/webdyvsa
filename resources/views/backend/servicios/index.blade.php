@extends('backend.sufee_admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <strong class="card-title" v-if="headerText">Listado de Servicios</strong>
    </div>

    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('servicios.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Tipo de Servicio</th>
                <th>Etios</th>
                <th>Corolla</th>
                <th>Hilux</th>
                <th>Hilux/SW4 4x4</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($servicios as $servicio)
              <tr>
                <td>{{$servicio->id}}</td>
                <td>{{$servicio->nombre}}</td>
                <td>{{$servicio->etios}}</td>
                <td>{{$servicio->corolla}}</td>
                <td>{{$servicio->hilux}}</td>
                <td>{{$servicio->hilux_sw4_4x4}}</td>
                <td>
                  {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                  <form action="{{ url('admin/servicios', ['id' => $servicio->id]) }}" method="post">
                      <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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