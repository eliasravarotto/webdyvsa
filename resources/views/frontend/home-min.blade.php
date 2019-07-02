@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas Concesionario Oficial TOYOTA</title>
  <meta name="description" content="Derka y Vargas Concesionario Oficial Toyota en Chaco">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="INICIO" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
  <style type="text/css">
    .escarapela-mb{
      position: fixed;
      right: -15px;
      top: 35px;
      z-index: 100;
    }

    .escarapela{
      position: fixed;
      right: -5px;
      top: -5px;
      z-index: 19;
    }

  .experiencia-hibrida .owl-nav{
    display: flex;
    justify-content: center;
  }    
  .experiencia-hibrida .owl-prev,
  .experiencia-hibrida .owl-next{
    font-size: 3rem !important;
    margin: 10px 30px 0px 30px !important;
    color: #3097d1 !important;
  }

  .titleContainer {
        background-color: #0E436E;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    
    .middle-content{
        display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-line-pack: center;
    align-content: center;
    overflow: hidden;
    padding: 20px 0;
  }

  .magazine-loop-date{
        display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    float: left;
    font-size: 13px;
    font-weight: 600;
    line-height: 16px;
    margin-right: 20px;
  }

  .uct a{
    text-decoration: none;
  }
  .uct .uct-content{
    border: 3px #afafb1 ridge;
  }

  .uct .row-uct{
    color: white;
    padding: 1rem 1.5rem;
    font-size: 2rem;
  }

  .uct .black{
    background-color: black;
  }

  .uct .bg-rojo{
    background-color: #cc2032;
  }

  .uct .txt-negro{
    color: black
  }

  .innovar p{
    font-size: 1.8rem;
  }

  </style>
@stop


@section('content')
  <!---------------------------------------------------------------------
    SLIDER PRINCIPAL
  ----------------------------------------------------------------------->
  <section>
    <!-- Carusel Principal DESKCTOP-->
    <div id="myCarousel" class="carousel slide visible-md visible-lg" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="/imagenes/home-min/financiacion-etios-yaris.png" alt="financiocion etios y yaris">
        </div>

        <div class="item">
          <img src="/imagenes/home-min/financiacion-corolla.png" alt="financiocion corolla">
        </div>

        <div class="item">
          <img src="/imagenes/tpa/nuevo-plan-de-ahorro-toyota.png" alt="Nuevo Toyota Plan de Ahorro Derka y Vargas, Nuevas cuotas">
        </div>

        <div class="item">
          <img src="/imagenes/home-min/servicio-posventa-chaco.png" alt="Servicios de Posventa Toyota Chaco Resistencia Charata Villa Angela Saenz Peña">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Carusel Principal MOBILE-->
    <div id="carousel-mobile" class="carousel slide" style="display: none;" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-mobile" data-slide-to="0" class="active"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item" style="min-height: 285px;">
          <img src="/imagenes/tpa/nuevo-plan-de-ahorro-toyota.png" alt="Toyota financiacion plan de ahorro">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel-mobile" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-mobile" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!---------------------------------------------------------------------
    BANNER PLAN NACIONAL
  ----------------------------------------------------------------------->
  <section class="mt-1">
    <div class="container">
      <div class="title-section mt-3">
        <a href="{{route('nuevo_plan_nacional')}}">
        <h3 style="color: black">Nuevo Plan Nacional Para tu 0km<br><small>TENEMOS DESCUENTOS IMPERDIBLES EN TU NUEVO TOYOTA‼️</small></h3>
        </a>
      </div>
      {{-- <div class="row">
        <div class="col-md-6 col-xs-12">
          <a href="{{route('nuevo_plan_nacional')}}">
            <img src="{{asset('imagenes/financiacion/nuevo-plan-nacional-corolla-yaris.jpeg')}}" class="img-responsive">
          </a>
        </div>
        <div class="col-md-6 col-xs-12">
          <a href="{{route('nuevo_plan_nacional')}}">
            <img src="{{asset('imagenes/financiacion/nuevo-plan-nacional-etios-yaris.jpeg')}}" class="img-responsive">
          </a>
        </div>
      </div> --}}
      <div class="owl-carousel owl-md owl-theme">
        <a href="{{route('nuevo_plan_nacional')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
          <img src="{{asset('imagenes/financiacion/plan-nacional-hilux.jpeg')}}" alt="Nuevo plan Nacional 0KM mes de Julio 2019, Toyota Hilux, Corolla, Yaris, Etios...">
        </a>
        <a href="{{route('nuevo_plan_nacional')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
          <img src="{{asset('imagenes/financiacion/plan-nacional-corolla-yaris.jpeg')}}" alt="Nuevo plan Nacional 0KM mes de Julio 2019, Toyota Hilux, Corolla, Yaris, Etios...">
        </a>
        <a href="{{route('nuevo_plan_nacional')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
          <img src="{{asset('imagenes/financiacion/plan-nacional-etios-yaris.jpeg')}}" alt="Nuevo plan Nacional 0KM mes de Julio 2019, Toyota Hilux, Corolla, Yaris, Etios...">
        </a>
        <a href="{{route('nuevo_plan_nacional')}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
          <img src="{{asset('imagenes/financiacion/plan-nacional-innova.jpeg')}}" alt="Nuevo plan Nacional 0KM mes de Julio 2019, Toyota Hilux, Corolla, Yaris, Etios...">
        </a>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    MODELOS
  ----------------------------------------------------------------------->
  <section>
    <div class="container">
      <div class="title-section mt-3">
        <h3>MODELOS DESTACADOS</h3>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <a href="{{route('nueva_rav4')}}">
          <img src="{{asset('imagenes/home-min/nueva-rav4-mb.png')}}" class="img-responsive visible-xs visible-sm">
          <img src="{{asset('imagenes/home-min/nueva-rav4.png')}}" class="img-responsive visible-md visible-lg">
          </a>
        </div>
       </div>
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <a href="/modelos/hilux" class="thumbnail thumbnail-lighten thumbnail-no-border">
            <img src="/imagenes/home-min/hilux.png" alt="nueva Hilux 2019 Toyota Derka y Dargas Chaco">
            <div class="caption text-center">
              <img src="/imagenes/modelos/hilux/logo-hilux.png" style="height: 70px" alt="nueva Hilux 2019 Toyota Derka y Dargas Chaco">
              <hr>
              <h4 class="text-uppercase">La superación por encima del cambio</h4>
            </div>
          </a>          
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <a href="/modelos/corolla" class="thumbnail thumbnail-lighten thumbnail-no-border">
            <img src="/imagenes/home-min/corolla.png" alt="nuevo Corolla 2019 Toyota Derka y Dargas Chaco">
            <div class="caption text-center">
              <img src="/imagenes/modelos/corolla/logo-corolla.png" style="height: 55px;" alt="nuevo Corolla 2019 Toyota Derka y Dargas Chaco">
              <hr>
              <h4 class="text-uppercase">SEGUÍ AVANZANDO</h4>
            </div>
          </a>          
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <a href="/modelos/etios" class="thumbnail thumbnail-lighten thumbnail-no-border">
            <img src="/imagenes/home-min/etios.png" alt="nuevo Etios 2019 Toyota Derka y Dargas Chaco">
            <div class="caption text-center">
              <img src="/imagenes/modelos/etios/logo.png" style="height: 40px" alt="nuevo Etios 2019 Toyota Derka y Dargas Chaco">
              <hr>
              <h4 class="text-uppercase">Mi primer Toyota</h4>
            </div>
          </a>          
        </div>
      </div>
      <p class="text-center" style="font-size: 20px;"><a class="btn btn-outline btn-danger" href="/modelos">VER TODOS</a></p>
    </div>
  </section>

  <!---------------------------------------------------------------------
    USADOS CERTIFICADOS
  ----------------------------------------------------------------------->
  <section>
    <div class="container uct">
      <div class="title-section mt-3">
        <h3>USADOS CERTIFICADOS <br>  <small>AUTOS COMO NUEVOS</small></h3>
      </div>
      <a href="/usados#certificados-toyota">
      <div class="uct-content">
        <div class="row-uct bg-rojo text-center">
            <span>¿QUÉ ES UN USADO CERTIFICADO?</span>  
        </div>
        <div class="row-uct txt-negro text-center">
            <span><b>CONOCELOS</b></span>  
        </div>
      </div>
      </a>
    </div>
  </section>
  
  <!---------------------------------------------------------------------
    TOYOTA HIBRID EXPERIENCE
  ----------------------------------------------------------------------->
  <section>
    <div class="container">
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

  <hr class="container">

  <section class="pad-top-25 pad-bot-50" style="height: auto;">
      <div class="container">
        <div class="row" >
          <div class="col-md-4 col-sm-12">
            <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                <img src="/imagenes/home-min/team_service.jpg" alt="...">
                <div class="caption caption-default">
                    <h4 class="text-center">Revisión Técnica y Servicios de Posventa</h4>
                    <p class="text-justify">
                      Descubrí los servicios de Posventa en <b>Derka y Vargas</b> que te ayudan a cuidar tu Toyota. 
                    </p>
                    <a href="/posventa" class="btn btn-toyota">IR A POSVENTA</a>
                </div>
            </div>
          </div>  
          <div class="col-md-4 col-sm-12">
            <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                <img src="/imagenes/home-min/tpa_card.png" alt="...">
                <div class="caption caption-default">
                    <h4 class="text-center">Toyota Plan de Ahorro</h4>
                    <p class="text-justify">
                      Toyota Plan Argentina S.A. de Ahorro Para Fines Determinados ofrece un excelente medio para acceder a un vehículo de la marca a través del sistema de ahorro previo.
                    </p>
                    <a href="/plan-de-ahorro" class="btn btn-toyota">IR A PLAN DE AHORRO</a>
                </div>
            </div>
          </div>  
          <div class="col-md-4 col-sm-12">
            <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                <img src="/imagenes/home-min/tcf_card.jpg" alt="...">
                <div class="caption caption-default">
                    <h4 class="text-center">Financiá el placer de tener tu TOYOTA</h4>
                    <p class="text-justify">
                      Financiá tu Toyota con tasa preferencial. Te ofrecemos más oportunidades de tener tu 0km.
                    </p>
                    <a href="/financiacion" class="btn btn-toyota">IR A FINANCIACIÓN</a>
                </div>
            </div>
          </div>  
        </div>
      </div>
  </section>

  <!---------------------------------------------------------------------
    PARALLAX
  ----------------------------------------------------------------------->
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

  <!---------------------------------------------------------------------
    SOCIAL MEDIA
  ----------------------------------------------------------------------->
  <section id="services" style="border-top: 1px solid #01b2aa;">
    <div class="container">
      <img src="{{asset('imagenes/home-min/social_media.jpg')}}" style="width: 100%">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 20px 0; text-align: center;">
          <div class="fb-page" data-href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a></blockquote></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 text-center" style="margin: 20px 0;">
          {{-- {{collect(\App\Helpers\Helper::getRecentPostInstagram())}} --}}
          @php $count = 0 @endphp
          @foreach(\App\Helpers\Helper::getRecentPostInstagram()->data as $post)
            @if ($count == 9) @break @endif
            @php $count++ @endphp
            <a class="group" rel="group1" href="{{$post->link}}"target="_blank"><img src="{{ $post->images->thumbnail->url }}"></a>
          @endforeach
         
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------
    NOTICIAS RECIENTES
  ----------------------------------------------------------------------->
  <section class="mt-3">
    <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="stm_widget_recent_news">
              <div class="recent-top">
                <div class="left">
                  <h4>NOTICIAS Y EVENTOS</h4>
                </div>
                <div class="right">
                    <ul class="cat-list recent-cat-list">
                        <li class="recent_news_cat" data-slug="all">
                            <a href="#" class="heading-font">Ver Todo</a>
                        </li>
                        {{-- <li class="recent_news_cat" data-slug="interview">
                            <span class="heading-font">Noticias</span>
                        </li>
                        <li class="recent_news_cat" data-slug="news">
                            <span class="heading-font">Eventos</span>
                        </li> --}}
                    </ul>
                </div>
              </div>
              <div class="recentNewsAnimate">
                @foreach(\App\Helpers\Helper::postRecientes(2) as $post)
                    <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="stm_magazine_single_list no_deco post-208 type-post status-publish format-standard has-post-thumbnail hentry category-news tag-future tag-interior tag-multimedia">
                      <div class="magazine-list-img">
                        <img width="255" height="160" src="{{$post->imagen_portada}}" class="attachment-stm-img-255-160 size-stm-img-255-160 wp-post-image" alt="{{$post->alt_img}}" title="{{$post->titulo}}">
                        {{-- <div class="fa-round"><i class="fa fa-share"></i></div> --}}
                      </div>
                      <div class="stm-magazine-loop-data">
                        <h3 class="top-content">
                          {{$post->titulo}}
                        </h3>
                        <div class="middle-content">
                          <div class="magazine-category normal-font">
                            New        
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
              @foreach(\App\Helpers\Helper::postPopulares(6) as $post)
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
@stop

@section('script')
<!-- Google FCM -->
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
<script src="{{ asset('js/sw-push-msg.js') }}"></script>
<!-- end -->
<script type="text/javascript">
  //Init Owl Caroucel 
      $('.owl-carousel.owl-md').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        items : 3,
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