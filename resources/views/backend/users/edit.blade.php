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
	    			<div class="card-panel mb-5">
			        	<div class="row">
			        		<div class="col-12 col-md-8">
			        			<div class="d-flex align-items-center">
			        				<div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
			        				<div class="d-block">
		          						<h5 class="card-title mb-0">EDITAR USUARIO</h5>
			        					<small class="text-muted">#{{ $user->id }} {{ $user->name }}</small>
			        				</div>
			        			</div>
			        		</div>
			        		<div class="col-12 col-md-4 text-right">
			        			<a href="#" 
			                       class="btn btn-link" 
			                       onclick="event.preventDefault();
			                       			var result = confirm('¿Realmente desea eliminar el usuario?');
	                                      	result ? document.getElementById('delete-form').submit() : null;">
			                    	<i class="fas fa-times"></i> Eliminar
			                    </a>
			        		</div>
			        	</div>
	    			</div>
	        		<input name="_method" type="hidden" value="PUT">

	        		@include('backend.users.form')
	        		
				</form>
                <form id="delete-form" class="d-none" action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
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