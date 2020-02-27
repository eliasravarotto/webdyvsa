@extends('frontend.layout')

@section('title_and_meta')
  <title>Programa RSE Concesionarios</title>
  <meta name="description" content="">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/responsabilidad-social-empresarial" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RSE DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
	p{
		font-size: 1.8rem;
	}
	.data-post li{
	    font-size: 18px;
	    margin: 15px 10px;
	}
</style>
@stop

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Mensaje de Toyota Argentina en el Acto de Lanzamiento del Programa RSE Concesionarios</h2>
			 <img class="img-fluid" src="{{asset('/imagenes/rse/imagen-firmas.png')}}">
			 <ul class="list-unstyled list-inline data-post">
			 	<li class="text-muted"><i class="fa fa-calendar" aria-hidden="true"></i> Junio 2018</li>
			 	<li class="text-muted"><i class="fa fa-map-marker" aria-hidden="true"></i> Zárate, Buenos Aires</li>
			 </ul>
			 <p>
				El futuro de las empresas en los próximos años exige abordar el desafío de interrelacionar los objetivos de triple impacto: ambiental, social y económico.
			 </p>
			<p>
			Los programas de responsabilidad social empresaria (RSE) se integran cada vez más al corazón del negocio.  En este mundo globalizado ya no se juzga el éxito empresarial sólo con indicadores financieros; los valores intangibles como la reputación, la ética y la responsabilidad son igual de importantes. Asimismo, los modelos de negocios sostenibles prometen oportunidades económicas por valor de al menos 12 billones de dólares, más del 10% del PIB actual, pudiendo generar hasta 380 millones de empleos para 2030 (Informe 2018, Comisión de Comercio y Desarrollo Sostenible)
			</p>

			<p>La RSE y el desarrollo sustentable para una empresa significan <b>“adoptar estrategias de negocio que cumplan con las necesidades de la organización y sus accionistas, al tiempo que gestionan sus impactos positivos y negativos en el ambiente y en la sociedad”</b>.</p>

			<p>Las empresas que logren involucrarse en los asuntos y actividades relacionadas con su comunidad serán capaces de demostrar que son un <b>contribuyente responsable con el futuro del desarrollo social</b>. Asimismo, serán capaces de generar confianza y volverse una empresa atractiva para los nuevos talentos y para los clientes. Sólo un <b>nuevo modelo de negocio basado en los principios de los derechos humanos, ética y justicia social puede traernos un futuro sostenible</b>.</p>

			<p>Las empresas que muestren coherencia y responsabilidad en sus operaciones a lo largo de su cadena de valor podrán garantizar su éxito a largo plazo. El resultado es un círculo virtuoso que impulsa a la empresa a operar como un actor de verdadero impacto social y ambiental en un mundo cada vez más integrador.</p>

			<p>Con el objetivo de poner en práctica estos conceptos, desarrollamos un programa que aborda estos temas desde ángulos teórico-prácticos con casos concretos locales, tendencias globales, y herramientas de medición y análisis de gestión. </p>
		</div>
	</div>
	
</div>
@stop

