@extends('layout')

@section('title_and_meta')
  <title>Plan Nacional Para tu 0km - Agosto 0KM - Descuentos Imperdibles</title>
  <meta name="description" content="Gobierno y terminales subsidian por un mes la venta de 0km. El Gobierno Nacional y la Asociación de Fabricantes de Automotores (ADEFA) lanzaron en conjunto el programa “Julio 0km”, que se extenderá durante 30 días y subsidiará la venta al público de automóviles cero kilómetro. Los descuentos serán de 50.000 pesos para vehículos cuyo precio de venta se ubique por debajo de los 750.000 pesos, mientras que para los de gama más alta el descuento alcanzará los 90.000 pesos. El techo de los descuentos son los impuestos internos: no correrá para aquellas unidades que tienen un precio al público que ronda los US$ 2,1 millones o más. Los utilitarios y las pick ups no estarán alcanzados por estos descuentos.">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/nuevo-plan-nacional" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Nuevo Plan Nacional Para tu 0km" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

<style type="text/css">
	.item p{
		margin: 5px 15px;
		font-size:17px;
	}
</style>

@section('content')
<div class="container">
	<div class="title-section mt-3">
	    <h3 style="color: black">Plan Nacional Para tu 0km<br><small>EN AGOSTO SEGUIMOS CON ESTOS DESCUENTOS IMPERDIBLES</small></h3>
	  </div>
{{-- 	<div class="owl-carousel owl-md owl-theme">
		<div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
			<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/plan-nacional-yaris.jpg')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
		</div>
		<div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
			<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/plan-nacional-hilux.jpg')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
		</div>
		<div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
			<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/plan-nacional-corolla.jpg')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
		</div>
		<div class="item thumbnail thumbnail-no-bg thumbnail-no-border">
			<img style="border-radius: 5px;" src="{{asset('imagenes/financiacion/ultimos-dias4.png')}}" class="img-responsive" alt="Nuevo Plan Nacional Para tu 0km">
		</div>
	</div> --}}

	<div class="row">
		<div class="col-xs-12 col-md-6">
			<img class="img-responsive box-shadow" src="{{asset('imagenes/financiacion/agosto0km.jpg')}}">
		</div>
		<div class="col-xs-12 col-md-6">
			<p class="mt-3" style="color: #636b6f; font-size: 17px">📌 Tu <b>HILUX</b> con un descuento de <b>$120.000</b> del nuevo Plan Nacional, en todas sus versiones 4x2!</p>
	        <p style="color: #636b6f; font-size: 17px">📌 Accede a tu próximo <b>COROLLA</b> con un descuento de <b>$90.000</b> del nuevo Plan Nacional, en todas sus versiones!</p>
	        <p style="color: #636b6f; font-size: 17px">📌 También podes acceder al nuevo <b>YARIS</b> con un descuento de <b>$ 90.000</b> del nuevo Plan Nacional en las versiones ( XLS 4P y 5P) y S ( 4P y 5P )</p>
	        <p style="color: #636b6f; font-size: 17px">📌 <b>ETIOS</b> con un descuento de <b>$50.000 </b>del nuevo Plan Nacional, en todas sus versiones!</p>
	        <p style="color: #636b6f; font-size: 17px">📌 En la versión ( XS 5P) del nuevo <b>YARIS</b> a un descuento de <b>$ 50.000</b> del nuevo Plan Nacional</p>
	        <p style="color: #636b6f; font-size: 17px">➡️ Vigencia: hasta el 31 de agosto de 2019</p>
		</div>
	</div>
	
		<div class="title-section mt-3">
	    	<h3 style="color: black">CONTACTO<br><small>NO DUDES EN CONSULTAR</small></h3>
	  	</div>
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="col-md-12">
				<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
					{{ csrf_field() }}
					<input type="hidden" name="from" value="financiacion_plan_nacional">
					<div class="row">
						<div class=" col-md-12">
					    <label class="control-label">Nombre y Apellido</label>
					    <input type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
				  	</div>
				  	<div class=" col-md-12">
					    <label class="control-label">Teléfono</label>
					    <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
						<span class="text-danger">
							{{  $errors->first('telefono') }}
						</span>
				  	</div>
					</div>
					<div class="row">
						<div class=" col-md-12">
							<label class="control-label">Email</label>
					    <input type="email" class="form-control" name="email" value="{{old('email')}}">
					    <span class="text-danger">
							{{  $errors->first('email') }}
						</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label class="control-label">Mensaje</label>
					    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
						</div>
					</div>
					<div class="row pad-top-20">
						<div class="col-md-12">
							<div class="g-recaptcha" 
						           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
						    </div>
							@if ($errors->has('g-recaptcha-response'))
							    <span class="text-danger">
							        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
							    </span>
							@endif
						</div>
						<div class="col-md-12 py-1">
							{{-- <button type="submit" class="btn btn-default btn-submit">ENVIAR</button> --}}
							{{-- <button type="submit"  class="btn btn-default">ENVIAR</button> --}}
							<input type="submit" class="btn btn-success py btn-block" value="ENVIAR">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-5 col-xs-12" >
			<div class="col-md-12">
                <p>
		          <a href="https://wa.me/5493644178456?text=Hola%20estoy%20interesado/a%20en%20el%20Plan%20Nacional%200km" class="btn btn-toyota btn-whatsapp my-1"><i class="fa fa-whatsapp"></i> Consultar por Whatsapp</a> 
		          <a href="https://m.me/derkayvargas" class="btn btn-primary"><i class="fa fa-facebook"></i> Envíanos un mensaje de Facebook</a> 
		        </p>
            </div>
		</div>
	</div>
</div>

@stop
@section('script')
<script type="text/javascript">
  //Init Owl Caroucel 
      $('.owl-carousel.owl-md').owlCarousel({
        stagePadding: 50,
        loop:false,
        margin:10,
        nav:false,
        items : 3,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })
</script>

@stop

