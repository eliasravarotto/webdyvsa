@extends('backend.layout')

@section('content')

<div class="card border-info">
    <div class="card-body">
    	<form action="{{ route('admin_accesorios.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}

			@include('backend.accesorios.form')

			<div class="row mt-5">
				<div class="col-12 text-right">
					<a href="{{ URL::previous() }}" class="btn btn-secondary">
					  Cancelar
					</a>
					<button type="submit" class="btn btn-success">
					  Guardar
					</button>
				</div>
			</div>
      	</form>
    </div>
</div>
@stop

@section('page-script')
	@include('backend.accesorios.script')
@stop

