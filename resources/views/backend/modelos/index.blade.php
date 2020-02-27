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
                <th>Marca</th>
                <th>Modelo</th>
                <th>Hibrido</th>
                <th>Orden</th>
                <th>Activo</th>
                <th><a class="btn btn-primary" href="{{ route('modelos.create') }}">Nuevo</a></th>
              </tr>
            </thead>
            <tbody>
              @foreach($modelos as $modelo)
              <tr>
                <td>{{$modelo->id}}</td>
                <td>{{$modelo->marca->nombre}}</td>
                <td>{{$modelo->nombre}}</td>
                <td>
                  @if( $modelo->es_hibrido ) 
                    <img src="{{asset('imagenes/logos/logohibrido.jpg')}}" style="height: 30px">
                  @else
                    -
                  @endif
                </td>
                <td>{{$modelo->orden}}</td>
                <td>
                  @if( $modelo->activo ) 
                    <i class="fa fa-check text-success"></i>
                  @else
                    <i class="fa fa-close text-danger"></i>
                  @endif
                </td>
                <td>
                  {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                  <form action="{{ url('admin/modelos', ['id' => $modelo->id]) }}" method="post">
                      <a href="{{ route('modelos.edit', $modelo->id) }}" class="btn btn-outline-info"><i class="far fa-edit"></i></a>
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