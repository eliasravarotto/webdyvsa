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
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!--===============================================================================================-->
    <link href="{{ asset('/css/stm-icons.css') }}" rel="stylesheet" type="text/css" />
    <!--===============================================================================================-->
    
  @yield('mark-up-facebook')


  <style type="text/css">
    .validate-input {
        position: relative;
    }
    .wrap-input100 {
        width: 100%;
        position: relative;
        background-color: #fff;
        margin-bottom: 17px;
    }
      input.input100 {
        height: 52px;
        padding: 0 20px 0 58px;
    }
    .input100 {
        display: block;
        width: 100%;
        background: transparent;
        color: #43383e;
        line-height: 1.2;
        padding: 0 5px;
    }
      .label-input100 {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 58px;
        height: 52px;
        position: absolute;
        top: 0;
        left: 0;
        cursor: pointer;
        font-size: 18px;
        color: #999999;
    }


    .swal2-title {
      font-size: 30px !important;
      font-weight: 500 !important;
      color: #373435 !important;
    }
    .swal2-popup {
      padding: 1rem !important;
      border-radius: 0px !important;
      max-width: 500px !important;
    }
    .swal2-icon.swal2-success .swal2-success-ring {
      border: .25em solid #e6e6e6
    }
  </style>


  @yield('styles_sheets')

</head>

<body>
  
  @include('frontend.includes.la-voz-del-cliente')
  @include('frontend.includes.menu-fab')
  {{-- @include('frontend.includes.chat-whatsapp') --}}

  <div id="app">
    @include('frontend.includes.header-desk')
    @include('frontend.includes.navbar-mobile')
    @include('frontend.includes.navbar-desk')

    @yield('content')

    @include('frontend.includes.footer')

    <div class="modal modal-push-subscription" tabindex="-1" id="modalPush">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="d-flex flex-column">
              <h5 class="modal-title">Suscríbete a nuestra Web </h5>
              <p class="text-muted">Recibirás las últimas novedades.</p>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ml-4">
            <input id="subscription-options" type="checkbox" name="tpa" value="tpa" checked>
            <label for="tpa">Plan de Ahorro</label><br>

            <input id="subscription-options" type="checkbox" name="servicios-y-accesorios" value="servicios-y-accesorios" checked>
            <label for="servicios-y-accesorios"> Servicios y Accesorios</label><br>

            <input id="subscription-options" type="checkbox" name="0km" value="0km" checked>
            <label for="0km">Ventas 0km</label><br>

            <input id="subscription-options" type="checkbox" name="usados" value="usados" checked>
            <label for="usados">Usados</label><br>

            <input id="subscription-options" type="checkbox" name="noticias-y-novedades" value="noticias-y-novedades" checked>
            <label for="usados">Noticias y Novedades</label><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Más tarde</button>
            <button type="button" class="btn button-theme my-2" style="border-radius: 0px;" id="push-subscription-button">
              Aceptar
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!--===============================================================================================-->
  <!-- Facebook JS-->
  <!--===============================================================================================-->
  <div id="fb-root"></div>
  
  <!--===============================================================================================-->
  <!-- Main -->
  <!--===============================================================================================-->
  <script src="{{ mix('js/app.js') }}"></script>
  
  <!--===============================================================================================-->
  <!-- Owl Carucel -->
  <!--===============================================================================================-->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

  <!--===============================================================================================-->
  <!-- Laravel Share -->
  <!--===============================================================================================-->
  <script src="{{ asset('js/share.js') }}"></script>
  
  <!--===============================================================================================-->
  <!-- Google Recaptcha -->
  <!--===============================================================================================-->
  <script type="text/javascript">
    function downloadJSAtOnload() {
      var element = document.createElement("script");
      element.src = "https://www.google.com/recaptcha/api.js";
      document.body.appendChild(element);
    }

    if (window.addEventListener)
      window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
      window.attachEvent("onload", downloadJSAtOnload);
    else 
      window.onload = downloadJSAtOnload;
  </script>
  
  <!--===============================================================================================-->
  <!-- Google Analytics -->
  <!--===============================================================================================-->
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
 
  <!--===============================================================================================-->
  <!-- Script Varios-->
  <!--===============================================================================================-->
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
            title: '{{session('success')}}',
            showConfirmButton: false,
            timer: 4800
          })
        }
        {{ session('error') ? 'var session_error = true' : 'var session_error = false;'}};
        if (session_error){
          swal.fire({
            position: 'top-end',
            type: 'error',
            title: 'Lo sentimos, algo salió mal. Porfavor intente más tarde.',
            showConfirmButton: false,
            timer: 4800
          })
        }
      
    });

  </script>

  @yield('script')

</body>
</html>