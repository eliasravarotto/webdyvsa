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
  @include('frontend.includes.flash-message')
  @include('frontend.includes.menu-fab')

  <div id="app">
    @include('frontend.includes.header-desk')
    @include('frontend.includes.navbar-desk')
    @include('frontend.includes.header-mobile')

    @yield('content')

    @include('frontend.includes.footer')
  </div>

  <!---------------------------------------------
  //Script Section 
  ------------------------------------------- -->
  <div id="fb-root"></div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
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
  </script>

</body>
</html>