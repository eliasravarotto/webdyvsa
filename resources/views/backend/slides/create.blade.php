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

<div class="card border-dark">
    <div class="card-header">
        <strong class="card-title">Nuevo Slide</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('admin_slides.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			@include('backend.slides.form')
			<div class="row form-group my-3">
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
