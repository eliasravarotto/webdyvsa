@extends('layout')

@section('title_and_meta')
  <title>Autos Usados</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota Chaco, financiacion usados, autos usados en cuotas, autos usados en Villa Angela, autos usados en Saenz peña, autos usados en Charata, autos usados en Resistencia, autos usados en Chaco">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/usados" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DERKA Y VARGAS USADOS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
	.precio {
		background-color: #797979;
		color: #fafafa !important;
	}

	.caption {
		background-color: #d2a7bf;
	}

	.caption-default>h3,
	.caption-default>h4,
	.text-shadow {
		color: #ffffff !important;
	}

	.thumbnail .caption {
		color: white;
	}

	.btn-celeste-pastel {
		background-color: #5a8cb5;
		color: #fff;
	}

	.block2-overlay {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: rgba(0, 0, 0, 0.3);
		opacity: 0;
	}

	.trans-0-4 {
		-webkit-transition: all .4s;
		-o-transition: all .4s;
		-moz-transition: all .4s;
		transition: all .4s;
	}

	.block2-overlay:hover {
		opacity: 1;
	}

	.block2-overlay:hover .block2-btn-addcart {
		bottom: 35px;
	}

	.block2-btn-addcart {
		position: absolute;
		left: 50%;
		-webkit-transform: translateX(-50%);
		transform: translateX(-50%);
		bottom: -45px;
	}

	.w-size1 {
		width: 161px;
	}

	.thumbnail > div > img,
	.thumbnail > div > a > img {
		display: block;
		max-width: 100%;
		height: auto;
		margin-left: auto;
		margin-right: auto;
	}

	.pos-rel {
		position: relative;
	}

	a:hover {
		text-decoration: none;
	}

	.ribbon-custom {
		margin: 20px !important;
		right: -65px !important;
		border: solid 1px #fff;
		font-family: 'Play', sans-serif;
	}

	.panel-default {
		margin-top: -80px;
		border-radius: 6px;
		box-shadow: 0 10px 14px 2px rgba(0, 0, 0, .14), 0 6px 30px 5px rgba(0, 0, 0, .12), 0 8px 10px -5px rgba(0, 0, 0, .2);
		border-color: #f8f8f8;
		background-color: #f8f8f8;
	}

	.panel-default>.panel-heading {
		background-color: #f8f8f8;
		border-bottom: 0px solid transparent;
	}

	.panel-default>.panel-heading p,
	.panel-default>.panel-heading a {
		font-size: 18px;
	}

	@media only screen and (max-width:992px) {
		.panel-default {
			margin-top: -100px;
		}

	}
</style>
@stop

@section('mark-up-facebook')
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Usados Destacados" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
	<div class="container">
		<section>
			<index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados>
		</section>

		<section>
			<div class="title-section">
		        <h3>SU CONSULTA NO ES MOLESTIA</h3>
		  	</div>
			<div class="row mt-2">
				<div class="col-sm-12 col-md-6">
					<p class="fs-17">Conocé los autos usados que tenemos para vos. Encontrá las mejores opciones en Chaco de unidades usadas en todas las marcas.</p>
					<p class="fs-17">También contamos Usados Certificados por Toyota (UCT). <a href="https://derkayvargas.com/usados#certificados-toyota">¿Qué es un UCT?</a></p>
				</div>
				<div class="col-sm-12 col-md-6">
					<div id="contacto-form" @if($errors->isEmpty()) @endif>
					<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
						{{ csrf_field() }}
						<input type="hidden" name="from" value="usados">
						<div class="row">
							<div class=" col-md-6">
						    <label class="control-label">Nombre y Apellido</label>
						    <input id="cli" type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
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
								{{-- <button type="submit" class="btn btn-default btn-submit">ENVIAR</button> --}}
								{{-- <button type="submit"  class="btn btn-default">ENVIAR</button> --}}
								<input type="submit" class="btn btn-default" value="ENVIAR">
							</div>
						</div>
						<div class="alert alert-info mt-3" role="alert"><p>Un asesor de ventas se pondrá en contacto con usted a la brevedad.</p></div>
					</form>
					</div>
				</div>
			</div>
		</section>
	</div>
@stop

@section('script')
    <!-- Google FCM -->
    {{-- <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
    <script src="{{ asset('js/sw-push-msg.js') }}"></script> --}}
    <!-- end -->
    <script type="text/javascript">
    	$('#contacto-form').on('shown.bs.collapse', function (e) {
        $('#cli').focus();
    })
    </script>
@stop