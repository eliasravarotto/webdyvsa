@extends('layout')

@section('title_and_meta')
  <title>Servicios de Posventa Toyota</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa y Servicios de Postventa, Mantenimiento express, Plan de mantenimiento Toyota, Servicio técnico oficial Toyota">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/posventa" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="POSVENTA DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

<style type="text/css">
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

.tabla-servicios th{
	background-color: #ee3237;
	color: #f1eeea;
}

</style>

@section('content')

	<article>
		<section>
			<div style="width: 100%">
				<img src="/imagenes/posventa/slide.jpg" class="img-responsive" alt="Servicios de posventa Toyota en Chaco, Resistencia, Charata, Villa Angela, Saenz Peña. Servicio Oficial de Toyota Derka y Vargas." title="Posventa Toyota en Chaco">
			</div>
		</section>

		<section>
			<div class="container mt-3">
			<div class="row">
			    <div class="col-md-offset-2 col-xs-12 col-md-4 vcenter text-center">
			        <div>
			        	<span style="font-size: 2.8rem">
							¿Necesitás un servicio?
						</span>
			        </div>
			    </div>
			    <div class="col-xs-12 col-md-4  vcenter text-center">
			        <div>
			        	{{-- <a href="/turno-servicios/create" class="btn btn-toyota btn-lg">SOLICITAR TURNO</a> --}}
			        	<a href="#solicitar-turno-online" class="btn btn-toyota btn-lg">SOLICITAR TURNO</a>
			        </div>
			    </div>
			</div>
			</div>
		</section>

		{{-- <section class="container">
			<h1>Elegí el mejor Servicio Posventa</h1>
			<p>Para que tu vehículo tenga la mayor eficiencia, vení al Servicio de Posventa Derka y Vargas y dejá tu Toyota en las mejores manos.</p>
			<p></p>
		</section> --}}
		<section class="pad-top-50">
			<div class="container ">
				<div class="title-section">
					<h1>Elegí el mejor Servicio de Posventa</h1>
				</div>
				<p style="font-size: 1.7rem">Para que tu vehículo tenga la mayor eficiencia, vení al Servicio de Posventa Derka y Vargas y dejá tu Toyota en las mejores manos.</p>

				<div class="mt-3">
					<p style="font-size: 2rem">PRECIOS VIGENTES</p>
					<p style="font-size: 1.8rem"><b>Desde:</b> 01-04-2019 - <b>Hasta:</b> 30-04-2019</p>
				</div>
				<div class="table-responsive pad-bot-50">          
					<table class="table table-striped tabla-servicios">
						<thead>
						  <tr>
						    <th style="text-align: center; font-size: 20px;"></th>
						    <th style="text-align: center; font-size: 20px;">COROLLA</th>
						    <th style="text-align: center; font-size: 20px;">ETIOS</th>
						    <th style="text-align: center; font-size: 20px;">YARIS</th>
						    <th style="text-align: center; font-size: 20px;">INNOVA</th>
						    <th style="text-align: center; font-size: 20px;">PRIUS</th>
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
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->yaris }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->innova }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->prius }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux }}</td>
								<td style="text-align: center;font-size: 20px;">$ {{ $servicio->hilux_sw4_4x4 }}</td>
							</tr>
						  	@endforeach
						</tbody>
					</table>
	  			</div>
			</div>
		</section>
		<section>

		<div class="container">
			<div class="title-section">
				<h1>Accesorios Hilux <br> <small> Elegí el que más te convenga</small></h1>
			</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			<!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="{{asset('imagenes/posventa/accesorios_toyota_hiluxk1-min.png')}}" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="{{asset('imagenes/posventa/accesorios_toyota_hiluxk2-min.png')}}" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>
			    <div class="item">
			      <img src="{{asset('imagenes/posventa/accesorios_toyota_hiluxk3-min.png')}}" alt="...">
			      <div class="carousel-caption">
			        ...
			      </div>
			    </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>
		</section>

		<section class="pad-bot-50 container arrow_box">
			<!--PROMO SERVICIOS-->
			<div class="title-section">
	            <h3>Súper Promo Servicios</h3>
          	</div>
          	<p class="fs-17">💥No te quedes sin disfrutar de esta Súper PROMOCIÓN! 📌 Tu SERVICIO + 10 puntos de control:</p>
          	<ul class="list-inline">
          		<li>• Luces</li>
				<li>• Frenos </li>
				<li>• Amortiguadores </li>
				<li>• Estado de neumáticos y calibración </li>
				<li>• Nivel de líquidos</li>
				<li>• Control computarizado (inyección, luces testigos)</li>
				<li>• Pérdidas de fluidos </li>
				<li>• Control tren delantero </li>
				<li>• Crucetas</li>
				<li>• Lubricación malacate y control rueda auxilio.</li>
          	</ul>
          	<p class="fs-17">✅ Modelos comprendidos entre los años 2005 al 2015 📌 Pagando efectivo 10% OFF, con tarjeta VISA, 3 cuotas sin interés Tarjeta TUYA, 6 cuotas sin interés.</p>
			<div class="row">
				<div class="col-md-4 col-xs-12">
					<img src="/imagenes/posventa/promo-service-hilux.png" class="img-responsive text-left" alt="Servicio de Posventa Chaco. Luces Frenos Crucetas amortiguadores filtro de aire.">
				</div>
				<div class="col-md-4 col-xs-12">
					<img src="/imagenes/posventa/promo-service-etios.png" class="img-responsive" alt="Servicio de Posventa Chaco. Luces Frenos Crucetas amortiguadores filtro de aire.">
				</div>
				<div class="col-md-4 col-xs-12">
					<img src="/imagenes/posventa/promo-service-corolla.png" class="img-responsive" alt="Servicio de Posventa Chaco. Luces Frenos Crucetas amortiguadores filtro de aire.">
				</div>
			</div>
			<p class="fs-17">No dudes en consultarnos!!! escríbenos un WhatsApp ☺️</p>
			<p class="fs-17"><i class="fa fa-whatsapp" style="color: #189d0e; font-weight: bold;"></i> Sáenz Peña <a href="https://derkayvargas.page.link/turnos-saenzpena"> https://derkayvargas.page.link/turnos-saenzpena</a></p>
			<p class="fs-17"><i class="fa fa-whatsapp" style="color: #189d0e; font-weight: bold;"></i> Resistencia <a href="https://derkayvargas.page.link/turnos-resistencia"> https://derkayvargas.page.link/turnos-resistencia</a></p>
			<p class="fs-17"><i class="fa fa-whatsapp" style="color: #189d0e; font-weight: bold;"></i> Charata <a href="https://derkayvargas.page.link/turnos-charata"> https://derkayvargas.page.link/turnos-charata</a></p>
			<p class="fs-17"><i class="fa fa-whatsapp" style="color: #189d0e; font-weight: bold;"></i> Charata <a href="https://derkayvargas.page.link/turnos-charata2"> https://derkayvargas.page.link/turnos-charata2</a></p>
			<br>

			<!--ALINEADO Y BALANCEO-->
			<div class="title-section">
	            <h3>ALINEADO Y BALANCEO 3D <br>  <small>Ultima Generación</small></h3>
          	</div>
			<div class="row">
				<div class="col-xs-12">
					<img src="/imagenes/posventa/alineado-desk.png" class="img-responsive" alt="Servicio de Posventa Chaco. Luces Frenos Crucetas amortiguadores filtro de aire. Alineado y balanceo 3D ultima generacion. Promo 12%">
				</div>
			</div>
		</section>

		<section class="pad-top-50" style="height: auto;">
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

		<section>
			<div class="container mt-3" id="solicitar-turno-online">
				<div class="well" style="padding: 15px 35px 15px 35px;">
					<div class="row">
					<div class="col-md-7" style="padding: 0px;">
						<p style="font-size: 20px; font-weight: bold;">La calidad de siempre, más coveniente que nunca.</p>
						<p style="text-align: justify;">Nadie conoce mejor tu Toyota como Toyota, por eso acercate a cualquiera de nuestras sucursales con servicio de Posventa para contar con el respaldo de un servicio técnico oficial. </p>	
						<a href="/turno-servicios/create" class="btn btn-toyota">SOLICITAR TURNO ONLINE</a>
						<a href="#"  class="btn btn-toyota btn-whatsapp" data-toggle="modal" data-target="#modal-turno-wapp">ENVIAR WHATSAPP</a>
						{{-- <a href="https://wa.me/543625270614"  class="btn btn-toyota btn-whatsapp" data-toggle="modal" data-target="#myModal">ENVIAR WHATSAPP</a> --}}
						<!-- Modal -->
						<div class="modal fade" id="modal-turno-wapp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document" style="min-width: 90%">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">SELECCIONAR SUCURSAL</h4>
						      </div>
						      <div class="modal-body">
						        <div class="list-group">
					        		@foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
								  		<a href="https://wa.me/{{$sucursal->whatsapp_posventa}}?text=Hola,%20necesito%20un%20turno%20para%20mi%20Toyota" class="list-group-item" target="_blank" onclick="$('.modal').modal('toggle')" style="font-size: 2.2rem">{{$sucursal->nombre}}</a>
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

		<section id="garantia">
			<div class="container">
				<div class="page-header">
				  <h1>GARANTÍA</h1>
				</div>
				<div class="row flex" style="flex-wrap: wrap;">
					<div class="col-md-3 col-sm-12 visible-md visible-lg">
						<img class="img-responsive" src="https://www.toyota.com.ar/usuarios/garantia/images/logoGarantia.png" alt="Garantía 5 años Toyota. Garantia Derka y Vargas Chaco">
					</div>
					<div class="col-md-9 col-sm-12 flex align-items-center">
						<p>Para asegurar que la experiencia de posesión de sus vehículos sea única, Toyota respalda sus productos con algo más que palabras. Como los primeros en confiar en nuestros productos somos nosotros mismos, le ofrecemos la mejor garantía posible. Por este motivo los vehículos Toyota 0 (cero) kilometro vendidos y entregados a partir del 1 de septiembre de 2018 comienzan a gozar de una garantía que lo ampara por 5 años o 150.000 Km. (lo que ocurra primero). Esto significa un mayor valor para su Toyota y una mayor tranquilidad para usted, siempre.</p>
					</div>
				</div>
				
				<h3>ADEMÁS</h3>
				<ul>
					<li>Todos los vehículos Toyota 0 (cero) kilometro vendidos y entregados antes del 1 de Septiembre de 2018, continúan gozando de la ya conocida Garantía que lo ampara por 3 años o 100.000 Km (lo que ocurra primero) y comienza con la fecha de entrega de su vehículo.</li>
					<li>La garantía Toyota es transferible a los nuevos propietarios.</li>
					<li>Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquiera de nuestros concesionarios autorizados Toyota, los cuales gustosamente procesarán su solicitud.</li>
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
					<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
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

    </script>
@stop
