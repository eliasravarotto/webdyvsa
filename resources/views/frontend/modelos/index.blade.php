@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Modelos</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop

@section('styles_sheets')
<style type="text/css">
	#mu-call-to-action {
    background-image: url(assets/images/call-to-action-bg.jpg);
    float: left;
    position: relative;
    width: 100%;
}
#mu-call-to-action:before {
    background: #0091E3;
    content: '';
    position: absolute;
    opacity: 0.84;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.mu-call-to-action-area {
    display: inline;
    float: left;
    padding: 70px 0;
    width: 100%;
}

.mu-call-to-action-left {
    color: #fff;
    display: inline;
    float: left;
    max-width: 70%;
}
.mu-quote-btn {
    background-color: #fff;
    color: #0091ea;
    float: right;
}
.mu-primary-btn {
    background-color: #0091ea;
    color: #fff;
    display: inline-block;
    font-size: 18px;
    padding: 15px 70px;
    text-transform: uppercase;
    font-weight: 700;
    border-radius: 25px;
}
.mu-call-to-action-left h2 {
    font-size: 24px;
    text-transform: uppercase;
    margin-bottom: 5px;
}
</style>
@stop

@section('content')
	<article>

	    {{-- @include('frontend.includes.test-drive') --}}

		<div class="container">
			<section class="pad-top-bot-50" style="padding-left: 8%; padding-right: 8%;">
				<div class="row">
					{{-- @foreach($modelos->slice(0,4) as $modelo) --}}
					@foreach($modelos as $modelo)
					<div class=" col-sm-6 col-md-3">
					    <a href="/modelos/{{$modelo->nombre}}" style="text-decoration: none;" class="thumbnail thumbnail-hover thumbnail-no-border thumbnail-no-bg">
					      <img src="{{$modelo->img_modelo}}" alt="..." style="">
					      <div class="caption" style="border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 5px ">
					        <p class="text-uppercase text-center fs-20 gray-2">{{$modelo->nombre}}</p>
					      </div>
					    </a>
				  	</div>
					@endforeach
				</div>
			</section>
		</div>
	</article>
	
@stop

@section('script')
@stop