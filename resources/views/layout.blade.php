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
    <link href="https://fonts.googleapis.com/css?family=Play&display=swap" rel="stylesheet">
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
    <!-- Estilos Cookie Consent -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <!--===============================================================================================-->
    
  @yield('mark-up-facebook')

  @yield('styles_sheets')

  <style type="text/css">
    a:hover {
      text-decoration: none;
    }

    .navbar-ppal>li>a {
      color: #373737;
      font-weight: 700;
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
      text-decoration: none;
      background-color: transparent !important;
      color: #eb0a1e;
    }

    .navbar-wrapper {
      border-bottom: #ebebeb solid 2px;
      border-top: #ebebeb solid 1px;
      position: relative;
      background: rgb(255, 255, 255);
    }

    .btn-oval {
      color: black !important;
      border-radius: 20px !important;
      border: 2px solid #e01e37 !important;
    }

    .btn-oval:hover {
      background-color: black !important;
      color: white !important;
      border: 2px solid rgb(0, 0, 0) !important;
    }
  </style>

</head>

<body>
  {{-- <img src="/imagenes/arg.png" class="escarapela visible-md visible-lg">
  <img src="/imagenes/arg.png" class="escarapela-mb visible-xs visible-sm"> --}}
  
  @include('frontend.includes.flash-message')
  @include('frontend.includes.la-voz-del-cliente')
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

        //Desactivar Boton submit del #form al enviar el formulario
        $('#form').submit(function(){
          $("button[type='submit']", this)
            .val("Enviando Mensaje...")
            .attr('disabled', 'disabled');
          return true;
        });

        //Desactivar Boton submit del #form-voz-d-cli al enviar el formulario
        $('#form-voz-d-cli').submit(function(){
          $("button[type='submit']", this)
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

        //ERRORS FORMULARIO VOZ DEL CLIENTE
        @if(sizeof($errors) > 0)
          @if( $errors->vdc_from != null ||
              $errors->vdc_cliente != null ||
              $errors->vdc_email != null ||
              $errors->vdc_telefono != null ||
              $errors->vdc_mensaje != null )
              $('#myModal').modal('show');
          @endif
        @endif
          

        {{ session('success') ? 'var session_success = true' : 'var session_success = false;'}};
        if (session_success){
          swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Su mensaje se envió correctamente.',
            showConfirmButton: false,
            timer: 3500
          })
        }
        {{ session('error') ? 'var session_error = true' : 'var session_error = false;'}};
        if (session_error){
          swal.fire({
            position: 'top-end',
            type: 'error',
            title: 'Lo sentimos, algo salió mal. Porfavor intente más tarde.',
            showConfirmButton: false,
            timer: 3500
          })
        }
      
    });
  </script>

  <!-- JS Cookie Consent -->
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>
  <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000"
        },
        "button": {
          "background": "#f1d600"
        }
      },
      "position": "bottom-left",
      "content": {
        "message": "Para mejorar tu experiencia en nuestra web utilizamos cookies. Si aceptas o continúas navegando significa que aceptas su uso. Obten más información sobre qué son las cookies. ",
        "dismiss": "Aceptar",
        "link": "Leer más",
        "href": "https://www.cookiesandyou.com/about-cookies/"
      }
    })});
  </script>

  @yield('script')

</body>
</html>