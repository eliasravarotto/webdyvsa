@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
	
</style>
@stop

@section('content')
{{-- <div class="row">
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<p><i class="fa fa-envelope-o bg-circulo-white"></i></p>
  				</div>
  				<div>
    				<h3>{{$cant_consultas}}</h3>
    				<h6>Total de consultas</h6>
    				<p>Consultas desde la pag. web </p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-clipboard bg-circulo-white"></i>
  				</div>
    			<div>
    				<h3>{{$cant_de_turnos}}</h3>
    				<h6>Total de turnos</h6>
    				<p>Servicios de posventa </p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-users bg-circulo-white"></i>
  				</div>
    			<div>
    				<h3>{{$cant_usuarios}}</h3>
    				<h6>Total de usuarios</h6>
    				<p>Usuarios registrados</p>
  				</div>
  			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="fa fa-car bg-circulo-white "></i>
  				</div>
    			<div>
    				<h3>{{$cant_modelos}}</h3>
    				<h6>Total de modelos</h6>
    				<p>Modelos 0KM.</p>
  				</div>
  			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-4 my-1">
		<div class="card tarjeta-dash">
  			<div class="card-body">
  				<div>
  					<i class="material-icons bg-circulo-white" style="font-size: 3rem !important">directions_car</i>
  				</div>
    			<div>
    				<h3>{{$cant_usados}}</h3>
    				<h6>Total de usados</h6>
    				<p>Disponibles para la venta</p>
  				</div>
  			</div>
		</div>
	</div>
</div> --}}

  <div id="token"></div>
    <div id="msg"></div>
    <div id="notis"></div>
    <div id="err"></div>

@stop

@section('page-script')
<!-- Google FCM -->
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.7.1/firebase-messaging.js"></script>
    <script>
      MsgElem = document.getElementById("msg")
      TokenElem = document.getElementById("token")
      NotisElem = document.getElementById("notis")
      ErrElem = document.getElementById("err")
      // Initialize Firebase
      // TODO: Replace with your project's customized code snippet
      var config = {
        apiKey: "AIzaSyChcPHdTMHnIsraLntqj0j1S7OSdVzM1vQ",
        projectId: "web---derka-y-va-1538676350230",
        messagingSenderId: "712801085814",
      };
      firebase.initializeApp(config);

      const messaging = firebase.messaging();
        messaging
            .requestPermission()
            .then(function () {
                MsgElem.innerHTML = "Notification permission granted." 
                console.log("Notification permission granted.");

                // get the token in the form of promise
                return messaging.getToken()
            })
            .then(function(token) {
                TokenElem.innerHTML = "token is : " + token
            })
            .catch(function (err) {
                ErrElem.innerHTML =  ErrElem.innerHTML + "; " + err
                console.log("Unable to get permission to notify.", err);
            });

        messaging.onMessage(function(payload) {
            console.log("Message received. ", payload);
            NotisElem.innerHTML = NotisElem.innerHTML + JSON.stringify(payload) 
        });
    </script>> 
@stop