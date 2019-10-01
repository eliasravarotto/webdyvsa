@extends('layout')

@section('title_and_meta')
  <title>Servicios de Posventa Toyota</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa y Servicios de Postventa, Mantenimiento express, Plan de mantenimiento Toyota, Servicio técnico oficial Toyota">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/posventa" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="SERVICIOS DE POSVENTA DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

<style type="text/css">
p {
	font-size: 18px;
}
.row-well {
	background: #f4f4f4;
	background: -moz-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
	background: -webkit-gradient(left top, right top, color-stop(0%, #ffffff), color-stop(7%, #fefefe), color-stop(43%, #f6f6f6), color-stop(100%, #ededed));
	background: -webkit-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
	background: -o-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
	background: -ms-linear-gradient(left, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
	background: linear-gradient(to right, #ffffff 0%, #fefefe 7%, #f6f6f6 43%, #ededed 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=1);
	height: 100px;
}

.list-locations{
	margin-top: 20px;
}
.list-locations > li{
	padding-bottom: 15px;
}

.titleContainer {
    background-color: #0E436E;
    color: #fff;
    text-align: center;
    padding: 0px;
}

#garantia p{
	font-size: 16px;
}

#garantia ul li{
	font-size: 16px;
}

.arrow_box{
	border-bottom: 4px solid #51a8b1 !important;
}
.arrow_box:before {
	border-color: rgba(194,225,245,0) !important;
    border-top-color: #51a8b1 !important;
}

#modal-turno-wapp .modal-header{
	background-color: #ed3237;
	color: #fafafa;
}
#modal-turno-wapp .modal-header .close{
	opacity: 0.8;
}
#modal-turno-wapp .modal-header .close span{
	color: #fafafa;
}

.tabla-servicios th {
	background-color: #ee3237;
	color: #f1eeea;
}

/*--------------------------------------------------------------
TOYOTA RECALL
--------------------------------------------------------------*/
.toyota-recall p {
	color: #f7f7f7;
}

.toyota-recall h1 {
	color: white;
}

.toyota-recall a {
	color: white;
}

.toyota-recall .row{
	background:url({{asset('imagenes/posventa/recallbanner.jpg')}});
	background-size: cover;
	background-position: center;
	padding: 10rem 3rem;
}

@media(max-width:992px){
	.toyota-recall, .toyota-recall .row{
		padding:0px !important;
	}
	.toyota-recall .col-xs-12{
		padding: 3rem;
	}
}
.py-6{
	padding-bottom: 6rem;
	padding-top: 6rem;
}

</style>

@section('content')
	<article>
		<!---------------------------------------------------------------------
	    BANNER
	  	----------------------------------------------------------------------->
		<section>
			<div class="banner-ppal-posventa visible-md visible-lg" style="width: 100%">
				<img src="/imagenes/posventa/slide.jpg" class="img-responsive" alt="Servicios de posventa Toyota en Chaco, Resistencia, Charata, Villa Angela, Saenz Peña. Servicio Oficial de Toyota Derka y Vargas." title="Posventa Toyota en Chaco">
			</div>
		</section>

		<!---------------------------------------------------------------------
	    RECALL
	  	----------------------------------------------------------------------->
		<section>
			<div class="container py-6 toyota-recall">
				<div class="row">
					<div class="col-md-7 col-xs-12 vcenter">
	                    <p class="subtitle text-center">Recall</p>
	                    <h1 class="text-center">Llamado a Revisión Técnica</h1>
	                    <p class="text-center">Ahora podés averiguar si tu vehículo está alcanzado a una campaña<br> especial de servicio vigente, ingresando el número de Chasis o Patente.</p>
	                </div>
					<div class="col-md-4 col-xs-12 vcenter text-center">
							<a href="https://www.toyota.com.ar/servicios-y-accesorios/recall" target="_blank" class="btn btn-outline btn-default">CONSULTAR</a>
	                </div>
				</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    PRECIOS SERVICIOS
	  	----------------------------------------------------------------------->
		<section>
			<div class="container ">
				<div class="title-section">
					<h1>Elegí el mejor Servicio de Posventa</h1>
				</div>
				<p style="font-size: 1.7rem">Para que tu vehículo tenga la mayor eficiencia, vení al Servicio de Posventa Derka y Vargas y dejá tu Toyota en las mejores manos.</p>

				<div class="mt-3">
					<p style="font-size: 2rem">PRECIOS VIGENTES</p>
					<p style="font-size: 1.8rem"><b>Desde:</b> 01-09-2019  <b>Hasta:</b> 30-09-2019</p>
				</div>
				<div class="table-responsive pad-bot-50">          
					<table class="table table-striped tabla-servicios">
						<thead>
						  <tr>
						    <th style="text-align: center; font-size: 20px;"></th>
						    <th style="text-align: center; font-size: 20px;">COROLLA</th>
						    <th style="text-align: center; font-size: 20px;">ETIOS</th>
						    {{-- <th style="text-align: center; font-size: 20px;">YARIS</th>
						    <th style="text-align: center; font-size: 20px;">INNOVA</th>
						    <th style="text-align: center; font-size: 20px;">PRIUS</th> --}}
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
								{{-- <td style="text-align: center;font-size: 20px;">$ {{ $servicio->yaris }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->innova }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->prius }}</td> --}}
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux_sw4_4x4 }}</td>
							</tr>
						  	@endforeach
						</tbody>
					</table>
	  			</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    PROMOS Y DESCUENTOS
	  	----------------------------------------------------------------------->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img class="img-responsive visible-lg visible-md" src="{{asset('imagenes/posventa/descuentos-accesorios-toyota.png')}}">
						<img class="img-responsive visible-xs visible-sm" src="{{asset('imagenes/posventa/descuentos-accesorios-toyota-sm.png')}}">
					</div>
				</div>
			</div>

{{-- 			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img class="img-responsive box-shadow" src="{{asset('imagenes/posventa/service-corolla.jpeg')}}">
					</div>
					<div class="col-md-4">
						<img class="img-responsive box-shadow" src="{{asset('imagenes/posventa/service-etios.jpeg')}}">
					</div>
					<div class="col-md-4">
						<img class="img-responsive box-shadow" src="{{asset('imagenes/posventa/service-hilux.jpeg')}}">
					</div>
				</div>
			</div> --}}
		</section>

		<!---------------------------------------------------------------------
	    SERVICIO AL CLIENTE
	  	----------------------------------------------------------------------->
		<section class="py-4" style="height: auto;">
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
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Comodidad total durante la espera.</p> --}}
					</div>	
					<div class="col-md-4 col-sm-6 col-xs-6">
						<h3 class="text-center bold"><i class="material-icons">local_car_wash</i> Lavado Incluido</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Lavado incluido en el mantenimiento..</p> --}}
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center bold"><i class="fa fa-wrench" aria-hidden="true"></i> Herramientas Especiales</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">
							Bahía de trabajo especialmente acondicionada con herramental especial.
						</p> --}}
					</div>	
				</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    SOLICITAR TURNO
	  	----------------------------------------------------------------------->
		<section>
			<div class="container mt-3" id="solicitar-turno-online">
				<div class="well" style="padding: 15px 35px 15px 35px;">
					<div class="row">
					<div class="col-md-7" style="padding: 0px;">
						<p style="font-size: 20px; font-weight: bold;">La calidad de siempre, más coveniente que nunca.</p>
						<p style="text-align: justify;">Nadie conoce mejor tu Toyota como Toyota, por eso acercate a cualquiera de nuestras sucursales con servicio de Posventa para contar con el respaldo de un servicio técnico oficial. </p>	
						<a href="/turno-servicios/create" class="btn btn-toyota my-1">SOLICITAR TURNO ONLINE</a>
						<a href="#"  class="btn btn-toyota btn-whatsapp my-1" data-toggle="modal" data-target="#modal-turno-wapp">ENVIAR WHATSAPP</a>
						<!-- Modal -->
						<div class="modal fade" id="modal-turno-wapp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">SELECCIONAR SUCURSAL</h4>
						      </div>
						      <div class="modal-body">
						        <div class="list-group">
					        		@foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
								  		<a href="https://wa.me/{{$sucursal->whatsapp_posventa}}?text=Hola,%20necesito%20un%20turno%20para%20mi%20Toyota" class="list-group-item" target="_blank" onclick="$('#modal-turno-wapp').modal('toggle')" style="font-size: 2.2rem">{{$sucursal->nombre}}</a>
								  	@endforeach
								</div>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-4 via-whatsapp" style="padding: 0px;">
						<div style="width: 100%; display: flex; justify-content: space-around; align-items: center;">
							<div class="text-right">
								<p style="font-size: 2.3rem; font-weight: bold;">Solicitá un turno vía Whatsapp</p>
							</div>
							<div>
								<img src="{{asset('imagenes/icons/whatsapp-icon.png')}}" style="height: 75px;" alt="Turno por whatsapp Servicio de Posventa Chaco">								
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    GARANTIA
	  	----------------------------------------------------------------------->
		<section id="garantia">
			<div class="container">
				<div class="title-section">
			  		<h1>GARANTÍA</h1>
				</div>
				<div class="row flex" style="flex-wrap: wrap;">
					<div class="col-md-3 col-sm-12 visible-md visible-lg">
						<img class="img-responsive" src="https://www.toyota.com.ar/storage/contents/4QUWQizPkX.jpg" alt="Garantía 5 años Toyota. Garantia Derka y Vargas Chaco">
					</div>
					<div class="col-md-9 col-sm-12 flex align-items-center">
						<p>Para asegurar que la experiencia de posesión de sus vehículos sea única, Toyota respalda sus productos con algo más que palabras. Como los primeros en confiar en nuestros productos somos nosotros mismos, le ofrecemos la mejor garantía posible. Por este motivo los vehículos Toyota 0 (cero) kilometro vendidos y entregados a partir del 1 de septiembre de 2018 comienzan a gozar de una garantía que lo ampara por 5 años o 150.000 Km. (lo que ocurra primero). Esto significa un mayor valor para su Toyota y una mayor tranquilidad para usted, siempre.</p>
					</div>
				</div>
				
				<h3>ADEMÁS</h3>
				<ul>
					<li><p>Todos los vehículos Toyota 0 (cero) kilometro vendidos y entregados antes del 1 de Septiembre de 2018, continúan gozando de la ya conocida Garantía que lo ampara por 3 años o 100.000 Km (lo que ocurra primero) y comienza con la fecha de entrega de su vehículo.</p></li>
					<li><p>La garantía Toyota es transferible a los nuevos propietarios.</p></li>
					<li><p>Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquiera de nuestros concesionarios autorizados Toyota, los cuales gustosamente procesarán su solicitud.</p></li>
				</ul>

				<h3>NO COMERCIALIZAMOS GARANTÍA EXTENDIDA:</h3>
				<p>Atento a las recientes consultas recibidas, nos vemos en la obligación de aclarar que Toyota Argentina S.A., (en adelante Toyota), no vende ni oferta, ya sea en forma directa o a través de la red de concesionarios oficiales, y por tanto no hace publicaciones en la web, ni remite mensajes de texto, ni contacta directamente a los usuarios, servicios de garantía extendida. Por todo ello, hacemos propicia la oportunidad para recordarles que contamos con una red de concesionarios oficiales en todo el país, donde encontraran profesionales capacitados para informar acerca de la Garantía Limitada por Vehículo Nuevo Toyota. Ingresa al buscador de concesionarios y conoce el más cercano a tu domicilio: http://www.toyota.com.ar/find-a-dealer/index.html. Ante cualquier duda sugerimos comunicarse con nuestro Centro de Atención al Cliente al: 0800-888-8696 (Lunes a Viernes de 9:00 a 13:00 hs. y de 14:00 a 17:00 hs.).</p>
				
				
				<div class="text-center visible-xs visible-sm">
					<img class="img-responsive" style="display: inline-block;" src="https://www.toyota.com.ar/usuarios/garantia/images/logoGarantia.png">
				</div>
			</div>
		</section>

		<section class="pad-bot-50 pad-top-50">
			<img src="/imagenes/posventa/mantenimiento-express.png" class="img-responsive" alt="mantenimiento express toyota Chaco">
		</section>

		<section class="pad-top-50 pad-bot-50">
			<div class="container">
				<div class="row">
					{{-- <div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
						<h2 class="bold" style="margin-top: 0px;">SUCURSALES <small>Con Servicio de Posventa</small></h2>
						<div style="margin-left: 5px; font-size: 16px;"><i class="fa fa-clock-o"></i> <b>Lunes a Viernes</b> de 8 a 12 & 15.30 a 19.30 - <b>Sábados</b> de 8 a 12.30</div>
						<div style="font-size: 22px">
							<ul class="list-unstyled list-locations">
								@foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
									<li>
										<a href="#" onclick="mostrarMapa(event, {{$sucursal->id}})"><img src="/imagenes/icons/map-marker.png" style="width: 22px; margin-bottom: 4px;">{{$sucursal->nombre}}</a>
										<div style="font-size: 15px; padding-left: 22px;">{{ $sucursal->direccion }}</div>
										<div style="font-size: 15px; padding-left: 22px;"><i class="fa fa-phone-square"></i> {{ $sucursal->telefono }}</div>
										<div style="font-size: 15px; padding-left: 22px;"><i class="fa fa-whatsapp"></i> {{ $sucursal->whatsapp_posventa }}</div>
									</li>
								@endforeach
							</ul>
						</div>
					</div> --}}
					<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
						<h2 class="bold" style="margin-top: 0px;">SUCURSALES <small>Con Servicio de Posventa</small></h2>
						<div style="margin-left: 5px; font-size: 16px;"><i class="fa fa-clock-o"></i> <b>Lunes a Viernes</b> de 8 a 12 & 15.30 a 19.30 - <b>Sábados</b> de 8 a 12.30</div>
						<div class="contact-details mt-3">
		                    <div class="media">
		                        <div class="media-left">
		                            <i class="fa fa-map-marker"></i>
		                        </div>
		                        <div class="media-body">
		                            <h4>DIRECCIÓNES</h4>
		                            @foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
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
		                            @foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
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
		                                <a href="mailto:posventa-sp@derkayvargas.com.ar">posventa-sp@derkayvargas.com.ar</a>
		                            </p>
		                            <p>
		                                <a href="mailto:posventa-resistencia@derkayvargas.com.ar">posventa-resistencia@derkayvargas.com.ar</a>
		                            </p>
		                            <p>
		                                <a href="mailto:posventa-charata@derkayvargas.com.ar">posventa-charata@derkayvargas.com.ar</a>
		                            </p>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="col-md-6" style="min-height: 400px; " id="map" >
						<iframe class="iframe_map" id="map_suc_1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.47966577166!2d-58.952102685279336!3d-27.423158221289846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450dbbf2426f97%3A0xf7ab8afd16b0dc53!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060536621" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1773.9799215466412!2d-61.17127152760032!3d-27.220410546402633!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94475b80fed5f86f%3A0xfd9c8362d6544c0c!2sDerka+Y+Vargas+S.A.+(Concesionario+oficial+Toyota)!5e0!3m2!1ses-419!2sus!4v1550060114365" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>

</article>
	

@stop

@section('script')

<script>
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


	$('.owl-carousel.owl-md').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoPlaySpeed: 2000,
        autoPlayTimeout: 3000,
        autoplayHoverPause: false,
        items : 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    </script>
@stop
