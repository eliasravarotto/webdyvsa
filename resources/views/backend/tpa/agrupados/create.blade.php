@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-header">
        <strong class="card-title">Nuevo Agrupado</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('tpa_agrupados.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.tpa.adjudicados.form')
			<div class="row form-group my-3">
				<div class="col-12">
					<a href="{{ route('tpa_agrupados.index') }}" class="btn btn-secondary">
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
