@extends('frontend.layout')

@section('title_and_meta')
  <title>Derka y Vargas - Entradas</title>
  <meta name="description" content="Derka y Vargas Resistencia Chaco. Accede a un Toyota 0km. Encontra el auto usado que estas buscando con la mejor financiación.">
@stop

@section('mark-up-facebook')
  <meta property="og:type" content="article" />
  <meta property="og:url"   content="{{url()->current()}}" />
  <meta property="og:image" content="{{Request::root()}}/imagenes/logos/logo_dyv.png" />
@stop

@section('styles_sheets')
@stop

@section('content')

<div class="container mt-3">
  <div class="row d-flex justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-10">

      	<post-index></post-index>

    </div>
  </div>

</div>

@stop