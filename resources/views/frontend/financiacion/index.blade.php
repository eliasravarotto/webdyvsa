@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Financiación</title>
  <meta name="description" content="Derka y Vargas Financiación, TCF, Toyota Compañia Financiera, Créditos UVA">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/financiacion" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="FINANCIACION" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
	<article>
		

		<section>
			<div class="container visible-md visible-lg">
				<div class="page-header" >
					<div class="row remove-flex-on-mobile" style="display: flex; justify-content: center; align-items: center;">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				  			{{-- <h1>FINANCIACIÓN <small></small></h1> --}}
				  			<center>
				  			<img class="img-responsive" src="/imagenes/TCF/Toyota_Compania_Financiera.jpg" alt="Toyota Compañia Financiera Derka y Vrgas Chaco">
				  			</center>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
							<p class="text-justify fs-16">Toyota Financial Services Corporation es la entidad de servicios financieros de Toyota Motor Corporation,  con presencia en 30 países repartidos en todos los continentes y con más de 10.000.000 clientes, es una de las mayores financieras de marca del Mundo.En enero 2005 Toyota Compañía Financiera de Argentina S.A. inicia sus operaciones en el país con el objetivo de brindar la más alta gama de servicios financieros para los usuarios TOYOTA
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container visible-sm visible-xs mb-3">
				<div class="row remove-flex-on-mobile" style="display: flex; justify-content: center; align-items: center;">
					<div class="col-sm-12 col-xs-12">
			  			{{-- <h1>FINANCIACIÓN <small></small></h1> --}}
			  			<center>
			  			<img class="img-responsive" src="/imagenes/TCF/Toyota_Compania_Financiera.jpg" alt="Toyota Compañia Financiera Derka y Vrgas Chaco">
			  			</center>
						<p class="text-justify fs-16">Toyota Financial Services Corporation es la entidad de servicios financieros de Toyota Motor Corporation,  con presencia en 30 países repartidos en todos los continentes y con más de 10.000.000 clientes, es una de las mayores financieras de marca del Mundo.En enero 2005 Toyota Compañía Financiera de Argentina S.A. inicia sus operaciones en el país con el objetivo de brindar la más alta gama de servicios financieros para los usuarios TOYOTA
						</p>
					</div>
					<div class="col-sm-12 col-xs-12" >
						<center>
			  			<img class="img-responsive" src="/imagenes/TCF/slide6_sm.jpg">
			  			</center>
					</div>
				</div>
			</div>
		</section>

	<!---------------------------------------------------------------------
    FINANCIACIÓN COROLLA
  	----------------------------------------------------------------------->
  	<section>
    <div class="container">
      <div class="title-section mt-3">
        <h3>FINANCIACIÓN COROLLA   <small>Llévate tu Corolla financiado hasta $400.000</small></h3>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <img src="{{asset('imagenes/home-min/financiacion-toyota-corolla.png')}}" class="img-responsive">
        </div>
        <div class="col-md-6 col-xs-12">
          <br>
          <p>
            💥 NO TE QUEDES SIN TU COROLLA
            Bonificación especial hasta el 31 de mayo❗️
          </p>
          <p>
            ✅ Flete <b>$0</b>
            ✅ Gastos de inscripción <b>$0</b>
          </p>
          <p>
            📌 Financiación Actual 
          </p>
          <p>
            <b>24 meses</b>
            🔖Cuota tradicional promedio $ 30.587,45
            👉🔖Bonificada 19,9% $ 21.109,45 
          </p>
          <p>
            <b>12 meses</b>
            🔖Cuota tradicional promedio $ 47.479,25
            👉🔖Bonificada 19,9% $ 37.811,94
          </p>
          <br><p class="text-muted"><em>Promoción válida hasta el 28/06/2019</em></p>
        </div>
      </div>
    </div>
  	</section>

  	<section>
    <div class="container">
      <div class="title-section mt-3">
        <h3>FINANCIACIÓN ETIOS Y YARIS   <small>Llévate tu Etios o Yaris Financiado hasta  $300.000</small></h3>
      </div>
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <img src="{{asset('imagenes/home-min/financiacion-toyota-etios-yaris.png')}}" class="img-responsive">
        </div>
        <div class="col-md-6 col-xs-12">
          <br>
          	<p>💥 APROVECHA BONIFICACIÓN especial❗️</p>

			<p>✅ Financia hasta $300.000 tu próximo Etios o Yaris.</p>

			<p>Hacelo en 12 o 24 cuotas con una tasa de 19.9%.</p>

			<p>✅ No dudes en consultarnos </p>
			

			<p>📌 Cuotas promedio!</p>

			<p>👉 24 MESES $ 15.832,45</p>

			<p>👉 12 MESES $ 28.358,95</p>

          <br><p class="text-muted"><em>Promoción válida hasta el 28/06/2019</em></p>
        </div>
      </div>
    </div>
  	</section>

	<section class="mt-3">
			<div class="container">
  			{{-- <div class="panel-group" id="accordion"> --}}
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        {{-- <h4 class="panel-title panel-title-financial"> --}}
			        <h4 class="panel-title panel-title-financial">
			          <a id="creditos_prend" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			          	<h4>
			          		{{-- <i class="fa fa-plus" id="plus_creditos_prend" style="display: none;"></i>
			          		<i class="fa fa-minus" id="minus_creditos_prend"></i> --}}
			          		 Créditos Prendarios
			          	</h4>
			          </a>
			        </h4>
			      </div>
			      {{-- <div id="collapse1" class="panel-collapse collapse in"> --}}
			        <div class="panel-body">
			        	<p style="font-size: 17px;">Nuestros planes de financiación aplican hasta el 75% del valor de la unidad. El 25% restante se abona junto a la entrega de la unidad y la firma del crédito prendario. Tenemos planes a Tasa Fija en pesos y en plazos de hasta 60 meses. Puede consultarnos también por nuestros planes de Tasa Variable. </p>
			        	<a class="btn btn-default" href="https://www.toyotacfa.com.ar/creditos-prendarios">MÁS DETALLES</a>
			        </div>
			      </div>
			    {{-- </div> --}}
			    <div class="panel panel-default">
			      <div class="panel-heading">
			        <h4 class="panel-title panel-title-financial">
			          <a id="leasing" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
			          	<h4>
			          		{{-- <i class="fa fa-plus" id="plus_leasing"></i>
			          		<i class="fa fa-minus" id="minus_leasing" style="display: none;"></i> --}}
			          		Leasing
			          	</h4>
			          </a>
			        </h4>
			      </div>
			      {{-- <div id="collapse2" class="panel-collapse collapse"> --}}
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
		        		<a class="btn btn-default" href="https://www.toyotacfa.com.ar/leasing">MÁS DETALLES</a>
			        </div>
			      {{-- </div> --}}
			    </div>
		  	{{-- </div>  --}}
	  	</div> 
		</section>

		<section class="pad-top-50 pad-bot-50" style="height: auto;">
	      <div class="container">
	        {{-- <h2 class="text-center bold">Servicio al Cliente</h2> --}}
	        {{-- <h3 class="text-center gray-1">Elegir un TOYOTA es mucho más que elegir un vehículo</h3> --}}
	        <div class="row" >
	          <div class="col-md-4 col-sm-12">
	            {{-- <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-calculator" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>Simulá tu préstamo</h1>
	                    <p class="text-justify">
	                      Elegí el modelo y el mejor plan de financiación para vos.
	                    </p>
	                	<a href="https://www.toyotacfa.com.ar/simulador-creditos" class="btn btn-white btn-primary btn-danger-1">SIMULAR</a>
	                </div>
	            </div> --}}
            	<a href="https://www.toyotacfa.com.ar/simulador-creditos" style="text-decoration: none; color: black">
		            <div class="well text-center">
			            	<i class="fa fa-calculator" style="font-size: 70px;" aria-hidden="true"></i>
		                    <h1>Simulá tu préstamo</h1>
	                    <p class="text-justify">
	                      Elegí el modelo y el mejor plan de financiación para vos.
	                    </p>
		            </div>
            	</a>
	          </div>  
	          <div class="col-md-4 col-sm-12">
	            {{-- <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-usd" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>Solicitá tu préstamo</h1>
	                    <p class="text-justify">
	                      En pocos y simples pasos obtené información en tu e-mail.
	                    </p>
	                    <a href="https://www.toyotacfa.com.ar/ToyotaAppForm/Login/MultiCanal?canal=WEB&cuit_cliente=0&cuit_dealer=0&id_campania_pao=0&id_cotizacion_seg=0&id_publicacion=0&id_sesion=0&tipo_persona=PF" class="btn btn-white btn-primary btn-danger-1">SOLICITAR</a>
	                </div>
	            </div> --}}
                <a href="https://www.toyotacfa.com.ar/ToyotaAppForm/Login/MultiCanal?canal=WEB&cuit_cliente=0&cuit_dealer=0&id_campania_pao=0&id_cotizacion_seg=0&id_publicacion=0&id_sesion=0&tipo_persona=PF" style="text-decoration: none;color: black">
	            <div class="well text-center">
	            	<i class="fa fa-usd" style="font-size: 70px;" aria-hidden="true"></i>
                    <h1>Solicitá tu préstamo</h1>
                    <p class="text-justify">
                      En pocos y simples pasos obtené información en tu e-mail.
                    </p>
	            </div>
                </a>
	          </div>  
	          <div class="col-md-4 col-sm-12">
	            {{-- <div class="thumbnail thumbnail-red thumbnail-financial">
	                <div class="caption caption-default text-center">
	                    <i class="fa fa-envelope-o" style="font-size: 70px;" aria-hidden="true"></i>
	                    <h1>¿Más detalles?</h1>
	                    <p class="text-justify">
	                      Completá el formulario y te contactaremos a la brevedad
	                    </p>
	                    <a href="/financiacion" class="btn btn-white btn-primary btn-danger-1">CONSULTAR</a>
	                </div>
	            </div> --}}
                <a href="#" onclick="masDetalles(event)" style="text-decoration: none;color: black">
	            <div class="well text-center">
	            	<i class="fa fa-envelope-o" style="font-size: 70px;" aria-hidden="true"></i>
                    <h1>¿Más detalles?</h1>
                    <p class="text-justify">
                      Completá el formulario y te contactaremos a la brevedad
                    </p>
	            </div>
                </a>
	          </div>  
	        </div>
	      </div>
  		</section>

  		<section>
  			<div class="container">
	  			<div class="row remove-flex-on-mobile" style="display: flex; justify-content: center;align-items: center;">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
	  					{{-- <img class="img-responsive" src="http://homu.com.ar/wp-content/uploads/2017/05/financial-web-SEP.jpg"> --}}
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12" id="form-contacto">
						<h2 class="text-center h1-titulo-form">FORMULARIO DE CONTACTO<br>
							<small>Dejanos un email y estaremos en contacto con usted a la brevedad, o acercate a una de nuestras sucursales.</small>
						</h2>
						<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<input type="hidden" name="from" value="financiacion">
							<div class="row">
								<div class=" col-md-6">
							    <label class="control-label">Nombre y Apellido</label>
							    <input type="text" class="form-control cliente" name="cliente" required>
						  	</div>
						  	<div class=" col-md-6">
							    <label class="control-label">Teléfono</label>
							    <input type="text" class="form-control" name="telefono">
						  	</div>
							</div>
							<div class="row">
								<div class=" col-md-12">
									<label class="control-label">Email</label>
							    <input type="email" class="form-control" name="email">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">Mensaje</label>
							    <textarea name="mensaje" class="form-control" required></textarea>
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
    </article>
@stop
@section('script')
<script type="text/javascript">

	function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}


</script>
@stop