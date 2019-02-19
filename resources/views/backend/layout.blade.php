<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Web DyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link href="{{ asset('css/app_backend.css') }}" rel="stylesheet">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/yeti/bootstrap.min.css" rel="stylesheet" integrity="sha384-w6tc0TXjTUnYHwVwGgnYyV12wbRoJQo9iMlC2KdkdmVvntGgzT9jvqNEF/uKaF4m" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    @yield('stylesheet')
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Derka y Vargas</h3>
                <p>Dashboard Web Site</p>
                {{-- <strong>DyV</strong> --}}
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/admin">
                        <i class="fa fa-dashboard"></i>
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="/admin/usados">
                        <i class="fa fa-car"></i>
                        USADOS
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle arrow-right">
                        <i class="fa fa-envelope"></i>
                        EMAILS
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{route('contacto_mensajes_index', 'contacto')}}">Contacto</a>
                        </li>
                        <li>
                            <a href="{{route('contacto_mensajes_index', 'financiacion')}}">Financiacion</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/usados')}}">Usados</a>
                        </li>
                        <li>
                            <a href="{{route('testdrive_index')}}">Test Drive</a>
                        </li>
                        <li>
                            <a href="{{route('contacto_mensajes_index', 'tpa')}}">Tpa</a>
                        </li>
                        <li>
                            <a href="{{url('/admin/servicios')}}">Turnos</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Perfil</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Cerrar Sesión</a>
                            </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                @if (session('success'))
                  <div class="alert alert-warning alert-dismissible toast" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('success') }}
                  </div>
                @endif
                @if (session('error'))
                  <div class="alert alert-danger alert-dismissible toast" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><i class="fa fa-check-circle" aria-hidden="true"></i></strong> {{ session('error') }}
                  </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ------------------------- -->
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app_backend.js') }}"></script>
    @yield('page-script')
    <script type="text/javascript">
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>

</body>
</html>