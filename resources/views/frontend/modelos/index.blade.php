@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Modelos</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/modelos/etios" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Toyota Listado de Modelos" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
	<article>
        <section>
            @include('frontend.includes.test-drive')
        </section>
        <section>
      		<div class="container">
      			<div class="pad-top-bot-50" style="padding-left: 8%; padding-right: 8%;">
      				<div class="row">
      					@foreach($modelos as $modelo)
      					<div class="col-sm-6 col-md-3 py-1 px-1">
      					    <a class="thumbnail thumbnail-hover thumbnail-no-border thumbnail-no-bg" href="/modelos/{{$modelo->nombre}}" style="text-decoration: none; padding: 8px">
                      @if( $modelo->es_hibrido )
      					      <div style="position: absolute; right: 28px">
                        <span>Híbrido</span>
                       <img src="{{asset('imagenes/logos/logohibrido.jpg')}}" alt="Autos Hibridos Argentina" style="height: 25px;">
                      </div>
                      @endif
                      <img class="mt-2" src="{{$modelo->img_modelo}}" alt="...">
                        <div class="d-flex justify-content-center">
                            <img class="" src="{{$modelo->img_logo}}" style="height: 35px; max-width: 80%">
                        </div>
                        <div class="d-flex justify-content-center pt-1">
                          <span class="btn btn-default text-center btn-round">Ver modelo</span>
                        </div>
      					    </a>
      				  	</div>
      					@endforeach
      				</div>
      			</div>
      		</div>
        </section>
        <section class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-5 text-center">
                <img class="img-fluid d-none d-md-block d-lg-block d-xl-block visible-md visible-lg" src="{{asset('imagenes/mobility/alquiler-toyota-mobility.jpg')}}" style="border-radius: 5px;" alt="alquiler de autos toyota resistencia chaco">
                <img class="img-fluid w-100 d-block d-lg-none d-md-none d-xl-none mb-1 visible-xs visible-sm" src="{{asset('imagenes/mobility/alquiler-toyota-mobility.jpg')}}" style="border-radius: 5px;" alt="alquiler de autos toyota resistencia chaco">
              </div>
              <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="d-flex w-100 flex-column">
                  <h3 class="text-dark bold mb-0">ALQUILER DE VEHÍCULOS</h3>
                  <div class="mt-1">
                    <p class="text-dark text-justify">Entérate como podes alquilar un Toyota en cinco sencillos pasos.</p>
                    <p class="text-dark text-justify">Toyota Mobility Services es el nuevo sistema de alquiler de autos, podes alquilar un vehículo por una hora, un día, un fin de semana, un mes etc.</p>
                  </div>
                  <div class="mt-2">
                    <a href="{{route('mobility_services')}}" class="btn btn-default btn-round mu-btn-md">Leer más</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
	</article>

@stop

@section('script')
@stop