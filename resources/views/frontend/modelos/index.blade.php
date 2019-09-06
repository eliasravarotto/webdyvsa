@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Modelos</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop

@section('content')
	<article>
        <section>
            @include('frontend.includes.test-drive')
        </section>
        <section>
    		<div class="container">
    			<section class="pad-top-bot-50" style="padding-left: 8%; padding-right: 8%;">
    				<div class="row">
    					@foreach($modelos as $modelo)
    					<div class="col-sm-6 col-md-3 py-1 px-1">
    					    <a class="thumbnail thumbnail-hover thumbnail-no-border thumbnail-no-bg" href="/modelos/{{$modelo->nombre}}" style="text-decoration: none; padding: 8px">
    					      <img src="{{$modelo->img_modelo}}" alt="...">
                              <div class="d-flex">
                                  <img class="img-responsive" src="{{$modelo->img_logo}}">
                              </div>
                              <div class="d-flex justify-content-center">
                                <span class="btn btn-default text-center btn-round">Ver modelo</span>
                              </div>
    					    </a>
    				  	</div>
    					@endforeach
    				</div>
    			</section>
    		</div>
        </section>
	</article>

@stop

@section('script')
@stop