<div class="row">
	

	<div class="col-sm-4">
		<label class="control-label mb-1">Nombre del Servicio</label> 
		<input name="nombre" type="text" value="{{$servicio->nombre}}" class="form-control">
	</div> 
	<div class="col-sm-2">
		<label class="control-label">Etios</label>
		<div class="input-group">
	          <div class="input-group-prepend">
			    <span class="input-group-text">$</span>
			  </div>
			<input name="etios" placeholder="Precio" type="text" value="{{$servicio->etios}}" class="form-control">
		</div>
		
	</div> 
	<div class="col col-sm-2">
		<label class="control-label mb-1">Corolla</label>
		<div class="input-group">
	        <div class="input-group-prepend">
			    <span class="input-group-text">$</span>
			  </div> 
			<input name="corolla" placeholder="Precio" type="text" value="{{$servicio->corolla}}" class="form-control">
		</div> 
	</div> 
	<div class="col col-sm-2">
		<label class="control-label mb-1">Hilux</label>
		<div class="input-group">
	        <div class="input-group-prepend">
			    <span class="input-group-text">$</span>
			  </div> 
			<input name="hilux" placeholder="Precio" type="text" value="{{$servicio->hilux}}" class="form-control">
		</div> 
	</div> 
	<div class="col col-sm-2">
		<label class="control-label mb-1">Hilux/Sw4 4x4</label> 
		<div class="input-group">
	        <div class="input-group-prepend">
			    <span class="input-group-text">$</span>
			  </div>
			<input name="hilux_sw4_4x4" placeholder="Precio" type="text" value="{{$servicio->hilux_sw4_4x4}}" class="form-control">
      	</div>
	</div> 

</div>