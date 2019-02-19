@extends('backend.layout')

@section('content')
<div class="card" id="app_index">
    <div class="card-header">
        <strong class="card-title">Listado de Unidades Usadas</strong>
    </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12" style="display: flex;justify-content: flex-end; margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('usados.create') }}">Nuevo</a>
          </div>
        </div>
        <table class="table table-sm table-hover">
            <thead>
              <tr>
                <th>Int.</th>
                <th>Dominio</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Año</th>
                <th>Km</th>
                <th>Precio</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($usados as $usado)
                <tr>
                    <td>{{ $usado->interno }}</td>
                    <td>{{ $usado->dominio }}</td>
                    <td>{{ $usado->modelo }}</td>
                    <td>{{ $usado->marca }}</td>
                    <td>{{ $usado->anio }}</td>
                    <td>{{ $usado->km }}</td>
                    <td>$ {{ $usado->precio }}</td>
                    <td>
                        <form method="POST" action="{{ route('usados.destroy', $usado->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                              <a href="{{ route('usados.edit', $usado->id) }}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              <button onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
		</table>
	</div>
</div>
@stop

@section('script')
@stop