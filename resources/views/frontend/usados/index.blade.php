@extends('frontend.layout')

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
		/*margin-top: -80px;*/
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
			margin-top: -0px;
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
<section>
	{{-- <div class="mu-call-to-action mu-call-to-action-dark bg-header-usados">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area">
						<div class="mu-call-to-action-left">
							<h1><b>USADOS SELECCIONADOS</b></h1>
							<p class="visible-md visible-lg" style="color: #f8f8f8; font-size: 20px">Encontrá el vehículo que estás buscando.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
</section>
		<section>
			<div class="container">
				<index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados>
			</div>
		</section>

		<section class="content-area">
			<div class="container">
				<div class="main-title text-center">
					<h1>Contacto</h1>
					<p>Acercate y conocé los autos usados que tenemos para vos.</p><p> Encontrá las mejores opciones en Chaco de unidades usadas en todas las marcas.</p>
				</div>
				<div class="contact-info">
				    <div class="row">
				        <div class="col-md-3 col-sm-6 mb-5 text-center">
				        	<i class="fas fa-map-marker-alt"></i>
				            <p>Salón de Usados</p><strong>Av. Sarmiento 1890, Resistencia</strong>
				        </div>
				        <div class="col-md-3 col-sm-6 mb-5 text-center">
				        	<i class="fas fa-phone"></i>
				            <p>Teléfono</p><strong>+549 362 443 3300</strong>
				        </div>
				        <div class="col-md-3 col-sm-6 mb-5 text-center">
				        	<i class="fab fa-whatsapp"></i>
				            <p>Whatsapp</p><strong><a href="https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20un%20vehículo%20Usado" target="_blank" style="color: black;">+549 364 4178456</a></strong>
				        </div>
				        <div class="col-md-3 col-sm-6 mb-5 text-center">
				        	<i class="fas fa-envelope"></i>
				            <p>Email Address</p><strong>ventas@derkayvargas.com.ar</strong>
				        </div>
				    </div>
				</div>
				<div class="row py-1 d-flex justify-content-center">
					<div class="col-md-8">
						@include('frontend.includes.contact-form', $data=['from' => 'usados'])
					</div>
				</div>
			</div>

			<div id="google-map" class="mt-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.6673799919517!2d-58.97076188734676!3d-27.436139971779603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ff25acec2a6c7c5!2sDerka%20y%20Vargas%20-%20Toyota!5e0!3m2!1ses-419!2sar!4v1583520891829!5m2!1ses-419!2sar" 
						width="100%" 
						height="500" 
						style="border:0;" 
						allowfullscreen>
				</iframe>
			</div>
		
		</section>
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