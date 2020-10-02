@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Usados - {{$unidad->marca}} {{$unidad->modelo}}</title>
  <meta name="description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota en Chaco, accede a un usado con la mejor financiación.">
@stop

@section('mark-up-facebook')
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:title" content="{{$unidad->marca}} {{$unidad->modelo}}" />
    <meta property="og:description" content="Derka y Vargas Usados Seleccionados, Usados Certificados Toyota en Chaco, accede a un usado con la mejor financiación." />
    <meta property="og:image" content="{{Request::root().$unidad->foto}}" />

@stop

@section('styles_sheets')
<style type="text/css">
  .vue-lb-info{
    display: none !important;
}
</style>
@stop

@section('content')

	<show-usado v-bind:data="{ unidad: {{$unidad}} }"></show-usado>

	<!-- LARAVEL SHARE -->
    <div class="container">
      <div class="share-links">
        <div class="title">
          <p class="mb-1">Compartir en:</p>
        </div>
        {!!
          Share::page(\Request::fullUrl())
              ->facebook()
              ->whatsapp()
              ->twitter()
          !!}
      </div>
    </div>

    <div class="container py-3 my-3">
        <div class="title-section my-3">
            <h3>MÁS USADOS <br> <small>Que te podrían interesar</small></h3>
        </div>
		<div class="d-flex owl-carousel owl-carousel-usados owl-theme">
			@foreach(\App\Helpers\Helper::getUsadosDeInteres( $unidad ) as $u)
                @if( $u->foto ) @php $foto = $u->foto @endphp  @endif
                @if( !$u->foto ) @php $foto = "/imagenes/default-img.png" @endphp   @endif
                <a href="/usados/{{$u->slug}}">
                  <div class="card d-flex flex-column justify-content-between box-shadow-2">
                    <div class="container-img" style="background: url('{{$foto}}');"></div> 
                      <div class="card-body d-flex flex-column justify-content-end" style="height: 130px;">
                        <h5 class="text-dark-2 mb-2 font-weight-600">
                          {{$u->marca}} {{$u->modelo}}
                        </h5>
                        <div class="card-meta mb-2 text-dark-3">
                          $ {{number_format($u->precio, 0, ',', '.')}}
                        </div>
                    </div>
                  </div>
            </a>
			@endforeach
            <div class="item mx-2 d-flex justify-content-center align-items-center" style="height: 280px">
                <a href="/usados" class="mu-btn mu-white-btn">Ver más</a>
            </div>
		</div>
	</div>

	<div class="container py-3 my-3">
        <div class="well">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-2 text-center">
                            <img src="/imagenes/logo-uct-h-new.png" class="img-fluid">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <h4>¿Qué es un Usado Certificado TOYOTA?</h4>
                            <p>Un <b>Usado Certificado Toyota</b> es un vehículo que puede adquirir un cliente cuyos beneficios son los siguientes:</p>
                            <ul class="list-unstyled">
                                <li> <i class="fa fa-check text-success"></i> Garantía de 1 año o 20.000 km.</li>
                                <li> <i class="fa fa-check text-success"></i> Vehículos que fueron atendidos en concesionarios oficiales.</li>
                                <li> <i class="fa fa-check text-success"></i> 150 puntos de inspección realizados por técnicos capacitados.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

    @include('frontend.usados.contact-area-usados')
           
</article> 

@stop

@section('script')
<script type="text/javascript">



</script>
@stop