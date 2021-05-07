@extends('auth.layout-security')

@section('content')

<div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card bg-secondary shadow border-0">
                <div class="card-header bg-white pb-5">

                    <div class="text-center">
                        <div class="text-center">
                            <h1>RECUPERAR CONTRASEÑA</h1>
                        </div>
                        <div class="text-center">
                            <p class="text-danger mb-0">WEB DERKA Y VARGAS S.A.</p>
                        </div>

                    </div>
                  </div>
                <div class="card-body px-lg-5 py-lg-5">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">Ingrese la dirección de correo electrónico de su cuenta y le enviaremos un enlace para restablecer la contraseña.</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Ingrese su email">

                                @if ($errors->has('email'))
                                    <small class="text-danger"><i class="fas fa-exclamation-triangle"></i> {{ $errors->first('email') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
    </div>

@endsection
