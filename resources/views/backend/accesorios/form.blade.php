@section('stylesheet')
<style type="text/css">
	/**FORM INPUT TYPE FILE (formato boton cuadrado +´preview foto)**/
	.div-add-img:hover i {
		color: #17a2b8 !important;
	}
	.div-add-img:hover {
		cursor: pointer;
		color: black;
    	border: 2px dashed #17a2b8;
	}
	.div-add-img {
	    background-position: 50%;
	    background-repeat: no-repeat;
	    background-size: 20px;
    	border: 2px dashed #dddfe2;
	    border-radius: 2px;
	    box-sizing: border-box;
	    display: inline-block;
	    height: 120px;
	    width: 120px;
	    margin-right: 5px;
	    position: relative;
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
	    height: 100%;
	    width: 100%;
	    -o-object-fit: cover;
	    object-fit: cover;
	    padding: 5px;
	    border-radius: 10px;
	}

	/*SELECT2 class is-invalid*/
	.is-invalid .select2-selection,
	.needs-validation ~ span > .select2-dropdown{
	  border-color:#dc3545 !important;
	}

</style>
@stop

<div class="card-panel mb-4">
	<div class="row">
		<div class="col-12 col-md-4">
			<div class="d-flex align-items-center">
				<div class="icon-header bg-warning"><i class="fas fa-dolly"></i></div>
				<div class="d-block">
						<h5 class="card-title mb-0">EDITAR ACCESORIO</h5>
					<small class="text-muted">#{{ $accesorio->id }} - {{ $accesorio->nombre }}.</small>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-8 text-right">
			<a href="{{ route('admin_accesorios.create') }}" class="btn btn-outline-secondary"><i class="fas fa-plus"></i> Nuevo</a>
		</div>
	</div>
</div>

<div class="body-form">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group requerido">
				<label class="control-label mb-1">Nombre</label>
				<input name="nombre" type="text" class="form-control @if ($errors->first('nombre')) is-invalid @endif" value="{{ $accesorio->nombre or old('nombre') }}">
				<div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group requerido">
				<label class="control-label mb-1">Precio</label>
				<input name="precio" type="number" class="form-control @if ($errors->first('precio')) is-invalid @endif" value="{{ $accesorio->precio or old('precio') }}">
				<div class="invalid-feedback">{{ $errors->first('precio') }}</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group requerido">
				<label class="control-label mb-1">Modelo</label>
				<select class="select2-modelo form-control @if ($errors->first('modelo_id')) is-invalid @endif" name="modelo_id">
					<option></option>
				</select>
				<div class="invalid-feedback">{{ $errors->first('modelo_id') }}</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<div class="form-group">
				<label class="control-label mb-1">Activo</label>
				<select class="form-control" name="activo">
					@if ($accesorio->id)
						<option value="1" @if($accesorio->activo ) selected @endif>Si</option>
						<option value="0" @if(!$accesorio->activo) selected @endif>No</option>
					@else
						<option value="1" selected>Si</option>
						<option value="0">No</option>
					@endif
				</select>
				<div class="invalid-feedback">{{ $errors->first('modelo_id') }}</div>
			</div>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col">
			<div class="form-group requerido">
				<label class="control-label mb-1">Fotos</label>
			</div>
		</div>
	</div>

	@if($accesorio->id)
		<div class="row">
			<div class="col d-flex">
				<div id="galeria" class="d-flex">
					@foreach( $accesorio->fotos as $foto )
						<div class="d-flex flex-column align-items-center" id="element-img-${index}">
							<div class="div-add-img ml-2">
								<div class="_3jk

								 d-flex justify-content-center align-items-center">
									<input type="hidden" class="_5f0v" name="imagenesOld[]" value="{{$foto->id}}">
									<img src="{{$foto->public_path}}">
								</div>
							</div>
							<a href="#" onclick="$(this).parent().remove()">Borrar Foto</a>
						</div>
					@endforeach
				</div>
				<div class="d-flex flex-column align-items-center" id="element-img-0">
					<div class="div-add-img add-file ml-2">
						<div class="_3jk

						 d-flex justify-content-center align-items-center">
							<i class="fa fa-plus"></i>
						</div> 
					</div>
				</div>
			</div>
		</div>
	@endif

	@if(!$accesorio->id)
		<div class="row">
			<div class="col d-flex">
				<div id="galeria" class="d-flex">
				</div>
				<div class="d-flex flex-column align-items-center" id="element-img-0">
					<div class="div-add-img add-file ml-2">
						<div class="_3jk d-flex justify-content-center align-items-center">
							<i class="fa fa-plus"></i>
						</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="form-group requerido">
			<div class="invalid-feedback">Como mínimo debe seleccionar 1 foto.</div>
		</div>
	@endif

	<p class="text-danger mt-4 font-weight-lighter font-italic">Como mínimo debe seleccionar 1 foto.</p>
</div>