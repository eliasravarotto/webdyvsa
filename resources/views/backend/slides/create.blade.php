@extends('backend.layout')

@section('content')

<div class="card border-info">
    <div class="card-body">
    	<form action="{{ route('admin_slides.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
    		{{ csrf_field() }}

	    	<div class="card-panel">
	            <div class="row">
	                <div class="col-12 col-md-4">
	                    <div class="d-flex align-items-center">
	                        <div class="icon-header bg-warning"><i class="fas fa-image"></i></div>
	                        <div class="d-block">
	                            <h5 class="card-title mb-0">SLIDERS</h5>
	                            <small class="text-muted">Crear nuevo slider</small>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-12 col-md-8 text-right">
	                    <button type="submit" class="btn btn-success">
						  Guardar
						</button>
	                </div>
	            </div>
	        </div>

		
			@include('backend.slides.form')

			<div class="row form-group mt-5">
				<div class="col-12">
					<a href="{{ route('admin_slides.index')}}" class="btn btn-secondary">
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
