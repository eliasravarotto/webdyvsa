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

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-white pb-5">

                        <div class="text-center">
                            <div class="text-center">
                                <h1>LOGIN</h1>
                            </div>
                            <div class="text-center">
                                <p class="text-danger mb-0">WEB DERKA Y VARGAS S.A.</p>
                            </div>

                        </div>
                      </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <form class="form-login" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-row justify-content-center mb-4">
                                <div class="col-11" >
                                    @if ($errors->has('email'))
                                        <small class="text-danger">
                                            <b>{{ $errors->first('email') }}</b>
                                        </small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-11">
                                    <div class="form-group mb-2">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-11">
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                          </div>
                                          <input type="password" class="form-control" placeholder="Password" name="password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-center mb-3">
                                <div class="col-11">
                                    <div class="text-muted font-italic"><small>¿Olvido su contraseña? <span class="text-success font-weight-700">Recuperar</span></small></div>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="col-11  mt-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-block">ENTRAR <i class="fas fa-sign-in-alt"></i></button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
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
