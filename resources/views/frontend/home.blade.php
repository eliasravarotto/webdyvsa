@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.3);', position: ''}"></navbar-desk>

  <!-- Text Overlay -->
  {{-- <div class="overlay"><h1>Overlay Text Here!</h1></div> --}}

  <!-- Banner Principal -->
  <banner-ppal></banner-ppal>

{{-- <div style="position: relative;">
  <div>
    <div align="center" class="embed-responsive embed-responsive-16by9">
    <video autoplay muted loop id="" class="embed-responsive-item">
      <source src="/videos/gr.mp4" type="video/mp4">
    </video>
    </div>

    <div class="content visible-lg">
      <h1>DERKA Y VARGAS <br>   <small>CONCECIONARIO OFICIAL TOYOTA</small></h1>
      <h4>Acercate a conocer el nuevo TOYOTA COROLLA 2019</h4>
      <button class="btn btn-toyota">CONOCELO</button>
    </div>
  </div>
</div> --}}

  <!-- Section -->
  <div class="container pad-top-bot-50">
    <div class="tooltip" style="background-color: black">Hover over me
      <span class="tooltiptext">Tooltip text</span>
    </div>
    <p class="text-center" style="font-size: 25px; color: #626262">MODELOS</p>
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
  
  <section class="pad-top-50 pad-bot-50" style="height: auto;">
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
                <img src="/imagenes/plan_de_ahorro/tpa.jpg" alt="...">
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
          &nbsp;
          <div class="caption">
            <span class="border et-waypoint">Derka y Vargas - Charata</span>
          </div>
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
      <div class="col-xs-12 col-sm-12 col-md-6" style="margin: 20px 0;">
        {{-- <iframe src="//lightwidget.com/widgets/fb15970b2bfe5432b206f2b116d4779a.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe> --}}
        <iframe src="//lightwidget.com/widgets/fa8772b6f29953d581a30dbbbc638347.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
      </div>
    </div>
    </div>
  </section>
 
@stop

@section('script')
        <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
@stop