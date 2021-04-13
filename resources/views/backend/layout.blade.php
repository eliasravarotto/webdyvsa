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
    <link rel="stylesheet" href="{{ asset('css/bootadmin.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" >
    <!--===============================================================================================-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha256-nbyata2PJRjImhByQzik2ot6gSHSU4Cqdz5bNYL2zcU=" crossorigin="anonymous" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('css/notifier.css')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/basic.min.css" />
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon.min.css') }}" rel="stylesheet">

    <style type="text/css">
        
        .list-group-item-md {
            padding: .6rem 1.25rem;
        }
    </style>

    @yield('stylesheet')
</head>

<body class="bg-light">

    @include('backend.includes.navbar')

    <div class="d-flex justify-content-center" id="app">
        <div class="sidebar sidebar-dark bg-dark">
            @include('backend.includes.sidebar')
        </div>

        <div class="content w-md-100 p-3 p-md-4">
            @include('backend.includes.flashmessage')
            @yield('content')
        </div>
    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ---------------------------->
    <!--===============================================================================================-->
    <script src="{{ asset('js/app_backend.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootadmin/js/bootadmin.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('js/notifier.js') }}"></script>

    
    @yield('page-script')

</body>
</html>