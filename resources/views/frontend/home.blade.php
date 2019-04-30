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
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="/imagenes/home/slide.png" alt="">
        </div>

        <div class="item">
          <img src="/imagenes/home/portada_uva.png" alt="">
        </div>

        <div class="item">
          <img src="/imagenes/home/slide5.png" alt="">
        </div>

        <div class="item">
          <img src="/imagenes/home/slide6.png" alt="">
        </div>
        <div class="item">
          <img src="/imagenes/home/hilux_accesorios.png" alt="">
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
    <div id="carousel-mobile" class="carousel slide visible-xs visible-sm" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-mobile" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-mobile" data-slide-to="1" class=""></li>
        <li data-target="#carousel-mobile" data-slide-to="2" class=""></li>
        <li data-target="#carousel-mobile" data-slide-to="3" class=""></li>
        <li data-target="#carousel-mobile" data-slide-to="4" class=""></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="/imagenes/home/slide_sm.jpeg" alt="">
        </div>
        <div class="item">
          <img src="/imagenes/home/hilux_accesorios_sm.jpeg" alt="">
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
    TOYOTA HIBRID EXPERIENCE
  ----------------------------------------------------------------------->
  <section>
    <div class="container">
      <div class="page-header text-center">
        <h2>Toyota Experiencia Híbrida <br>  <small>Derribando mitos</small></h2>
      </div>
      <a href="/tecnologia-hibrida">
        <div 
           style="background: url(/imagenes/tecnohibrida.jpg)   no-repeat 30%;
              height: 40vh;
              background-size: cover;
              ">
        </div>
        <div class="titleContainer">
          <h4 class="containerCenter"> ¿QUÉ ES LA TECNOLOGÍA HÍBRIDA?</h4>
        </div>
      </a>  
    </div>
  </section>

  <!---------------------------------------------------------------------
    MODELOS
  ----------------------------------------------------------------------->
  <div class="container pad-top-bot-25">
    {{-- <p class="text-center" style="font-size: 25px; color: #626262">MODELOS</p> --}}
    <div class="page-header text-center">
      <h2>MODELOS</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <a href="/modelos/hilux" class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/hilux.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/hilux/logo-hilux.png" style="height: 70px">
            <hr>
            <h4 class="text-uppercase">La superación por encima del cambio</h4>
          </div>
        </a>          
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <a href="/modelos/corolla" class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/corolla.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/corolla/logo-corolla.png" style="height: 55px;">
            <hr>
            <h4 class="text-uppercase">SEGUÍ AVANZANDO</h4>
          </div>
        </a>          
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <a href="/modelos/etios" class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/etios.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/etios/logo.png" style="height: 40px">
            <hr>
            <h4 class="text-uppercase">Mi primer Toyota</h4>
          </div>
        </a>          
      </div>
    </div>
    <p class="text-center" style="font-size: 20px;"><a class="btn btn-outline btn-danger" href="/modelos">VER TODOS</a></p>
  </div>
  
  <hr class="container">

  <section class="pad-top-25 pad-bot-50" style="height: auto;">
      <div class="container">
        <div class="row" >
          <div class="col-md-4 col-sm-12">
            <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                <img src="https://www.toyota.com.ar/images/recm_Service.jpg" alt="...">
                <div class="caption caption-default">
                    <h4 class="text-center">Llamado a Revisión Técnica</h4>
                    <p class="text-justify">
                      Descubrí los servicios que te ayudan a cuidar tu Toyota. 
                    </p>
                    <a href="/posventa" class="btn btn-toyota">IR A POSVENTA</a>
                </div>
            </div>
          </div>  
          <div class="col-md-4 col-sm-12">
            <div class="thumbnail thumbnail-no-bg thumbnail-no-border">
                <img src="/imagenes/tpa/tpa_card.png" alt="...">
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
                <img src="/imagenes/tcf/tcf_card.jpg" alt="...">
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
  <div class="parallax bg3">
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
      <img src="{{asset('imagenes/logos/social_media.jpg')}}" style="width: 100%">
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
                        <img width="255" height="160" src="{{$post->imagen_portada}}" class="attachment-stm-img-255-160 size-stm-img-255-160 wp-post-image" alt="">
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
                          <div class="magazine-loop-reviews">
                            <i class="stm-icon-ico_mag_reviews"></i> 4
                          </div>
                          <div class="magazine-loop-views">
                            <i class="stm-icon-ico_mag_eye"></i> 157
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
                      <img width="190" height="132" src="{{$post->imagen_portada}}" class="attachment-stm-img-190-132 size-stm-img-190-132 wp-post-image" alt="">        
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
      $(".owl-carousel").owlCarousel({
        loop: false,
        margin:0,
        nav: true,
        stagePadding:10,
        autoWidth: false,
        navText:['<i class="fa fa-chevron-left" title="Anterior"></i>', '<i class="fa fa-chevron-right"></i>'],
        responsive:{
          0: {
            items: 1
          },
          800: {
            items: 2,
            margin: 20,
          },
          500: {
            items: 2,
            margin: 20,
          },
          1000: {
            items: 4,
            margin: 20,
          }
        }
      });
</script>

@stop