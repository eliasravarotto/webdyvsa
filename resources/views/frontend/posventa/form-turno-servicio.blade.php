@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		{{-- <section  class="pad-bot-25" style="background: url('/imagenes/fondo2.jpg'); background-size: cover; background-repeat: no-repeat;"> --}}
		<section  class="pad-bot-25">
			<section>
				<div class="container">
					@if (session('status'))
						<div class="alert alert-warning alert-dismissible toast" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('status') }}
						</div>
					@endif
					{{-- <div class="row" style="margin-top: 30px; margin-bottom: 30px; border-radius: 5px;"> --}}
					<div class="row">
					<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<h1 class="text-center h1-titulo-form">SOLICITAR TURNO <br><small>Servicio de Atención al Cliente</small></h1>
					<form class="form-horizontal" action="/turno-servicios" method="POST" role="form">
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
							<select name="modelo" required="" class="form-control">
								<option value="0" selected="">Hilux (4x2)</option>
								<option value="1" >Hilux (4x4 / SW4)</option>
								<option value="2">Hilux (automática)</option>
								<option value="3">SW4 (automática)</option>
								<option value="4">Corolla (Manual)</option>
								<option value="5">Corolla (Automático / CVT)</option>
								<option value="6">Etios (Manual)</option>
								<option value="7">Etios (Automático)</option>
								<option value="8">Yaris</option>
								<option value="9">Camry</option>
								<option value="10">RAV4 (4x2)</option>
								<option value="11">RAV4 (4x4)</option>
								<option value="12">Land Cruiser Prado (Manual)</option>
								<option value="13">Land Cruiser Prado</option>
								<option value="14">Land Cruiser 200</option>
								<option value="15">Coupe 86</option>
								<option value="16">Coupe 86 (Automático)</option>
								<option value="17">Otros</option>
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
					  	<div class="form-group text-right">
					  		<div class="col-lg-12">
					  		<button type="submit" class="btn btn-default">Enviar</button>
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