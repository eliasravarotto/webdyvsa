@extends('layout')

@section('title_and_meta')
  <title>Nueva RAV4 Híbrida</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop

@section('content')

<section class="component hero-features" style="" data-component="" data-content-id="54">
    <div class="hero-features__image hero-features__image--desktop visible-lg visible-sm visible-md" style="background-image: url(/imagenes/modelos/nueva-rav4/nueva-rav4-portada.jpg)"></div>
    <div class="hero-features__image hero-features__image--mobile visible-xs " style="background-image: url(/imagenes/modelos/nueva-rav4/nueva-rav4-portada-mb.jpg)"></div>

    <div class="hero-features__wrapper container">
        <h1 class="hero-features__title">
        	<img src="/imagenes/modelos/nueva-rav4/logo-rav4.png" alt="" class="hero-features__title-img">
        </h1>

            <ul class="hero-features__list">
            	<li class="hero-features__item">
	                <h2 class="title">Seguridad</h2>
	                <p class="text">Nuevo sistema de seguridad activa Toyota Safety Sense (versiones Limited ) y 7 airbags en todas sus versiones.</p>
            	</li>
                <li class="hero-features__item">
	                <h2 class="title">Performance</h2>
	                <p class="text">Excelente potencia y rendimiento gracias a su innovador sistema híbrido auto recargable.</p>
	            </li>
	            <li class="hero-features__item">
	                <h2 class="title">Diseño</h2>
	                <p class="text">Robusto, sofisticado y funcional, propia de una verdadera SUV.</p>
	            </li>
            </ul>
    </div>

</section>

<section>
	<div class="component title-wrapper title-wrapper--highlighted container">
	    <div class="title-wrapper__wrapper">
	        <small class="subtitle">Características</small>
	        <h1 class="title">Más tecnología, más experiencias</h1>
	    </div>
	</div>
</section>

<section class="photo" style="background: url({{asset('imagenes/modelos/nueva-rav4/banner2.jpg')}});"></section>

<section>
	<div class="container">
		<div class="row" style="padding: 3rem 0rem">
			<div class="col-xs-12 col-md-6">
				<img src="{{asset('imagenes/modelos/nueva-rav4/c1.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-6">
				<h2 style="font-weight: 100; margin-left: 5rem; margin-right: 5rem">Tecnología Híbrida</h2>
				<p style="font-size: 1.8rem; line-height: 2;  font-weight: 100; font-weight: 100; margin-left: 5rem; margin-right: 5rem">El nuevo sistema híbrido auto recargable de Toyota RAV4 está compuesto por dos motores (naftero + eléctrico) que trabajan conjuntamente, otorgando una potencia total de 222 CV para la versión AWD y 218 CV para las versiones 4x2. La batería se regenera automáticamente cuando el vehículo desacelera o frena, sin necesidad de enchufarse a una fuente de energía externa.</p>
			</div>
		</div>
		<div class="row" style="padding: 3rem 0rem">
			<div class="col-xs-12 col-md-6 col-md-push-6">
				<img src="{{asset('imagenes/modelos/nueva-rav4/c2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-6 col-md-pull-6">
				<h2 style="font-weight: 100; margin-left: 5rem; margin-right: 5rem">Transmisión y modos de conducción</h2>
				<p style="font-size: 1.8rem; line-height: 2; font-weight: 100; margin-left: 5rem; margin-right: 5rem">
					Todas las versiones de la nueva RAV4 incorporan un nuevo tipo de transmisión automática eCVT , continuamente variable. Además, cuentan con levas al volante y 4 modos de conducción: normal, ecológico, deportivo y 100% eléctrico , haciéndolo un vehículo versátil y preparado para cualquier tipo de conducción.
				</p>
			</div>
		</div>
		<div class="row" style="padding: 3rem 0rem">
			<div class="col-xs-12 col-md-6">
				<img src="{{asset('imagenes/modelos/nueva-rav4/c3.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-6">
				<h2 style="font-weight: 100; margin-left: 5rem; margin-right: 5rem">Sistema de tracción integral inteligente e four iAWD</h2>
				<p style="font-size: 1.8rem; line-height: 2;  font-weight: 100; font-weight: 100; margin-left: 5rem; margin-right: 5rem">
					Se trata de un nuevo sistema de tracción electrónica inteligente denominado “e Four ” que proporciona torque en las 4 ruedas según la situación lo demande. Este sistema fue desarrollados para brindar una conducción propia de un SUV y una excelente eficiencia en combustible.
				</p>
			</div>
		</div>
		<div class="row" style="padding: 3rem 0rem">
			<div class="col-xs-12 col-md-6 col-md-push-6">
				<img src="{{asset('imagenes/modelos/nueva-rav4/c4.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-6 col-md-pull-6">
				<h2 style="font-weight: 100; margin-left: 5rem; margin-right: 5rem">Confort y Tecnología</h2>
				<p style="font-size: 1.8rem; line-height: 2; font-weight: 100; margin-left: 5rem; margin-right: 5rem">
					El diseño interior de la nueva RAV4 fue renovado totalmente siguiendo el principio de sofisticación por la cual fue concebida, y brindando una funcionalidad propia de un SUV. Incorpora un gran nivel de equipamiento de confort y tecnología para que tu viaje sea inigualable.
				</p>
			</div>
		</div>
		<div class="row" style="padding: 3rem 0rem">
			<div class="col-xs-12 col-md-6">
				<img src="{{asset('imagenes/modelos/nueva-rav4/c5.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 col-md-6">
				<h2 style="font-weight: 100; margin-left: 5rem; margin-right: 5rem">Toyota Safety Sense</h2>
				<p style="font-size: 1.8rem; line-height: 2;  font-weight: 100; font-weight: 100; margin-left: 5rem; margin-right: 5rem">
					Nuevo paquete de seguridad activa diseñado para detectar una variedad de peligros y alertar al conductor. Este sistema trabaja con una un radar de ondas milimétricas combinado con una cámara monocular. Sólo disponible en las versiones Limited.				
				</p>
			</div>
		</div>
	</div>
</section>
@stop
