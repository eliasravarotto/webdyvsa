@extends('backend.layout')

@section('stylesheet')
<style type="text/css">
	
</style>
@stop

@section('content')
<div class="row mb-4">
  
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