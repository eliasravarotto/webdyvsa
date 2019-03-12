@extends('layout')

@section('styles_sheets')
	<style type="text/css">
		.titleContainer {
		    background-color: #0E436E;
		    color: #fff;
		    text-align: center;
		    padding: 0px;
		}
		.col-text{
			padding: 7px;
			width: 77%
		}
		.col-text p{
			font-weight: bold;
			font-size: 1.6rem;
		}
		.col-img{
			width: 23%
		}

		.beneficios .flex{
			margin: 17px 0px;
		}
	</style>
@stop

@section('content')


<section>
	<article>
		<div class="visible-xs visible-sm" 
			 style="background: url(/imagenes/tecnohibrida.jpg) 	no-repeat 30%;
	    	 	height: 40vh;
	    		background-size: cover;
	    		margin-bottom: -55px;">
			<div class="texto-encabezado" style="height: 100%; display: flex; flex-direction: column; justify-content: space-around;">
			  <div></div>
			  <div class="flecha-bajar text-center" style="margin-bottom: -50px;">
			    <a href="#">
			      <i class="fa fa-chevron-down" aria-hidden="true"></i>
			    </a>
			  </div>
			</div>
		</div>
		<div class="visible-md visible-lg" style="height: 50vh; background: url(/imagenes/tecnohibrida.jpg) center; background-size: cover; ">
		</div>
	</article>

	<article class="container">
		<div class="row titleContainer mt-3">
			<h3 class="containerCenter"> ¿QUÉ ES LA TECNOLOGÍA HÍBRIDA?</h3>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-justify mt-3">A diferencia de los vehículos convencionales, un auto híbrido funciona gracias a la energía que le proveen sus dos motores, uno naftero y otro eléctrico. El exclusivo sistema híbrido Toyota HSD (Hybrid Synergy Drive) combina la potencia otorgada por un motor naftero convencional con la de un motor/generador eléctrico.</p>
			</div>
		</div>
		<div class="row my-3">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/motorCombustion.svg">
			</div>
			<div class="col-sm-12 mt-3">
				<h3 class="text-center">SISTEMA INTELIGENTE QUE COMBINA CON EFICIENCIA EL USO DE AMBOS MOTORES</h3>
				<p class="text-justify">Durante la aceleración, el motor naftero da potencia a las ruedas. Y en caso de necesidad el motor eléctrico brindaría la potencia requerida. Cuando se frena o desacelera, el motor eléctrico funciona como un generador, convirtiendo la energía cinética del vehículo en energía eléctrica, que se usa para cargar las baterías. Todo esto hace que vos nunca debas preocuparte por el estado de la batería ni por cargarla; el sistema lo hará por vos.</p>
			</div>
			<div class="col-sm-12">
				<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/comoFunciona.svg">
			</div>
		</div>
	</article>

	<article class="container">
		<div class="row titleContainer">
			<h3 class="containerCenter"> BENEFICIOS DE LOS AUTOS HÍBRIDOS </h3>
		</div>
			
		<div class="row beneficios">
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/consumo.png">
					</div>
					<div class="col-text">
						<p>MÁXIMA EFICIENCIA EN CONSUMO</p>
						<span>Un tanque de combustible permite recorrer el doble de distancia que un auto convenciona.</span>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/silenciosa.png">
					</div>
					<div class="col-text">
						<p>EXPERIENCIA DE MANEJO ÚNICA Y SILENCIOSA</p>
						<span>Gracias al silencioso motor y al modo de conducción EV, su marcha es excepcionalmente placentera.</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row beneficios">
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/autorecargable.png">
					</div>
					<div class="col-text">
						<p>AUTO-RECARGABLE</p>
						<span>La batería no necesita conectarse, se recarga cada vez que frena y desacelera.</span>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/eco.png">
					</div>
					<div class="col-text">
						<p>ECO-FRIENDLY</p>
						<span>Menos emisiones que un vehículo convencional.</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row beneficios">
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/potencia.png">
					</div>
					<div class="col-text">
						<p>DOBLE POTENCIA</p>
						<span>Los dos motores funcionan juntos para ofrecer más potencia cuando la necesitás.</span>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<div class="flex align-items-center">
					<div class="col-img">
						<img class="img-responsive" src="https://www.toyota.com.ar/hibridos/img/garantia.png">
					</div>
					<div class="col-text">
						<p>CONFIABLE</p>
						<span>Es TOYOTA y cuenta con 8 años de garantía sobre los componentes híbridos.</span>
					</div>
				</div>
			</div>
		</div>
	</article>

</section>

@stop