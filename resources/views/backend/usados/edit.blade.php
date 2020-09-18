@extends('backend.layout')

@section('content')
{{-- ESTILOS INPUT FOTO CAMPAÑA --}}
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
<div class="card border-info">
    <div class="card-header bg-default font-weight-bold">
        USADOS
    </div>
    <div class="card-body">
    	<form action="{{ route('usados.update', $usado->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
    		<input name="_method" type="hidden" value="PUT">
            @include('backend.usados.form')
            <div class="row form-group" style="margin-top: 50px;">
				<div class="col-9">
					<a href="/admin/usados" class="btn btn-secondary">
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