@extends('auth.layout-security')

@section('content')

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

@stop
