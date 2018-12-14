@extends('layout')
<style type="text/css">
.image-service .is-desc {
    position: absolute;
    padding: 60px;
    margin-left: 65%;
    background: #fff;
    top: 50%;
    width: 35%;
    z-index: 2;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-box-shadow: 0 23px 40px rgba(0,0,0,.15);
    box-shadow: 0 23px 40px rgba(0,0,0,.15);
}
.image-service .is-desc-sm-xs {
    position: absolute;
    padding: 60px;
    margin-left: 65%;
    background: #fff;
    top: 50%;
    width: 35%;
    z-index: 2;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-box-shadow: 0 23px 40px rgba(0,0,0,.15);
    box-shadow: 0 23px 40px rgba(0,0,0,.15);
}

.image-service .is-image {
    width: 70%;
    height: 100%;
    background-size: cover;
    background-position: 50%;
}
.image-service {
    position: relative;
    height: 550px;
}

.row-well{
	background: #f4f4f4;
background: -moz-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, #ffffff), color-stop(7%, #fefefe), color-stop(43%, #f6f6f6), color-stop(100%, #ededed));
background: -webkit-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -o-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: -ms-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
background: linear-gradient(to right, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );
	height: 100px;
}

.list-locations{
	margin-top: 20px;
}
.list-locations > li{
	padding-bottom: 15px;
}

</style>

@section('content')


	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		<section>
			<div style="width: 100%">
				<img src="http://www.yacopinisa.com/wp-content/uploads/2017/08/slide-psvtas4.jpg" class="img-responsive" alt="Cinque Terre">
			</div>
		</section>

		<section style="width: 98.8%">
			<div class="row row-well" style=" display: flex; justify-content: center; align-items: center; flex-wrap: nowrap;">
				<div class="" style="width: 50%; display: flex; justify-content: center; padding-left: 50px;">
					<h2>
						<span>
							¿Necesitás un servicio?
						</span>
					</h2>
				</div>
				<div style="width: 50%;display: flex; justify-content: center; padding-right: 50px;">
					<a href="/turno-servicios/create" class="btn btn-toyota btn-lg">SOLICITAR TURNO</a>
				</div>
			</div>
		</section>

		<section style="margin-top: 50px; margin-bottom: 50px">
			<div class=" container">
				
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img class="img-responsive" src="/imagenes/posventa/gratis.jpg" alt="Cinque Terre">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="well">
					<h3>DETALLES</h3>
					{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div> --}}
					{{-- <form action="/" method="POST">
				        {{ csrf_field() }}
				        <textarea name="summernoteInput" class="summernote"></textarea>
				        <br>
				        <button type="submit">Submit</button>
				    </form> --}}
				</div>
			</div>
			</div>
		</section>
		
		<section class="pad-top-50 pad-bot-50 arrow_box">
			<div class="container">
				<div class="table-responsive">          
					<table class="table table-striped">
						<thead>
						  <tr>
						    <th style="text-align: center; font-size: 20px;"></th>
						    <th style="text-align: center; font-size: 20px;">COROLLA</th>
						    <th style="text-align: center; font-size: 20px;">ETIOS</th>
						    <th style="text-align: center; font-size: 20px;">HILUX 4x2</th>
						    <th style="text-align: center; font-size: 20px;">Hilux/SW4 4x4</th>
						  </tr>
						</thead>
						<tbody>
							@foreach($servicios as $servicio)
							<tr>
								<td style="text-align: center;font-size: 20px;"><b>{{ $servicio->nombre }}</b></td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->corolla }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->etios }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux_sw4_4x4 }}</td>
							</tr>
						  	@endforeach
						</tbody>
					</table>
	  			</div>
			</div>
		</section>

		<section class="pad-top-50 pad-bot-50" style="height: auto;">
			<div class="container">
				<h2 class="text-center bold">Servicio al Cliente</h2>
				<h3 class="text-center gray-1">Elegir un TOYOTA es mucho más que elegir un vehículo</h3>
				<div class="features row" >
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center bold"><i class="fa fa-users" aria-hidden="true"></i> Elegirnos</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7;">
							En Derka y Vargas le ofrecemos servicios fieles al compromiso y como garantía de calidad en todas nuestras sucursales de Chaco.
						</p>
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center bold"><i class="fa fa-certificate" aria-hidden="true"></i> Técnicos Especializados</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Toyota respalda todos sus vehículos con garantía de 3 años o 100.000 km (lo que ocurra primero) y es transferible a nuevos propietarios. Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquier de nuestras sucursales en Chaco donde gustosamente procesarán su solicitud.</p> --}}
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Técnicos Especializados. Profesionales constantemente capacitados bajo estándares internacionales.</p>
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center bold"><i class="fa fa-certificate" aria-hidden="true"></i> Repuestos & Accesorios</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Los repuestos originales son los que aseguran el correcto funcionamiento del vehículo. Contar con los mismos es condición necesaria para que la garantía siga vigente, logrando que su Toyota sea siempre un Toyota.</p>
					</div>	
				</div>
				<div class="features row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<h3 class="text-center bold"><i class="fa fa-coffee" aria-hidden="true"></i> Living de Espera</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Toyota respalda todos sus vehículos con garantía de 3 años o 100.000 km (lo que ocurra primero) y es transferible a nuevos propietarios. Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquier de nuestras sucursales en Chaco donde gustosamente procesarán su solicitud.</p> --}}
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Comodidad total durante la espera.</p>
					</div>	
					<div class="col-md-4 col-sm-6 col-xs-6">
						<h3 class="text-center bold"><i class="material-icons">local_car_wash</i> Lavado Incluido</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Lavado incluido en el mantenimiento..</p>
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center bold"><i class="fa fa-wrench" aria-hidden="true"></i> Herramientas Especiales</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">
							Bahía de trabajo especialmente acondicionada con herramental especial.
						</p>
					</div>	
				</div>
				<div class="row well" style="padding: 15px 35px 15px 35px; margin-top: 25px;">
					<div class="col-md-7" style="padding: 0px;">
						<p style="font-size: 20px; font-weight: bold;">La calidad de siempre, más coveniente que nunca.</p>
						<p style="text-align: justify;">Nadie conoce mejor tu Toyota como Toyota, por eso acercate a cualquiera de nuestras sucursales con servicio de Posventa para contar con el respaldo de un servicio técnico oficial. </p>	
						<a href="/turno-servicios/create" class="btn btn-toyota">SOLICITAR TURNO</a>
					</div>
					<div class="col-md-offset-1 col-md-4 via-whatsapp" style="padding: 0px;">
						<div style="width: 100%; display: flex; justify-content: space-around; align-items: center;">
							<div class="text-right">
								<p style="font-size: 20px; font-weight: bold;">Solicitá un turno vía Whatsapp</p>
								<b style="font-size: 25px;">3625-270614</b>
							</div>
							<div>
								<img src="{{asset('imagenes/icons/whatsapp-icon.png')}}" style="height: 75px;">								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pad-bot-50 pad-top-50 section-mant-exp" style="background-color: #fb7d7df5">
			<div class="container">
				<div class="row section-body">
					<div class="col-md-12 col-sm-12 image-service is-right-text">
						<div class="is-image reveal reveal_visible" style="background-image: url('/imagenes/posventa/mant_exp.png')">
						</div>
						<div class="is-desc reveal reveal_visible visible-md visible-lg">
							<h2 class=" case27-primary-text">Mantenimiento Express</h2>
							<p class="text-justify" style="font-size: 15px; ">Presentamos Mantenimiento Express, una opción de servicio rápido con las mismas características, calidad y precio de un servicio convencional, para generar la más alta conveniencia y satisfacción. Con las herramientas adecuadas y con un alto nivel de capacitación y entrenamiento los técnicos pueden cumplir con el proceso de mantenimiento de manera eficiente, logrando el mismo trabajo en 60 minutos.</p>
						</div>
						<div class="is-desc-sm-xs reveal reveal_visible hidden-md hidden-lg">
							<h2 class="">Mantenimiento Express</h2>
							<p style="font-size: 15px;">Presentamos Mantenimiento Express, una opción de servicio rápido con las mismas características, calidad y precio de un servicio convencional, para generar la más alta conveniencia y satisfacción. Con las herramientas adecuadas y con un alto nivel de capacitación y entrenamiento los técnicos pueden cumplir con el proceso de mantenimiento de manera eficiente, logrando el mismo trabajo en 60 minutos.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="pad-top-50 pad-bot-50">
			<div class="container">
				<div class="row">
					<div class="col-md-6" style="min-height: 400px; " id="map" ></div>
					<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
						<h2 class="bold" style="margin-top: 0px;">Sucursales</h2>
						<div style="margin-left: 5px; font-size: 16px;"><i class="fa fa-clock-o"></i> <b>Lunes a Viernes</b> de 8 a 12 & 15.30 a 19.30 - <b>Sábados</b> de 8 a 12.30</div>
						<div style="font-size: 22px">
							<ul class="list-unstyled list-locations">
								@foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
									<li>
										<a href="#" onclick="goto(event, {{$sucursal->map_lat}},{{ $sucursal->map_lng }})"><img src="/imagenes/icons/map-marker.png" style="width: 22px; margin-bottom: 4px;">{{$sucursal->nombre}}</a>
										<div style="font-size: 15px; padding-left: 22px;">{{ $sucursal->direccion }}</div>
										<div style="font-size: 15px; padding-left: 22px;"><i class="fa fa-phone-square" aria-hidden="true"></i> {{ $sucursal->telefono }}</div>
									</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

</article>
	

@stop

@section('script')

<script>
	$(document).ready(function() {
        $('.summernote').summernote();
    });	

	var sucursales = {!! \App\Helpers\Helper::getSucursalesPosventa() !!};
	// var locations = [
 //      [sucursales[0].nombre, sucursales[0].map_lat, sucursales[0].map_lng, 4],
 //      [sucursales[1].nombre, sucursales[1].map_lat, sucursales[1].map_lng, 3],
 //      [sucursales[2].nombre, sucursales[2].map_lat, sucursales[2].map_lng, 2],
 //      // [sucursales[3].nombre, sucursales[3].map_lat, sucursales[3].map_lng, 1],
	// ];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 8,
      center: new google.maps.LatLng(-27.041598, -60.149756),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < sucursales.length; i++) {  
      marker = new google.maps.Marker({
        //position: new google.maps.LatLng(locations[i][1], locations[i][2]),
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
    	var newPos = new google.maps.LatLng(lat,lng);
    	map.setOptions({center:newPos,zoom:15});
    }

    </script>
@stop
