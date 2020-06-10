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

		@include('frontend.usados.contact-area-usados')
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