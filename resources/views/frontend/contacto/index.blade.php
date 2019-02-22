@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	{{-- <navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk> --}}
	<div class="container">
	<article>
		<section class="pad-bot-25">
			<div class="row">
				<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
					<h2 class="text-center h1-titulo-form">CONTACTO<br>
						<small>Dejanos un email y estaremos en contacto con usted a la brevedad, o acercate a una de nuestras sucursales.</small>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-bot-25">
					@if (session('status'))
						<div class="alert alert-warning alert-dismissible toast" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('status') }}
						</div>
					@endif
					@include('frontend.contacto.form')
			  		{{-- <div style="margin-top: 35px; min-height: 400px;" id="map" ></div> --}}
			  		<div style="margin-top: 35px; min-height: 400px;" id="map">
			  			<iframe class="iframe_map" id="map_suc_1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.47966577166!2d-58.952102685279336!3d-27.423158221289846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450dbbf2426f97%3A0xf7ab8afd16b0dc53!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060536621" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1773.9799215466412!2d-61.17127152760032!3d-27.220410546402633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94475b80fed5f86f%3A0xfd9c8362d6544c0c!2sDerka+Y+Vargas+S.A.+(Concesionario+oficial+Toyota)!5e0!3m2!1ses-419!2sus!4v1550060114365" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.8407885235997!2d-60.71369898527515!3d-27.567451227466535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9447a9d0f396d03d%3A0xac443377112e2883!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060343890" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1052.760431621325!2d-58.97032383651992!3d-27.43655580252728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ff25acec2a6c7c5!2sDerka+y+Vargas+-+Toyota!5e0!3m2!1ses-419!2sus!4v1550060723653" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  		</div>
				</div>

				<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
					<div class="contact-details">
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-map-marker"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIÓNES SUCURSALES</h4>
	                            @foreach(\App\Helpers\Helper::getSucursales() as $sucursal)
									{{-- <p><b>{{$sucursal->localidad}}</b> - <a href="#" style="color: black" onclick="goto(event, {{$sucursal->map_lat}},{{ $sucursal->map_lng }}); $(document).scrollTo('#map');">{{$sucursal->direccion}}</a></p> --}}
									<p><b>{{$sucursal->localidad}}</b> - <a href="#" style="color: black" onclick="mostrarMapa(event, {{$sucursal->id}})">{{$sucursal->direccion}}</a></p>
								@endforeach
	                        </div>
	                    </div>
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-phone"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>NÚMEROS DE TELÉFONO</h4>
	                            @foreach(\App\Helpers\Helper::getSucursales() as $sucursal)
									<p><b>{{$sucursal->localidad}}</b> - <a href="tel:{{$sucursal->telefono}}">{{$sucursal->telefono}}</a></p>
								@endforeach
	                        </div>
	                    </div>
	                    <div class="media mb-0">
	                        <div class="media-left">
	                            <i class="fa fa-envelope"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIONES DE EMAIL</h4>
	                            @foreach(\App\Helpers\Helper::getSucursales() as $sucursal)
		                            <p>
		                                <a href="mailto:{{$sucursal->email}}">{{$sucursal->email}}</a>
		                            </p>
								@endforeach
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
	//---------------------------------------
	//SCRIPT API GOOGLE MAPS
	//----------------------------------------
	//var sucursales = [];

    // var map = new google.maps.Map(document.getElementById('map'), {
    //   zoom: 8,
    //   center: new google.maps.LatLng(-27.041598, -60.149756),
    //   mapTypeId: google.maps.MapTypeId.ROADMAP
    // });

    // var infowindow = new google.maps.InfoWindow();

    // var marker, i;

    // for (i = 0; i < sucursales.length; i++) {  
    //   marker = new google.maps.Marker({
    //     position: new google.maps.LatLng(sucursales[i].map_lat, sucursales[i].map_lng),
    //     map: map
    //   });

    //   google.maps.event.addListener(marker, 'click', (function(marker, i) {
    //     return function() {
    //       infowindow.setContent(locations[i][0]);
    //       infowindow.open(map, marker);
    //     }
    //   })(marker, i));
    // }

    // function goto(e, lat, lng){
    // 	e.preventDefault();
    // 	console.log(lat+' - '+lng);
    // 	var newPos = new google.maps.LatLng(lat,lng);
    // 	map.setOptions({center:newPos,zoom:15});
    // 	document.getElementById('map').scrollIntoView();
    // }
    //------------------------------------------


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