@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
	
</style>
@stop

@section('content')
<div class="row mb-4">
  <div class="col-md-3">
      <div class="d-flex border">
          <div class="bg-success text-light p-3">
              <div class="d-flex align-items-center h-100">
                  <i class="fa fa-3x fa-fw fas fa-envelope"></i>
              </div>
          </div>
          <div class="flex-grow-1 bg-white p-3">
              <p class="text-uppercase text-secondary mb-0">Leads</p>
              <p>Consultas web </p>
              <h3 class="font-weight-bold mb-0">{{$cant_consultas}}</h3>
          </div>
      </div>
  </div>
  <div class="col-md-3">
      <div class="d-flex border">
          <div class="bg-primary text-light p-3">
              <div class="d-flex align-items-center h-100">
                  <i class="fa fa-3x fa-fw fa-ticket-alt"></i>
              </div>
          </div>
          <div class="flex-grow-1 bg-white p-3">
              <p class="text-uppercase text-secondary mb-0">Turnos</p>
              <p>Servicios</p>
              <h3 class="font-weight-bold mb-0">{{$cant_de_turnos}}</h3>
          </div>
      </div>
  </div>  
  <div class="col-md-3">
      <div class="d-flex border">
          <div class="bg-danger text-light p-3">
              <div class="d-flex align-items-center h-100">
                  <i class="fa fa-3x fa-fw fa-car"></i>
              </div>
          </div>
          <div class="flex-grow-1 bg-white p-3">
              <p class="text-uppercase text-secondary mb-0">Modelos</p>
              <p>Modelos 0KM.</p>
              <h3 class="font-weight-bold mb-0">{{$cant_modelos}}</h3>
          </div>
      </div>
  </div> 
  <div class="col-md-3">
      <div class="d-flex border">
          <div class="bg-secondary text-light p-3">
              <div class="d-flex align-items-center h-100">
                  <i class="fa fa-3x fa-fw fa-car"></i>
              </div>
          </div>
          <div class="flex-grow-1 bg-white p-3">
              <p class="text-uppercase text-secondary mb-0">Usados</p>
              <p>Usados registrados</p>
              <h3 class="font-weight-bold mb-0">{{$cant_usados}}</h3>
          </div>
      </div>
  </div>  
</div>

<div class="row">

<p id="token"></p>
@stop

@section('page-script')
    <!-- Google FCM -->
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
    <script src="{{ asset('js/sw-push-msg.js') }}"></script>
    <!-- end -->
@stop