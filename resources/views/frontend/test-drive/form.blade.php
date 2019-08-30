@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Test Drive</title>
  <meta name="description" content="Derka y Vargas Solicitar Testdrive, solicitar prueba de manejo, Probá un Toyota">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/test-drive/create" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="TEST DRIVE" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')

	@if (session('status'))
		<div class="alert alert-warning alert-dismissible toast" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('status') }}
		</div>
	@endif

	<article>
		<section>
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h1>SOLICITAR TEST DRIVE<br><small style="color: #e0dfdf">Prueba de Manejo</small></h1></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<section class="py-3">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						{{-- <h1 class="text-center h1-titulo-form">SOLICITAR TEST DRIVE<br><small>Prueba de Manejo</small></h1> --}}
						<form class="form-horizontal" action="/test-drive" method="POST" role="form" autocomplete="off">
				  			{{ csrf_field() }}
				  			<div class="form-group required">
							    <label class="control-label col-lg-4">Nombre y Apellido</label>
							    <div class="col-lg-8">
							      <input type="text" class="form-control"  name="cliente"  value="{{ old('cliente') }}" required>
							    </div>
						  	</div>
						  	<div class="form-group required">
							    <label class="control-label col-lg-4">Teléfono</label>
							    <div class="col-lg-8">
							      <input type="text" class="form-control"  name="telefono"  value="{{ old('cliente') }}" required>
							    </div>
						  	</div>
						  	<div class="form-group required">
							    <label class="control-label col-lg-4">Fecha Estimada</label>
							    <div class="col-lg-8">
							      <input type="date" class="form-control"  name="fecha_estimada"  value="{{ old('cliente') }}" required>
							    </div>
						  	</div>
						  	<div class="form-group required">
							    <label class="control-label col-lg-4">Sucursal</label>
							    <div class="col-lg-8">
							    	<select class="form-control" name="sucursal">
							    		@foreach($sucursales as $sucursal)
							    		<option value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
							    		@endforeach
							    	</select>
							    </div>
						  	</div>
						  	<div class="form-group required">
							    <label class="control-label col-lg-4">Modelo</label>
							    <div class="col-lg-8">
							    	<select class="form-control" name="modelo">
							    		<option value="HILUX">HILUX</option>
							    		<option value="COROLLA">COROLLA</option>
							    		<option value="ETIOS">ETIOS</option>
							    		<option value="YARIS">YARIS</option>
							    		<option value="PRIUS">PRIUS</option>
							    	</select>
							    </div>
						  	</div>
					  		<div class="row">
					  			<div class="col-md-offset-4 col-md-8">
					  				<div class="alert alert-info" role="alert">
					  					<p style="font-size: 18px;">La fecha está sujeta a disponibilidad.</p>
					  				</div>
					  			</div>
					  		</div>
						  	<div class="form-group">
						  		<div class=" col-md-offset-4 col-sm-12">
						  		<p class="text-danger">(*) Campos Obligatrorios</p>
						  		</div>
						  	</div>
						  	<div class="form-group text-right">
						  		<div class="col-lg-12">
						  			<input type="submit" class="btn btn-default" name="ENVIAR">
						  		</div>
						  	</div>
				  		</form>
					</div>
				</div>
			</div>
		</section>
	</article>
@stop