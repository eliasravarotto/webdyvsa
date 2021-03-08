@extends('backend.layout')

@section('content')
<div class="card border-info">
    <div class="card-header bg-default font-weight-bold">
        MODELOS
    </div>
    <div class="card-body">
        <div class="row mb-3">
          <div class="col-12 text-right">
            <a class="btn btn-default" href="{{ route('modelos.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
        <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th>#ID</th>
                <th>Detalles</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($modelos as $modelo)
              <tr>
                <td><a class="btn-link" href="/admin/modelos/{{ $modelo->id }}/edit">#{{$modelo->id}}</a></td>
                <td>
                  <div class="d-flex">
                    <div>
                      @if($modelo->img_modelo)
                        <img src="{{$modelo->img_modelo}}" width="150">
                      @else
                        <img src="/imagenes/default.png" width="150">
                      @endif
                    </div>
                    <div>
                      <p class="text-muted mb-0"> <small style="font-size: 13px">{{ $modelo->marca->nombre }}</small></p>
                      <p class="mb-2 font-weight-bold text-uppercase">{{ $modelo->nombre }}</p>
                      <ul class="list-inline">
                        <li class="list-inline-item">
                           @if( $modelo->activo ) 
                            <span class="badge badge-success"><i class="fa fa-check"></i> Activo</span>
                            @else
                            <span class="badge badge-danger"><i class="fas fa-minus-circle"></i> NO activo</span>
                            @endif
                        </li>
                        <li class="list-inline-item">
                          @if( $modelo->es_hibrido ) 
                            <img src="{{asset('imagenes/logos/logohibrido.jpg')}}" style="height: 25px">
                          @endif
                        </li>
                      </ul>
                    </div>
                  </div>
                </td>
                <td>
                  {{-- <a href="{{ route('modelos.show', $modelo->id) }}" class="btn btn-outline-info"><i class="fa fa-eye" aria-hidden="true"></i></a> --}}
                  <form action="{{ url('admin/modelos', ['id' => $modelo->id]) }}" method="post">
                      <a href="{{ route('modelos.edit', $modelo->id) }}" class="btn btn-sm btn-outline-info"><i class="far fa-edit"></i></a>
                      {!! method_field('delete') !!}
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
    </div>
</div>

       

@stop