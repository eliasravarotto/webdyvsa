@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Plan de Ahorro</title>
  <meta name="description" content="Plan de Ahorro Toyota Resistencia, Charata, Saenz Peña, Villa Angela, Toyota Cuotas Sin Interes, Plan sin interes Toyota, Plan de Ahorro Etios, Plan de Ahorro Hilux, Plan de Ahorro Yaris, Plan de Ahorro Corolla, Que es un plan de ahorro. Autos 100% financiados sin interes. Toyota 100% financiado">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/plan-de-ahorro" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="PLAN DE AHORRO DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
	
	

	@media only screen and (max-width : 768px) {
		.preguntas-frecuentes{ padding: 0 40px; }
	}

	.owl-carousel .owl-item img {
    	display: inline-block;
 	}

 	.table-detal-plan thead tr th{
 		min-width: 140px;
 	}
</style>
@stop

@section('content')
	<article>
		<section>
			<img class="img-fluid" src="https://derkayvargas.com/storage/fotos/B76txHCSvwvx2kS7zRVZFFTCOIgBrhSLICyf73uX.png" alt="Nuevo plan de ahorro toyota. Accede a on 0KM en Derka y Vargas Chaco" style="width: 100%">
		</section>

		<!-- PLANES LISTA DE PRECIOS -->
		@include('frontend.plan-de-ahorro.includes.planes')

		<!-- PLANES AVANZADOS Y ADJUDICADOS -->
		@include('frontend.plan-de-ahorro.includes.oportunidades')

		<!-- TEAM SECTION -->
		<section id="team-tpa" class="py-4 bg-">
		    <team-tpa></team-tpa>
		</section>
		
		<!-- VIDEO QUE ES UN TPA -->
		<section class="py-4">
			@include('frontend.plan-de-ahorro.includes.que-es-un-tpa')
		</section>

		<!-- FACEBOOK - FORMULARIO DE CONTACTO -->
		<section class="py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 py-4" id="form-contacto">
						<h3 class="mt-0">Consultá por un plan de ahorro <br>
						<small class="text-muted">Un asesor se pondrá en contacto con usted a la brevedad.</small></h3>
						@include('frontend.plan-de-ahorro.includes.contact-form', $data=['from' => 'tpa'])
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 text-center py-4">
						<div class="fb-page" 
						     data-href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" data-tabs="timeline" data-width="450" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/">Toyota Plan de Ahorro - Derka y Vargas</a></blockquote></div>
					</div>
				</div>
			</div>
		</section>

		<!-- GOOGLE MAPS -->
		<section class="py-3">
			<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="map">
			  			<iframe class="iframe_map" id="map_suc_6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<iframe class="iframe_map" id="map_suc_7" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.2647200368452!2d-58.96999695505047!3d-27.43627568040692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4df5e94c2a72a719!2sToyota!5e0!3m2!1ses-419!2sar!4v1567703941670!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<iframe class="iframe_map" id="map_suc_8" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1773.9799215466412!2d-61.17127152760032!3d-27.220410546402633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94475b80fed5f86f%3A0xfd9c8362d6544c0c!2sDerka+Y+Vargas+S.A.+(Concesionario+oficial+Toyota)!5e0!3m2!1ses-419!2sus!4v1550060114365" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_9" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.8407885235997!2d-60.71369898527515!3d-27.567451227466535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9447a9d0f396d03d%3A0xac443377112e2883!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060343890" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
					<div class="contact-details">
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-map-marker"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIÓNES</h4>
	                            @foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
									<p><b>{{$sucursal->nombre}}</b> - <a href="#" style="color: black" onclick="mostrarMapa(event, {{$sucursal->id}})">{{$sucursal->direccion}}</a></p>
								@endforeach
	                        </div>
	                    </div>
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-phone"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>NÚMEROS DE TELÉFONO</h4>
	                            @foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
									<p><b>{{$sucursal->localidad}}</b> - <a href="tel:{{$sucursal->telefono}}">{{$sucursal->telefono}}</a></p>
								@endforeach
	                        </div>
	                    </div>
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-envelope"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIONES DE EMAIL</h4>
	                            <p>
	                                <a href="mailto:plandeahorro@derkayvargas.com.ar">plandeahorro@derkayvargas.com.ar</a>
	                            </p>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
			</div>
		</section>

    </article>
@stop

@section('script')
<script type="text/javascript">

	//---------------Facebook Api TPA------------------------------------------------------//
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	//---------------End-----------------------------------------------------------------//

	$(document).ready(function() {
	    if (window.location.href.indexOf("form-contacto") > -1) {
	      $('#input-cliente').focus();
	    }
	  });

	function toggleForm(){
		$('#tabla-agrupados').toggle()
		$('#form-agrupados').toggle()
		$('#btn-consultar-agrupados').hide()
		$('#btn-ver-listado-agrupados').show()
	}

	function toggleFormAdjudicados(){
		console.log('consuletar');
		$('#tabla-adjudicados').toggle()
		$('#form-adjudicados').toggle()
		$('#btn-consultar-adjudicados').hide()
		$('#btn-ver-listado-adjudicados').show()
	}

	function toggleListadoAgrupados(){
		$('#tabla-agrupados').toggle()
		$('#form-agrupados').toggle()
		$('#btn-ver-listado-agrupados').hide()
		$('#btn-consultar-agrupados').show()
	}

	function toggleListadoAdjudicados(){
		$('#tabla-adjudicados').toggle()
		$('#form-adjudicados').toggle()
		$('#btn-ver-listado-adjudicados').hide()
		$('#btn-consultar-adjudicados').show()
	}
	
    function saltarA(e, time){
    	e.preventDefault();
    	window.location.hash = '#video-container';
    	var vid = document.getElementById("video-explicativo");
     	vid.play();
     	vid.pause();
     	vid.currentTime = time;
     	vid.play();
    }

    function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}

	$('.iframe_map').hide();
    $('#map_suc_6').show();
    function mostrarMapa(e, id){
     	e.preventDefault();
     	$('.iframe_map').hide();
     	$('#map_suc_'+id).show();
     	$('html, body').animate({
	        scrollTop: $('#map').offset().top - 20 //#DIV_ID is an example. Use the id of your destination on the page
	    }, 'slow');
	}
</script>
@stop