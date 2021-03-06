@extends('backend.layout')

@section('content')

<div class="card">
    <div class="card-body">
    	<form action="{{ route('posts.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
	    	<div class="card-panel mb-5">
				<div class="row">
					<div class="col-12 col-md-8">
						<div class="d-flex align-items-center">
							<div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
							<div class="d-block">
									<h5 class="card-title mb-0">POST</h5>
								<small class="text-muted">Crear entrada</small>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-4 d-flex justify-content-end">
						<button type="submit" class="btn btn-success">
						  Guardar
						</button>
					</div>
				</div>
			</div>

			@include('backend.posts.form')

			<div class="row form-group my-3">
				<div class="col-12 text-right">
					<a href="/admin/posts" class="btn btn-secondary">
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
