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

  @media (max-width:992px) {
    .stm_widget_recent_news .stm_magazine_single_list .magazine-list-img img{
      margin-bottom: 25px;
    }
    .stm_widget_recent_news .stm_magazine_single_list .stm-magazine-loop-data{
      padding: 0px;
    }

    .stm_widget_recent_news .stm_magazine_single_list .magazine-list-img,
    .stm_widget_recent_news .stm_magazine_single_list .stm-magazine-loop-data{
      width: 100%
    }
    .stm_widget_recent_news .stm_magazine_single_list {
      flex-direction: column;
    }
  }

  .fz17{
    font-size: 17px;
  }

.usados-destacados {
  margin: -170px 0px 0px 0px;
  padding: 15px;
  background-color: white;
  border-radius: 5px;
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
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="/imagenes/home-min/portada-usados.png" alt="Banco del Chaco autos usados">
        </div>
        <div class="item">
          <img src="/imagenes/home-min/portada-tu-auto.png" alt="Banco del chaco autos 0km">
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
    <div id="carousel-mobile" class="carousel slide visible-xs visible-sm"  data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-mobile" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-mobile" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="/imagenes/home-min/portada-usados-sm.png" alt="">
        </div>
        <div class="item">
          <img src="/imagenes/home-min/portada-tu-auto-sm.png" alt="">
        </div>
      </div>
    </div>
  </section>

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
              <img class="img-responsive" src="{{asset('/imagenes/usados-destacados.png')}}">
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
      <div class="row">
        <div class="col-xs-12">
          <a href="{{route('nueva_rav4')}}">
          <a href="/modelos/Hiace"><img src="{{asset('imagenes/home-min/portada-hiace.jpg')}}" class="img-responsive visible-xs visible-sm"></a>
          <a href="/modelos/Hiace"><img src="{{asset('imagenes/home-min/portada-hiace.jpg')}}" class="img-responsive visible-md visible-lg"></a>
          </a>
        </div>
      </div>
      <div class="owl-carousel owl-theme py-2">
          @foreach(\App\Helpers\Helper::getModelos() as $modelo)
          <a href="/modelos/{{$modelo->nombre}}" class="item thumbnail thumbnail-no-bg thumbnail-no-border">
            <div class="d-flex justify-content-center">
              <img class="img-responsive" style="width: 50%" src="{{$modelo->img_logo}}">
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
  <section class="py-3">
    <div class="container">
      <div class="row">
          @foreach(\App\Helpers\Helper::getPostsPromosDtos(null) as $post)
            <div class="col-md-4 col-sm-12">
              <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="stm-magazine-vertical">
                <img class="img-responsive" src="{{$post->imagen_portada}}">
                <div class="stm-magazine-loop-data">
                  <h3 class="top-content">{{$post->titulo}}</h3> 
                  <div class="middle-content">
                    {{-- <div class="magazine-category normal-font">{{$post->tema->tema}}</div> --}}
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
              <center class="my-1" >
                <a href="{{ route('show_post', $post->slug) }}" title="{{$post->titulo}}" class="text-center btn-link-underline my-2">Leer más</a>
              </center>
          </div>
          @endforeach
      </div>
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
    NOVEDADES DERKA Y VARGAS
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
                  <h4>NOVEDADES DERKA Y VARGAS</h4>
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
@stop

@section('script')
<!-- Google FCM -->
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
<script src="{{ asset('js/sw-push-msg.js') }}"></script>
<!-- end -->
<script type="text/javascript">
  //Init Owl Caroucel 

      $('.owl-carousel').owlCarousel({
        stagePadding: 0,
        loop:false,
        margin:0,
        nav:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        pagination: false,
        dots: false,
        items : 3,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            792:{
                items:3
            }
        }
    })
</script>

@stop