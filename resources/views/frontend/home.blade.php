@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.3);', position: ''}"></navbar-desk>

  <!-- Text Overlay -->
  {{-- <div class="overlay"><h1>Overlay Text Here!</h1></div> --}}

  <!-- Banner Principal -->
  <banner-ppal></banner-ppal>

  <!-- Section .. -->
  <div class="container" style="padding-top: 35px; padding-bottom:  50px;">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <div class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/hilux.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/hilux/logo-hilux.png" style="height: 70px">
            <hr>
            <h4>La superación por encima del cambio</h4>
          </div>
        </div>          
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <div class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/corolla.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/corolla/logo-corolla.png" style="height: 55px;">
            <hr>
            <h4>Seguí avanzando</h4>
          </div>
        </div>          
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
        <div class="thumbnail thumbnail-lighten thumbnail-no-border">
          <img src="/imagenes/etios.png" alt="...">
          <div class="caption text-center">
            <img src="/imagenes/modelos/etios/logo.png" style="height: 40px">
            <hr>
            <h4>Mi primer Toyota</h4>
          </div>
        </div>          
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12" style="margin: 20px 0;">
        <p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Cras
          ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
        <p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Cras
          ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
      </div>
    </div>
  </div>

  <!--Parallax Section -->
  <div class="parallax bg3">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          &nbsp;
          <div class="caption">
            <span class="border et-waypoint">PARALLAX WITH STANDARD ROW</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="services" style="border-top: 1px solid #01b2aa;">
    {{-- <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">Derka y Vargas Social Media</h2>
        </div>
        <div class="col-lg-12 text-center">
        <center>
          <hr class="my-4">
        </center>
      </div>
      </div>
    </div> --}}
    <div class="container">
      <img src="https://www.groundsure.com/wp-content/uploads/2017/07/sm7.jpg" style="width: 100%">
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
          {{-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script> --}}
@stop