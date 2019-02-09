<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Derka y Vargas Concesionario Oficial TOYOTA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Derka y Vargas Concesionario Oficial Toyota en Chaco">
    <meta name="keywords" content="Derka y Vargas, Toyota, Chaco, Hilux, Corolla, Etios, Yaris, SW4, Camry, Prius, RAV4, Land Cruiser, Prado">
    <link rel="shortcut icon" href="{{asset('imagenes/logos/dyv_64x64_icono.ico')}}">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
 
    <!-- Global site tag (gtag.js) - Google Analytics -->
{{--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132697927-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132697927-2');
    </script> --}}

    @yield('styles_sheets')

</head>

<body>

  {{-- @include('frontend.float-buttons') --}}
  @include('frontend.menu-fab')
  @include('loading-dyv')

  <div id="app">
    <div class="header-ppal">
      <div class="row row-no-margin">
        <div class="col-md-3 col-sm-12 col-xs-12 text-left  center-on-mobile">
          <a href="/" class="pull-left">
            <img src="{{ asset('/imagenes/logo-empresa.png') }}"  style="height: 51px;">
          </a>
        </div>
        <div class="col-md-6 text-left visible-md visible-lg">
          <div style="display: flex; justify-content: space-around; padding-top: 2%">
          <ul class="lista-contacto list-unstyled hidden-sm hidden-xs" style="display: flex; align-items: center;">
                <li>
                    <a href="/contacto">
                      <img src="/imagenes/icons/map-marker.png" style="width: 25px">
                        Descubrí nuestras Sucursales
                    </a>
                </li>
            </ul>
            <ul class="lista-redes-sociales list-unstyled hidden-sm hidden-xs" style="display: flex; align-items: center;">
                <li><a href="https://www.facebook.com/derkayvargas/" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/facebook.png"></a></li>
                <li><a href="https://www.instagram.com/derkayvargas/" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/instagram.png"></a></li>
                <li><a href="https://twitter.com/derkayvargas?lang=es" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/twitter.png"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 text-left visible-md visible-lg">
          
          <a href="/" class="pull-right">
            <img src="{{ asset('/imagenes/logo-toyota.png') }}" style="height: 60px;">
          </a>
        </div>
      </div>
      {{-- <a href="/">
        <img src="{{ asset('/imagenes/logo-empresa.png') }}"  style="height: 51px;">
      </a> --}}
        {{-- <div style="width: 60%; display: flex; justify-content: space-around; text-align: center;">
            <ul class="lista-contacto list-unstyled hidden-sm hidden-xs" style="display: flex; align-items: center;">
                <li>
                    <a href="">
                      <img src="/imagenes/icons/map-marker.png" style="width: 25px">
                        Sáenz Peña
                    </a>
                </li>
                <li>
                    <a href="">
                      <img src="/imagenes/icons/map-marker.png" style="width: 25px">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Charata
                    </a>
                </li>
                <li>
                    <a href="">
                      <img src="/imagenes/icons/map-marker.png" style="width: 25px">
                        Villa Angela
                    </a>
                </li>
                <li>
                    <a href="">
                      <img src="/imagenes/icons/map-marker.png" style="width: 25px">
                        Resistencia
                    </a>
                </li>
            </ul>
            <ul class="lista-redes-sociales list-unstyled hidden-sm hidden-xs" style="display: flex; align-items: center;">
                <li><a href="https://www.facebook.com/derkayvargas/" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/facebook.png"></a></li>
                <li><a href="https://www.instagram.com/derkayvargas/" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/instagram.png"></a></li>
                <li><a href="https://twitter.com/derkayvargas?lang=es" target="_blank"><img style="height: 30px; width: 30px;" src="/imagenes/icons/twitter.png"></a></li>
            </ul>
        </div> --}}
        {{-- <img src="{{ asset('/imagenes/logo-toyota.png') }}" style="height: 60px;"> --}}
    </div>

     @include('frontend.navbar-mobile')

    @yield('content')

    <section>
      <div class="section-colored text-center prefooter " style="padding: 20px 0; background-color: #f5f5f5; margin-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 logos-footer disabled">
                   <div class="logos-content" style="display: flex; justify-content: center; align-items: center;">
                     <div><img src="/imagenes/logos/logo_etc.png" class="img-responsive"></div>
                     <div><img src="/imagenes/logos/logo_mant_exp.png" class="img-responsive"></div>
                     <div><img src="/imagenes/logos/logo_eco.png" class="img-responsive"></div>
                     <div><img src="/imagenes/logos/logo_genuine_parts.png" class="img-responsive"></div>
                     <div><img src="/imagenes/logos/iram.png" class="img-responsive"></div>
                   </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    <footer>
      <div>
        {{-- <div class="row row-footer-first text-center">
          <ul class="list-unstyled list-inline footer-menu" style="margin-left: 0px;">
            <li>
              <a href="#">Sucursales</a>
            </li>
            <li>
              <a href="#">Contacto</a></li>
          </ul>
        </div>

        <div class="row-footer" style="display: flex; justify-content: center;">
            <div class="item-footer-social">
              <img src="/imagenes/icons/facebook.png" style="height: 50px; width:50px;">
            </div>
            <div class="item-footer-social">
              <img src="/imagenes/icons/instagram.png" style="height: 50px; width:50px;">
            </div>
            <div class="item-footer-social">
              <img src="/imagenes/icons/twitter.png" style="height: 50px; width:50px;">
            </div>
        </div>
 --}}
        <div class="row row-footer row-footer-border">
          <div class="col-md-12 col-xs-12 col-sm-12 text-center">
            <h1 class="h-dyv">Derka y Vargas</h1>
            <h3 class="white">Concesionario Oficial Toyota en Chaco</h3>
          </div>
        </div>

        <div class="row-footer row-footer-social">
          <div class="">
            <h4 class="white">
              <i class="fa fa-envelope fs-25 red"></i>
              administracion@derkayvargas.com.ar
            </h4>
          </div>   
          <div class="phone">
            <h4 class="white">
              <i class="fa fa-phone fs-25 red"></i>
              (0364) 44 - 20602 / 20549 / 20840
            </h4>
          </div>   
          <div class="text-center dir">
            <h4 class="white">
              <i class="fa fa-home fs-25 red"></i>
              Casa Central Sáenz Peña <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-center">Belgrano N° 872 (calle 10 esq 19 )</small>
            </h4>
          </div>     
        </div>

        <div class="row row-footer-last">
          <div class="col-md-12">
            <p class="text-center" style="font-size: 15px;color: white">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2018 - Todos los Derechos Reservados</p>
          </div>
        </div>
      </div>
    </footer>



  </div>

  <!-- Script Section -->
  <div id="fb-root"></div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  
  @yield('script')

  <script type="text/javascript">
    (function($) {
        $('[data-toggle="tooltip"]').tooltip();   
        
        var $animation_elements = $('.et-waypoint'),
            $window = $(window);
     
        function check_if_in_view() {
            var window_height = $window.height(),
                window_top_position = $window.scrollTop(),
                window_bottom_position = (window_top_position + window_height);
     
            $animation_elements.each(function() {
                var $element = $(this),
                    element_height = $element.outerHeight(),
                    element_top_position = $element.offset().top,
                    element_bottom_position = (element_top_position + element_height);
     
                //check to see if this element is within viewport
                if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
                    $element.addClass('.slide-left');
                    console.log('asas')
                } else {
                    $element.removeClass('.slide-left-show');
                }
            });
        }
     
        $window.on('scroll resize', check_if_in_view);

        window.sr = ScrollReveal();
        sr.reveal('.thumbnail-lighten', {duration: 1500});

        $(".btn-submit").click(function(){
          $('.en_proceso').css("display","flex");
          console.log("The paragraph was clicked.");
        });

    })(jQuery);
    
  </script>

</body>
</html>