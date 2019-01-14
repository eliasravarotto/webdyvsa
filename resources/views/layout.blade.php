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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
 
    @yield('styles_sheets')
</head>

<style type="text/css">

  .contact-details .media {
    margin: 0 0 30px;
}
.contact-details .media .media-left {
    padding-right: 25px;
}

.media-body, .media-left, .media-right {
    display: table-cell;
    vertical-align: top;
}
.contact-details .media .media-left i {
    width: 55px;
    font-size: 24px;
    height: 55px;
    line-height: 55px;
    border-radius: 50%;
    text-align: center;
    color: #333;
    border: 1px dashed #333;
}


  .logos-content > div > img{
    padding: 0px 15px 0px 15px;
  }

  footer .row{
    margin-right: 0px;
    margin-left: 0px;
  }

  #f1_container {
  position: relative;
  margin: 10px auto;
  width: 450px;
  height: 281px;
  z-index: 1;
}
#f1_container {
  perspective: 1000;
}
#f1_card {
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transition: all 0.7s linear;
}
#f1_container:hover #f1_card {
  -webkit-transition: -webkit-transform 0.7s ease-in;
  transform: rotateY(180deg);
  box-shadow: -5px 5px 5px #aaa;
}
.face {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}
.face.back {
  display: block;
  transform: rotateY(180deg);
  box-sizing: border-box;
  padding: 10px;
  color: white;
  text-align: center;
  background-color: #aaa;
}

.item-footer-social{
  padding: 0px 10px 0px 10px; 
}



/* Style the video: 100% width and height to cover the entire window */
#myVideo {
    /*position: relative;*/
    right: 0;
    bottom: 0;
    min-width: 100%; 
    /*min-height: 100%;*/
}

/* Add some content at the bottom of the video/page */
.content {
    position: absolute;
    /*top: 0;*/
    margin-top: -650px;
    margin-left: 25px;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    /*width: 50%;*/
    padding: 25px;
}

/* Style the button used to pause/play the video */
#myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
}

#myBtn:hover {
    background: #ddd;
    color: black;
}
</style>

<body>

  {{-- @include('frontend.float-buttons') --}}
  @include('frontend.menu-fab')
  @include('loading-dyv')

  <div id="app">
    <div class="header-contacto">
      <a href="/">
        <img src="{{ asset('/imagenes/logo-empresa.png') }}"  style="height: 51px;">
      </a>
        <div style="width: 60%; display: flex; justify-content: space-around; text-align: center;">
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
                      {{-- <i class="fa fa-map-marker" aria-hidden="true"></i> --}}
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
        </div>
        <img src="{{ asset('/imagenes/logo-toyota.png') }}" style="height: 60px;">
    </div>

    <!-- Navbar Mobile -->
    <nav class="navbar navbar-default visible-xs visible-sm">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{-- <a class="navbar-brand" href="#">Brand</a> --}}
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="/modelos">Modelos</a></li>
            <li><a href="/plan-de-ahorro">Plan de Ahorro</a></li>
            <li><a href="/financiacion">Financiación</a></li>
            <li><a href="/usados">Usados</a></li>
            <li><a href="/posventa">Posventa</a></li>
            <li><a href="/contacto">Contacto</a></li>
            {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> --}}
          </ul>
          {{-- <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form> --}}
          {{-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul> --}}
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

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
        <div class="row row-footer-first text-center">
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