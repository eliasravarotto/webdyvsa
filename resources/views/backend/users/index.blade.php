@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
.avatar {
	font-size: 1rem;
	display: inline-flex;
	width: 48px;
	height: 48px;
	color: #fff;
	border-radius: .375rem;
	background-color: #adb5bd;
	align-items: center;
	justify-content: center;
}
.avatar.rounded-circle img, .rounded-circle {
    border-radius: 50%!important;
}
.avatar img {
    width: 100%;
    border-radius: .375rem;
}
</style>
@stop


@section('content')

	<div class="row mb-3">
	    <div class="col-sm-12">
	    	<div class="card">
		        <div class="card-body">
        			<div class="card-panel">
			        	<div class="row">
			        		<div class="col-12 col-md-4">
			        			<div class="d-flex align-items-center">
			        				<div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
			        				<div class="d-block">
		          						<h5 class="card-title mb-0">USUARIOS</h5>
			        					<small class="text-muted">{{ $users->count() }} usuarios en total.</small>
			        				</div>
			        			</div>
			        		</div>
			        		<div class="col-12 col-md-8 text-right">
			        			<a href="{{ route('usuarios.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
			        		</div>
			        	</div>
        			</div>
      	        	<div class="row">
		        		<div class="col-12">
		        			<ul class="list-group list-group-flush">
		        				@forelse($users as $user)
							  		<li class="list-group-item">
							  			<div class="row">
							  				<div class="col-1 pr-0">#{{ $user->id }}</div>
							  				<div class="col-10">
							  					<div class="row">
							  						<div class="col-1">
							  							<a href="javascript:;" class="avatar rounded-circle">
														    <img alt="Image placeholder" src="{{ $user->avatar }}">
														</a>
							  						</div>
							  						<div class="col-11">
							  							<div class="row">
							  								<div class="col-3">{{ $user->name }}</div>
									  						<div class="col-5">{{ $user->email }}</div>
									  						<div class="col-3">{{ date('d-m-Y', strtotime($user->created_at)) }} / {{ date('d-m-Y', strtotime($user->updated_at)) }}</div>
							  							</div>
									  					<div class="row">
									  						<div class="col">
									  							@forelse($user->roles as $role)
									  								<span class="badge badge-default">{{ $role->role }}</span>
									  							@empty
									  								<span class="badge badge-info">Sin roles asignados</span>
									  							@endforelse
									  						</div>
									  					</div>
							  						</div>
							  					</div>
							  				</div>
							  				<div class="col-1"> <a href="{{ route('usuarios.edit', $user->id) }}"> <i class="fas fa-pencil"></i> </a> </div>
							  			</div>
							  		</li>
							  	@empty
							  		<div class="alert alert-info" role="alert">
									  No se encontraron usuarios.
									</div>
							  	@endforelse
							</ul>
		        		</div>
		        	</div>
		          	<p class="card-text"><small class="text-muted">{{ $users->count() }} usuarios en total.</small></p>
		        </div>
	      	</div>
	    </div>
	</div> 

@stop

@section('page-script')
<script type="text/javascript">

</script>
@stop