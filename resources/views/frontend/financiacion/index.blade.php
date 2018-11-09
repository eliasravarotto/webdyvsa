@extends('layout')


@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		<section>
			<div style="width: 100%">
				<img src="/imagenes/tcf/banner_ppal.jpg" class="img-responsive" alt="">
			</div>
		</section>
		<section>
			<div class="container">
				<h2>FINANCIACIÓN</h2>
				<p>Toyota Financial Services Corporation es la entidad de servicios financieros de Toyota Motor Corporation,  con presencia en 30 países repartidos en todos los continentes y con más de 10.000.000 clientes, es una de las mayores financieras de marca del Mundo.En enero 2005 Toyota Compañía Financiera de Argentina S.A. inicia sus operaciones en el país con el objetivo de brindar la más alta gama de servicios financieros para los usuarios TOYOTA
				</p>
			</div>
		</section>

  		<section>
  			<center>
  				<img class="img-responsive" src="http://homu.com.ar/wp-content/uploads/2017/05/financial-web-SEP.jpg">
  			</center>
  		</section>

		<section class="pad-top-50 pad-bot-50" style="height: auto;">
	      <div class="container">
	        {{-- <h2 class="text-center bold">Servicio al Cliente</h2> --}}
	        {{-- <h3 class="text-center gray-1">Elegir un TOYOTA es mucho más que elegir un vehículo</h3> --}}
	        <div class="row" >
	          <div class="col-md-4 col-sm-12">
	            <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-calculator" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>Simulá tu préstamo</h1>
	                    <p class="text-justify">
	                      Elegí el modelo y el mejor plan de financiación para vos.
	                    </p>
	                	<a href="https://www.toyotacfa.com.ar/simulador-creditos" class="btn btn-white btn-primary btn-danger-1">SIMULAR</a>
	                </div>
	            </div>
	          </div>  
	          <div class="col-md-4 col-sm-12">
	            <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-usd" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>Solicitá tu préstamo</h1>
	                    <p class="text-justify">
	                      En pocos y simples pasos obtené información en tu e-mail.
	                    </p>
	                    <a href="https://www.toyotacfa.com.ar/ToyotaAppForm/Login/MultiCanal?canal=WEB&cuit_cliente=0&cuit_dealer=0&id_campania_pao=0&id_cotizacion_seg=0&id_publicacion=0&id_sesion=0&tipo_persona=PF" class="btn btn-white btn-primary btn-danger-1">SOLICITAR</a>
	                </div>
	            </div>
	          </div>  
	          <div class="col-md-4 col-sm-12">
	            <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-envelope-o" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>¿Más detalles?</h1>
	                    <p class="text-justify">
	                      Completá el formulario y te contactaremos a la brevedad
	                    </p>
	                    <a href="/financiacion" class="btn btn-white btn-primary btn-danger-1">CONSULTAR</a>
	                </div>
	            </div>
	          </div>  
	        </div>
	      </div>
  		</section>



  		<section>
  			<div class="container">
	  			<div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title panel-title-financial">
				          <a id="creditos_prend" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
				          	<h4>
				          		<i class="fa fa-plus" id="plus_creditos_prend" style="display: none;"></i>
				          		<i class="fa fa-minus" id="minus_creditos_prend"></i>
				          		 Créditos Prendarios
				          	</h4>
				          </a>
				        </h4>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse in">
				        <div class="panel-body">
				        	<p style="font-size: 17px;">Nuestros planes de financiación aplican hasta el 75% del valor de la unidad. El 25% restante se abona junto a la entrega de la unidad y la firma del crédito prendario. Tenemos planes a Tasa Fija en pesos y en plazos de hasta 60 meses. Puede consultarnos también por nuestros planes de Tasa Variable. </p>
				        	<a class="btn btn-primary btn-danger-1" href="https://www.toyotacfa.com.ar/creditos-prendarios">MÁS DETALLES</a>
				        </div>
				      </div>
				    </div>
				    <div class="panel panel-default">
				      <div class="panel-heading">
				        <h4 class="panel-title panel-title-financial">
				          <a id="leasing" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				          	<h4>
				          		<i class="fa fa-plus" id="plus_leasing"></i>
				          		<i class="fa fa-minus" id="minus_leasing" style="display: none;"></i>
				          		Leasing
				          	</h4>
				          </a>
				        </h4>
				      </div>
				      <div id="collapse2" class="panel-collapse collapse">
				        <div class="panel-body">
				        	<p style="font-size: 17px;">El leasing es un arrendamiento financiero que le permite disponer del uso y goce del vehículo mediante el pago de un canon mensual. Incluye la opción de compra al finalizar el contrato, en el caso que el cliente desee quedarse con el vehículo.</p>
			        		<div class="well">
					        	<div class="row">
					        			
				  					<div class="col-md-6 col-xs-12 col-sm-12">
				  						<h4>Beneficios Económicos y Financieros</h4>
				  						<ul class="list-unstyled">
				  							<li><i class="fa fa-check" aria-hidden="true"></i> Opción de compra al finalizar el contrato</li>
				  							<li><i class="fa fa-check" aria-hidden="true"></i> Financiación a Tasa Fija</li>
				  							<li><i class="fa fa-check" aria-hidden="true"></i> Uso y goce del vehículo mediante el pago de un canon mensual </li>
				  						</ul>
				  					</div>
				  					<div class="col-md-6 col-xs-12 col-sm-12">
				  						<h4>Beneficios Fiscales</h4>
				  						<ul class="list-unstyled">
				  							<li><i class="fa fa-check" aria-hidden="true"></i> El IVA se abona mensualmente con los cánones y no al momento de la compra del vehículo</li>
				  							<li><i class="fa fa-check" aria-hidden="true"></i> Amortización acelerada</li>
				  							<li><i class="fa fa-check" aria-hidden="true"></i> No se encuentra alcanzado por el impuesto a la ganancia mínima presunta (dependiendo del tipo de vehículo y de la condición impositiva del tomador)</li>
				  						</ul>
				  					</div>
	  							</div>
			        		</div>
			        		<a class="btn btn-primary btn-danger-1" href="https://www.toyotacfa.com.ar/leasing">MÁS DETALLES</a>
				        </div>
				      </div>
				    </div>
			  	</div> 
		  	</div> 
  		</section>

    </article>
@stop
@section('script')
<script type="text/javascript">
	var heights = $("div.thumbnail-red").map(function ()
    {
        return $(this).height();
    }).get();

	maxHeight = Math.max.apply(null, heights);

	$("div.thumbnail-red").height(maxHeight);

	console.log(maxHeight);

	$('#creditos_prend').click(function() {
	  $('#plus_creditos_prend').toggle();
	  $('#minus_creditos_prend').toggle();
	  if($('#minus_leasing').is(':visible'))
		{
			$('#plus_leasing').toggle();
	  		$('#minus_leasing').toggle();
		}
	});

	$('#leasing').click(function() {
	  $('#plus_leasing').toggle();
	  $('#minus_leasing').toggle();
	  	if($('#minus_creditos_prend').is(':visible'))
		{
			$('#plus_creditos_prend').toggle();
	 		$('#minus_creditos_prend').toggle();
		}
	});
</script>
@stop