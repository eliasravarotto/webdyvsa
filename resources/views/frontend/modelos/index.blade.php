@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Modelos</title>
  <meta name="description" content="Derka y Vargas Toyota, modelos, versiones, precios">
@stop

@section('content')
	<article>
		{{-- <section>
			<div style="width: 100%">
				<img src="/imagenes/tcf/banner_ppal.jpg" class="img-responsive" alt="">
			</div>
		</section> --}}

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
				{{-- <div class="row">
					@foreach($modelos->slice(4,8) as $modelo)
					<div class="col-sm-6 col-md-3">
					    <a href="/modelos/{{$modelo->nombre}}" style="text-decoration: none;" class="thumbnail thumbnail-zoom thumbnail-hover thumbnail-no-border thumbnail-no-bg">
					      <img src="{{$modelo->img_modelo}}" alt="...">
					      <div class="caption" style="border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 5px">
					        <p class="text-uppercase text-center fs-20 gray-2">{{$modelo->nombre}}</p>
					      </div>
					    </a>
				  	</div>
					@endforeach
				</div> --}}
				{{-- <div class="row">
					@foreach($modelos->slice(8,9) as $modelo)
					<div class="col-sm-6 col-md-3">
					    <a href="/modelos/{{$modelo->nombre}}" style="text-decoration: none;" class="thumbnail thumbnail-hover thumbnail-no-border thumbnail-no-bg">
					      <img src="{{$modelo->img_modelo}}" alt="...">
					      <div class="caption" style="border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; padding: 5px">
					        <p class="text-uppercase text-center fs-20 gray-2">{{$modelo->nombre}}</p>
					      </div>
					    </a>
				  	</div>
					@endforeach
				</div> --}}
			</section>
		</div>
	</article>
	
@stop

@section('script')
<script type="text/javascript">
	
</script>
@stop