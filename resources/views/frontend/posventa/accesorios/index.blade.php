@extends('layout')

@section('title_and_meta')
  <title>Derka y Vargas - Plan de Ahorro</title>
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

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card-text:last-child {
    margin-bottom: 0;
}

.card img{
	width: 100%
}

.product-price {
    font-size: 27px;
    font-weight: 600;
    color: #fc4241;
    text-align: left;
    margin: 0px 0px 0px 20px;
    order: 1;
}
.product-title {
    font-family: "Raleway", Sans-serif;
    font-size: 13px;
    font-weight: 600;
        text-transform: uppercase;
    font-style: normal;
    line-height: 1.8em;
    letter-spacing: 0px;
    text-align: left;
    margin: 0px 0px 0px 20px;
    order: 2;
    /*color: #777777*/
}
.product-description {
    font-family: "Raleway", Sans-serif;
    font-size: 14px;
    font-weight: 300;
    text-transform: none;
    font-style: normal;
    line-height: 1.75em;
    letter-spacing: 0px;
    color: #1c1c1c;
    text-align: left;
    margin: 0px 30px 0px 20px;
    order: 3;
}
.product-buttons {
    margin: 6px 0px 0px 20px;
    order: 4;
}
.list-product .card{ width: 250px }
.list-product .card:first-child{ margin-left: 0px; }
.list-product .card .card-body{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-direction: column;
}

@media only screen and (max-width:576px) {
	.list-product .ml-1{
		margin-left: 0rem;
	}

	.list-product .card{
		width: 100%;
	}

	.product-title,
	.product-description
	 { font-size: 17px;  }

}
</style>
@stop

@section('content')
	<article>
		<section>
			<div class="mu-call-to-action mu-call-to-action-dark bg-header-accesorios">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-call-to-action-area">
								<div class="mu-call-to-action-left d-flex">
									<h1><b>Accesorios</b></h1> 
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
			        	<form action="" method="get" autocomplete="off">
			            <div id="custom-search-input">
			                <div class="input-group col-md-12">
			                    <input type="text" class="form-control input-lg" name="texto_a_buscar" placeholder="Buscar" />
			                    <span class="input-group-btn">
			                        <button class="btn btn-info btn-lg" type="submit">
			                            <i class="glyphicon glyphicon-search"></i>
			                        </button>
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
				<div class="d-flex list-product flex-wrap">
					@foreach( $accesorios as $accesorio )
					<div class="card ml-1">
					  <img src="{{ $accesorio->foto()->public_path }}" class="card-img-top" alt="...">
					  <div class="card-body">
					  	<div class="product-price">
					  		<span>$ {{ $accesorio->precio }}</span>
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
						  	<a href="#" class="btn btn-toyota btn-whatsapp my-1 btn-round" style="font-size: 17px">
						  		<i class="fa fa-whatsapp"></i>
						  		Consultar
						  	</a>
					  	</div>
					  </div>
					</div>
					@endforeach
				</div>
			</div>
		</section>

    </article>
@stop

@section('script')

@stop