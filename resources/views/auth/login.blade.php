<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Web DyVSA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="/sfee_admin/assets/css/normalize.css">
    <link rel="stylesheet" href="/sfee_admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sfee_admin/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/sfee_admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/sfee_admin/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/sfee_admin/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="/sfee_admin/assets/scss/style.css">
    <link href="/sfee_admin/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="/login">
                        {{-- <img class="align-content" src="images/logo.png" alt=""> --}}
                        <h3>DERKA Y VARGAS</h3>
                    </a>
                </div>
                <div class="login-form">
                    <form class="form-login" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label>Usuario o Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            {{-- <input id="login" type="login" class="form-control" name="login" value="{{ old('email') }}" required autofocus> --}}
                            @if ($errors->has('login'))
                                <span class="error">
                                    <strong>{{ $errors->first('login') }}</strong>
                                </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                             @if ($errors->has('password'))
                                <span class="error">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Entrar
                        </button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->has('password') OR $errors->has('email'))

    @endif

</body>
</html>




