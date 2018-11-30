@extends('backend.sufee_admin.index')

@section('content')
<div class="card" id="app">
    <div class="card-header">
        <strong class="card-title">Nuevo Tipo de Servicios</strong>
    </div>
    <div class="card-body">
    	<form id="form" action="{{ route('servicios.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.servicios.form')
			<div class="row">
				<div class="col-md-12">
					<a href="/admin/servicios/" class="btn btn-secondary pull-left">Cancelar</a>
					<button type="submit" name="add_another" value="Guardar y Continuar" class="btn btn-primary pull-right">Guardar y Continuar</button>
					<button type="submit" class="btn btn-primary pull-right" style="margin-right: 5px;">Guardar</button>
				</div>
			</div>
      	</form>
    </div>
</div>
@stop