@extends('layout')


@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		<section>
			<div style="border: solid 3px black;" >
				<img src="/imagenes/plan_de_ahorro/tpa_banner.jpg" class="img-responsive" alt="Cinque Terre">
			</div>
		</section>
			<section>
				<div class="container" style="padding-right: 55px; padding-left: 55px;">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="page-header">
							  <h2 style="font-weight: bold;">ACCEDÉ A TU TOYOTA DE LA FORMA MÁS CONVENIENTE <br><small style="font-weight: bold;">¡TENEMOS UN PLAN PARA VOS!</small></h2>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
				<div class="row">
					<div class="col-md-4">
				        <div href="/modelos/corolla" class="thumbnail thumbnail-no-bg thumbnail-no-border" style="background-color: #f5f5f5">
				          <img src="/imagenes/tpa/etios-hb.png" alt="...">
				          <div class="caption text-center">
				          	<center>
				            <img src="/imagenes/tpa/logo-etios.png" class="img-responsive">
				          	</center>
				            <hr>
				            <ul class="list-unstyled">
				            	<li>
				            		<a style="font-size: 20px" href="#" class="text-uppercase">Plan Etios 100%</a>
				            	</li>
				            </ul>
				          </div>
				        </div>          
			      	</div>
			      	<div class="col-md-4">
				        <div href="/modelos/corolla" class="thumbnail thumbnail-no-bg thumbnail-no-border" style="background-color: #f5f5f5">
				          <img src="/imagenes/tpa/corolla.png" alt="...">
				          <div class="caption text-center">
				          	<center>
				            <img src="/imagenes/tpa/logo-corolla.png" class="img-responsive">
				          	</center>
				            <hr>
				            <ul class="list-unstyled">
				            	<li>
				            		<a style="font-size: 20px" href="#" class="text-uppercase">Plan Corolla 100%</a>
				            	</li>
				            </ul>
				          </div>
				        </div>          
			      	</div>
			      	<div class="col-md-4">
				        <div href="/modelos/corolla" class="thumbnail thumbnail-no-bg thumbnail-no-border" style="background-color: #f5f5f5">
				          <img src="/imagenes/tpa/hilux.png" alt="...">
				          <div class="caption text-center">
				          	<center>
				            <img src="/imagenes/tpa/logo-hilux.png" class="img-responsive">
				          	</center>
				            <hr>
				            <ul class="list-unstyled">
				            	<li>
				            		<a style="font-size: 20px" href="#" class="text-uppercase">Plan Hilux 4x4 DX 100%</a>
				            	</li>
				            	<li>
				            		<a style="font-size: 20px" href="#" class="text-uppercase">Plan Hilux 4x2 DX 70/30</a>
				            	</li>
				            </ul>
				          </div>
				        </div>          
			      	</div>
				</div>
				</div>
			</section>
			<section>
				<div class="container">
				<div class="row well">
					<div class="col-md-4">
						<div class="thumbnail thumbnail-no-bg thumbnail-no-border">
			                <div class="caption caption-default">
			                	<h1 class="text-center"><i class="fa fa-car" style="font-size: 90px; color: black;"></i></h1>
			                    <h4 class="text-center">Adjudicados</h4>
			                    <p class="text-justify">
			                      Si querés subirte ya a tu nuevo Toyota, consultá por nuestros planes adjudicados 
			                    </p>
			                    <center>
			                    	
			                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modal_adjudicados">VER LISTADO</a>
			                    </center>
			                </div>
            			</div>
					</div>
					<!-- Modal ADJUDICADOS-->
					<div id="modal_adjudicados" class="modal" role="dialog">
					  <div class="modal-dialog" style="width: 100%">
					    <!-- Modal content-->
					    <div class="modal-content" >
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">LISTADO DE PLANES ADJUDICADOS</h4>
					      </div>
					      <div class="modal-body">
					        <table class="table table-hover">
							    <thead>
							      <tr>
							        <th>Firstname</th>
							        <th>Lastname</th>
							        <th>Email</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>John</td>
							        <td>Doe</td>
							        <td>john@example.com</td>
							      </tr>
							      <tr>
							        <td>Mary</td>
							        <td>Moe</td>
							        <td>mary@example.com</td>
							      </tr>
							      <tr>
							        <td>July</td>
							        <td>Dooley</td>
							        <td>july@example.com</td>
							      </tr>
							    </tbody>
							  </table>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
					      </div>
					    </div>

					  </div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail thumbnail-no-bg thumbnail-no-border">
			                <div class="caption caption-default">
			                	<h1 class="text-center"><i class="fa fa-users" style="font-size: 90px; color: black;"></i></h1>
			                    <h4 class="text-center">Agrupados</h4>
			                    <p class="text-justify">
								Tenemos a disposición planes de ahorro con avance de cuotas listos para ser licitados.			                    </p>
			                    {{-- <a href="/posventa" class="btn btn-toyota">VER</a> --}}
			                </div>
            			</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail thumbnail-no-bg thumbnail-no-border">
			                <div class="caption caption-default">
			                	<h1 class="text-center"><i class="fa fa-laptop" style="font-size: 90px; color: black;"></i></h1>
			                    <h4 class="text-center">Licitación Online</h4>
			                    <p class="text-justify">
			                    Completá online el formulario de pre-licitación para el próximo acto de adjudicación.
			                    {{-- <a href="/posventa" class="btn btn-toyota">VER</a> --}}
			                </div>
            			</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div style="width: calc(100% - 2px );
								    border: solid 1px #d8d8d8;
								    border-radius: 4px;
								    padding:10px; font-size: 15px;
								    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
								    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
								    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
							<b>Próximo Vencimiento:</b> Sr. Cliente el próximo vencimiento de su cuota es el <b>10/12/2018.</b>
						</div>
					</div>		
				</div>
				</div>
			</section>
			<hr>
			<section>
				<div class="container">
				<div class="row">
					{{-- <div class="col-md-12">
						<img src="/imagenes/tpa/team.png" class="img-responsive">
					</div> --}}
					<blockquote style="border-left: 5px solid #e81f39;">
						<div class="row">
							<div class="col-md-2">
								<i class="fa fa-home" style="font-size: 100px"></i> 
							</div>		
							<div class="col-md-10">
								<h3><b>Atención a domicilio</b></h3>
					  			<p>Ofrecemos asesoramiento comercial en domicilio, laboral o particular. Conocé nuestro equipo y concertá una entrevista ahora!</p>
							</div>		
						</div>
					</blockquote>
				</div>
				</div>
			</section>
			<hr>
			<section>
				<div class="row">
					<div class="container">
					<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<div class="fb-page" data-href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/">Toyota Plan de Ahorro - Derka y Vargas</a></blockquote></div>
					</div>
					</div>
				</div>
			</section>

			<section class="mar-top-40">
				<div class="container">
				<div class="row">
					<div class="col-md-6" style="min-height: 400px; " id="map" ></div>
					<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
						{{-- <h2 class="bold" style="margin-top: 0px;">Sucursales</h2>
						<div style="margin-left: 5px; font-size: 16px;"><i class="fa fa-clock-o"></i> <b>Lunes a Viernes</b> de 8 a 13 & 15.30 a 19.30 - <b>Sábados</b> de 8 a 12.30</div>
						<div style="font-size: 22px">
							<ul class="list-unstyled list-locations">
								@foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
									<li>
										<a href="#" onclick="goto(event, {{$sucursal->map_lat}},{{ $sucursal->map_lng }})"><img src="/imagenes/icons/map-marker.png" style="width: 22px; margin-bottom: 4px;">Plan de Ahorro {{$sucursal->localidad}}</a><br>
										<div style="font-size: 15px; padding-left: 22px;">{{ $sucursal->direccion }}</div>
										<div style="font-size: 15px; padding-left: 22px;"><i class="fa fa-phone-square" aria-hidden="true"></i> {{ $sucursal->telefono }}</div>
									</li>
								@endforeach
							</ul>
						</div> --}}
						<div class="contact-details">
		                    <div class="media">
		                        <div class="media-left">
		                            <i class="fa fa-map-marker"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4>DIRECCIÓNES SUCURSALES</h4>
		                            @foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
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
		                            @foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
										<p><b>{{$sucursal->localidad}}</b> - <a href="tel:{{$sucursal->telefono}}">{{$sucursal->telefono}}</a></p>
									@endforeach
		                        </div>
		                    </div>
		                </div>
					</div>
				</div>
				</div>
			</section>
			<hr>
			<section>
				<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div style="width: calc(100% - 2px );
								    border: solid 1px #d8d8d8;
								    border-radius: 4px;
								    padding:10px; font-size: 15px;
								    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
								    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
								    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);">
							<b>Próximo Vencimiento:</b> Sr. Cliente el próximo vencimiento de su cuota es el <b>10/12/2018.</b>
						</div>
					</div>		
				</div>
				</div>
			</section>
			<br>
		</div>
    </article>
@stop

@section('script')
<script>

	//---------------Facebook Api TPA------------------------------------------------------//
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	//---------------End-----------------------------------------------------------------//

	//---------------Google Maps------------------------------------------------------//
	var sucursales = {!! \App\Helpers\Helper::getSucursalesPlanDeAhorro() !!};
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
    	var newPos = new google.maps.LatLng(lat,lng);
    	map.setOptions({center:newPos,zoom:15});
    }
    //------End Google Maps.---------------------------------------------------//
</script>
@stop