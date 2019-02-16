@extends('backend.layout')

@section('content')

<style>
        html, body {
            height: 100%;
        }
        body {
            background-image: url(https://images5.alphacoders.com/521/521834.jpg);
            background-size: auto;
            background-position: center;
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

<div class="container-fluid">
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" href="https://facebook.com/EnsarDEMIRKOL" target="_blank">TOYOTA</a>
      </li>
    </ul>
</div>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
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
@stop

