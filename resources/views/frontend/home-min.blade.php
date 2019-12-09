@extends('layout')

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
    <style type="text/css">
      .usados-destacados {
        margin: -170px 0px 0px 0px;
        padding: 15px;
        background-color: white;
        border-radius: 5px;
      }
      .card .container-img {
        height: 210px !important;
      }
    </style>
@stop


@section('content')
  <!---------------------------------------------------------------------
    SLIDER PRINCIPAL
  ----------------------------------------------------------------------->
  @include('frontend.includes.slide-ppal')

  <!---------------------------------------------------------------------
    USADOS DESTACADOS
  ----------------------------------------------------------------------->
  <div class=" my-3">
    <section class="container" style="background:url({{asset('imagenes/usados-seleccionados.png')}}) center;height: 350px;background-size: cover;">
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="row usados-destacados box-shadow">
            <div class="col-xs-offset-1 col-md-offset-0 col-xs-10 col-md-5">
              <img class="img-responsive" src="{{asset('/imagenes/usados-destacados.png')}}" alt="Autos Usados destacados">
            </div>
            <div class="col-xs-12 col-md-7 text-center">
              <p class="text-left fz17">
              Conocé la selección de vehículos destacados que tenemos para ofrecerte. Seguro encontrás el que estás buscando, al mejor precio y financiación.
              </p>
              <a href="/usados" class="btn-link-underline text-center ">VER USADOS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!---------------------------------------------------------------------
    MODELOS
  ----------------------------------------------------------------------->
  <section>
    <div class="container">
      <div class="title-section my-3">
        <h3>MODELOS DESTACADOS</h3>
      </div>
      <div class="owl-carousel owl-carousel-modelos owl-theme py-2">
          @foreach(\App\Helpers\Helper::getModelos() as $modelo)
          <a href="/modelos/{{$modelo->nombre}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
            <div class="d-flex justify-content-center">
              <img class="img-responsive" style="width: 50%" src="{{$modelo->img_logo}}" alt="Logo {{$modelo->modelo}}">
            </div>
            <img src="{{$modelo->img_modelo}}" alt="Toyota {{$modelo->modelo}} 2019">
            <p class="text-center text-dark text-uppercase" style="font-size: 17px">{{$modelo->slogan}}</p>
            <div class="d-flex justify-content-center">
              <span class="btn btn-default btn-round mu-btn-md">Ver modelo</span>
            </div>
          </a>
          @endforeach
      </div>
      <p class="text-center"><a class="btn-link-underline" href="/modelos">VER TODOS</a></p>
    </div>
  </section>

  <!---------------------------------------------------------------------
    Posts Promos y Dtos
  ----------------------------------------------------------------------->
  <section class="py-1">
    <div class="container">
      <div class="row">
          @foreach(\App\Helpers\Helper::getPostsPromosDtos(null) as $post)
            <div class="col-md-4 col-sm-12 py-2">
             {{--  <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="stm-magazine-vertical">
                <img class="img-responsive" src="{{$post->imagen_portada}}" alt="{{$post->titulo}}">
                <div class="stm-magazine-loop-data py-1">
                  <h3 class="top-content">{{$post->titulo}}</h3> 
                  <div class="middle-content">
                    <div class="magazine-loop-date">
                      <i class="stm-service-icon-calendar_service" style="margin-right: 5px;"></i> 
                        {{date('d M Y', strtotime($post->created_at))}}
                    </div>
                  </div> 
                  <div class="bottom-content">
                    <p>{{str_limit(strip_tags($post->contenido), 110, '...')}}</p>
                  </div>
                </div>
              </a>
              <div class="w-100 text-center my-1" >
                <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="text-center btn-link-underline my-2">Leer más</a>
              </div>--}}
              <div class="card d-flex flex-column justify-content-between">
                <div class="container-img" style="background: url('{{$post->imagen_portada}}');"></div> 
                  <div class="card-body d-flex flex-column justify-content-end">
                    <div class="product-price">
                        <a href="{{ route('show_post', $post->slug) }}">
                          {{$post->titulo}}
                        </a>
                      </div> 
                      <div class="product-description">
                        <p class="card-text">{{str_limit(strip_tags($post->contenido), 110, '...')}}</p>
                      </div> 
                      <div class="product-buttons mb-2">
                        <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="text-center btn-link-underline my-2">Leer más</a>
                    </div>
                </div>
              </div>
            </div>
          @endforeach
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    TOYOTA HIBRID EXPERIENCE
  ----------------------------------------------------------------------->
  <section class="py-3">
    <div class="container container-hibrid-experience">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="title-section mt-3">
            <h3>Toyota Experiencia Híbrida <br>  <small>Derribando mitos</small></h3>
          </div>
          <a href="/tecnologia-hibrida">
            <div 
               style="background: url(/imagenes/home-min/tecnohibrida.jpg)   no-repeat 30%;
                  height: 40vh;
                  background-size: cover;
                  ">
            </div>
            <div class="titleContainer">
              <h4 class="containerCenter"> ¿QUÉ ES LA TECNOLOGÍA HÍBRIDA?</h4>
            </div>
          </a>  
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    NOVEDADES DERKA Y VARGAS
  ----------------------------------------------------------------------->
  <section class="py-3">
    <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="stm_widget_recent_news">
              <div class="recent-top">
                  <h4>NOVEDADES DERKA Y VARGAS</h4>
              </div>
              <div class="recentNewsAnimate">
                @foreach(\App\Helpers\Helper::postRecientes(2) as $post)
                    <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="stm_magazine_single_list">
                      <div class="magazine-list-img">
                        <img width="255" height="160" src="{{$post->imagen_portada}}" alt="{{$post->alt_img}}" title="{{$post->titulo}}">
                        {{-- <div class="fa-round"><i class="fa fa-share"></i></div> --}}
                      </div>
                      <div class="stm-magazine-loop-data">
                        <h3 class="top-content">
                          {{$post->titulo}}
                        </h3>
                        <div class="middle-content">
                          <div class="magazine-category normal-font">
                            {{$post->tema->tema}}       
                          </div>
                          <div class="magazine-loop-date">
                              <i class="stm-service-icon-calendar_service" style="margin-right: 5px;"></i> 
                              {{date('d M Y', strtotime($post->created_at))}}
                          </div>
                        </div>
                        <div class="bottom-content">
                          <p>{{str_limit(strip_tags($post->contenido), 150, '...')}}</p>
                        </div>
                      </div>
                    </a>
                @endforeach
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="stm-most-popular-posts">
              <h2>MÁS POPULARES</h2>
              @foreach(\App\Helpers\Helper::postRecientes(6) as $post)
              <a href="{{ route('show_post', $post->slug) }}" class="stm-magazine-news clearfix">
                  <div class="image">
                      <img width="190" height="132" src="{{$post->imagen_portada}}" class="attachment-stm-img-190-132 size-stm-img-190-132 wp-post-image" alt="{{$post->alt_img}}" title="{{$post->titulo}}">        
                  </div>
                  <div class="stm-post-content">
                      <div class="title heading-font">
                        {{str_limit(strip_tags($post->titulo), 50, '...')}}    
                      </div>
                      <div class="recomended-data">
                          <div class="magazine-loop-views">
                              <div class="magazine-category-tema normal-font">
                                {{$post->tema->tema}}        
                              </div>
                          </div>
                          <div class="comments-number normal-font">
                            <i class="stm-service-icon-calendar_service"></i> 
                            {{date('d M Y', strtotime($post->created_at))}}          
                          </div>
                      </div>
                  </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    PARALLAX
  ----------------------------------------------------------------------->
  <section class="visible-md visible-lg">
    <div class="parallax bg3" style="background-image: url(/imagenes/home-min/dyv2019.png);">
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
          @foreach(\App\Helpers\Helper::getRecentPostInstagram()->data as $post)
            @if ($count == 9) @break @endif
            @php $count++ @endphp
            <a class="group" href="{{$post->link}}"target="_blank"><img src="{{ $post->images->thumbnail->url }}" alt="{{$post->caption->text}}"></a>
          @endforeach
         
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