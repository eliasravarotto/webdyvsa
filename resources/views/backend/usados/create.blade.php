@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Nuevo Modelo</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('usados.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.usados.form')
			<div class="row form-group my-3">
				<div class="col-12">
					<a href="/admin/usados" class="btn btn-secondary">
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
