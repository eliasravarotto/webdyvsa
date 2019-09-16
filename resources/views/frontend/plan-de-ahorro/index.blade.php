@extends('layout')

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
	.preguntas-frecuentes ol li{
		margin-bottom: 9px;
	}
	.preguntas-frecuentes ol{
		margin-top: 10px;
	}
	.preguntas-frecuentes span{
		font-weight: 400;
	    line-height: 1;
	    color: #777;
	    font-size: 1.9rem;
	}

	@media only screen and (max-width : 768px) {
		.preguntas-frecuentes{ padding: 0 40px; }
	}

</style>
@stop

@section('content')
	<article>
		<section>
			<img class="visible-lg visible-md" src="/imagenes/tpa/plan-de-ahorro-auto.jpeg" alt="Nuevo plan de ahorro toyota. Accede a on 0KM en Derka y Vargas Chaco" style="width: 100%">
			<img class="img-responsive visible-xs visible-sm" src="{{asset('imagenes/tpa/plan-cuota-2.jpg')}}">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
						<div class="title-section mt-3">
			            	<h3>ACCEDÉ A TU TOYOTA DE LA FORMA MÁS CONVENIENTE <br>  <small>¡TENEMOS UN PLAN PARA VOS!</small></h3>
			          	</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container" id="planes-tpa">
				<div class="row">
					<div class="col-md-6">
				        <div class="tarjeta">
				        	<div class="tarjeta-contenido">
				        		<div class="contenido-izquierda">
				        			<h2>ETIOS X</h2>
				        			<p>5 Puertas</p>
				        			<p>Plan 100%</p>
				        			<a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_etios">
				        				DETALLES
				        			</a>
				        		</div>
				        		<div class="contenido-derecha">
				        			<img src="/imagenes/tpa/tarjeta-etios.png" alt="Etios Plan de Ahorro Toyota Chaco. Derka y Vargas.">
				        		</div>
				        	</div>
				        </div>
			      	</div>

			      	<div class="col-md-6">
				        <div class="tarjeta">
				        	<div class="tarjeta-contenido">
				        		<div class="contenido-izquierda">
				        			<h2>YARIS XS</h2>
				        			<p>5 Puertas</p>
				        			<p>Plan 100%</p>
				        			<a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_yaris">
				        				DETALLES
				        			</a>
				        		</div>
				        		<div class="contenido-derecha">
				          			<img src="/imagenes/tpa/tarjeta-yaris.png" alt="Yaris Plan de Ahorro Toyota Chaco. Derka y Vargas.">
				        		</div>
				        	</div>
				        </div>     
			      	</div>
				</div>
				<div class="row">
					<div class="col-md-6">
				        <div class="tarjeta">
				        	<div class="tarjeta-contenido">
				        		<div class="contenido-izquierda">
				        			<h2>HILUX</h2>
				        			<p>CD 4x2 DX</p>
				        			<p>Plan 70/30</p>
				        			<a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_hilix_70_30">
				        				DETALLES
				        			</a>
				        		</div>
				        		<div class="contenido-derecha">
				          			<img src="/imagenes/tpa/tarjeta-hilux-4x2.png" alt="Hilux Plan de Ahorro Toyota Chaco. Derka y Vargas.">
				        		</div>
				        	</div>
				        </div>      
			      	</div>
			      	<div class="col-md-6">
				        <div class="tarjeta">
				        	<div class="tarjeta-contenido">
				        		<div class="contenido-izquierda">
				        			<h2>HILUX</h2>
				        			<p>CD 4x4 DX</p>
				        			<p>Plan 100%</p>
				        			<a class="btn btn-default" href="#" data-toggle="modal" data-target="#modal_hilix_100">
				        				DETALLES
				        			</a>
				        		</div>
				        		<div class="contenido-derecha">
				          			<img src="/imagenes/tpa/tarjeta-hilux-4x4.png" alt="Hilux Plan de Ahorro Toyota Chaco. Derka y Vargas.">
				        		</div>
				        	</div>
				        </div>      
			      	</div>
				</div>
			</div>

			<!-- Modal HILUX_100-->
			<div id="modal_hilix_100" class="modal" role="dialog">
			  <div class="modal-dialog" >
			    <!-- Modal content-->
			    <div class="modal-content" >
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        {{-- <h4 class="modal-title text-center">HILUX 100%</h4> --}}
			      </div>
			      <div class="modal-body">
					  <h2 class="text-center">Hilux 4x4 DX CD</h2>
					<table class="table table-hover table-bordered">
					    <tbody>
					      <tr>
					        <th>Modalidad</th>
					        <td>100%</td>
					      </tr>
					      <tr>
					        <th>Plazo</th>
					        <td>84 Cuotas</td>
					      </tr>
					    </tbody>
				  	</table>
			        <table class="table table-hover">
					    <thead>
					      <tr style="background-color: black">
					        <th class="text-center" style="color: white; font-weight: bold;">Cuota 1</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 2 a 5</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 6 a 24</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 25 a 84</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td class="text-center" style="font-weight: bold;">$ 20.623,79</td>
					        <td class="text-center" style="font-weight: bold;">$ 21.920,36</td>
					        <td class="text-center" style="font-weight: bold;">$ 20.576,38</td>
					        <td class="text-center" style="font-weight: bold;">$ 24.173,09</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en <a href="https://www.toyota.com.ar/financiacion/plan-de-ahorro">toyota.com.ar/financiacion/plan-de-ahorro</a></p>
									<p>Vigencia 01 de Septiembre 2019</p>
								</div>
							</blockquote>
				  		</div>
				  	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>

			  </div>
			</div>

			<!-- Modal HILUX_70/30-->
			<div id="modal_hilix_70_30" class="modal" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content" >
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        {{-- <h4 class="modal-title text-center">HILUX 100%</h4> --}}
			      </div>
			      <div class="modal-body">
					  <h2 class="text-center">Hilux 4x2 DX CD</h2>
					<table class="table table-hover table-bordered">
					    <tbody>
					      <tr>
					        <th>Modalidad</th>
					        <td>70/30</td>
					      </tr>
					      <tr>
					        <th>Plazo</th>
					        <td>84 Cuotas</td>
					      </tr>
					    </tbody>
				  	</table>
			        <table class="table table-hover">
					    <thead>
					      <tr style="background-color: black">
					        <th class="text-center" style="color: white; font-weight: bold;">Cuota 1</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 2 a 5</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 6 a 24</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 25 a 84</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td class="text-center" style="font-weight: bold;">$ 14.109,57</td>
					        <td class="text-center" style="font-weight: bold;">$ 15.965,32</td>
					        <td class="text-center" style="font-weight: bold;">$ 14.266,56</td>
					        <td class="text-center" style="font-weight: bold;">$ 14.550,71</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en <a href="https://www.toyota.com.ar/financiacion/plan-de-ahorro">toyota.com.ar/financiacion/plan-de-ahorro</a></p>
									<p>Vigencia 01 de Septiembre 2019</p>
								</div>
							</blockquote>
				  		</div>
				  	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>

			  </div>
			</div>

			<!-- Modal YARIS-->
			<div id="modal_yaris" class="modal" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content" >
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>
			      <div class="modal-body">
					  <h2 class="text-center">YARIS XS</h2>
					<table class="table table-hover table-bordered">
					    <tbody>
					      <tr>
					        <th>Modalidad</th>
					        <td>100%</td>
					      </tr>
					      <tr>
					        <th>Plazo</th>
					        <td>84 Cuotas</td>
					      </tr>
					    </tbody>
				  	</table>
			        <table class="table table-hover">
					    <thead>
					      <tr style="background-color: black">
					        <th class="text-center" style="color: white; font-weight: bold;">Cuota 1</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 2 a 5</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 6 a 24</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 25 a 84</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td class="text-center" style="font-weight: bold;">$ 10.900,62</td>
					        <td class="text-center" style="font-weight: bold;">$ 11.989,28</td>
					        <td class="text-center" style="font-weight: bold;">$ 11.573,59</td>
					        <td class="text-center" style="font-weight: bold;">$ 12.776,59</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en  <a href="https://www.toyota.com.ar/financiacion/plan-de-ahorro">toyota.com.ar/financiacion/plan-de-ahorro</a></p>
									<p>Vigencia 01 de Septiembre 2019</p>
								</div>
							</blockquote>
				  		</div>
				  	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>

			  </div>
			</div>

			<!-- Modal ETIOS-->
			<div id="modal_etios" class="modal" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content" >
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        {{-- <h4 class="modal-title text-center">HILUX 100%</h4> --}}
			      </div>
			      <div class="modal-body">
					  <h2 class="text-center">Etios X 5P</h2>
					<table class="table table-hover table-bordered">
					    <tbody>
					      <tr>
					        <th>Modalidad</th>
					        <td>100%</td>
					      </tr>
					      <tr>
					        <th>Plazo</th>
					        <td>84 Cuotas</td>
					      </tr>
					    </tbody>
				  	</table>
			        <table class="table table-hover">
					    <thead>
					      <tr style="background-color: black">
					        <th class="text-center" style="color: white; font-weight: bold;">Cuota 1</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 2 a 5</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 6 a 24</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 25 a 84</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td class="text-center" style="font-weight: bold;">$ 7.885,75 </td>
					        <td class="text-center" style="font-weight: bold;">$ 8.926,83</td>
					        <td class="text-center" style="font-weight: bold;">$ 8.807,81</td>
					        <td class="text-center" style="font-weight: bold;">$ 10.449,35</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en  <a href="https://www.toyota.com.ar/financiacion/plan-de-ahorro">toyota.com.ar/financiacion/plan-de-ahorro</a></p>
									<p>Vigencia 01 de Septiembre 2019</p>
								</div>
							</blockquote>
				  		</div>
				  	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>

			  </div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
						<div class="title-section mt-3">
			            	<h3>OPORTUNIDADES<br>  <small>Conoce los agrupados y planes adjudicados</small></h3>
			          	</div>
					</div>
				</div>
				<div class="row py-3">
					<div class="col-md-6">
						<div class="row py-3">
							<div class="col-md-3 text-center">
								<span class="text-center" style="font-size: 10rem; color:#e01e37"><i class="fa fa-users"></i></span><br>
							</div>
							<div class="col-md-9">
								<div class="w-100 text-center-sm">
									<span style="font-size: 3rem">Agrupados</span>
								</div>
								<p class="py-1 text-justify" style="font-size: 1.8rem; color: #999">Tenemos a disposición planes de ahorro con avance de cuotas listos para ser licitados.</p>
								<div class="w-100 text-center-sm">
									<a class="btn btn-black btn-round text-center-sm" href="#" data-toggle="modal" data-target="#modal_agrupados">Ver listado</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row py-3">
							<div class="col-md-3 text-center-sm">
								<span class="text-center" style="font-size: 10rem; color:#e01e37"><i class="stm-service-icon-car-listing"></i></span><br>
							</div>
							<div class="col-md-9">
								<div class="w-100 text-center-sm">
									<span style="font-size: 3rem">Adjudicados</span>
								</div>
								<p class="py-1 text-justify" style="font-size: 1.8rem; color: #999">Si querés subirte ya a tu nuevo Toyota, consultá por nuestros planes adjudicados.</p>
								<div class="w-100 text-center-sm">
									<a class="btn btn-black btn-round text-center-sm" href="#" onclick="masDetalles(event)">Consultar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal AGRUPADOS-->
			<div id="modal_agrupados" class="modal" role="dialog">
			  <div class="modal-dialog modal-lg" >
			    <div class="modal-content" >
			      <div class="modal-header">
			      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title">Listado de Agrupados</h4>
			      </div>
			      <div class="modal-body">
			        <table class="table table-hover">
					    <thead>
					      <tr style="background-color: black">
					        <th class="text-center" style="color: white; font-weight: bold;">G/O</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Unidad</th>
					        <th class="text-center visible-md visible-lg" style="color: white; font-weight: bold;">Modalidad</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Avance Cuotas</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Precio Venta</th>
					        <th class="text-center visible-md visible-lg" style="color: white; font-weight: bold;">Cuota Pura</th>
					      </tr>
					    </thead>
					    <tbody>
					    	@foreach(\App\Helpers\Helper::getAgrupados() as $agrupado)
						      <tr>
						        <td class="text-center" style="font-weight: bold;">{{$agrupado->grupo}}/{{$agrupado->orden}}</td>
						        <td class="text-center" style="font-weight: bold;">{{$agrupado->unidad}}</td>
						        <td class="text-center visible-md visible-lg" style="font-weight: bold;">{{$agrupado->modalidad}}</td>
						        <td class="text-center" style="font-weight: bold;">{{$agrupado->avance_cuotas}}</td>
						        <td class="text-center" style="font-weight: bold;">$ {{number_format($agrupado->precio_venta, 2, ',', '.')}}</td>
						        <td class="text-center visible-md visible-lg" style="font-weight: bold;">$ {{ number_format($agrupado->cuota_pura, 2, ',', '.')}}</td>
						      </tr>
						      @endforeach
					    </tbody>
				  	</table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
			      </div>
			    </div>

			  </div>
			</div>
		</section>
		
		<section class="py-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img class="img-responsive box-shadow" src="{{asset('imagenes/tpa/cuota-mas-baja.jpeg')}}">
					</div>
					<div class="col-md-6">
						<img class="img-responsive box-shadow visible-md visible-lg" src="{{asset('imagenes/tpa/plan-cuota-2.jpg')}}">
					</div>
				</div>
			</div>
		</section>
		
		<section>
			<div class="container">
				  <div class="title-section mt-3">
			        <h2>¿Qué es un Plan de Ahorro? <br>  <small>Accedé a un 0KM 100% en Cuotas</small></h2>
			      </div>
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12 preguntas-frecuentes">
				  		<span>Preguntas Frecuentes</span>
						<ol>
							<li><a onclick="saltarA(event, 0)" href="#">¿Qué es un Plan de Ahorro?</a></li>
							<li><a onclick="saltarA(event, 18)" href="#">¿Cuáles son las ventajas?</a></li>
							<li><a onclick="saltarA(event, 70)" href="#">¿Cuáles son los requisitos?</a></li>
							<li><a onclick="saltarA(event, 90)" href="#">¿Qué conceptos componen?</a></li>
							<li><a onclick="saltarA(event, 152)" href="#">¿El valor de la cuota es variable?</a></li>
							<li><a onclick="saltarA(event, 170)" href="#">¿Cómo se conforma un grupo?</a></li>
							<li><a onclick="saltarA(event, 196)" href="#">Adjudicación unidades en grupo</a></li>
							<li><a onclick="saltarA(event, 210)" href="#">¿Qué es una licitación?</a></li>
							<li><a onclick="saltarA(event, 252)" href="#">¿Qué es un plan 70-30?</a></li>
							<li><a onclick="saltarA(event, 269)" href="#">¿Qué es un plan 100%?</a></li>
							<li><a onclick="saltarA(event, 285)" href="#">¿Qué es la integración mínima?</a></li>
						</ol>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12" id="video-container">
						<div class="text-center">
							<video id="video-explicativo" controls style="height: auto;width: 100%">
							  <source src="/videos/tpa.mp4" type="video/mp4">
								Your browser does not support the video tag.
							</video>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 text-center">
						<div class="fb-page" data-href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Toyota-Plan-de-Ahorro-Derka-y-Vargas-619499485112483/">Toyota Plan de Ahorro - Derka y Vargas</a></blockquote></div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12" id="form-contacto">
						<h2>CONSULTÁ POR UN PLAN DE AHORRO <br>
						<small>Un asesor se pondrá en contacto con usted a la brevedad.</small></h2>
						<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<input type="hidden" name="from" value="tpa">
							<div class="row">
								<div class=" col-md-6">
							    <label class="control-label">Nombre y Apellido</label>
							    <input type="text" class="form-control cliente" name="cliente" required value="{{old('cliente')}}">
						  	</div>
						  	<div class=" col-md-6">
							    <label class="control-label">Teléfono</label>
							    <input type="text" class="form-control" name="telefono" required value="{{old('telefono')}}">
						  	</div>
							</div>
							<div class="row">
								<div class=" col-md-12">
									<label class="control-label">Email</label>
							    <input type="email" class="form-control" name="email" value="{{old('email')}}">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">Mensaje</label>
							    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
								</div>
							</div>
							<div class="row pad-top-20">
								<div class="col-md-6">
									<div class="g-recaptcha" 
								           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
								    </div>
									@if ($errors->has('g-recaptcha-response'))
									    <span class="text-danger">
									        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
									    </span>
									@endif
								</div>
								<div class="col-md-6 text-right">
									<input type="submit" class="btn btn-default" name="ENVIAR">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="mar-top-40">
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