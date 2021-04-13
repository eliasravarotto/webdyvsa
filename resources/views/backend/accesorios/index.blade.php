@extends('backend.layout')

@section('content')
<div class="card border-info">
  <div class="card-body">
  	<div class="card-panel mb-4">
    	<div class="row">
    		<div class="col-12 col-md-4">
    			<div class="d-flex align-items-center">
    				<div class="icon-header bg-warning"><i class="fas fa-dolly"></i></div>
    				<div class="d-block">
  						<h5 class="card-title mb-0">ACCESORIOS</h5>
    					<small class="text-muted">{{ $totalAccesorios }} usuarios en total.</small>
    				</div>
    			</div>
    		</div>
    		<div class="col-12 col-md-8 text-right">
    			<a href="{{ route('admin_accesorios.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
    		</div>
    	</div>
	</div>

	<form class="mb-2" autocomplete="off" method="GET">
		<div class="form-row">
		    <div class="col-12 col-md-9">
		      <div class="form-group has-search d-flex align-items-center">
		          <i class="fa fa-search form-control-feedback"></i>
		          <input type="text" name="texto_a_buscar" value="" class="form-control w-100" placeholder="Buscar por nombre o modelo" id="search">
		        </div>
		    </div>
		    <div class="col-12 col-md-3">
		        <div class="form-group">
		            <button type="submit" class="btn btn-default mr-1"><i class="fas fa-search"></i> Buscar</button>
		            <a href="/admin_accesorios" class="btn btn-secondary"><i class="fa fa-trash"></i>  Limpiar</a>
		        </div>
        	</div>
	    </div>
  	</form>

    <table class="table table-sm table-hover">
	    <thead class="thead-light"> 
		    <tr>
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
	            <a href="{{ route('admin_accesorios.edit', $accesorio->id) }}" class="btn btn-sm btn-link"><i class="fas fa-pencil-alt"></i></a>
		            {!! method_field('delete') !!}
		            {!! csrf_field() !!}
		            <button type="submit" onclick="return confirm('Desea eliminar el accesorio seleccionado?')" class="btn btn-sm btn-link text-danger"><i class="fa fa-trash"></i></button>
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