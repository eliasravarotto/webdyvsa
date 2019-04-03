@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Tecnología Híbrida</title>
  <meta name="description" content="Conocé la tecnología híbrida. Que es la tecnología híbrida?. Que es un auto híbrido?. Como funciona un auto híbrido?">
@stop

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

<section style="margin-top: 70px;">
	<div class="visible-xs visible-sm" 
		 style="background: url(/imagenes/home/thexp3.jpg) 	no-repeat 30%;
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

	<div class="visible-md visible-lg" style="height: 50vh; background: url(/imagenes/home/thexp3.jpg) center; background-size: cover; ">
	</div>

	<div class="container" style="margin-top: 70px">
		<div class="row">
			{{-- #1 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/vUPgPSLEJ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Los híbridos tienen menos reacción que una babosa'</span>
					</div>
				</div>
			</div>
			{{-- #2 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/iby4FQ2lMac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Hay que enchufarlos y no ahorran nada'</span>
					</div>
				</div>
			</div>
			{{-- #3 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/4fWTx0RcP10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Entre más sofisticada la tecnología, más fácil de romperse'</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			{{-- #4 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/WKphpOopcXw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Los híbridos son carritos de golf'</span>
					</div>
				</div>
			</div>
			{{-- #5 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/QV5LS-Np90A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Manejar un híbrido es más difícil que chuparse el codo'</span>
					</div>
				</div>
			</div>
			{{-- #6 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/UZqDSIcaadg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Con los híbridos nadie te garantiza nada'</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			{{-- #7 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/GZ_MxuDo6sU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Para que un híbrido consuma menos, tenés que ser piloto profesional'</span>
					</div>
				</div>
			</div>
			{{-- #8 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/TOQ6IbwtvzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Los híbridos no se bancan que les llenes el baúl'</span>
					</div>
				</div>
			</div>
			{{-- #9 --}}
			<div class="col-sm-12 col-md-4">
				<div class="thumbnail thumbnail-no-bg">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/LPAZngILST4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
					<div class="caption text-center" style="padding: 9px 9px 0px 9px;">
						<span>MITO: 'Mantener un híbrido es carísimo'</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="-webkit-box-shadow: 0px 0px 19px -5px rgba(0,0,0,0.75);
								-moz-box-shadow: 0px 0px 19px -5px rgba(0,0,0,0.75);
								box-shadow: 0px 0px 19px -5px rgba(0,0,0,0.75);
								margin: 0px">
			<div class="col-sm-12 col-md-6 flex flex-d-col justify-content-center align-items-center" style="min-height: 192px;">
				<h2>¿Querés probarlo?</h2>
                <a href="/test-drive/create" class="btn btn-toyota btn-lg mt-3" style="border-radius: 0px;">SOLICITAR TEST DRIVE</a>
			</div>
			<div class="col-sm-12 col-md-6 text-center">
				<img class="img-responsive" src="/imagenes/modelos/prius/colores/blanco_perla.jpg">
			</div>
		</div>
	</div>
</section>


@stop