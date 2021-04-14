@extends('backend.layout')

@section('stylesheet')
<style type="text/css">

</style>
@stop


@section('content')

	<div class="row mb-3">
	    <div class="col-sm-12">
	    <div class="card ">
	        <div class="card-body">
	        	<form action="{{ route('usuarios.update', $user->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
	    			<div class="card-panel">
			        	<div class="row">
			        		<div class="col-12 col-md-4">
			        			<div class="d-flex align-items-center">
			        				<div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
			        				<div class="d-block">
		          						<h5 class="card-title mb-0">USUARIO</h5>
			        					<small class="text-muted">Crear nuevo</small>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
	    			</div>

	        		@include('backend.users.form')
	        		
				</form>
	        </div>
	    </div>
	    </div>
	</div> 

@stop

@section('page-script')
<script type="text/javascript">
	/***ROLES SELECT2***/
	$('.from-select').select2({
      placeholder: "Recibido desde",
      width: '100%'
    });
</script>
@stop