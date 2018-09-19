@extends('layout')

<style type="text/css">
	.list-colors:hover{
		cursor: pointer;
	}
	.circle{
		border-radius: 50%;
		border: solid 1px white;
		height: 30px;
		width: 30px;
	}

	.active_circle{
	    border: solid 3px #66d4fd;
	}

	.active_li {
	    /*background: #fff;*/
	    filter: alpha(opacity=0);
	    -webkit-transform: scale(1.3);
	    -ms-transform: scale(1.3);
	    -o-transform: scale(1.3);
	    transform: scale(1.3);
	    border-radius: 50%;
	    -webkit-transition: transform .4s cubic-bezier(.175,.885,.32,3.5),opacity .1s linear;
	    -moz-transition: transform .4s cubic-bezier(.175,.885,.32,3.5),opacity .1s linear;
	    -ms-transition: transform .4s cubic-bezier(.175,.885,.32,3.5),opacity .1s linear;
	    -o-transition: transform .4s cubic-bezier(.175,.885,.32,3.5),opacity .1s linear;
	    transition: transform .4s cubic-bezier(.175,.885,.32,3.5),opacity .1s linear;
	}

	.mar-top-40{
		margin-top: 40px;
	}
	.mar-top-15{
		margin-top: 15px;
	}
	.pad-top-50{
		padding-top: 50px;
	}
	.pad-top-bot-50{
		padding-top: 50px;
		padding-bottom: 50px;
	}

	.pad-bot-25{
		padding-bottom: 25px;
	}

	.caption-default > h4{
		color: #404048!important;	
	   	text-shadow: 0px 0px 0px #ffffff;
	   	font-weight: bold;
	}
</style>

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_color:'#292828', position: 'relative' }"></navbar-desk>
 
	<detalle-modelo></detalle-modelo>

	{{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">

		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li> 

		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		  <div class="item active">
		    <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="Los Angeles" style="width:100%;">
		  	<div class="carousel-caption">
			    <h3>Etios</h3>
			    <p>Decile sí a todo.</p>
				</div>
		  </div>
		  <div class="item">
		    <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="Chicago" style="width:100%;">
		  </div>
		  <div class="item">
		    <img src="https://www.zento.com.ar/images/etios/slide2.jpg" alt="New york" style="width:100%;">
		  </div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right"></span>
		  <span class="sr-only">Next</span>
		</a>
	</div> --}}
	{{-- <article>
		<section class="container mar-top-40">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="http://homu.com.ar/wp-content/uploads/2017/05/LOGO-ETIOS-260x67.png">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>TU PRIMER TOYOTA</h3>
				</div>
			</div>
			<div class="row" >
				<div class="col-md-6 col-sm-12 text-center">
					<!--<img src="/imagenes/etios.jpg" style=" height: 300px">-->
					<img class="img-responsive" src="https://www.zento.com.ar/images/etios/versiones_precios.jpg">
				</div>
				<div class="col-md-6 col-sm-12">
					<table class="table table-striped">
					    <thead>
					      <tr>
					        <th>Versiones</th>
					        <th></th>
					      </tr>
					    </thead>
					    <tbody>							
						  <tr> 
							<td style="width: 75%;">X 5P 6M/T</td>
							<td>$ 373700</td>
						  </tr>
						  <tr> 
							<td style="width: 75%;">X 4P 6M/T</td>
							<td>$ 389000</td>
						  </tr>
						  <tr> 
							<td style="width: 75%;">XLS 5P 6M/T</td>
							<td>$ 418000</td>
						  </tr>
						  <tr> 
							<td style="width: 75%;">XLS 4P 6M/T</td>
							<td>$ 433300</td>
						  </tr>
						  <tr> 
							<td style="width: 75%;">XLS 5P 4A/T</td>
							<td>$ 436400</td>
						  </tr>
						  <tr> 
							<td style="width: 75%;">XLS 4P 4A/T</td>
							<td>$ 451700</td>
						  </tr>
					</tbody>
						</table>
				</div>
			</div>
		</section>

		<section class="arrow_box container mar-top-40">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
					<h3>TU PRIMER TOYOTA, MEJOR QUE NUNCA</h3>
					<p>El Toyota Etios continua reforzando su actitud gracias a la incorporación de un nuevo diseño de parrilla, llantas de aleación y faros oscurecidos. Además, incorpora de serie Control de estabilidad y Control de tracción que en conjunto con su excelente performance de motor y transmisión hacen al Etios la opción ideal para recorrer el camino.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				    <h3 class="text-center">COLORES</h3>
				    <div id="images_colors" class="text-center">
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_blanco" src="/imagenes/modelos/etios/colores/etios_blanco.jpg" />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_blanco_perla" src="/imagenes/modelos/etios/colores/etios_blanco_perla.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_gris_plata" src="/imagenes/modelos/etios/colores/etios_gris_plata.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_gris_arena" src="/imagenes/modelos/etios/colores/etios_gris_arena.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_azul" src="/imagenes/modelos/etios/colores/etios_azul.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_rojo" src="/imagenes/modelos/etios/colores/etios_rojo.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_negro" src="/imagenes/modelos/etios/colores/etios_negro.jpg"  />
						<img class="img-thumbnail thumbnail-no-border" style="padding: 0px" id="img_etios_gris_oscuro" src="/imagenes/modelos/etios/colores/etios_gris_oscuro.jpg"  />
					</div>
				    <br>
				    <div class="text-center">
				        <label >Color</label>
				    </div>

				    <ul class="list-inline list-colors text-center">
						<li id="etios_blanco" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_blanco_perla" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_gris_plata" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_gris_arena" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_azul" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_rojo" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_negro" onclick="test(this)">
							<div class="circle"></div>
						</li>
						<li id="etios_gris_oscuro" onclick="test(this)">
							<div class="circle"></div>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<section style="background-color: #f0fdff;">
			<div class="container pad-top-bot-50">
		  		<div class="row">
		  			<div class="col-md-4 col-sm-12 col-xs-12">
					    <div class="thumbnail thumbnail-no-bg thumbnail-no-border contenedor_tarjeta">
					    	<div class="hover-block">
					    		<a href="" class="btn btn-default">VER MAS</a>
					    	</div>
			      			<img src="http://homu.com.ar/wp-content/uploads/2017/05/etios04-3.jpg" alt="...">
							<div class="caption caption-default">
								<h4 class="text-center">
									NUEVO DISEÑO EXTERIOR
								</h4>
								<p class="text-justify">
									Gracias al diseño de su frente y sus nuevos faros oscurecidos, el Etios obtiene una imagen más agresiva y robusta. A su vez, las nuevas llantas de aleación de 15” y los faldones laterales contribuyen a darle una impronta más audaz.
								</p>
							</div>
						</div>
		  			</div>
		  			<div class="col-md-4 col-sm-12 col-xs-12">
					    <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
				      		<img src="http://homu.com.ar/wp-content/uploads/2017/05/etios06-2.jpg" alt="...">
							<div class="caption">
								<h3 class="text-center">MAS TECNOLOGÍA</h3>
								<p class="text-justify">
									El nuevo Etios presenta un audio con pantalla táctil de 7”, MP3, Bluetooth®, USB, entrada auxiliar de audio y conexión con smartphone.
								</p>
							</div>
						</div>
		  			</div>
		  			<div class="col-md-4 col-sm-12 col-xs-12">
					    <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
				      		<img src="https://www.toyota.com.ar/showroom/etios-hb/images/top_features/img.jpg" alt="...">
							<div class="caption">
								<h3 class="text-center">DALE MARCHA A TUS IMPULSOS</h3>
								<p class="text-justify">
									La caja automática de 4 marchas, con control de velocidad crucero y la caja manual de 6 marchas, favorecen un andar fluido y dinámico sin descuidar un consumo conveniente.
								</p>
							</div>
						</div>
		  			</div>
				</div>
			</div>
		</section>
	</article> --}}

@stop

@section('script')
<script type="text/javascript">

		$("#images_colors").find("img").hide();
		$("#img_etios_blanco").show();

	
		function test(li){
		 	$('.list-colors li.active_li').removeClass('active_li');
		 	$('.list-colors').find(".active_circle").removeClass("active_circle");

			$("#"+li.id).addClass("active_li");
			$("#"+li.id).children().addClass("active_circle");
			
			$("#images_colors").find("img").hide();
			$("#img_"+li.id).show();
		}
	 	
</script>
@stop