@extends('backend.sufee_admin.index')

@section('content')
<style type="text/css">
	.col-buttons-inline{
		display: flex;
		justify-content: 
		flex-start; 
		align-self: flex-end;
	}
	.col-buttons-inline > button{
		height: 59%;
		margin-right: 10px;
	}
</style>
<div class="card" id="app">
    <div class="card-header">
        <strong class="card-title">Nuevo Modelo</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('modelos.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.modelos.form')
			<div class="row form-group">
				<div class="col-9">
					<a class="btn btn-dark">
					  <i class="fa fa-lock fa-lg"></i>&nbsp;
					  <span id="payment-button-amount">Cancelar</span>
					</a>
					<button type="submit" class="btn btn-info">
					  <i class="fa fa-lock fa-lg"></i>&nbsp;
					  <span id="payment-button-amount">Guardar</span>
					</button>
				</div>
			</div>
      	</form>
    </div>
</div>
@stop
