@extends('backend.layout')

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
<div class="container">
	<div class="row">
		<div class="col-12 col-md-8">
			<div class="card" id="app">
			    <div class="card-body">
			    	<div class="card-panel mb-4">
				        <div class="row">
				          <div class="col-12 col-md-4">
				            <div class="d-flex align-items-center">
				              <div class="icon-header bg-warning"><i class="fa fa-car"></i></div>
				              <div class="d-block">
				                <h5 class="card-title mb-0">MODELO</h5>
				                <small class="text-muted">Crear nuevo</small>
				              </div>
				            </div>
				          </div>
				        </div>
			      	</div>
			    	<form action="{{ route('modelos.store') }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
						{{ csrf_field() }}
						
						@include('backend.modelos.form')
						
						<div class="row mt-5">
							<div class="col-12 text-right">
								<a class="btn btn-dark" href="/admin/modelos">Cancelar</a>
								<button type="submit" class="btn btn-success">
								  Guardar
								</button>
							</div>
						</div>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
@stop
