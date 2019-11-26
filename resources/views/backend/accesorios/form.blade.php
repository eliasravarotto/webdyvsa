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
						<div class="_3jk d-flex justify-content-center align-items-center">
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
				<div class="_3jk d-flex justify-content-center align-items-center">
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
			{{-- <a href="#" onclick="deleteInput(0)">Borrar Foto</a> --}}
		</div>
	</div>
</div>
<div class="form-group requerido">
	{{-- <input type="hidden" name="imagenes[]" class="form-control @if ($errors->first('imagenes')) is-invalid @endif"> --}}
	<div class="invalid-feedback">Como mínimo debe seleccionar 1 foto.</div>
</div>
@endif

<p class="text-danger mt-4 font-weight-lighter font-italic">Como mínimo debe seleccionar 1 foto.</p>