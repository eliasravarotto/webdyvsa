@extends('layout')

@section('content')
<style type="text/css">

</style>

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		<section style="background: url('https://www.toyota.com.ar/usuarios/mant_express/img/botBg.jpg'); background-size: cover; background-repeat: no-repeat;">
			<section style="background: rgba(240, 255, 255, 0.8)">
				<div class="container">
					{{-- <div class="row" style="margin-top: 30px; margin-bottom: 30px; border-radius: 5px;"> --}}
					<div class="row">
					<div class="col-md-offset-4 col-md-4 col-sm-12 col-xs-12">
						<h1 class="text-center">Solicitar Turno <br><small>Servicio de Atención al Cliente</small></h1>
					<form class="" role="form">
					  <div class="form-group">
					    <label class="control-label">Nombre y Apellido</label>
					    <div class="">
					      <input type="text" class="form-control"  placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class=" control-label">Teléfono</label>
					    <div class="">
					      <input type="text" class="form-control"  placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class=" control-label">Email</label>
					    <div class="">
					      <input type="email" class="form-control"  placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class=" control-label">Fecha</label>
					    <div class="">
					      <input type="date" class="form-control"  placeholder="">
					    </div>
					  </div>
					  <div class="form-group">
					    <label class=" control-label">Sucursal</label>
					    	<ul class="list-inline">
					    		<li>
				    			<div class="radio">
								  <label>
								    <input type="radio" name="sucursal" value="1">
								    Sáenz Peña
								  </label>
								</div>
					    		</li>
					    		<li>
				    			<div class="radio">
								  <label>
								    <input type="radio" name="sucursal" value="2">
								    Charata
								  </label>
								</div>
					    		</li>
					    		<li>
				    			<div class="radio">
								  <label>
								    <input type="radio" name="sucursal" value="3">
								    Resistencia
								  </label>
								</div>
					    		</li>
					    	</ul>
						</div>
						<div class="form-group">
							<label>Modelo</label>
							<select name="modelo" required="" class="form-control">
								<option value="0" selected="">Hilux (4x2)</option>
								<option value="1">Hilux (4x4 / SW4)</option>
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
						<div class="form-group">
						    <label class="control-label">Dominio</label>
						    <div class="">
						      <input type="text" name="dominio" class="form-control"  placeholder="">
						    </div>
					  	</div>
						<div class="form-group">
							<label>Comentarios</label>
							<textarea class="form-control" name="comentario"></textarea>
					  	</div>
					  	<div class="form-group text-right">
					  		<button type="submit" class="btn btn-default">Enviar</button>
					  	</div>
					</form>
					</div>
					</div>
				</div>
			</section>
		</section>
	</article>
@stop