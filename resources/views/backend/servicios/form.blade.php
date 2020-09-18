<div class="row">
	<div class="col-sm-12 col-md-3">
		<label class="control-label mb-1">Modelo</label> 
		<select name="modelo_id" class="form-control">
			@foreach($modelos as $modelo)
				<option value="{{$modelo->id}}" @if($servicio->modelo_id == $modelo->id) selected @endif>{{$modelo->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="control-label mb-1">Nombre del Servicio</label> 
		<input name="nombre" type="text" value="{{$servicio->nombre}}" class="form-control">
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="control-label mb-1">Precio</label> 
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text">$</span>
			</div>
			<input name="precio" type="text" value="{{$servicio->precio}}" class="form-control">
		</div>
	</div>
	<div class="col-sm-12 col-md-3 d-flex">
		<div class="input-group mb-3 d-flex justify-content-around align-items-end">
			<button type="submit" name="add_another" value="add_another" class="btn btn-default pull-right">Guardar y Continuar</button>
			<button type="submit" class="btn btn-default pull-right" style="margin-right: 5px;">Guardar</button>
		</div> 
	</div> 
</div>
<div class="row my-3">
	<div class="col-md-12">
		<a href="{{route('admin_servicios.index')}}" class="btn btn-secondary pull-left">Cancelar</a>
	</div>
</div>
