<div class="form-group row">
  	<div class="col-4">
	  <label for="cc-payment" class="control-label mb-1">Nombre</label>
	  <input name="nombre" type="text" class="form-control" value="{{ $modelo->nombre }}">
	</div>
	<div class="col-8">
	  <label for="cc-payment" class="control-label mb-1">Slogan</label>
	  <input name="slogan" type="text" class="form-control" value="{{ $modelo->slogan }}">
	</div>
</div>
<div class="form-group row">
  	<div class=" col-6">
	  <label for="cc-payment" class="control-label mb-1">Imagen del Modelo</label>
	  <input name="img_modelo" type="file" class="form-control">
	</div>
  	<div class=" col-6">
	  <label for="cc-payment" class="control-label mb-1">Logo del Modelo</label>
	  <input name="img_logo" type="file" class="form-control">
	</div>
</div>


