@extends('frontend.layout')

@section('title_and_meta')
    <title>Derka y Vargas Concesionario Oficial TOYOTA</title>
    <meta name="description" content="Derka y Vargas Concesionario Oficial Toyota en Chaco. Venta de 0KM, Usados Certificados Toyota, Usados Multimarcas. Servicios de Posventa. Plan de Ahorro 100% financiado">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="INICIO" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
   <style type="text/css">
    .swal2-title {
      font-size: 1em !important;
    }
    .swal2-content {
      font-size: 0.8em !important;
    }
    .swal2-styled {
      padding: .125em 0.5em !important;
      font-size: 20px !important;
    }
    .swal2-actions {
      margin: .7em auto 0 !important;
    }
    .swal2-popup {
      width: 22em !important;
    }

    .bg-gris{
      background-color: #b0b0b0;
    }
    .bg-grid-box-tpa {
        background-image: url('/imagenes/home-min/bg-block-tpa.jpg') !important;
    }
    .cat-2-bg {
        background-image: url('/imagenes/home-min/bg-block-accesorios.jpg') !important;
    }
    .cat-3-bg {
        background-image: url('/imagenes/home-min/bg-block-posventa.jpg') !important;
    }
    .cat-4-bg {
        background-image: url('/imagenes/home-min/bg-block-usados.jpg') !important;
    }
    .cat-5-bg {
        background-image: url('/imagenes/home-min/kinto-grid.png') !important;
    }
    .grid-box-content h3 a, .grid-box-subtitle {
      color: rgba(36,42,53,.0);
    }
    .grid-box-overlay{
      background-color: rgba(36,42,53,0) !important;
    }
    .grid-box {
      cursor: pointer;
    }
    a:hover{
      text-decoration: none;
    }
   </style>
@stop

@section('content')
  <!---------------------------------------------------------------------
    SLIDER PRINCIPAL
  ----------------------------------------------------------------------->
  <section>
    <slide :data="{slide_id: 1}"></slide>
  </section>

  <!---------------------------------------------------------------------
    GRID VARIOS
  ----------------------------------------------------------------------->
  <section class="py-4">
    <div class="latest-offers categories content-area-13 bg-grea-3 py-4">
      <div class="container">
          <div class="row row-2">
            <div class="col-lg-4 col-md-12 col-pad">
                  <div class="grid-box" onclick="window.location.href = '{{route('usados_index')}}';">
                      <div class="grid-box_bg_box grid-box_long_bg cat-4-bg">
                          <div class="grid-box-overlay">
                              <div class="grid-box-content">
                                  <h3 class="grid-box-title my-1">
                                      <a href="{{route('usados_index')}}">USADOS</a>
                                  </h3>
                                  <h5 class="grid-box-subtitle my-1">Usados Certificados Toyota</h5>
                                  <h5 class="grid-box-subtitle">Usados Seleccionados</h5>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
              <div class="col-lg-4 col-md-12">
                  <div class="row">
                      <div class="col-md-6 col-lg-12 col-pad">
                          <div class="grid-box" onclick="window.location.href = '{{route('landing_tpa')}}';">
                              <div class="grid-box_bg_box bg-grid-box-tpa">
                                  <div class="grid-box-overlay">
                                      <div class="grid-box-content">
                                          <h3 class="grid-box-title">
                                              <a href="{{route('landing_tpa')}}">TOYOTA PLAN DE AHORRO</a>
                                          </h3>
                                          <h5 class="grid-box-subtitle">Accede a un Toyota 100% financiado</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-12 col-pad">
                        <div class="grid-box" onclick="window.location.href = '{{route('mobility_services')}}';">
                            <div class="grid-box_bg_box cat-5-bg">
                                <div class="grid-box-overlay">
                                    <div class="grid-box-content">
                                        <h3 class="grid-box-title">
                                            <a href="{{route('mobility_services')}}">MOBILITY SERVICES</a>
                                        </h3>
                                        <h4 class="grid-box-subtitle">Alquilá un Toyota</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-12">
                  <div class="row">
                      <div class="col-md-6 col-lg-12 col-pad">
                          <div class="grid-box">
                              <div class="grid-box_bg_box cat-2-bg">
                                  <div class="grid-box-overlay" onclick="window.location.href = '{{route('accesorios')}}';">
                                      <div class="grid-box-content">
                                          <h3 class="grid-box-title">
                                              <a href="{{route('accesorios')}}">ACCESORIOS</a>
                                          </h3>
                                          <h5 class="grid-box-subtitle">Equipá tu Toyota</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 col-lg-12 col-pad">
                          <div class="grid-box">
                              <div class="grid-box_bg_box cat-3-bg">
                                  <div class="grid-box-overlay" onclick="window.location.href = '{{route('posventa')}}';">
                                      <div class="grid-box-content">
                                          <h3 class="grid-box-title">
                                              <a href="{{route('posventa')}}">SERVICIOS DE POSVENTA</a>
                                          </h3>
                                          <h5 class="grid-box-subtitle">Precios, turnos y más</h5>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    MODELOS DESTACADOS
  ----------------------------------------------------------------------->
  <section class="py-4">
    <div class="container">
      <div class="main-title">
          <h1 class="text-dark-2">Modelos Destacados</h1>
          <p class="text-dark-3">Explorá nuestra amplia gama de vehículos</p>
      </div>
      <div class="owl-carousel owl-carousel-modelos owl-theme py-2">
            @foreach(\App\Helpers\Helper::getModelosDestacados() as $modelo)
            <div class="car-box item pl-1 pr-1">
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
                  <img src="{{$modelo->img_logo}}" class="d-initial" style="max-height: 35px; width: auto;">
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
            @endforeach
      </div>
      <div class="w-100 text-center mb-4">
        <a href="{{route('modelos')}}" class="btn btn-lg btn-danger btn-round mt-3">VER TODOS</a>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    COTIZADOR ONLINE
  ----------------------------------------------------------------------->
  <section class="section py-5 bg-1">
    <div class="container">
      <div class="main-title">
        <h1 class="text-center">Cotizador Online</h1>
        <p class="text-dark-3">Una nueva experiencia sin salir de tu casas</p>
      </div>
      <div class="row py-5">
        <div class="col-md-4 col-sm-12 text-center">
          <img class="w-25 py-2" src="{{ asset('imagenes/e-toyota/cotizacion-express.svg') }}">
          <h4 class="my-3">Cotización Express</h4>
          <p class="text-muted">Simulá a tu medida la reserva de tu próximo auto y te contactaremos desde Derka y Vargas para confirmar la misma</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
          <img class="w-25 py-2" src="{{ asset('imagenes/e-toyota/asistente-etoyota.svg') }}">
          <h4 class="my-3">Asistente de E-Toyota</h4>
          <p class="text-muted">¿Necesitas ayuda? Escribile al Asistente para que te oriente en la experiencia</p>
        </div>
        <div class="col-md-4 col-sm-12 text-center">
          <img class="w-25 py-2" src="{{ asset('imagenes/e-toyota/seguimiento-unidad.svg') }}">
          <h4 class="my-3">Seguimiento de tu Unidad</h4>
          <p class="text-muted">Una vez que confirmes la reserva de tu unidad, recibirás todas las notificaciones en forma electrónica hasta agendar la entrega de tu nuevo Toyota</p>
        </div>
      </div>
      <div class="d-block text-center">
        <a href="{{ route('cotizador_online_como_funciona') }}" class="btn btn-danger btn-round btn-lg ">¿Cómo funciona?</a>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    NOVEDADES DERKA Y VARGAS
  ----------------------------------------------------------------------->
  <section class="py-5">
    <div class="container">
      <div class="main-title">
        <h1 class="text-dark-2">Novedades Derka y Vargas</h1>
        <p class="text-dark-3">Conoce las ultimas novedades, noticias, beneficios y descuentos que tenemos para vos</p>
      </div>
      <div class="row">
          @foreach(\App\Helpers\Helper::getPostsByCategories(['novedades', 'rse'], 6) as $post)
            <div class="col-md-4 col-sm-12 py-2">
              <a href="{{ route('show_post', $post->slug) }}">
                <div class="card d-flex flex-column justify-content-between box-shadow-2">
                  <div class="container-img" style="background: url({{$post->image['public_path']}})"></div> 
                    <div class="card-body d-flex flex-column justify-content-end" style="height: 240px;">
                      <div class="card-meta mb-2 text-dark-3 text-right">
                        <span>{{ date('d M Y', strtotime($post->created_at)) }}</span>
                      </div>
                      <h4 class="text-dark-2 mb-2 font-weight-500">
                        {{$post->titulo}}
                      </h4>
                      <p class="card-text text-dark-3">{{str_limit(strip_tags($post->contenido), 80, '...')}}</p>

                  </div>
                </div>
              </a>
            </div>
          @endforeach
      </div>
      <div class="row my-4">
        <div class="col-sm-12 text-center">
          <h5>
          {{-- <a href="{{route('posts')}}" class="my-3">Ver más</a> --}}
          </h5>
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    PARALLAX
  ----------------------------------------------------------------------->
  <section class="visible-md visible-lg">
    <div class="parallax bg3" style="background-image: url(/imagenes/home-min/dyv2020.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            {{-- &nbsp;
            <div class="caption">
              <span class="border et-waypoint">Derka y Vargas - Charata</span>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    SOCIAL MEDIA
  ----------------------------------------------------------------------->
  <section id="services" style="border-top: 1px solid #01b2aa;">
    <div class="container">
      <img src="{{asset('imagenes/home-min/social_media.jpg')}}" class="w-100" alt="imagen redes sociales png">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 my-3 text-center">
          <div class="fb-page" data-href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a></blockquote></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 my-3 text-center">
          {{-- {{collect(\App\Helpers\Helper::getRecentPostInstagram())}} --}}
          @php $count = 0 @endphp
          {{-- @foreach(\App\Helpers\Helper::getRecentPostInstagram()->data as $post)
            @if ($count == 9) @break @endif
            @php $count++ @endphp
            <a class="group" href="{{$post->link}}"target="_blank"><img src="{{ $post->images->thumbnail->url }}" alt="{{$post->caption->text}}"></a>
          @endforeach
          --}}
        </div>
      </div>
    </div>
  </section>
@stop

@section('script')
<!-- Google FCM -->
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
<script src="{{ asset('js/sw-push-msg.js') }}"></script>
<!-- end -->
@stop