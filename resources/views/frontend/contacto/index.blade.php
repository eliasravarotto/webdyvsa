@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Contacto</title>
  <meta name="description" content="Derka y Vargas Datos de Contacto, telefono, email, direccion">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/contacto" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CONTACTO DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
<section>
	<div class="mu-call-to-action mu-call-to-action-dark bg-header-contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area d-flex justify-content-space-around">
						<div class="mu-call-to-action-left">
							<h1 class="text-white"><b>CONTACTO</b></h1>
							<p class="visible-md visible-lg" style="color: #d8d8d8; font-size: 18px">Dejanos un email y estaremos en contacto con usted a la brevedad, o acercate a una de nuestras sucursales.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<article>
		<section class="py-4">
			<div class="row">
				<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 py-2">
					@if (session('status'))
						<div class="alert alert-warning alert-dismissible toast" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('status') }}
						</div>
					@endif
					{{env('GOOGLE_RECAPTCHA_KEY')}}
					@include('frontend.includes.contact-form', $data=['from' => 'contacto'])
			  		<div style="margin-top: 35px; min-height: 400px;" id="map">
			  			<iframe class="iframe_map" id="map_suc_1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.47966577166!2d-58.952102685279336!3d-27.423158221289846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450dbbf2426f97%3A0xf7ab8afd16b0dc53!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060536621" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1773.9799215466412!2d-61.17127152760032!3d-27.220410546402633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94475b80fed5f86f%3A0xfd9c8362d6544c0c!2sDerka+Y+Vargas+S.A.+(Concesionario+oficial+Toyota)!5e0!3m2!1ses-419!2sus!4v1550060114365" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.8407885235997!2d-60.71369898527515!3d-27.567451227466535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9447a9d0f396d03d%3A0xac443377112e2883!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060343890" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<iframe class="iframe_map" id="map_suc_7" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.2647200368452!2d-58.96999695505047!3d-27.43627568040692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4df5e94c2a72a719!2sToyota!5e0!3m2!1ses-419!2sar!4v1567703941670!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						<iframe class="iframe_map" id="map_suc_14" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.2647200368452!2d-58.96999695505047!3d-27.43627568040692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4df5e94c2a72a719!2sToyota!5e0!3m2!1ses-419!2sar!4v1567703941670!5m2!1ses-419!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			  		</div>
				</div>
				<div class="col-lg-6  col-md-6  col-sm-12 col-xs-12 py-2" id="sucursales">
					<div class="contact-details">
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-map-marker"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIÓNES</h4>
	                            @foreach(\App\Helpers\Helper::getSucursalesConvencional() as $sucursal)
									<p><b>{{$sucursal->nombre}}</b> - <a href="#" style="color: black" onclick="mostrarMapa(event, {{$sucursal->id}})">{{$sucursal->direccion}}</a></p>
								@endforeach
								<p><b>Plan de Ahorro Resistencia</b> - <a href="#" style="color: black" onclick="mostrarMapa(event, 7)">AV. Sarmiento 1890</a></p>
	                        </div>
	                    </div>
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-phone"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>NÚMEROS DE TELÉFONO</h4>
	                            @foreach(\App\Helpers\Helper::getSucursalesConvencional() as $sucursal)
									<p><b>{{$sucursal->nombre}}</b> - <a href="tel:{{$sucursal->telefono}}">{{$sucursal->telefono}}</a></p>
								@endforeach
									<p><b>Plan de Ahorro Resistencia</b> - <a href="tel:03624433300">(0362) 443 330 0</a></p>
	                        </div>
	                    </div>
	                    <div class="media mb-0">
	                        <div class="media-left">
	                            <i class="fa fa-envelope"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIONES DE EMAIL</h4>
	                            <p> <b>Ventas:</b> <a href="mailto:ventas@derkayvargas.com.ar">ventas@derkayvargas.com.ar</a></p>
	                            <p> <b>Plan de Ahorro</b> <a href="mailto:toyotaplan@derkayvargas.com.ar">toyotaplan@derkayvargas.com.ar</a></p>
	                            <p> <b>Administración:</b> <a href="mailto:administracion@derkayvargas.com.ar">administracion@derkayvargas.com.ar</a></p>
	                            <p> <b>Gestoría:</b> <a href="mailto:gestoria@derkayvargas.com.ar">gestoria@derkayvargas.com.ar</a></p>
	                            <p> <b>Posventa Sáenz Peña</b> <a href="mailto:posventa-sp@derkayvargas.com.ar">posventa-sp@derkayvargas.com.ar</a></p>
	                            <p> <b>Posventa Resistencia</b> <a href="mailto:posventa-resistencia@derkayvargas.com.ar">posventa-resistencia@derkayvargas.com.ar</a></p>
	                            <p> <b>Posventa Charata</b> <a href="mailto:posventa-charata@derkayvargas.com.ar">posventa-charata@derkayvargas.com.ar</a></p>
	                            <p> <b>RSE</b> <a href="mailto:rse@derkayvargas.com.ar">rse@derkayvargas.com.ar</a></p>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>
		</section>
	</article>
</div>
@stop

@section('script')
<script type="text/javascript">

    $('.iframe_map').hide();
    $('#map_suc_1').show();

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