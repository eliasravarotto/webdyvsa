@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Usados - {{$unidad->marca}} {{$unidad->modelo}}</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota Chaco, financiacion usados {{$unidad->marca}} {{$unidad->modelo}}">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/usados/{{$unidad->slug}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$unidad->marca}} {{$unidad->modelo}}" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')

@stop

@section('content')
	<div class="container mar-top-20">
		<show-usado v-bind:data="{ unidad: {{$unidad}}, imagenes: {{$imagenes}} }"></show-usado>
	</div>

	<div class="container py-3">
        <div class="title-section my-3">
            <h3>MÁS USADOS <br> <small>Que te podrían interesar</small></h3>
        </div>
		<div class="d-flex owl-carousel owl-carousel-usados owl-theme">
			@foreach(\App\Helpers\Helper::getUsadosDeInteres( $unidad ) as $u)
            <a href="/usados/{{$u->slug}}">
			<div class="item thumbnail thumbnail-no-bg thumbnail-no-border mx-2">
                <div class="pos-rel o-flw-hiden" style="max-height: 250px">
                    @if( $u->foto )<img src="{{$u->foto}}" alt=""> @endif
                    @if( !$u->foto )<img src="/imagenes/default-img.png" alt=""> @endif
                </div>
                <div class="caption caption-default">
                    <h4 class="text-center pb-0 mb-0">{{$u->marca}} {{ $u->modelo }}</h4>
                    <h3 class="text-center precio my-1">$ {{number_format($u->precio, 0, ',', '.')}}</h2>
                </div>
            </div>
            </a>
			@endforeach
            <div class="item thumbnail thumbnail-no-bg thumbnail-no-border mx-2 d-flex justify-content-center align-items-center" style="height: 200px">
                <a href="/usados" class="mu-btn mu-white-btn">Ver más</a>
            </div>
		</div>
	</div>

	<div class="container">
        <div class="well">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 text-center">
                    <img src="/imagenes/logo-uct.png" class="img-responsive" style="max-height: 125px; display: inline; margin-bottom: 10px;">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10">
                    <h4>¿Qué es un Usado Certificado TOYOTA?</h4>
                    <p>Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son los siguientes:</p>
                    <ul class="list-unstyled">
                        <li> - Garantía de 1 año o 20.000 km.</li>
                        <li> - Vehículos que fueron atendidos en concesionarios oficiales.</li>
                        <li> - 150 puntos de inspección realizados por técnicos capacitados.</li>
                    </ul>
                </div>
            </div>
        </div>
	</div>
</article> 
@stop