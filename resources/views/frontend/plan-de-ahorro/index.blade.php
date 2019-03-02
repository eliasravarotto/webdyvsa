@extends('layout')

@section('content')
	<article>
		<section class="visible-lg visible-md">
			<img src="/imagenes/tpa/slide1.png" class="img-responsive" alt="Cinque Terre">
		</section>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
						<div class="page-header">
						  <h2 style="font-weight: bold;">ACCEDÉ A TU TOYOTA DE LA FORMA MÁS CONVENIENTE <br><small style="font-weight: bold;">¡TENEMOS UN PLAN PARA VOS!</small></h2>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container my-3 visible-md visible-lg">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<img src="/imagenes/tpa/nuevo_tpa.png" class="img-responsive">
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
				        			<img src="/imagenes/tpa/tarjeta-etios.png">
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
				          			<img src="/imagenes/tpa/tarjeta-yaris.png">
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
				          			<img src="/imagenes/tpa/tarjeta-hilux-4x2.png">
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
				          			<img src="/imagenes/tpa/tarjeta-hilux-4x4.png">
				        		</div>
				        	</div>
				        </div>      
			      	</div>
				</div>
			</div>

			<!-- Modal HILUX_100-->
			<div id="modal_hilix_100" class="modal" role="dialog">
			  <div class="modal-dialog" style="width: 100%">
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
					        <td class="text-center" style="font-weight: bold;">$ 15.605,30</td>
					        <td class="text-center" style="font-weight: bold;">$ 16.794,56</td>
					        <td class="text-center" style="font-weight: bold;">$ 15.929,70</td>
					        <td class="text-center" style="font-weight: bold;">$ 18.290,93</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en <a href="https://www.toyota.com.ar/financiacion/toyota_plan/">toyotaplan.com.ar</a></p>
									<p>Vigencia 01 de Marzo 2019</p>
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
			  <div class="modal-dialog" style="width: 100%">
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
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 6 a 18</th>
					        <th class="text-center" style="color: white; font-weight: bold;">Cuotas 19 a 84</th>
					      </tr>
					    </thead>
					    <tbody>
					      <tr>
					        <td class="text-center" style="font-weight: bold;">$ 10.765,85</td>
					        <td class="text-center" style="font-weight: bold;">$ 12.517,05</td>
					        <td class="text-center" style="font-weight: bold;">$ 11.220,87</td>
					        <td class="text-center" style="font-weight: bold;">$ 11.102,44</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en <a href="https://www.toyota.com.ar/financiacion/toyota_plan/">toyotaplan.com.ar</a></p>
									<p>Vigencia 01 de Marzo 2019</p>
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
			  <div class="modal-dialog" style="width: 100%">
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
					        <td class="text-center" style="font-weight: bold;">$ 8.219,15</td>
					        <td class="text-center" style="font-weight: bold;">$ 9.250,48</td>
					        <td class="text-center" style="font-weight: bold;">$ 9.090,79</td>
					        <td class="text-center" style="font-weight: bold;">$ 9.633,65</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en  <a href="https://www.toyota.com.ar/financiacion/toyota_plan/">toyotaplan.com.ar</a></p>
									<p>Vigencia 01 de Marzo 2019</p>
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
			  <div class="modal-dialog" style="width: 100%">
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
					        <td class="text-center" style="font-weight: bold;">$ 5.959,36</td>
					        <td class="text-center" style="font-weight: bold;">$ 6.955,13</td>
					        <td class="text-center" style="font-weight: bold;">$ 7.017,86</td>
					        <td class="text-center" style="font-weight: bold;">$ 7.896,71</td>
					      </tr>
					    </tbody>
				  	</table>
				  	<div class="row">
				  		<div class="col-md-12">
				  			<blockquote style="border-left: 5px solid #e81f39;">
								<div class="row">
									<p>Integración Mínima 24 Cuotas</p>	
									<p>Ver más info y legales en  <a href="https://www.toyota.com.ar/financiacion/toyota_plan/">toyotaplan.com.ar</a></p>
									<p>Vigencia 01 de Marzo 2019</p>
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
		<br>
		<section>
			<div class="container">
				<div class="well">
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail thumbnail-no-bg thumbnail-no-border">
				                <div class="caption caption-default">
				                	<h1 class="text-center"><i class="fa fa-car" style="font-size: 90px; color: black;"></i></h1>
				                    <h4 class="text-center">Adjudicados</h4>
				                    <p class="text-justify">
				                      Si querés subirte ya a tu nuevo Toyota, consultá por nuestros planes adjudicados 
				                    </p>
				                    <center>
				                    {{-- <a href="#" class="btn btn-default" data-toggle="modal" data-target="#modal_adjudicados">VER LISTADO</a> --}}
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
									Tenemos a disposición planes de ahorro con avance de cuotas listos para ser licitados.</p>
				                    {{-- <a href="/posventa" class="btn btn-toyota">VER</a> --}}
				                </div>
		        			</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail thumbnail-no-bg thumbnail-no-border">
				                <div class="caption caption-default">
				                	<h1 class="text-center"><i class="fa fa-laptop" style="font-size: 90px; color: black;"></i></h1>
				                    <h4 class="text-center">Licitación Online</h4>
				                    <p class="text-center">
				                    	{{-- Completá online el formulario de pre-licitación para el próximo acto de adjudicación. --}}
				                    	Proximamente.
				                    </p>
				                    {{-- <a href="/posventa" class="btn btn-toyota">VER</a> --}}
				                </div>
		        			</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<center>
								<a class="btn btn-toyota" href="#" onclick="masDetalles(event)">CONSULTAR</a>
							</center>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
			<div class="row">
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
						<iframe class="iframe_map" id="map_suc_5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1052.760431621325!2d-58.97032383651992!3d-27.43655580252728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ff25acec2a6c7c5!2sDerka+y+Vargas+-+Toyota!5e0!3m2!1ses-419!2sus!4v1550060723653" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			  			<iframe class="iframe_map" id="map_suc_6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.7362498019697!2d-60.4403663807801!3d-26.78467607731101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94412d1c14ba7d7b%3A0x3f41780d9ada61c!2sDerka+y+Vargas!5e0!3m2!1ses-419!2sus!4v1550060476101" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6" style="min-height: 300px; padding: 0px 20px 0px 50px;">
					<div class="contact-details">
	                    <div class="media">
	                        <div class="media-left">
	                            <i class="fa fa-map-marker"></i>
	                        </div>
	                        <div class="media-body">
	                            <h4>DIRECCIÓNES SUCURSALES</h4>
	                            @foreach(\App\Helpers\Helper::getSucursalesPlanDeAhorro() as $sucursal)
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

		{{-- <section>
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
		</section> --}}
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
	{{--var sucursales = {!! \App\Helpers\Helper::getSucursalesPlanDeAhorro() !!};--}}
	// var map = new google.maps.Map(document.getElementById('map'), {
 //      zoom: 8,
 //      center: new google.maps.LatLng(-27.041598, -60.149756),
 //      mapTypeId: google.maps.MapTypeId.ROADMAP
 //    });

 //    var infowindow = new google.maps.InfoWindow();

 //    var marker, i;

 //    for (i = 0; i < sucursales.length; i++) {  
 //      marker = new google.maps.Marker({
 //        position: new google.maps.LatLng(sucursales[i].map_lat, sucursales[i].map_lng),
 //        map: map
 //      });

 //      google.maps.event.addListener(marker, 'click', (function(marker, i) {
 //        return function() {
 //          infowindow.setContent(locations[i][0]);
 //          infowindow.open(map, marker);
 //        }
 //      })(marker, i));
 //    }

 //    function goto(e, lat, lng){
 //    	e.preventDefault();
 //    	var newPos = new google.maps.LatLng(lat,lng);
 //    	map.setOptions({center:newPos,zoom:15});
 //    }
    //------End Google Maps.---------------------------------------------------//

    function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}

	$('.iframe_map').hide();
    $('#map_suc_5').show();

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