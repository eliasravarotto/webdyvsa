@extends('backend.layout')

@section('content')
<div class="card border-info">
	<div class="card-header bg-default font-weight-bold">
        ACCESORIOS
  	</div>
  <div class="card-body">

  	<div class="row mb-3">
  		<div class="col-12 text-right">
	      <a class="btn btn-default text-center" href="{{ route('admin_accesorios.create') }}"><i class="fas fa-plus"></i> Nuevo</a>
  		</div>
  	</div>

    <form action="/admin_accesorios" method="get">
        <div class="row">
        	<div class="col-md-10 pr-0 col-sm-12 col-xs-12">
		        <div class="form-group has-search mb-3">
		          <i class="fa fa-search form-control-feedback"></i>
		          <input type="text" name="texto_a_buscar" value="" class="form-control w-100" placeholder="Buscar por nombre o modelo" id="search">
		        </div>
        	</div>
        	<div class="col-md-2 pl-0 col-sm-12 col-xs-12">
		        <div class="form-group has-search mb-3 d-flex justify-content-end">
		            <button type="submit" class="btn btn-default mr-1">Buscar</button>
		            <a href="/admin_accesorios" class="btn btn-default"><i class="fa fa-trash"></i>  Limpiar</a>
		        </div>
        	</div>
        </div>
    </form>
    <table class="table table-sm table-hover">
	    <thead>
		    <tr class="bg-danger text-light">
		      <th></th>
		      <th>Nombre</th>
		      <th>Precio</th>
		      <th>Modelo</th>
		      <th>Actualizado</th>
		      <th>Activo</th>
		      <th></th>
		    </tr>
	    </thead>
	    <tbody>
	    @foreach($accesorios as $accesorio)
		    <tr>
		      <td><img src="{{$accesorio->fotos()->first()['public_path']}}" style="width: 30px; height: 30px"></td>
		      <td>{{$accesorio->nombre}}</td>
		      <td><b>$ {{  number_format($accesorio->precio, 2, ',', '.')}}</b></td>
		      <td>{{$accesorio->modelo->nombre}}</td>
		      <td title="{{$accesorio->updated_at}}">{{$accesorio->updated_at->diffForHumans()}}</td>
		      <td>
		      @if ($accesorio->activo)
		      <i class="fas fa-check text-success"></i> Si
		      @else
		      <i class="fas fa-times text-danger"></i> No
		      @endif
  			  </td>
		      <td class="text-right">
		        <form action="{{ url('admin_accesorios', ['id' => $accesorio->id]) }}" method="post">
	            <a href="{{ route('admin_accesorios.edit', $accesorio->id) }}" class="btn btn-sm btn-light"><i class="fas fa-pencil-alt"></i></a>
		            {!! method_field('delete') !!}
		            {!! csrf_field() !!}
		            <button type="submit" onclick="return confirm('Desea eliminar el accesorio seleccionado?')" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
		        </form>
		      </td>
		      @endforeach
		    </tr>
	    </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
	    {{ $accesorios->links('backend.includes.pagination') }}
	</div>
  </div>
</div>

@stop