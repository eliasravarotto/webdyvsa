@extends('layout')

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

@section('mark-up-facebook')
    <meta property="og:type" content="article" />
    <meta property="og:title" content="INICIO" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('content')
<meta property="og:url" content="https://www.derkayvargas.com" />

	<!-- Navbar Desktop -->
	{{-- <navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.3);', position: ''}"></navbar-desk> --}}
  <!-- Text Overlay -->
  {{-- <div class="overlay"><h1>Overlay Text Here!</h1></div> --}}

  <!-- Banner Principal -->
  {{-- <banner-ppal v-bind:data="{ slides_img: {{collect($slides_img)}} }"></banner-ppal> --}}

  
  <!-- Carusel Principal -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item">
        <img src="/imagenes/home/slide1.png" alt="">
      </div>

      <div class="item">
        <img src="/imagenes/home/slide2.png" alt="">
      </div>

      <div class="item active">
        <img src="/imagenes/home/slide3desk.png" alt="" class="visible-lg visible-md">
        <img src="/imagenes/home/slide3mobile.png" alt="" class="visible-xs visible-sm">
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

      <div class="owl-carousel experiencia-hibrida mt-3">
        {{-- #1 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vUPgPSLEJ30" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Los híbridos tienen menos reacción que una babosa'</span>
          </div>
        </div>

        {{-- #2 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/iby4FQ2lMac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Hay que enchufarlos y no ahorran nada'</span>
          </div>
        </div>

        {{-- #3 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/4fWTx0RcP10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Entre más sofisticada la tecnología, más fácil de romperse'</span>
          </div>
        </div>

        {{-- #4 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WKphpOopcXw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Los híbridos son carritos de golf'</span>
          </div>
        </div>
        {{-- #5 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QV5LS-Np90A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Manejar un híbrido es más difícil que chuparse el codo'</span>
          </div>
        </div>
        {{-- #6 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UZqDSIcaadg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Con los híbridos nadie te garantiza nada'</span>
          </div>
        </div>
        {{-- #7 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GZ_MxuDo6sU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Para que un híbrido consuma menos, tenés que ser piloto profesional'</span>
          </div>
        </div>
        {{-- #8 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TOQ6IbwtvzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Los híbridos no se bancan que les llenes el baúl'</span>
          </div>
        </div>
        {{-- #9 --}}
        <div class="thumbnail thumbnail-no-bg">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LPAZngILST4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="caption text-center" style="padding: 9px 9px 0px 9px;">
            <span>MITO: 'Mantener un híbrido es carísimo'</span>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <a href="/toyota-hibrid-experience" class="btn btn-toyota">VER MÁS</a>
      </div>
    
    </div>
  </section>

  <!-- Section -->
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

  <!--Parallax Section -->
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
      <div class="row">
        <div class="col-sm-12">
          <div class="page-header text-center"><h2 style="color: #dfa599">Felicidades a las ganadoras del Sorteo Dia de la Mujer</h2></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-offset-2 col-md-4 text-center">
          <div class="fb-post" data-href="https://www.facebook.com/derkayvargas/photos/a.128065830538896/2413438505334939/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2413438505334939/?type=3" class="fb-xfbml-parse-ignore"><p>Felicidades Barboza María GANADORA del sorteo día de la mujer sucursal &quot;Villa Ángela&quot; ☺️</p>Publicado por <a href="https://www.facebook.com/derkayvargas/">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a> en&nbsp;<a href="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2413438505334939/?type=3">Sábado, 16 de marzo de 2019</a></blockquote></div>
        </div>
        <div class="col-sm-12 col-md-4 text-center">
          <div class="fb-post" data-href="https://www.facebook.com/derkayvargas/photos/a.128065830538896/2412348415443948/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2412348415443948/?type=3" class="fb-xfbml-parse-ignore"><p>Felicidades Monzón Macarena GANADORA del sorteo día de la mujer Casa Central  &quot;P. R. Sáenz Peña&quot; 😀</p>Publicado por <a href="https://www.facebook.com/derkayvargas/">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a> en&nbsp;<a href="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2412348415443948/?type=3">Viernes, 15 de marzo de 2019</a></blockquote></div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12 col-md-offset-2 col-md-4 text-center">
          <div class="fb-post" data-href="https://www.facebook.com/derkayvargas/photos/a.128065830538896/2412342588777864/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2412342588777864/?type=3" class="fb-xfbml-parse-ignore"><p>Felicidades Cimbaro Jimena GANADORA del sorteo día de la mujer sucursal &quot;Resistencia&quot; 👏</p>Publicado por <a href="https://www.facebook.com/derkayvargas/">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a> en&nbsp;<a href="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2412342588777864/?type=3">Viernes, 15 de marzo de 2019</a></blockquote></div>
        </div>
        <div class="col-sm-12 col-md-4 text-center">
          <div class="fb-post" data-href="https://www.facebook.com/derkayvargas/photos/a.128065830538896/2413474385331351/?type=3&amp;theater" data-width="500" data-show-text="true"><blockquote cite="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2413474385331351/?type=3" class="fb-xfbml-parse-ignore"><p>Felicidades a la nueva ganadora Lopez Veronica, sorteo día de la mujer sucursal &quot;Charata&quot; ☺️</p>Publicado por <a href="https://www.facebook.com/derkayvargas/">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a> en&nbsp;<a href="https://developers.facebook.com/derkayvargas/photos/a.128065830538896/2413474385331351/?type=3">Sábado, 16 de marzo de 2019</a></blockquote></div>
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