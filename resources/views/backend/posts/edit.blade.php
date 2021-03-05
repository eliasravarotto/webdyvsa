@extends('backend.layout')

@section('content')
{{-- ESTILOS INPUT FOTO --}}
		<style>
		#div_file{
			cursor: pointer;
			padding:5px;
			display: flex;
		    flex-direction: column;
		    justify-content: center;
		    align-items: center;
		}
		#div_file p{
			text-align: center;
			cursor: pointer;
		}
		#div_file input{
			border:1px solid black;
			cursor: pointer;
			position:absolute;
			top:0px;
			left:0px;
			right:0px;
			bottom:0px;
			width:100%;
			height:100%;
			opacity: 0;
		}
	</style>

<div class="card">
    <div class="card-header d-flex justify-content-between">
        <strong>Post</strong>
        <span>{{$post->created_at}}</span>
    </div>
    <div class="card-body">
		<div class="row mb-3">
			<div class="col-12 text-right">
		    	<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
		            {{ csrf_field() }}
		            {{ method_field('DELETE') }}
		          	<button onclick="return confirm('Desea eliminar el post')" type="submit" class="btn"><i class="far fa-trash-alt"></i> Eliminar</button>
		        </form>
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
