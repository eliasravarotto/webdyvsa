@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Empresa</title>
  <meta name="description" content="Derka y Vargas Servicios de Posventa, Mantenimiento express, Plan de mantenimiento Toyota, Servicio técnico oficial Toyota">
@stop

@section('styles_sheets')
  <style type="text/css">
  	.row-politica{
  		background:url({{asset('imagenes/empresa/fondo-politica-ambiental.png')}});
  		background-size: cover;
  	}
  	.politica h3{
  		font-size: 2.5rem;
  		margin-bottom: 3.5rem
  	}
  	.politica p,
  	.politica ul li{
  		font-size: 1.8rem;
  	}
  	.politica ul li{
  		margin: 25px 0px;
  	}
  	.politica ul li i{
  		color: #fafafa;
	    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
  	}
  </style>
@stop

@section('mark-up-facebook')
    {{-- <meta property="og:url" content="https://www.derkayvargas.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="INICIO" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" /> --}}
@stop

@section('content')

<div class="container">
  <div class="row my-3">
    <div class="col-md-offset-2 col-md-8 col-xs-12">
      <img src="{{asset('imagenes/empresa/fondo-politica-ambiental.png')}}" class="img-responsive">
    </div>
  </div>
</div>
{{-- <section>
	<div class="container" id="politica-ambiental">
		<div class="row row-politica">
			<div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10">
				<div class="politica">
					<h3 class="text-center">POLITICA AMBIENTAL</h3>
					<p>La dirección y todo el personal de Derka y Vargas S. A., se comprometen a cumplir con los requisitos y regulaciones legales vigentes y otros requerimientos con vista a la preservación del medio ambiente. Además, la organización establece sus propios objetivos y alimenta el constante desarrollo de mejoras basándose en una educación sistemática, tomando a la prevención de la contaminación ambiental como base para la mejora continua del Sistema de gestión ambiental.</p>
					<br>
					<p>Esta política se llevará a cabo:</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check"></i> En el alcance definido por la organización: Concesionario Oficial Toyota Derka y Vrgas S. A., en la provincia del chaco, para la Comercialización de unidades, Ventas de repuestos, Servicio de posventa y Lavado de vehículos.</li>
						<li><i class="fa fa-check"></i> Manteniendo un sistema de de Gestion Ambienta bajo lineamientos; Normas ISO 14001:2015</li>
						<li><i class="fa fa-check"></i> Disponiendo de un programa de control de objetivos y metas ambientales.</li>
						<li><i class="fa fa-check"></i> Comprometiendo a los proveedores en el cumplimiento de los requisitos de la Organización.</li>
						<li><i class="fa fa-check"></i> Realizando todas estas actividades en un marco de rentabilidad y progreso.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section> --}}
@stop