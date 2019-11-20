<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel Web DyVSA</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/app_backend.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('bootadmin/css/bootadmin.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('bootadmin/css/fontawesome-all.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" >
    <!--===============================================================================================-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--===============================================================================================-->

    @yield('stylesheet')
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        @include('backend.includes.navbar')
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-dark">
            @include('backend.includes.sidebar')
        </div>

        <div class="content p-4">
            @include('backend.includes.flashmessage')
            @yield('content')
        </div>
    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ---------------------------->
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/app_backend.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootadmin/js/bootadmin.min.js') }}"></script>
   
    @yield('page-script')

</body>
</html>