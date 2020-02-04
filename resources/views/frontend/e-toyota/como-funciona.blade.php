@extends('layout')

@section('title_and_meta')
  <title>Cotizador Online E-Toyota</title>
  <meta name="description" content="Cotizá tu vehículo online y subite a un Toyota sin salir de tu casa.">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/contacto" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="CONTACTO DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
<section>
	<div class="mu-call-to-action bg-header-etoyota">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area d-flex justify-content-space-around">
						<div class="mu-call-to-action-left">
							<h1><b>E-Toyota Derka y Vargas</b></h1>
							<p style="color: #d8d8d8; font-size: 20px">
								Cotizador Online | ¿Cómo funciona?
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
	<div class="row py-4">
		<div class="col-md-6 col-sm-12 text-center">
			<iframe style="max-width: 100%" width="560" height="315" src="https://www.youtube.com/embed/ZC74ooNLpF8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-md-6 col-sm-12">
			<h2>Tené ya tu cotización express online</h2>
			<p><b>Ahorrá tiempo con nuestra experiencia E-Toyota Derka y Vergas</b></p>
			<p class="text-muted">Obtené el mejor precio para tu próximo auto, completando todo desde tu casa, oficina o sino desde tu celular, sin tener que visitar nuestro Concesionario.</p>
			<a href="https://dyv.e.toyota.com.ar/inventory" target="_blank" class="btn btn-lg btn-danger btn-round mt-3">COMENZÁ AHORA</a>
		</div>
	</div>
	</div>
</section>

	
		<section style="background-color: #f6f6f6;">
		<div class="container">
		<div class="row py-3">
		 	<div class="col-xs-12 col-md-6 text-center">
	            <img src="{{asset('imagenes/e-toyota/paso1.png')}}" class="img-responsive" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 1</span> Elegí</h2>
	            <p>Elegí entre cualquier modelo de Toyota para obtener exactamente el que buscas. Tendrás un asistente de compra para responder a cualquier inquietud. </p>
	        </div>
		</div>	
		</div>
		</section>

		<section>
		<div class="container">
		<div class="row py-3">
		 	<div class="col-xs-12 col-md-6 col-md-push-6 text-center">
	            <img src="{{asset('imagenes/e-toyota/paso2.png')}}" class="img-responsive" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 col-md-pull-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 2</span> Precios</h2>
	            <p>Desbloqueá nuestros precios con bonificaciones por pago efectivo. Nos esforzamos para que obtengas los mejores términos y condiciones posibles.
				También podrás simular tu cotización teniendo en cuenta la entrega de un usado o financiando con un crédito de TCFA (Toyota Compañía Financiera de Argentina). En definitiva, la forma más rapida y simple para que inicies el camino a tu nuevo Toyota.</p>
	        </div>
	    </div>
	    </div>
	    </section>

	    <section style="background-color: #f6f6f6;">
	    <div class="container">
	    <div class="row py-3">
		 	<div class="col-xs-12 col-md-6 text-center">
	            <img src="{{asset('imagenes/e-toyota/paso3.png')}}" class="img-responsive" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 3</span> Cotizá la entrega de tu usado</h2>
	            <p>Obtén una oferta en firme en menos de 3 horas laborales. Te vamos a informar un valor estimado de toma con un rango de mínima y máxima según la marca, modelo y año del auto. Luego serás contactado por un Asesor Comercial del Concesionario para definir los detalles de la operación, y si querés avanzar, te esperamos para darte una cotización más precisa evaluando tu usado en forma física.</p>
	        </div>
		</div>	
		</div>
		</section>

		<section>
		<div class="container">
		<div class="row py-3">
		 	<div class="col-xs-12 col-md-6 col-md-push-6 text-center">
	            <img src="{{asset('imagenes/e-toyota/paso4.png')}}" class="img-responsive" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 col-md-pull-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 4</span> Simulá tu financiación a crédito</h2>
	            <p>Vas a poder simular también la financiación que más te convenga a través de TCFA (Toyota Compañía Financiera de Argentina). Hay varias modalidades de financiación y plazos para que elijas la que mejor se adecúe a tu economía.</p>
	        </div>
	    </div>
	    </div>
	    </section>

	    <section style="background-color: #f6f6f6;">
	    <div class="container">
	    <div class="row py-3">
		 	<div class="col-xs-12 col-md-6 text-center">
	            <img src="{{asset('imagenes/e-toyota/paso5.png')}}" class="img-responsive" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 5</span> Revisión final</h2>
	            <p>Revisá la forma en que te gustaría hacer la operación con todas las alternativas posibles, una vez que definas la que mejor te cierra, clickea en la cotización, y se envía inmediatamente a un Asesor Comercial que te va a atender en forma personalizada para avanzar en la reserva de tu unidad.</p>
	        </div>
		</div>
		</div>
		</section>

		<section>
		<div class="container">
		<div class="row py-3">
		 	<div class="col-xs-12 col-md-6 col-md-push-6 text-center text-center">
	            <img src="{{asset('imagenes/e-toyota/paso6.png')}}" class="img-responsive" style="display:inline" style="display:inline">
	        </div>
	        <div class="col-xs-12 col-md-6 col-md-pull-6 descripcion">
	            <h2 class="mb-3"><span class="text-muted">Paso 6</span> Reserva y seguimiento de tu unidad</h2>
	            <p>Luego de que te contacte el Asensor Comercial del Concesionario, podrás revisar detalles finales de la operación, y una vez que confirmes la misma, se pone en marcha una nueva experiencia.
					A partir de ese momento, tendrás completa visibilidad de tu operación ya que te mantendremos informado del seguimiento de tu unidad y de todos los pasos necesarios hasta que te entreguemos tu nuevo Toyota.</p>
	        </div>
	    </div>
	    </div>
		<div class="container text-center py-2 pb-2">
			<a href="https://dyv.e.toyota.com.ar/inventory" target="_blank" class="btn btn-lg btn-danger btn-round mt-3">COMENZÁ AHORA</a>
		</div>
	    </section>


@stop
