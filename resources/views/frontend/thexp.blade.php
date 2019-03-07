@extends('layout')

@section('content')

<section>
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
	<div class="container" style="margin-top: 100px">
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
				<img class="img-resposive" src="/imagenes/modelos/prius/colores/blanco_perla.jpg">
			</div>
		</div>
	</div>
</section>

@stop