@extends('backend.layout')

@section('content')
<div class="card border-info" id="app">
    <div class="card-header bg-default font-weight-bold">
        SERVICIOS
  	</div>
    <div class="card-body">
    	<form id="form" action="{{ route('admin_servicios.update', $modelo->id) }}" method="POST" autocomplete="off">
    		{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
		 	<div class="row">
			 	@foreach($modelo->servicios()->get() as $s)
				<div class="col-sm-12 col-md-3">
					<div class="input-group mb-3">
						<input type="hidden" name="servicios_ids[]" value="{{$s->id}}">
						<input name="servicios_ids[]" type="text" class="form-control" value="{{$modelo->nombre}}" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-3">
					<input name="nombres[]" type="text" value="{{$s->nombre}}" class="form-control">
				</div>
				<div class="col-sm-12 col-md-3">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">$</span>
						</div>
						<input name="precios[]" type="text" value="{{$s->precio}}" class="form-control">
					</div>
				</div>
				<div class="col-sm-12 col-md-3 d-flex justify-content-start align-items-end">
                  	<div class="input-group mb-3">
                  		<a href="{{ route('admin_servicios_eliminar', $s->id) }}" onclick="return confirm('Desea eliminar la unidad')" type="submit" class="btn btn-outline-danger delete-user"><i class="fa fa-trash"></i></a>
					</div> 
				</div> 
				@endforeach
			</div>
			<div class="row my-2">
				<div class="col-md-12">
					<div class="input-group mb-3">
						<button name="update" type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</div>
		</form>

		<div class="dropdown-divider mt-4"></div>
		<h5 class="mb-4 bg-default py-2 px-2"><b>Agregar Servicios</b></h5>
    	<form id="form" action="{{ route('admin_servicios.store') }}" method="POST" autocomplete="off">
			{{ csrf_field() }}
			@include('backend.servicios.form')
      	</form>
    </div>
</div>
@stop