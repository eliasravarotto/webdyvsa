<div class="form-group row">
  	<div class="col-6">
	  <label class="control-label mb-1">Nombre</label>
	  <input name="nombre" type="text" class="form-control" value="{{ $modelo->nombre }}">
	</div>
	<div class="col-6">
	  <label for="cc-payment" class="control-label mb-1">Tipo Vehículo</label>
	  <select class="form-control" name="tipo_vehiculo_id">
	  	<option></option>
	  	@foreach( $tiposVehiculos as $tipo)
	  	<option value="{{$tipo->id}}" @if($tipo->id == $modelo->tipo_vehiculo_id) selected @endif>{{$tipo->tipo}}</option>
	  	@endforeach
	  </select>
	</div>
</div>
<div class="form-group row">
	<div class="col-12">
	  <label class="control-label mb-1">Slogan</label>
	  <input name="slogan" type="text" class="form-control" value="{{ $modelo->slogan }}">
	</div>
</div>
<div class="form-group row">
  	<div class="col-12">
	  <label  class="control-label mb-1">Link Ficha Técnica</label>
	  <input name="link_ficha_tecnica" type="text" class="form-control" value="{{ $modelo->link_ficha_tecnica }}">
	</div>
</div>
<div class="form-group row">
  	<div class=" col-12">
	  <label class="control-label mb-1">Link Catálogo</label>
	  <input name="link_catalogo" type="text" class="form-control" value="{{ $modelo->link_catalogo }}">
	</div>
</div>
<div class="form-group row">
  	<div class=" col-12">
  		<div class="input-group">
		  <div class="custom-file">
		    <input type="file" name="img_modelo" class="custom-file-input" id="inputGroupFileImgModelo">
		    <label class="custom-file-label" for="inputGroupFileImgModelo">Imagen Modelo</label>
		  </div>
		</div>
	</div>
</div>
<div class="form-group row">
  	<div class=" col-12">
	  <div class="input-group">
		  <div class="custom-file">
		    <input type="file" name="img_logo" class="custom-file-input" id="inputGroupFileImgLogoModelo">
		    <label class="custom-file-label" for="inputGroupFileImgLogoModelo">Logo Modelo</label>
		  </div>
		</div>
	</div>
</div>
<div class="form-group row">
  	<div class=" col-12">
 		<label class="control-label mb-1">Descripción del Modelo</label>
  		<textarea class="form-control" name="descripcion">{{$modelo->descripcion}}</textarea>
  	</div>
</div>


