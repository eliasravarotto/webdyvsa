@extends('backend.layout')

@section('content')
<div class="card">
    <div class="card-body">

		<div class="card-panel mb-5">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="d-flex align-items-center">
						<div class="icon-header bg-warning"><i class="fas fa-users"></i></div>
						<div class="d-block">
								<h5 class="card-title mb-0">POST</h5>
							<small class="text-muted">{{ $post->id }} - {{ $post->titulo }}</small>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 d-flex justify-content-end">
					<a href="{{ route('posts.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
			    	<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
		            	{{ csrf_field() }}
		            	{{ method_field('DELETE') }}
		          		<button onclick="return confirm('Desea eliminar el post')" type="submit" class="btn"><i class="far fa-trash-alt"></i> Eliminar</button>
		        	</form>
				</div>
			</div>
		</div>

		<form action="{{ route('posts.update', $post->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
            @include('backend.posts.form')
            <div class="row form-group" style="margin-top: 50px;">
				<div class="col-9">
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
