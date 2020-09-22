@extends('frontend.layout')

@section('title_and_meta')
  <title>Plan de Ahorro - Planes Adjudicados</title>
  <meta name="description" content="Plan de Ahorro Toyota. Planes adjudicados en Resistencia, Charata, Saenz Peña, Villa Angela, Toyota Cuotas Sin Interes, Plan sin interes Toyota, Plan de Ahorro Etios, Plan de Ahorro Hilux, Plan de Ahorro Yaris, Plan de Ahorro Corolla, Que es un plan de ahorro. Autos 100% financiados sin interes. Toyota 100% financiado. Planes avanzados listos para licitar">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/plan-de-ahorro" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="PLANES AVANZADOS DERKA Y VARGAS" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
a.btn:hover, a.mu-btn:hover{
	text-decoration: none;
}

.fz-20{
	font-size: 20px;
}

span.bg-red{
	background-color: #f30827;
}
#tabla-adjudicados thead tr{
	background-color: #ea1b2f;
}
#tabla-adjudicados tbody td{
	padding: 0.75rem 0.2rem;
}
.ul-adjudicados .header{
	padding: 15px 0px;
	font-weight: bold;
}
.ul-adjudicados .details{
	color: #6c757d!important;
	margin-left: 5px
}
.ul-adjudicados li{
	background-color: #dbdbdb;
}
.ul-adjudicados li .badge{
	font-size: 15px;
	line-height: initial;
}

.font-weight-500{
	font-weight: 500;
}


</style>
@stop

@section('content')
<section>
	<div class="mu-call-to-action mu-call-to-action-dark bg-header-tpa-avanzados">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-call-to-action-area d-flex justify-content-space-around">
						<div class="mu-call-to-action-left">
							<h1 class="white"> Planes Adjudicados <br> <small style="color: #d8d8d8">Oportunidades</small></h1>
						</div>
						<div style="margin-top: 15px">
							<a href="#" class="mu-btn mu-default-btn" onclick="masDetalles(event)">CONSULTAR <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div id="lista-adjudicados" class="pb-2">
			@if(sizeof($adjudicados)>0)
				<div class="row py-4">
					<div class="col-xs-12 col-md-12 d-flex">
						<div class="table-responsive">
						<table id="tabla-adjudicados" class="table table-sm table-hover py-1 my-5 ">
						    <thead>
						      <tr>
						        <th class="" style="color: white; font-weight: bold; min-width: 120px">G/O</th>
						        <th class="text-left" style="color: white; font-weight: bold; min-width: 220px">Unidad</th>
						        <th class="" style="color: white; font-weight: bold; min-width: 300px">Avance</th>
						        <th class="" style="color: white; font-weight: bold; min-width: 300px">Precio de Venta</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach($adjudicados as $adjudicado)
						    		<tr>
					                    <td class="text-center">{{$adjudicado->grupo_orden}}</td>
					                    <td class="text-left"><span class="font-weight-bold">{{$adjudicado->planTpa()->first()->unidad}} - {{$adjudicado->planTpa()->first()->modalidad}}</span> <br><span class="text-muted">Cuota pura: $ {{number_format($adjudicado->planTpa()->first()->cuota_pura, 2, ',', '.')}}</span></td>
					                    <td><span class="font-weight-bold">{{$adjudicado->avance_cuotas}} cuotas.</span> <br><span class="text-muted">Valor avance: $ {{number_format($adjudicado->avance_en_cuotaspura, 2, ',', '.')}}</span></td>
					                    <td><span class="font-weight-bold">$ {{number_format($adjudicado->precio_venta, 2, ',', '.')}}</span> <br><span class="text-muted">Valor ahorrado:</span> <span class="text-success font-weight-500">$ {{number_format($adjudicado->valor_ahorrado, 2, ',', '.')}}</span></td>
					                </tr>
						      	@endforeach
						    </tbody>
					  	</table>
						</div>
					</div>
				</div>
		  	@endif

			@if(sizeof($adjudicados)==0)
			  	<div role="alert" class="my-5 alert alert-info text-center">
			  		<i class="fas fa-info-circle" aria-hidden="true"></i> Por el momento no contamos con planes adjudicados para la venta.
			  	</div>
		  	@endif
			
		</div>
	
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-12 col-xs-12" id="form-contacto">
				<div class="main-title">
					<h2 class="text-dark-2">CONSULTA POR NUESTROS PLANES ADJUDICADOS </h2>
					<p class="text-dark-3">Un asesor se pondrá en contacto con usted a la brevedad.</p>
				</div>
				@include('frontend.plan-de-ahorro.includes.contact-form', $data=['from' => 'tpa'])
			</div>
		</div>
	</div>
</section>

@stop

@section('script')
<script>
function masDetalles(e){
		e.preventDefault();
		$('html,body').animate({
	        scrollTop: $("#form-contacto").offset().top
	    }, 'slow');
	    $(".cliente").focus();
	}
</script>
@stop