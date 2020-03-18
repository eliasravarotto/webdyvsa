@extends('frontend.layout')

@section('title_and_meta')
  <title>Venta de Accesorios Originales Toyota</title>
  <meta name="description" content="Derka y Vargas donde comprar Hilux, Corolla, SW4, Innova, Cubiertas y Llantas, Accesorios Originales Toyota, Repuestos Originales, Repuestos Genuinos">
@stop

@section('mark-up-facebook')
    <meta property="og:url" content="https://www.derkayvargas.com/posventa-accesorios" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="ACCESORIOS TOYOTA" />
    <meta property="og:image" content="{{asset('imagenes/icons/logo_dyv_loading.png')}}" />
@stop

@section('styles_sheets')
<style type="text/css">
#custom-search-input{
    padding: 3px;
    /*border: solid 1px #E4E4E4;*/
    border: solid 1px #777777;
    border-radius: 6px;
    background-color: #fff;
}

#custom-search-input select{ font-size: 20px  }
#custom-search-input select,
#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input a,
#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input a:hover,
#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}


.btn-preview-img{
	border:none;
	position: absolute;
	right: 5px;
	top: 5px;
	padding: 5px 10px;
	color: white;
	background-color:rgba(0, 0, 0, 0.7);
}
.btn-preview-img:hover{
	color: white;
	background-color:rgba(0, 0, 0, 0.9);
}


</style>
@stop

@section('content')
	<article>
		<section>
			<div class="mu-call-to-action mu-call-to-action-dark bg-header-accesorios" style="background-position: right;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-call-to-action-area">
								<div class="mu-call-to-action-left">
									<h1 class="text-white"><b>Accesorios</b></h1>
									<p style="color: rgb(216, 216, 216); font-size: 18px;">
									{{-- Encontra todos los accesorios disponibles para tu Toyota. --}}
									Equipá tu Toyota y dale la exclusividad que se merece
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container mt-3 mb-3">
				<h3>Encontra todos los accesorios disponibles</h3>
				<div class="row">
			        <div class="col-md-12">
			        	<form action="" method="get" autocomplete="off" id="searchform">
				            <div id="custom-search-input">
				                <div class="input-group col-md-12">
				                    {{-- <input type="text" class="form-control input-lg" name="texto_a_buscar" placeholder="Buscar" /> --}}
				                    <select class="form-control input-lg" onchange="$('#searchform').submit()" name="modelo_id">
			                    		<option value="">Buscar por modelo</option>
				                    	@foreach( $modelos as $modelo )
				                    		<option value="{{ $modelo->id }}" @if($modelo_id == $modelo->id) selected @endif>{{$modelo->nombre}}</option>
				                    	@endforeach
				                    </select>
				                    <span class="input-group-btn">
				                    	@if($modelo_id == null)
				                        <button class="btn btn-info btn-lg" type="submit">
				                            <i class="glyphicon glyphicon-search"></i>
				                        </button>
				                        @else
				                        <a class="btn btn-info btn-lg" onclick="limpiarBusqueda(event)">
				                            <i class="fa fa-times"></i> LIMPIAR
				                        </a>
				                        @endif
				                    </span>
				                </div>
				            </div>
			            </form>
			        </div>
				</div>
				<div class="title-section"></div>
			</div>
		</section>

		<section>
			<div class="container mt-3">
				@foreach( $modelos as $modelo )
					@if( ($modelo->accesorios()->count() > 0) AND  $modelo_id == null) 
						<div class="d-flex list-product flex-wrap justify-content-start mb-3">
							<div class="column mt-1">
								<a href="{{route('accesorios').'?modelo_id='.$modelo->id}}">
								<div class="card d-flex justify-content-center align-items-center">
									<img src="{{$modelo->img_modelo }}">
									<img src="{{ $modelo->img_logo }}">
									<h4 class="visible-xs visible-sm">Ver Accesorios</h4>
								</div>
								</a>
							</div>
							@foreach ( $modelo->accesorios()->get()->take(3) as $accesorio )
								<div class="column mt-1 visible-md visible-lg">
									<div class="card d-flex flex-column justify-content-between">
										<div onclick="imageView('{{ $accesorio->foto()->public_path }}')" class="container-img"  style="background: url({{ $accesorio->foto()->public_path }})">
											<button class="btn-preview-img"> <i class="fa fa-search-plus"></i> </button>
										</div>
										<div class="card-body d-flex flex-column justify-content-end">
											<div class="product-price">
											@if( $accesorio->precio )
												<span>$ {{  number_format($accesorio->precio, 2, ',', '.')}}</span>
											@else
												<div style="height: 27px; width: 125px; background-color: #fafa"></div>
											@endif
											</div>

											<div class="product-title ">	
												{{ $accesorio->nombre }}
											</div>
											{{-- <div class="product-description">
												<p class="card-text">
													<i class="fa fa-car text-muted"></i>
													{{ $accesorio->modelo()->first()->nombre }}
												</p>
											</div> --}}
											<div class="product-buttons ">
											  	<a href="https://wa.me/{{env('WHATSAPP_GONZALOGALEANO')}}?text=Hola%20me%20interesa%20el%20accesorio%20{{ str_replace(' ', '%20', $accesorio->nombre) }}" 
											  	   class="btn btn-toyota btn-whatsapp my-1 btn-round" 
											  	   target="_blank" 
											  	   style="font-size: 17px">
											  		<i class="fa fa-whatsapp"></i>
											  		Consultar
											  	</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							<div class="column mt-1 visible-md visible-lg">
								<a href="{{route('accesorios').'?modelo_id='.$modelo->id}}">
								<div class="card d-flex justify-content-center align-items-center">
									<h3>VER TODOS</h3>
								</div>
								</a>
							</div>
						</div>
					@endif

					@if( $modelo_id != null && $modelo_id == $modelo->id) 
						<div class="d-flex list-product flex-wrap justify-content-start mb-3">
						@forelse ( $modelo->accesorios()->get() as $accesorio )
						<div class="column mt-1">
							<div class="card d-flex flex-column justify-content-between" style="position: relative;">
								<div class="container-img" onclick="imageView('{{ $accesorio->foto()->public_path }}')"  style="background: url({{ $accesorio->foto()->public_path }})">
									<button class="btn-preview-img"> <i class="fa fa-search-plus"></i> </button>
								</div>
								<div class="card-body d-flex flex-column justify-content-end">
									<div class="product-price">
									@if( $accesorio->precio )
										<span>$ {{  number_format($accesorio->precio, 2, ',', '.')}}</span>
									@else
										<div style="height: 27px; width: 125px; background-color: #fafa"></div>
									@endif
									</div>

									<div class="product-title ">	
										{{ $accesorio->nombre }}
									</div>
									<div class="product-description">
										<p class="card-text">
											<i class="fa fa-car text-muted"></i>
											{{ $accesorio->modelo()->first()->nombre }}
										</p>
									</div>
									<div class="product-buttons ">
									  	<a href="https://wa.me/{{env('WHATSAPP_GONZALOGALEANO')}}?text=Hola%20me%20interesa%20el%20accesorio%20{{ str_replace(' ', '%20', $accesorio->nombre) }}" 
									  	   class="btn btn-toyota btn-whatsapp my-1 btn-round" 
									  	   target="_blank" 
									  	   style="font-size: 17px">
									  		<i class="fa fa-whatsapp"></i>
									  		Consultar
									  	</a>
									</div>
								</div>
							</div>
						</div>
						@empty
						<div class="alert alert-info" role="alert">
						  <p> 
						  	<i class="fa fa-frown-o"></i> Lo sentimos, por el momento no hay accesorios cargados para el modelo seleccionado. Puede consultar stock a traves del siguinte link de whatsapp 
						  	<a href="https://wa.me/{{env('WHATSAPP_GONZALOGALEANO')}}"><b>Click aquí</b></a> 
						  </p>
						</div> 
						@endforelse
						</div>
					@endif
				@endforeach
				

			</div>
		</section>

		<!-- Modal Viewer-->
		{{-- <div id="myModal" class="viewer modal">
		  <span class="close-btn" onclick="$('#myModal').toggle()"><i class="fa fa-times"></i></span>
		  <img class="modal-content" id="img01">
		  <div id="caption"></div>
		</div> --}}

		<!-- The Modal -->
		<div id="myModal" class="viewer modal-viwer">
			<!-- The Close Button -->
			<span class="close close-btn-viwer" onclick="$('#myModal').toggle()"><i class="fas fa-times"></i></span>
			<!-- Modal Content (The Image) -->
			<img class="viewer modal-content" id="img01">
			<!-- Modal Caption (Image Text) -->
			<div class="viewer caption"></div>
		</div>

    </article>
@stop

@section('script')
<script type="text/javascript">
	var modal = document.getElementById("myModal");
	var modalImg = document.getElementById("img01");
	function imageView( img ){
		modal.style.display = "block";
	  	modalImg.src = img;
	}

	function limpiarBusqueda(e){
		e.preventDefault();
		window.location.href = '/posventa-accesorios';
	}
</script>
@stop