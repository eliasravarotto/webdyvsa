<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form">
	{{ csrf_field() }}
	<input type="hidden" name="from" value="contacto">
	<div class="row">
		<div class=" col-md-6">
	    <label class="control-label">Nombre y Apellido</label>
	    <input type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
  	</div>
  	<div class=" col-md-6">
	    <label class="control-label">Teléfono</label>
	    <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
		<span class="text-danger">
			{{  $errors->first('telefono') }}
		</span>
  	</div>
	</div>
	<div class="row">
		<div class=" col-md-12">
			<label class="control-label">Email</label>
	    <input type="email" class="form-control" name="email" value="{{old('email')}}">
	    <span class="text-danger">
			{{  $errors->first('email') }}
		</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<label class="control-label">Mensaje</label>
	    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
		</div>
	</div>
	<div class="row pad-top-20">
		<div class="col-md-6">
			<div class="g-recaptcha" 
		           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
		    </div>
			@if ($errors->has('g-recaptcha-response'))
			    <span class="text-danger">
			        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			    </span>
			@endif
		</div>
		<div class="col-md-6 text-right">
			<button type="submit"  class="btn btn-default">ENVIAR</button>
		</div>
	</div>
</form>