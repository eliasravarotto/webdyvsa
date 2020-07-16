<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form">
	{{ csrf_field() }}
	{{env('GOOGLE_RECAPTCHA_KEY')}}
	<input type="hidden" name="from" value="contacto">
	<div class="form-group row">
		<div class=" col-md-6">
		    <label class="control-label">Nombre y Apellido</label>
		    <input type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
	  	</div>
	  	<div class=" col-md-6">
		    <label class="control-label">Teléfono</label>
		    <input type="number" class="form-control" name="telefono" value="{{old('telefono')}}">
			<span class="text-danger">
				{{  $errors->first('telefono') }}
			</span>
	  	</div>
	</div>
	<div class="form-group row">
		<div class=" col-md-12">
			<label class="control-label">Email</label>
	    <input type="email" class="form-control" name="email" value="{{old('email')}}">
	    <span class="text-danger">
			{{  $errors->first('email') }}
		</span>
		</div>
	</div>
	<div class="form-group row">
		<div class=" col-md-12">
			<label class="control-label">Sucursal</label>
			<select class="form-control" name="sucursal">
				<option value="Sáenz Peña">Sáenz Peña</option>
				<option value="Resistencia" >Resistencia</option>
				<option value="Charata" >Charata</option>
				<option value="Villa Ángela" >Villa Ángela</option>
			</select>
		    <span class="text-danger">
				{{  $errors->first('sucursal') }}
			</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-12">
			<label class="control-label">Mensaje</label>
	    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
		</div>
	</div>
	<div class="form-group row py-3">
		<div class="col-md-7">
			<div class="g-recaptcha" 
		           data-sitekey="6Lc4SpEUAAAAADOhUWo2ezTYsnpuirFQ69n_-8M8">
		    </div>
		    {{-- <div class="g-recaptcha" 
		           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
		    </div> --}}
			@if ($errors->has('g-recaptcha-response'))
			    <span class="text-danger">
			        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			    </span>
			@endif
		</div>
		<div class="col-md-5 d-flex align-items-center">
			<button type="submit"  class="btn btn-danger btn-lg"><i class="fas fa-paper-plane"></i> ENVIAR</button>
		</div>
	</div>
</form>