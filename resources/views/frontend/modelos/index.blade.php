@extends('frontend.layout')

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

@section('styles_sheets')
<style type="text/css">
    .btn-cotizar:hover {
      color: #002732;
      background-color: #e3e9eb;
      border-color: #e3e9eb;
      text-decoration: none;
  }
  .btn-cotizar{
    color: #002732;
      background-color: transparent;
      border-color: #002732;
      box-sizing: border-box;
      display: inline-block;
      font-size: 1.2rem;
      font-weight: 600;
      text-align: center;
      padding: .50rem 1.5rem;
      border-radius: 100px;
      border: 2px solid;
  }
</style>
@stop

@section('content')
	<article>
        <section>
            @include('frontend.includes.test-drive')
        </section>
        <section class="py-3">
      		<div class="container">
      			<div class="pad-top-bot-50" style="padding-left: 8%; padding-right: 8%;">
      				<div class="row">
      					@foreach($modelos as $modelo)
      					<div class="col-sm-6 col-md-4 py-1 px-1">
                  <div class="car-box item">
                    <div class="car-thumbnail bg-gris">
                        <a href="{{route('detalle_modelo', $modelo->nombre)}}" class="car-img">
                            @if ($modelo->es_hibrido)
                            <div class="tag">HÍBRIDO</div>
                            @endif
                            {{-- <div class="price-box">$850.00</div> --}}
                            <img class="d-block w-100 pt-4 pb-4" src="{{$modelo->img_modelo}}" alt="car">
                        </a>
                    </div>
                    <div class="detail text-center">
                        <img src="{{$modelo->img_logo}}" class="d-initial" style="max-height: 35px; width: auto;max-width: 100%">
                        <div class="location">
                            <a href="car-details.html" class="text-muted text-uppercase mt-1 ml-1">
                                {{$modelo->slogan}}
                            </a>
                        </div>
                        <div class="w-100 text-center">
                          <a href="{{route('detalle_modelo', $modelo->nombre)}}" class="text-info font-weight-600">VER MODELO</a>
                        </div>
                    </div>
                  </div>
      					    {{-- <a class="thumbnail thumbnail-hover thumbnail-no-border thumbnail-no-bg" href="/modelos/{{$modelo->nombre}}" style="text-decoration: none; padding: 8px">
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
      					    </a> --}}
    				  	</div>
      					@endforeach
      				</div>
      			</div>
      		</div>
        </section>

        <!---------------------------------------------------------------------
          MOBILITY
        ----------------------------------------------------------------------->
        <section class="py-5 bg-1">
          <div class="container">
            <div class="row py-4">
              <div class="col-md-5 col-sm-12 text-right">
                <img class="img-fluid" src="{{asset('imagenes/kinto/kinto-grid.png')}}" style="border-radius: 5px;" alt="alquiler de autos toyota resistencia chaco">
              </div>
              <div class="col-md-7 col-sm-12 pt-3 px-4">
                <h2>Alquiler de Vehículos</h2>
                <p><b>Entérate como podes alquilar un Toyota en unos sencillos pasos</b></p>
                <p class="text-muted">Toyota Mobility Services ahora es KINTO SHARE, el nuevo sistema de alquiler de autos, podes alquilar un vehículo por una hora, un día, un fin de semana, un mes, etc.</p>
                <a href="{{route('mobility_services')}}" class="btn-cotizar text-center mt-3">Ver más</a>
              </div>
            </div>
          </div>
        </section>

	</article>

@stop

@section('script')
@stop