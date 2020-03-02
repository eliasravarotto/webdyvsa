<!DOCTYPE html>
<html lang="es">
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
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/697ac82df1.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <link href="{{ mix('/css/app_.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('/css/stm-icons.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <!-- Estilos Cookie Consent -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <!--===============================================================================================-->
    <!-- Estilos TOAST -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!--===============================================================================================-->
    
  @yield('mark-up-facebook')

  @yield('styles_sheets')

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
    @include('frontend.includes.navbar-mobile')
    @include('frontend.includes.navbar-desk')

    @yield('content')

    @include('frontend.includes.footer')
  </div>

  <!--===============================================================================================-->
  <!-- Facebook -->
  <div id="fb-root"></div>
  <!--===============================================================================================-->
  <!-- Main -->
  <script src="{{ mix('js/app_.js') }}"></script>
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
  <!-- TOAST JS -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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