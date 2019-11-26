@extends('backend.layout')

@section('content')
<style type="text/css">
	.div-add-img:hover i {
		color: #17a2b8 !important;
	}
	.div-add-img:hover {
		cursor: pointer;
		color: black;
    	border: 2px dashed #17a2b8;
	}
	.div-add-img {
	    background-image: url(/rsrc.php/v3/yX/r/G68ofLqPucT.png);
	    background-position: 50%;
	    background-repeat: no-repeat;
	    background-size: 20px;
    
    	border: 2px dashed #dddfe2;
	    border-radius: 2px;
	    box-sizing: border-box;
	    display: inline-block;
	    height: 100px;
	    margin-right: 5px;
	    min-width: 100px;
	    position: relative;
	    width: auto;
	}
	.div-add-img ._3jk i {
		color: #dddfe2;
	}

	.div-add-img ._3jk {
	    height: 100%;
	    overflow: hidden;
	    position: absolute;
	    right: 0;
	    top: 0;
	    width: 100%;
	}
	._5f0v {
	    bottom: 0;
	    cursor: inherit;
	    font-size: 1000px !important;
	    height: 300px;
	    margin: 0;
	    opacity: 0;
	    padding: 0;
	    position: absolute;
	    right: 0;
	    outline: none;
	}

	.div-add-img img{
	    position: absolute;
    	height: 100px;
    	width: 100px;
	}

</style>
<div class="card">
    <div class="card-header">
        <strong class="card-title">Editar Accesorio</strong>
    </div>
    <div class="card-body">
    	<form action="{{ route('admin_accesorios.update', $accesorio->id) }}" method="POST" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data" files="true">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
			@include('backend.accesorios.form')
			<div class="row mt-4">
				<div class="col-12">
					<a href="{{ URL::previous() }}" class="btn btn-secondary">
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

@section('page-script')
	@include('backend.accesorios.script')
@stop

