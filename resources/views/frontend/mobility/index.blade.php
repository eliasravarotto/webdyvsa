@extends('frontend.layout')

@section('title_and_meta')
  <title>Toyota Mobility Services es la nueva plataforma de servicios de movilidad</title>
  <meta name="description" content="Presentamos Toyota Mobility Services es la nueva plataforma de servicios de movilidad.
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
	.color-mobility{
		color: #65b7eb;
	}
	.title-section-mobility:before{
		background-color: #65b7eb;
	}

	.owl-carousel .owl-item img {
    	display: inline;
    }
    .pasos-reserva span{
    	color: #9f8358;
    }
</style>
@stop

@section('content')

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 py-2 px-3">
					<img src="{{ asset('imagenes/mobility/header.png') }}" class="img-fluid">
				</div>
				<div class="col-md-8 py-3 px-4">
					<h1 class="color-mobility">El Toyota que querés, por el tiempo que necesitás.</h1>
					<p>Podés estar muy conforme con un Etios para uso diario, pero el fin de semana podrías necesitar una Hilux o puede que quieras ir con tus amigos a jugar al fútbol, y entonces darías todo por tener una Innova y sus 8 asientos. Nuestro objetivo es adaptarnos a tu estilo de vida, por esa razón creamos Toyota Mobility Services.</p>
				</div>
			</div>
		</div>				
	</section>

	<section class="py-3" id="mobility-que-es-y-como-funciona">
		<div class="container">
			<div class="title-section title-section-mobility">
	        	<h3>¿QUÉ ES Y CÓMO FUNCIONA?</h3>
	      	</div>
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<p><b>Toyota Mobility Services</b> es el nuevo sistema de alquiler de autos lanzado por TOYOTA, 
					el cual posibilita el acceso a cualquier vehículo de la marca sin la necesidad de que lo compres, es decir, podes alquilar un vehículo por una hora, un día, un fin de semana, un mes etc. </p>
					<p>En <b>Derka y Vargas</b> nos sumamos a este servicio, el cual se encuentra disponible mediante una app tanto para Android como para iOS. Vas a poder elegir cualquier modelo de la marca Toyota y retirarlo desde cualquiera de las <b>Estaciones Mobility</b>.</p>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-xs-12 col-md-12">
					<p>El servicio estará disponible mediante una app tanto para Android como para iOS, vas a poder elegir cualquier modelo de la marca Toyota y retirarlo desde cualquiera de las “Estaciones Mobility”.</p>
				</div>
			</div> --}}
		</div>
	</section>

	<section class="py-3">
		<div class="container pasos-reserva">
			<h3 class="text-center">RESERVÁ UN TOYOTA <br><small>EN 4 SENCILLOS PASOS</small>  </h3>
			<div class="owl-carousel owl-carousel-pasos-mobility">

		        <div class="item">
	                <div class="mainflip">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
	                                <img class="img-fluid image lazy" data-src="{{asset('imagenes/mobility/01.png')}}" alt="card image lazy">
	                                <p class="card-text text-justify mx-1"> 
	                                	<b class="color-mobility">1</b>
	                                	Descargá la app y completá el formulario con tus datos personales, licencia de conducir y tarjeta de crédito válida y vigente*.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>

		        <div class="item">
	                <div class="mainflip">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center">
	                                <img class="img-fluid image lazy" data-src="{{asset('imagenes/mobility/02.png')}}" alt="card image lazy">
	                                <p class="card-text text-justify mx-1"> 
	                                	<b class="color-mobility">2</b>
	                                	Ingresá por cuánto tiempo lo necesitás. Vas a poder reservar por hora o por día, según el uso que quieras darle.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>

		        <div class="item">
	                <div class="mainflip">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center">
	                                <img class="img-fluid image lazy" data-src="{{asset('imagenes/mobility/03.png')}}" alt="card image lazy">
	                                <p class="card-text text-justify mx-1"> 
	                                	<b class="color-mobility">3</b>
	                                	Filtrá por categoría de vehículos, elegí entre todos nuestros vehículos el que mejor se adapte a tus necesidades.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>

		        <div class="item">
	                <div class="mainflip">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center">
	                                <img class="img-fluid image lazy" data-src="{{asset('imagenes/mobility/04.png')}}" alt="card image lazy ">
	                                <p class="card-text text-justify mx-1"> 
	                                	<b class="color-mobility">4</b>
	                                	Indicá dónde querés retirarlo y dónde lo vas a devolver. Puede ser en cualquiera de las estaciones Mobility. 
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>

		        <div class="item">
	                <div class="mainflip">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center">
	                            <div class="card-body text-center">
	                                <img class="img-fluid image lazy" data-src="{{asset('imagenes/mobility/05.png')}}" alt="card image lazy">
	                                <p class="card-text text-justify mx-1"> 
	                                	<b class="color-mobility"><i class="fa fa-check" aria-hidden="true"></i></b>
	                                	¡Y listo! Ya podés manejar tu Toyota. 
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
		        </div>
		    </div>
		</div>
	</section>

	<section class="py-3">
		<iframe width="100%" height="400px" src="https://www.youtube.com/embed/zlU-fhhDFVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</section>

	<section class="py-5">
		<div class="container">
		<div class="row">
			<div class="col-md-5 py-2">
				<img data-src="{{asset('imagenes/mobility/toyota-mobility-services.jpg')}}" class="img-fluid lazy">
			</div>
			<div class="col-md-7 text-center py-2">
				<h1 class="color-mobility">Descarga la App en</h1>
				<ul class="d-flex list-unstyled align-items-center justify-content-center py-2 flex-wrap" >
					<li class="mx-2 mb-2">
						<a href="https://play.google.com/store/apps/details?id=com.goodtravelsoftware.sharecar.toyotaargentina">
							<img class="lazy" data-src="{{asset('imagenes/mobility/play-store.png')}}">
						</a>
					</li>
					<li class="mx-2 mb-2">
						<a href="https://apps.apple.com/ar/app/toyota-mobility-services/id1436690858"><img class="lazy" data-src="{{asset('imagenes/mobility/app-store.png')}}"></a>
					</li>
				</ul>
			</div>
		</div>
		</div>
	</section>

	<section class="pt-3 pb-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="https://www.toyotamobility.com.ar/" target="_blank" class="mu-btn mu-mobility-btn">LEER MÁS</a>
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