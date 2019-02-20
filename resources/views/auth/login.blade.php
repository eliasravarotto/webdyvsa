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

    <link href="{{ asset('css/app_backend.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    @yield('stylesheet')

    <style>
            html, body {
                height: 100%;
            }
            body {
                background: url(/imagenes/dyv_charata.jpg) no-repeat center bottom;
                background-size: cover;
                /*height: 100vh;*/
            }
            .container-form{
                display: flex;
                height: 78vh;
                flex-direction: column;
                align-items: center;
                justify-content: flex-end;
            }
            ul li a {
                font-size: 17px;
                color: rgb(255, 255, 255);
                font-weight: bold;  
            }
            
            ul li a:hover {
                color: #443020;
            }
            
            .form-row button { 
                font-size: 17px;  
                font-weight: bold;
            }
            input {
                font-weight: bold;
            }   
    </style>
</head>

<body>
    <div class="container-fluid">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="https://facebook.com/EnsarDEMIRKOL" target="_blank">TOYOTA</a>
          </li>
        </ul>
    </div>
    <div class="container container-form">
        <div class="row">
            <form class="form-login" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="text-center" style="color: #fff;">
                    <h1>LOGIN</h1>
                </div>
                <div class="text-center" style="margin-bottom: 5em; color: #fff;">
                    <p>WEB DERKA Y VARGAS S. A.</p>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-10">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('login'))
                            <span class="error">
                                <strong>{{ $errors->first('login') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-10 my-1">
                        <input id="password" type="password" class="form-control" name="password" required>
                         @if ($errors->has('password'))
                            <span class="error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="col-10  my-1">
                        <button type="submit" class="btn btn-info btn-block" style="background-color: #36281d; color: #fff;">ENTRAR</button>
                    </div>
                </div>
            </form>
        @if ($errors->has('password') OR $errors->has('email'))
        @endif   
        </div>
    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ------------------------- -->
    <script src="{{ asset('js/app_backend.js') }}"></script>
    @yield('page-script')
</body>
</html>
