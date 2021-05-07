<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Web DyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="{{asset('imagenes/logos/dyv_64x64_icono.ico')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon.min.css') }}" rel="stylesheet">
    
    @yield('stylesheet')

    <style type="text/css">
        body{
            height: 100vh;
            background: url(/imagenes/dyv_charata.jpg);
            background-size: cover;
            bac
        }
        .container-wrapper{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-position: right;
        }
    </style>
</head>

<body>
    <div class="container container-wrapper">

    	@yield('content')

    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ------------------------- -->
    <script src="{{ asset('js/app_backend.js') }}"></script>
    @yield('page-script')
</body>
</html>
