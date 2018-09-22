<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>WebDyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    @yield('styles_sheets')
</head>

<style type="text/css">
  footer .row{
    margin-right: 0px;
    margin-left: 0px;
  }
</style>

<body>
  <div id="app">

    <div class="header-contacto">
      <a href="/home">
        <img src="{{ asset('/imagenes/logo-empresa.png') }}"  style="height: 51px;">
      </a>
        <div style="width: 60%; display: flex; justify-content: center; flex-direction: column;text-align: center;">
            <ul class="lista-contacto list-unstyled">
                <li>
                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Sáenz Peña
                    </a>
                </li>
                <li>
                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Charata
                    </a>
                </li>
                <li>
                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Villa Angela
                    </a>
                </li>
                <li>
                    <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Resistencia
                    </a>
                </li>
                <li class="tw"><a href=""><i class="fa fa-facebook"></i></a></li>
                <li class="tw"><a href=""><i class="fa fa-twitter"></i></a></li>
                <li class="tw"><a href=""><i class="fa fa-instagram"></i></a></li>
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
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
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
            </li>
          </ul>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
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
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    @yield('content')

    <footer>
      <div>
        <div class="row row-footer-first">
          <ul class="list-unstyled list-inline text-center footer-menu">
            <li>
              <a href="#">Sucursales</a>
            </li>
            <li></li>
            <li></li>
            <li>
              <a href="#">Contacto</a></li>
          </ul>
        </div>

        <div class="row row-footer">
          <div class="col-md-offset-4 col-sm-offset-4 col-md-1 col-sm-1 col-xs-4 text-center">
            <h1><i class="fa fa-facebook-square"></i>
              <p class="fs-17">Facebook</p>
            </h1>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-4 text-center">
            <h1>
              <i class="fa fa-twitter-square" aria-hidden="true"></i>
              <p class="fs-17">Twitter</p>
            </h1>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-4 text-center ">
            <h1>
              <i class="fa fa-instagram" aria-hidden="true"></i>
              <p class="fs-17">Instagram</p>
            </h1>
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
              Casa Central Sáenz Peñabr <br>
              <small class="text-center">Belgrano N° 872 (calle 10 esq 19 )</small>
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

  <div id="fb-root"></div>
  <!-- Script Section -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  @yield('script')

  <script type="text/javascript">
    (function($) {

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
    })(jQuery);
  </script>

</body>
</html>