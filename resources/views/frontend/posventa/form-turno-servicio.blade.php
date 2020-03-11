@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Turnos Online</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa, Turnos online, Solicitar Turnos Online">
@stop

@section('content')
	<section class="my-4">
		<div class="container py-4">
			<div class="row py-1 d-flex justify-content-center">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="main-title text-center">
						<h1>Solicitar Turno</h1>
						<p>Servicio de Atención al Cliente</p>
					</div>
					<form id="form" class="form-horizontal" action="/turno-servicios" method="POST" role="form" autocomplete="off">
				  		{{ csrf_field() }}
				  		<div class="row">
					  		<div class="form-group col-md-4">
							    <label class="control-label">Nombre y Apellido</label>
							    <div class="">
							      <input type="text" class="form-control"  name="cliente"  value="{{ old('cliente') }}" required>
							    </div>
						  	</div>
						  	<div class="form-group col-md-3">
							    <label class="control-label">Teléfono</label>
							    <div class="">
							      <input type="text" class="form-control"  name="telefono" value="{{ old('telefono') }}" required>
							    </div>
						  	</div>
						  	<div class="form-group col-md-5">
							    <label class="control-label">Email</label>
							    <div class="">
							      <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
							    </div>
						  	</div>
					  	</div>
					  	<div class="row">
						  	<div class="form-group col-md-4">
							    <label class="control-label">Fecha</label>
							    <div class="">
							      <input type="date" class="form-control"  name="fecha" value="{{ old('fecha') }}" required>
							    </div>
						  	</div>
							<div class="form-group col-md-4">
								<label class="control-label">Sucursal</label>
								<select name="sucursal" required class="form-control">
									@foreach($sucursales as $sucursal)
									<option 
										value="{{ $sucursal->id }}" 
										@if($sucursal->id == old('sucursal')) selected @endif>
										{{ $sucursal->localidad }}
									</option>
									@endforeach
								</select>
							</div>
					  	</div>
					  	<div class="row">
							<div class="form-group col-md-4">
								<label class="control-label">Servicio</label>
								<select name="servicio" required="" class="form-control">
									@foreach($servicios as $servicio)
									<option value="{{ $servicio->nombre }}">{{ $servicio->nombre }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group col-md-4">
								<label class="control-label">Modelo</label>
								<select name="modelo" required class="form-control">
									@foreach($modelos as $modelo)
									<option></option>
									<option 
										value="{{$modelo->nombre}}" 
										@if(old('modelo') == $modelo->nombre || $modelo->nombre == $request->modelo ) selected @endif>
										{{$modelo->nombre}}
									</option>
									@endforeach
									<option value="Otros">Otros</option>
								</select>
							</div>
							<div class="form-group col-md-4">
							    <label class="control-label">Dominio</label>
						      	<input type="text" name="dominio" class="form-control" value="{{ old('dominio') }}" required>
						  	</div>
					  	</div>
					  	<div class="row">
							<div class="form-group col-md-12">
								<label class="control-label col-lg-3">Comentarios</label>
								<div class="">
								<textarea class="form-control" name="comentario">{{ old('comentario') }}</textarea>
								</div>
						  	</div>
						</div>
						<div class="form-group">
					  		<div class="col-md-offset-3 col-sm-12 col-md-9">
							@if ($errors->has('g-recaptcha-response'))
							    <span class="text-danger">
							        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
							    </span>
							@endif
						</div>
						</div>
					  	<div class="form-group text-right">
					  		<div class="col-md-12 col-sm-12">
								<div class="g-recaptcha" 
							           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
							    </div>
							</div>
					  		<div class="col-sm-12 col-md-12 py-3 text-center">
					  			<input type="submit" class="btn btn-md button-theme" value="ENVIAR">
					  		</div>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@stop