@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">MODELOS</h4>
      <h6 class="card-subtitle mb-2 text-muted">Listado de modelos</h6>
        <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Activo</th>
                <th><a class="btn btn-primary" href="{{ route('modelos.create') }}">Nuevo</a></th>
              </tr>
            </thead>
            <tbody>
              @foreach($modelos as $modelo)
              <tr>
                <td>{{$modelo->id}}</td>
                <td>{{$modelo->nombre}}</td>
                <td>{{$modelo->marca_id}}</td>
                <td>{{$modelo->activo}}</td>
                <td>
                  {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                  <form action="{{ url('admin/modelos', ['id' => $modelo->id]) }}" method="post">
                      <a href="{{ route('modelos.edit', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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