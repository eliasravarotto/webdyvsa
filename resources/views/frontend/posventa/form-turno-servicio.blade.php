@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Turnos Online</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa, Turnos online, Solicitar Turnos Online">
@stop

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		<section  class="pad-bot-25">
			<section>
				<div class="container">
					<div class="row">
					<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<h1 class="text-center h1-titulo-form">SOLICITAR TURNO <br><small>Servicio de Atención al Cliente</small></h1>
						<form id="form" class="form-horizontal" action="/turno-servicios" method="POST" role="form" autocomplete="off">
						  {{ csrf_field() }}
						  <div class="form-group">
						    <label class="control-label col-lg-3">Nombre y Apellido</label>
						    <div class="col-lg-9">
						      <input type="text" class="form-control"  name="cliente"  value="{{ old('cliente') }}" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-lg-3 control-label">Teléfono</label>
						    <div class="col-lg-9">
						      <input type="text" class="form-control"  name="telefono" value="{{ old('telefono') }}" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-lg-3 control-label">Email</label>
						    <div class="col-lg-9">
						      <input type="email" class="form-control"  name="email" value="{{ old('email') }}">
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-lg-3 control-label">Fecha</label>
						    <div class="col-lg-9">
						      <input type="date" class="form-control"  name="fecha" value="{{ old('fecha') }}" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-lg-3 control-label">Sucursal</label>
						    <div class="col-lg-9">
						    	<ul class="list-inline">
						    		@foreach($sucursales as $sucursal)
						    		<li>
					    			<div class="radio">
									  <label>
									    <input type="radio" name="sucursal" value="{{$sucursal->id}}" {{ old('sucursal') == $sucursal->id ? 'checked' : '' }} required>
									    {{ $sucursal->localidad }}
									  </label>
									</div>
						    		</li>
						    		@endforeach
						    	</ul>
							</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Tipo de Servicio</label>
								<div class="col-lg-9">
									
								<select name="tipo_de_servicio" required="" class="form-control">
									@foreach($servicios as $servicio)
									<option value="{{ $servicio->id }}" selected="">{{ $servicio->nombre }}</option>
									@endforeach
								</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Modelo</label>
								<div class="col-lg-9">
								<select name="modelo" required class="form-control">
									<option value="Hilux (4x2)" selected>Hilux (4x2)</option>
									<option value="Hilux (4x4 / SW4)" >Hilux (4x4 / SW4)</option>
									<option value="Hilux (automática)">Hilux (automática)</option>
									<option value="SW4 (automática)">SW4 (automática)</option>
									<option value="Corolla (Manual)">Corolla (Manual)</option>
									<option value="Corolla (Automático / CVT)">Corolla (Automático / CVT)</option>
									<option value="Etios (Manual)">Etios (Manual)</option>
									<option value="Etios (Automático)">Etios (Automático)</option>
									<option value="Yaris">Yaris</option>
									<option value="Camry">Camry</option>
									<option value="RAV4 (4x2)">RAV4 (4x2)</option>
									<option value="RAV4 (4x4)">RAV4 (4x4)</option>
									<option value="Land Cruiser Prado (Manual)">Land Cruiser Prado (Manual)</option>
									<option value="Land Cruiser Prad">Land Cruiser Prado</option>
									<option value="Land Cruiser 200">Land Cruiser 200</option>
									<option value="Coupe 86">Coupe 86</option>
									<option value="Otros">Otros</option>
								</select>
								</div>
							</div>
							<div class="form-group">
							    <label class="control-label col-lg-3">Dominio</label>
							    <div class="col-lg-9">
							      <input type="text" name="dominio" class="form-control" value="{{ old('dominio') }}" required>
							    </div>
						  	</div>
							<div class="form-group">
								<label class="control-label col-lg-3">Comentarios</label>
								<div class="col-lg-9">
								<textarea class="form-control" name="comentario">{{ old('comentario') }}</textarea>
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
						  		<div class="col-md-offset-3 col-sm-12-6 col-md-3">
									<div class="g-recaptcha" 
								           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
								    </div>
								</div>
						  		<div class="col-sm-12-6 col-md-6">
						  			<input type="submit" class="btn btn-default" value="ENVIAR">
						  		</div>
						  	</div>
						</form>
					</div>
					</div>
				</div>
			</section>
		</section>
	</article>
@stop