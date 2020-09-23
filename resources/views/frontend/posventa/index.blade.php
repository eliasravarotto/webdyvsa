@extends('frontend.layout')

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

.list-locations{
	margin-top: 20px;
}
.list-locations > li{
	padding-bottom: 15px;
}

#garantia p{
	font-size: 16px;
}

#garantia ul li{
	font-size: 16px;
}

</style>

@section('content')
	<article>
		<!---------------------------------------------------------------------
	    BANNER
	  	----------------------------------------------------------------------->
{{-- 		<section class="mt-1 mb-4" style="padding: 0px 7px;">
		    <a href="https://www.toyota.com.ar/servicios-y-accesorios/recall" target="_blank"><img src="{{asset('imagenes/posventa/recall.png')}}" class="img-fluid d-none d-md-block d-lg-block" style="border-radius: 7px;"></a>
		    <a href="https://www.toyota.com.ar/servicios-y-accesorios/recall" target="_blank"><img src="{{asset('imagenes/posventa/recall-sm.jpg')}}" class="img-fluid d-md-none d-lg-none" style="border-radius: 7px;"></a>
		</section> --}}
	    <a href="#"><img src="{{asset('imagenes/posventa/slide-1.jpg')}}" class="img-fluid" style="border-radius: 7px;"></a>


		<!---------------------------------------------------------------------
	    RECALL
	  	----------------------------------------------------------------------->
		<section>
			<div id="toyota-recall" class="container py-5 toyota-recall">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-md-7 col-xs-12">
	                    <p class="subtitle text-center">Recall</p>
	                    <h1 class="text-center">Llamado a Revisión Técnica</h1>
	                    <p class="text-center">Ahora podés averiguar si tu vehículo está alcanzado a una campaña<br> especial de servicio vigente, ingresando el número de Chasis o Patente.</p>
	                </div>
					<div class="col-md-4 col-xs-12 d-flex justify-content-center">
							<a href="https://www.toyota.com.ar/servicios-y-accesorios/recall" target="_blank" class="btn btn-outline-light">CONSULTAR</a>
	                </div>
				</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    PRECIOS SERVICIOS
	  	----------------------------------------------------------------------->
		<section class="py-6">
			<div class="container">
			<div class="main-title text-center">
				<h1>Precios Vigentes</h1>
				<p>Para que tu vehículo tenga la mayor eficiencia, vení al Servicio de Posventa Derka y Vargas <span><br> y dejá tu Toyota en las mejores manos.</span></p>
			</div>
			<div class="owl-carousel owl-carousel-servicios owl-theme py-2">
			@foreach(\App\Helpers\Helper::getModelosWithServices() as $modelo)
					<div class="pricing-1 popular item mx-2">
						<img class="img-fluid" src="{{$modelo->img_modelo}}">
						<div class="title">{{$modelo->nombre}}</div>
						<div class="content">
							<table class="table table-striped table-pricing">
								 <tbody>
									@foreach( $modelo->servicios as $s )
									<tr>
 								      <td>{{$s->nombre}}</td>
								      <td class="text-right font-weight-bold">$ <span class="price">{{number_format($s->precio, 0, ',', '.')}}</span></td>
								    </tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{-- <div class="price-for-user">
							<div class="price"><sup>$</sup><span class="dolar">35</span><small class="month">per month</small></div>
						</div> --}}
						<div class="button mt-3">
							<a href="{{route('turno_servicio_create')}}?modelo={{$modelo->nombre}}" class="btn button-theme pricing-btn">Solicitar Turno</a>
						</div>
					</div>
			@endforeach
			</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    ACCESORIOS 
	  	----------------------------------------------------------------------->
		<section class="py-4">
			<div class="container py-4">
				<div class="row features">
					<div class="col-md-6 imagen-container">
						<img class="img-fluid" src="http://www.yacopinisa.com/wp-content/uploads/2015/05/panel-accesorios.jpg">
					</div>
					<div class="col-md-6 descripcion">
						<h2>ACCESORIOS ORIGINALES</h2>
						<p class="mt-2">Elegí simpre por calidad y dale a tu toyota la exclusividad que se merece</p>
						<a href="{{route('accesorios')}}" class="mu-btn mu-danger-btn ml-5 mt-2">VER ACCESORIOS</a>
					</div>
				</div>
			</div>
		</section>

		<!---------------------------------------------------------------------
	    PROMOS Y DESCUENTOS
	  	----------------------------------------------------------------------->
		<section class="py-4 my-4">
			<div class="container">
				<div class="main-title">
		          <h1 class="text-dark-2">Oportunidades</h1>
		          {{-- <p class="text-dark-3">Explorá nuestra amplia gama de vehículos</p> --}}
		      	</div>
			      <div class="row">
			          @foreach(\App\Helpers\Helper::getPostsByCategories(['novedades', 'rse'], 6) as $post)
			            <div class="col-md-4 col-sm-12 mb-2">
			              <div class="card d-flex flex-column justify-content-between box-shadow-2">
			                <div class="container-img" style="background: url('{{$post->imagen_portada}}');"></div> 
			                  <div class="card-body d-flex flex-column justify-content-end" style="height: 230px;">
			                    <h4 class="text-dark-2 mb-2 font-weight-500">
			                      {{$post->titulo}}
			                    </h4>
			                    <div class="card-meta mb-2 text-dark-3">
			                      <span><i class="far fa-calendar-alt"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
			                    </div>
			                    <div class="overflow-hidden" style="position: relative;">
			                      <p class="card-text text-dark-3">{{str_limit(strip_tags($post->contenido), 210, '...')}}</p>
			                      <div class="gradient-buttom-35"></div>
			                    </div>
			                    <div class="mb-0">
			                      <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="text-center btn-link-underline my-2">Leer más</a>
			                    </div>
			                </div>
			              </div>
			          	</div>
			          @endforeach
			      </div>
		    </div>
		</section>

		<!---------------------------------------------------------------------
	    SERVICIO AL CLIENTE
	  	----------------------------------------------------------------------->
		<section class="py-6 my-4 bg-1" style="height: auto;">
			<div class="container">
				<div class="main-title">
		          <h1 class="text-dark-2">Servicio al Cliente</h1>
		          <p class="text-dark-3">Elegir un TOYOTA es mucho más que elegir un vehículo</p>
		      </div>
				<div class="features row" >
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center "><i class="fa fa-users" ></i> Elegirnos</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7;">
							En Derka y Vargas le ofrecemos servicios fieles al compromiso y como garantía de calidad en todas nuestras sucursales de Chaco.
						</p>
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center "><i class="fa fa-certificate" ></i> Técnicos Especializados</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Técnicos Especializados. Profesionales constantemente capacitados bajo estándares internacionales.</p>
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center "><i class="fa fa-certificate" ></i> Repuestos & Accesorios</h3>
						<p style="font-size: 18px; text-align: justify; line-height: 1.7">Los repuestos originales son los que aseguran el correcto funcionamiento del vehículo. Contar con los mismos es condición necesaria para que la garantía siga vigente, logrando que su Toyota sea siempre un Toyota.</p>
					</div>	
				</div>
				<div class="features row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<h3 class="text-center "><i class="fa fa-coffee" ></i> Living de Espera</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Toyota respalda todos sus vehículos con garantía de 3 años o 100.000 km (lo que ocurra primero) y es transferible a nuevos propietarios. Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquier de nuestras sucursales en Chaco donde gustosamente procesarán su solicitud.</p> --}}
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Comodidad total durante la espera.</p> --}}
					</div>	
					<div class="col-md-4 col-sm-6 col-xs-6">
						<h3 class="text-center "><i class="material-icons">local_car_wash</i> Lavado Incluido</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">Lavado incluido en el mantenimiento..</p> --}}
					</div>	
					<div class="col-md-4 col-sm-12">
						<h3 class="text-center "><i class="fa fa-wrench" ></i> Herramientas Especiales</h3>
						{{-- <p style="font-size: 18px; text-align: justify; line-height: 1.7">
							Bahía de trabajo especialmente acondicionada con herramental especial.
						</p> --}}
					</div>	
				</div>
			</div>
			<!---------------------------------------------------------------------
		    SOLICITAR TURNO
		  	----------------------------------------------------------------------->
			<div class="container mt-4" id="solicitar-turno-online">
				<div class="card" style="background-color: #e8e8e8">
					<div class="card-body">
						<div class="row">
							<div class="col-md-7">
								<h5>La calidad de siempre, más coveniente que nunca.</h5>
								<p style="text-align: justify;">Nadie conoce mejor tu Toyota como Toyota, por eso acercate a cualquiera de nuestras sucursales con servicio de Posventa para contar con el respaldo de un servicio técnico oficial. </p>	
								<a href="/turno-servicios/create" class="btn btn-dark my-1">SOLICITAR TURNO ONLINE</a>
								<a href="#"  class="btn btn-toyota btn-whatsapp my-1" data-toggle="modal" data-target="#modal-turno-wapp">ENVIAR WHATSAPP</a>
								<!-- Modal -->
								<div class="modal fade" id="modal-turno-wapp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header d-flex justify-content-between">
								      	<div>
								      		<h3>Seleccionar Sucursal</h3>
								      		<p>Seleccioná la sucursal donde querés realizar el servicio</p>
								      	</div>
								        <button  type="button" data-dismiss="modal" aria-label="Close">
					                        <span></span>
					                        <span></span>
					                        <span></span>
					                    </button>
								      </div>
								      <div class="modal-body">
								      	<ul class="list-group list-group-flush">
							        		@foreach(\App\Helpers\Helper::getSucursalesPosventa() as $sucursal)
										  		<li class="list-group-item">
										  			<a class="btn" href="https://wa.me/{{$sucursal->whatsapp_posventa}}?text=Hola,%20necesito%20un%20turno%20para%20mi%20Toyota" class="list-group-item" target="_blank" onclick="$('#modal-turno-wapp').modal('toggle')">
										  				<h2 class="text-dark-3">{{$sucursal->nombre}}</h2></a>
										  			</li>
										  	@endforeach
										  </ul>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">CERRAR</button>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
							<div class="col-md-4 via-whatsapp">
								<div>
									<div class="text-center">
										<p style="font-size: 1.5rem;">Solicitá un turno vía Whatsapp</p>
									</div>
									<div class="text-center">
										<img style="max-height: 150px; width: auto;" src="{{asset('imagenes/icons/whatsapp-icon.png')}}" alt="Turno por whatsapp Servicio de Posventa Chaco">								
									</div>
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
		<section id="garantia" class="py-5">
			<div class="container">
				<div class="main-title">
		          <h1 class="text-dark-2">Garantía</h1>
		          <p class="text-dark-3">Somos los primeros en confiar en nuestros productos, por eso ofrecemos la mejor garantía.</p>
		      	</div>
				<div class="row flex" style="flex-wrap: wrap;">
					<div class="col-md-3 col-sm-12 visible-md visible-lg">
						<img class="img-fluid" src="https://www.toyota.com.ar/storage/contents/4QUWQizPkX.jpg" alt="Garantía 5 años Toyota. Garantia Derka y Vargas Chaco">
					</div>
					<div class="col-md-9 col-sm-12 flex align-items-center">
						<p>Para asegurar que la experiencia de posesión de sus vehículos sea única, Toyota respalda sus productos con algo más que palabras. Como los primeros en confiar en nuestros productos somos nosotros mismos, le ofrecemos la mejor garantía posible. Por este motivo los vehículos Toyota 0 (cero) kilometro vendidos y entregados a partir del 1 de septiembre de 2018 comienzan a gozar de una garantía que lo ampara por 5 años o 150.000 Km. (lo que ocurra primero). Esto significa un mayor valor para su Toyota y una mayor tranquilidad para usted, siempre.</p>
					</div>
				</div>
				
				<h4>Además</h4>
				<ul>
					<li><p>Todos los vehículos Toyota 0 (cero) kilometro vendidos y entregados antes del 1 de Septiembre de 2018, continúan gozando de la ya conocida Garantía que lo ampara por 3 años o 100.000 Km (lo que ocurra primero) y comienza con la fecha de entrega de su vehículo.</p></li>
					<li><p>La garantía Toyota es transferible a los nuevos propietarios.</p></li>
					<li><p>Para cualquier reparación cubierta por Garantía, debe dirigirse a cualquiera de nuestros concesionarios autorizados Toyota, los cuales gustosamente procesarán su solicitud.</p></li>
				</ul>

				<h4>No comercializamos garantía extendida</h4>
				<p>Atento a las recientes consultas recibidas, nos vemos en la obligación de aclarar que Toyota Argentina S.A., (en adelante Toyota), no vende ni oferta, ya sea en forma directa o a través de la red de concesionarios oficiales, y por tanto no hace publicaciones en la web, ni remite mensajes de texto, ni contacta directamente a los usuarios, servicios de garantía extendida. Por todo ello, hacemos propicia la oportunidad para recordarles que contamos con una red de concesionarios oficiales en todo el país, donde encontraran profesionales capacitados para informar acerca de la Garantía Limitada por Vehículo Nuevo Toyota. Ingresa al buscador de concesionarios y conoce el más cercano a tu domicilio: http://www.toyota.com.ar/find-a-dealer/index.html. </p>
				<p>Ante cualquier duda sugerimos comunicarse con nuestro Centro de Atención al Cliente al: <span class="font-weight-bold">0800-888-8696</span> (Lunes a Viernes de 8:00 a 16:30 hs).</p>
			</div>
		</section>

		<section class="py-4 my-4">
			<div class="container">
				<div class="row">
					<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
						<h2 class="" style="margin-top: 0px;">SUCURSALES <small>Con Servicio de Posventa</small></h2>
						<div style="margin-left: 5px; font-size: 16px;"><i class="fa fa-clock-o"></i> <b>Lunes a Viernes</b> de 8 a 16.30 - <b>Sábados</b> de 8 a 12.30</div>
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
