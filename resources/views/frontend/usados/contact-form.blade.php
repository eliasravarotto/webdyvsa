@extends('frontend.layout')

@section('title_and_meta')
  <title>Formulario de Contacto | Derka y Vargas S.A.</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota en Chaco, accede a un usado con la mejor financiación.">
@stop

@section('styles_sheets')
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	<style type="text/css">
		.vehicle-content{
			margin: 0px 5px;
			/*position: relative*/
		}
		.vehicle-content .vehicle-image{
			height: 130px;
		}
		.vehicle-content .vehicle-footer{
		    background: #f7f7f7;
		    min-height: 120px;
		    clear: both;
		    padding: 20px 20px 15px 20px;
		    overflow: hidden;
		}
		.vehicle-content .vehicle-footer .title {
		    font-size: 15px;
		    text-align: center;
		    color: #222222 !important;
		    padding: 0 0 15px 0;
		    display: inline-block;
		    width: 100%;
		    font-weight: 700;
		}
		.vehicle-content .vehicle-footer .ul-features {
			display: inline-block;
		    width: 100%;
		    text-align: center;
		    border-bottom: #cccccc 1px solid;
		}

		.slick-prev:before, .slick-next:before{
			font-family: "Font Awesome 5 Free"; 
			font-weight: 900; 
			color: black;

		} 
		.slick-prev:before{
			content: "\f053";
		}
		.slick-next:before{
			content: "\f054";
		}
		.vehicle-selected{
			border: 2px solid #e01e37;
		}
		.slick-slide:focus { outline: none; }
	</style>
@stop

@section('content')

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-8 col-12">
			<section class="content-area">
				<div class="container">
					<div class="main-title text-center">
						<h1>Contacto</h1>
						<p>Dejanos tus datos y encontrá las mejores opciones en Chaco de unidades usadas en todas las marcas.</p>
					</div>
					<div class="row py-1 d-flex justify-content-center" id="contacto-usados">
						<div class="col-12">
							
							<form action="/formulario-de-contacto-vehiculos-usados" method="POST" role="form">
							    {{ csrf_field() }}
							    <input type="hidden" name="from" value="usados">
							    <div class="row">
							        <div class="col-lg-12">
							            <div class="row">
							                <div class="col-md-12 text-left">
							                    <div class="form-group name">
							                        <input type="text" name="cliente" class="form-control" placeholder="Nombre y Apellido" value="{{old('cliente')}}">
							                        <span class="text-danger">
							                            {{  $errors->first('cliente') }}
							                        </span>                    
							                    </div>
							                </div>
							                <div class="col-md-12">
							                    <div class="form-group email">
							                        <input type="number" name="telefono" class="form-control" placeholder="Teléfono o celular" value="{{old('telefono')}}">
							                        <span class="text-danger">
							                            {{  $errors->first('telefono') }}
							                        </span>
							                    </div>
							                </div>
							                <div class="col-md-12">
							                    <div class="form-group number">
							                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Correo electrónico">
							                    </div>
							                </div>
							                <div class=" col-md-12">
							                    <select class="form-control" name="sucursal">
							                    	<option>--Selecciona una sucursal--</option>
							                        <option value="Sáenz Peña">Sáenz Peña</option>
							                        <option value="Resistencia" >Resistencia</option>
							                        <option value="Charata" >Charata</option>
							                        <option value="Villa Ángela" >Villa Ángela</option>
							                    </select>
							                    <span class="text-danger">
							                        {{  $errors->first('sucursal') }}
							                    </span>
							                </div>
							                <div class="col-md-12">
							                    <div class="slide-vehicles pt-3">
								                    @foreach($unidades as $unidad)
									                    <div class="vehicle-item">
													      	<div class="vehicle-content select-vehicle" data-vid="{{ $unidad->id }}">
														      		<div class="vehicle-image">
														      			<img src="{{$unidad->foto}}" class="w-100">
														      		</div>
														      		<div class="vehicle-footer">
														      			<span class="title"> {{$unidad->modelo}}</span>
														      			<ul class="ul-features list-unstyled">
														      				<li>{{$unidad->anio}} | {{ $unidad->color }}</li>
														      			</ul>
														      			<span class="text-muted text-center d-block">$ {{  number_format($unidad->precio, 2, ',', '.')}}</span>
														      		</div>
													      	</div>
												  		</div>
								                    @endforeach
							                    </div>
							                    <input type="hidden" name="vehicle_id" id="vehicle_id">
							                </div>
							                <div class="col-md-12 py-3">
							                    <div class="g-recaptcha" 
							                           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
							                    </div>
							                    @if ($errors->has('g-recaptcha-response'))
							                        <span class="text-danger">
							                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
							                        </span>
							                    @endif
							                </div>
							                <div class="col-md-12 py-3">
							                    <div class="send-btn text-center">
							                        <button type="submit" class="btn btn-md button-theme btn-submit">Enviar Mensaje</button>
							                    </div>
							                </div>
							            </div>
							        </div>
							    </div>
							</form>

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

@stop
@section('script')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

let sliderConfig = {"dots": false,
				  "focusOnSelect": true,
				  "infinite": false,
				  "speed": 500,
				  "slidesToShow": 3,
				  "slidesToScroll": 1,
				  "touchThreshold": 5,
				  "responsive": [
				  		{
					      "breakpoint": 1200,
					      "settings": {
				        		"slidesToShow": 3,
					      	}
					    },
					    {
					      "breakpoint": 992,
					      "settings": {
						        "slidesToShow": 2,
					      }
					    },
					    {
					      "breakpoint": 768,
					      "settings": {
						        "slidesToShow": 2,
						        "dots": false,
					      	}
					    },
					    {
					      "breakpoint": 576,
					      "settings": {
						        "slidesToShow": 2,
						        "dots": false,
					      	}
					    }
				  	]
				}

$('.slide-vehicles').slick(sliderConfig);

$('.select-vehicle').click(function() {

  $('.select-vehicle').removeClass('vehicle-selected');
  $(this).toggleClass('vehicle-selected')
  $('#vehicle_id').val($(this).data("vid"))
})

$('.btn-submit').click(function() {
	$(this).prop('disabled', true);
	$('form').submit();
})
	
</script>

@stop