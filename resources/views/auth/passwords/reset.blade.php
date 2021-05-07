@extends('auth.layout-security')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">

                <div class="text-center">
                    <div class="text-center">
                        <h1>RESTABLECER CONTRASEÑA</h1>
                    </div>
                    <div class="text-center">
                        <p class="text-danger mb-0">WEB DERKA Y VARGAS S.A.</p>
                    </div>

                </div>
              </div>
            <div class="card-body px-lg-5 py-lg-5">

                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label">Dirección de E-Mail</label>

                        <div class="col-md-12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Ingrese su email">

                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-12 control-label">Password</label>

                        <div class="col-md-12">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <small class="text-danger"><i class="fas fa-times"></i> {{ $errors->first('password') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-12 control-label">Confirm Password</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <small class="text-danger"><i class="fas fa-times"></i> {{ $errors->first('password_confirmation') }}</small>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>





@endsection
