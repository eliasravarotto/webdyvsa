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

    @yield('styles_sheets')

</head>

<body>

  @include('frontend.menu-fab')

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
    </div>

     {{-- @include('frontend.navbar-mobile') --}}
     @include('frontend.new-nav')

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

  <!---------------------------------------------
  //Script Section 
  ------------------------------------------- -->
  <div id="fb-root"></div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  @include('frontend.flash-message')
  <!-- Google Analytics -->
  @if (env('IS_PROD'))
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132697927-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-132697927-2');
  </script> 
  @endif

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

        $('#form').submit(function(){
          $("input[type='submit']", this)
            .val("Enviando Mensaje...")
            .attr('disabled', 'disabled');
          return true;
        });
    })(jQuery);

    $(function()
    {
    });
  </script>

</body>
</html>