@extends('layout')

@section('content')

	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_color: null }"></navbar-desk>

  <!-- Text Overlay -->
  <div class="overlay"><h1>Overlay Text Here!</h1></div>

  <!-- Banner Principal -->
  <banner-ppal></banner-ppal>

    <!-- Section .. -->
    <div class="container" style="padding-top: 35px; padding-bottom:  50px;">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <div class="thumbnail thumbnail-lighten">
            <img src="/imagenes/etios.png" alt="...">
            <div class="caption text-center">
              <h3>ETIOS</h3>
              <p>Mi primer Toyota</p>
            </div>
          </div>          
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <div class="thumbnail thumbnail-lighten">
            <img src="/imagenes/hilux.png" alt="...">
            <div class="caption text-center">
              <h3>HILLUX</h3>
              <p>La superación por encima del cambio</p>
            </div>
          </div>          
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" style="margin: 20px 0;">
          <div class="thumbnail thumbnail-lighten">
            <img src="/imagenes/corolla.png" alt="...">
            <div class="caption text-center">
              <h3>COROLLA</h3>
              <p>Seguí avanzando</p>
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

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
          </div>
          <div class="col-lg-12 text-center">
          <center>
            <hr class="my-4">
          </center>
        </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-md-6" style="margin: 20px 0;">
          <div class="fb-page" data-href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/derkayvargas/?fb_dtsg_ag=AdzKt-b82aFkFrwMmGTcDo8uWnv1ha_vNaqpeHCWe71aqg%3AAdwQGLLoHBxpCqZJIGcdxG2Hw5-amUyN5Mg8AFW893MHow">Derka y Vargas S.A. - Concesionario Oficial TOYOTA</a></blockquote></div>
        </div>
        <div class="col-xs-12 col-md-6" style="margin: 20px 0;">
          <p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Cras
            ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
          <p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Cras
            ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
          <p>Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Cras
            ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
            
        </div>
      </div>
      </div>
    </section>

@stop