@extends('layout')


@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>
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
					<iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
									<p><b>{{$sucursal->localidad}}</b> - <a href="#" style="color: black" onclick="goto(event, {{$sucursal->map_lat}},{{ $sucursal->map_lng }}); $(document).scrollTo('#map');">{{$sucursal->direccion}}</a></p>
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

<script>
	$(document).ready(function() {
        $('.summernote').summernote();
    });


	var sucursales = {!! \App\Helpers\Helper::getSucursales() !!};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-27.041598, -60.149756),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < sucursales.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(sucursales[i].map_lat, sucursales[i].map_lng),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

    function goto(e, lat, lng){
    	e.preventDefault();
    	console.log(lat+' - '+lng);
    	var newPos = new google.maps.LatLng(lat,lng);
    	map.setOptions({center:newPos,zoom:15});
    	document.getElementById('map').scrollIntoView();
    }

    </script>
@stop