@extends('layout')

@section('title_and_meta')
  <title>Nueva RAV4 Híbrida</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop


@section('styles_sheets')
<style type="text/css">
@media (max-width: 767px){
	.hero-features__image {
	    height: 50rem;
	}

	.hero-features__image {
	    background-size: cover;
	    background-position: 50%;
	    background-repeat: no-repeat;
	}

	.hero-features__wrapper {
	    margin-top: -12rem !important;
	    margin-right: : 22rem !important;
	}
	.hero-features__title {
	    width: auto;
	    max-width: 8rem;
	}

	.hero-features__list{
		display: none;
	}
}

@media (min-width: 768px){
	.hero-features {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    /*height: 60rem;*/
	    min-height: 55rem;
	    color: #f7f7f7;
	}

	.hero-features__image {
	    position: absolute;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    z-index: -1;
	}

	.hero-features__wrapper {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    flex-direction: column;
	    align-items: flex-end;
	    justify-content: center;
	    align-self: flex-end;
	}

	.hero-features__list {
	    display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	}

	.hero-features__item {
	    margin-left: 2.5rem;
	    margin-right: 2.5rem;
	}
}

.hero-features {
    position: relative;
    background-size: cover;
}

.hero-features__image {
    background-size: cover;
    background-repeat: no-repeat;
}

.hero-features__wrapper {
    margin-top: 3rem;
    margin-bottom: 3rem;
}
.hero-features__title {
    max-width: calc(33.33333% - 3rem);
    margin-top: 0;
    margin-bottom: 5rem;
}

.hero-features__list {
    list-style: none;
    padding: 0;
    margin: 0;
}



.hero-features__item .title {
    font-weight: 600;
    font-size: 2.25rem;
    line-height: 1.3;
    margin-top: 0;
    margin-bottom: 0;
}

.hero-features__item {
    width: 100%;
    flex: 1 1 auto;
}

.hero-features__item .text {
    font-weight: 500;
    font-size: 1.4rem;
    line-height: 1.75;
    margin-top: .75rem;
    margin-bottom: 0;
}


.photo {
    height: 45rem;
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    margin-top: 1.75rem;
    margin-bottom: 1.75rem;
}


.title-wrapper--highlighted {
    display: block;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
}

.title-wrapper {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    padding-top: 3.5rem;
    padding-bottom: 1.75rem;
}
</style>
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
