<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content="Derka y Vargas, Toyota, Chaco, Hilux, Corolla, Etios, Yaris, SW4, Camry, Prius, RAV4, Land Cruiser, Prado, Posventa, Postventa, Servicios, Mantenimiento Express">
    
    @yield('title_and_meta')
    
    <!--===============================================================================================-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="shortcut icon" href="{{asset('imagenes/logos/dyv_64x64_icono.ico')}}">
    <!--===============================================================================================-->
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <!--===============================================================================================-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('/css/stm-icons.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    
    @yield('mark-up-facebook')

    @yield('styles_sheets')

    {{-- <style type="text/css">
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

    </style> --}}

</head>

<body>
  {{-- <img src="/imagenes/arg.png" class="escarapela visible-md visible-lg">
  <img src="/imagenes/arg.png" class="escarapela-mb visible-xs visible-sm"> --}}
  
  @include('frontend.includes.flash-message')
  @include('frontend.includes.menu-fab')
  {{-- @include('frontend.includes.chat-whatsapp') --}}

  <div id="app">
    @include('frontend.includes.header-desk')
    @include('frontend.includes.navbar-desk')
    @include('frontend.includes.header-mobile')

    @yield('content')

    @include('frontend.includes.footer')
  </div>

  <!--===============================================================================================-->
  <!-- Facebook -->
  <div id="fb-root"></div>
  <!--===============================================================================================-->
  <!-- Main -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!--===============================================================================================-->
  <!-- Owl Carucel -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <!--===============================================================================================-->
  <!-- Scroll Reveal -->
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <!--===============================================================================================-->
  <!-- Google Recaptcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!--===============================================================================================-->
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
  <!--===============================================================================================-->
  <!-- Script -->
  <script type="text/javascript">
    $(document).ready(function(){

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
                } else {
                    $element.removeClass('.slide-left-show');
                }
            });
        }
     
        $window.on('scroll resize', check_if_in_view);

        window.sr = ScrollReveal();
        sr.reveal('.thumbnail-lighten', {duration: 1500});

        $(".a-cargando").click(function(){
          $(this).addClass('disabled')
                  .text('Cargando...');
        });

        $(".a-buscando").click(function(){
          $(this).addClass('disabled')
                  .text('Buscando...');
        });

        $('#form').submit(function(){
          $("input[type='submit']", this)
            .val("Enviando Mensaje...")
            .attr('disabled', 'disabled');
          return true;
        });

        //JQuery Open Close Menu Collapse
        $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
        });

        $("#open-close-chats-wapp").click(function(event){
          event.preventDefault();
          $("#wapp-content-chats").toggle("medium");
        });
        $("#close-chats-wapp").click(function(event){
          event.preventDefault();
          $("#wapp-content-chats").toggle("medium");
        });
      
    });
  </script>

  @yield('script')

</body>
</html>