@extends('frontend.layout')

@section('title_and_meta')
  <title>Toyota Mobility Services es la nueva plataforma de servicios de movilidad</title>
  <meta name="description" content="Toyota Mobility Services ahora es KINTO, la nueva plataforma de servicios de movilidad.
El Toyota que querés, por el tiempo que necesitás.">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/mobility-services-alquiler-de-autos-toyota" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="DERKA Y VARGAS TOYOTA MOBILITY SERVICES" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
	.title1{
	    font-size: 50px;
	    font-size: 2.5rem;
	    font-weight: 200;
	    font-stretch: normal;
	    font-style: normal;
	    line-height: 1.1;
	    letter-spacing: -.7px;
	    color: #00708d;
	    margin-bottom: 2.5rem;
	}
	.title2{
	    font-size: 30px;
	    font-size: 1.8rem;
	    font-weight: 600;
	    line-height: 1.33;
	    margin-bottom: 2rem;
	}
	.portada-kinto{
		background: url({{asset('imagenes/kinto/hero-slide-01.jpg')}});
		height: 80vh;
		background-position: center;
		background-size: cover;
	}
	.portada-kinto p{
		color: #002732;
		font-size: 1.2rem;
	}
	.modelos-kinto .col-4{
		text-align: center;
	}
	.modelos-kinto .col-4 h4{
		margin-top: 30px;
	}
	.btn-cotizar:hover {
	    color: #002732;
	    background-color: #e3e9eb;
	    border-color: #e3e9eb;
	    text-decoration: none;
	}
	.btn-cotizar{
		color: #002732;
    	background-color: transparent;
    	border-color: #002732;
    	box-sizing: border-box;
	    display: inline-block;
	    font-size: 1.2rem;
	    font-weight: 600;
	    text-align: center;
	    padding: .50rem 1.5rem;
	    border-radius: 100px;
	    border: 2px solid;
	}
</style>
@stop

@section('content')
	
	<section class="py-5 portada-kinto">
		<div class="container">
			<div>
				<h1 class="title1 text-center">Toyota Mobility Services ahora es KINTO</h1>
				<p class="text-center">Un servicio de movilidad que hace la diferencia en tu día a día</p>
			</div>
		</div>
	</section>

	<div class="container mt-6">
		<h1 class="title1 text-center">El Toyota que quieras por el tiempo que quieras, cuando quieras</h1>
		
		<div class="row mt-6 modelos-kinto text-center">
			<div class="col-md-4 col-sm-12 mt-2">
				<img src="https://www.kintomobility.com.ar/storage/images/ETIOS%20XLS%20HB%20-%20LAT%20Negro.png">
				<h4>Etios Hatchback</h4>
				<p>Necesitas otro auto por unos días?</p>
			</div>
			<div class="col-md-4 col-sm-12 mt-2">
				<img src="https://www.kintomobility.com.ar/storage/images/YARIS%20XLS%20&%20XLS%20PACK%20HB%20-%20LAT%20070.png">
				<h4>Yaris</h4>
				<p>Un paseo de fin de semana?</p>
			</div>
			<div class="col-md-4 col-sm-12 mt-2">
				<img src="https://www.kintomobility.com.ar/storage/images/2019_Corolla_2020_Hv_Cvt_Side_Super_White_040-LA-20.png">
				<h4>Corolla</h4>
				<p>Una reunión de trabajo muy importante?</p>
			</div>
		</div>

		<div class="d-flex justify-content-center mt-5">
			<a class="btn-cotizar text-center" href="https://www.kintomobility.com.ar/modelos" target="_blank">Ver Todos <i class="fas fa-arrow-right"></i></a>
		</div>
	</div>

	<div class="container my-6">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="card px-5 py-5" style="background-color: #e3e9eb">
					<img src="https://www.kintomobility.com.ar/img/home/illus-app.svg">
					<h4 class="title2 text-center my-3">KINTO App</h4>
					<p class="text-center">Para iniciar tu reserva descargá la APP, registrate y no olvides tener tu carnet de conductor cerca.</p>
					<div class="d-flex flex-column">
						<a target="_blank" href="https://play.google.com/store/apps/details?id=com.goodtravelsoftware.sharecar.toyotaargentina&hl=es" class="px-4 my-4"><img class="w-100" src="{{asset('imagenes/kinto/google-play.svg')}}"></a>
						<a target="_blank" href="https://apps.apple.com/ar/app/toyota-mobility-services/id1436690858" class="px-4 my-4"><img class="w-100" src="{{asset('imagenes/kinto/app-store.svg')}}"></a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12">
				<div class="row mt-4 d-flex justify-content-center align-items-center">
					<div class="col-md-5 col-sm-12 order-sm-1">
						<img src="{{asset('imagenes/kinto/cotizador-online.svg')}}">
					</div>
					<div class="col-md-7 col-sm-12">
						<h1 class="title2 ml-2">Cotizador Online</h1>
						<p class="ml-2 mb-5" style="font-size: 21px">Contanos que estás buscando para ofrecerte la mejor opción a tu Plan.</p>
						<a class="ml-2" href="https://www.kintomobility.com.ar/cotizador" target="_blank">Ir al Cotizador <i class="fas fa-arrow-right"></i> </a>
					</div>
				</div>
				<hr class="my-5">
				<div class="row mt-4 d-flex justify-content-center align-items-center">
					<div class="col-md-5 col-sm-12">
						<img src="{{asset('imagenes/kinto/experiencias.svg')}}">
					</div>
					<div class="col-md-7 col-sm-12">
						<h1 class="title2 ml-2">Experiencia KINTO</h1>
						<p class="ml-2 mb-5" style="font-size: 21px">Pensamos en vos, por eso armamos experiencias para que las hagas propias y seas pate de la comunidad KINTO.</p>
						<a class="ml-2" href="https://www.kintomobility.com.ar/experiencias" target="_blank">Descubrir Experiencias <i class="fas fa-arrow-right"></i> </a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="mb-5 pb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="https://www.kintomobility.com.ar/" target="_blank" class="btn-cotizar text-center">Conocer más <i class="fas fa-arrow-right"></i> </a>
				</div>
			</div>
		</div>
	</section>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('.owl-carousel.owl-carousel-pasos-mobility').owlCarousel({
		      stagePadding: 0,
		      loop:false,
		      margin:35,
		      nav:false,
		      autoplay: true,
		      autoPlaySpeed: 5000,
		      autoPlayTimeout: 5000,
		      autoplayHoverPause: true,
		      pagination: false,
		      dots: false,
		      items : 3,
		      responsive:{
		          0:{
		              items:1
		          },
		          600:{
		              items:3
		          },
		          792:{
		              items:4
		          }
		      }
	  	})
	});
</script>
@stop