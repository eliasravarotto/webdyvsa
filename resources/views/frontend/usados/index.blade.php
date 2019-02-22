@extends('layout')
        <style type="text/css">
            .precio{
                    background-color: #016a87;
                    color: #fafafa !important;
                    text-shadow: 0px 0px 0px #ffffff;
            }
        </style>

@section('styles_sheets')
@stop

@section('content')
	
	<article>
		<section>
			<div class="container">
				<div class="page-header">
				  <h1>ELEGÍ TU USADO<small></small></h1>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-md-push-6">
						{{-- <button class="btn btn-toyota btn-lg pull-right" data-toggle="modal" data-target="#contacto"> --}}
						<button class="btn btn-toyota btn-lg pull-right" data-toggle="collapse" data-target="#contacto-form">
							<i class="fa fa-envelope-o"></i> CONSULTAR
						</button>
						<br>
						<br>
					</div>
					<div class="col-sm-12 col-md-6 col-md-pull-6">
						<div id="contacto-form" @if($errors->isEmpty()) class="collapse" @endif>
						<form id="form" class="form-horizontal" action="/contacto" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<input type="hidden" name="from" value="usados">
							<div class="row">
								<div class=" col-md-6">
							    <label class="control-label">Nombre y Apellido</label>
							    <input id="cli" type="text" class="form-control" name="cliente" required value="{{old('cliente')}}">
						  	</div>
						  	<div class=" col-md-6">
							    <label class="control-label">Teléfono</label>
							    <input type="text" class="form-control" name="telefono" value="{{old('telefono')}}">
								<span class="text-danger">
									{{  $errors->first('telefono') }}
								</span>
						  	</div>
							</div>
							<div class="row">
								<div class=" col-md-12">
									<label class="control-label">Email</label>
							    <input type="email" class="form-control" name="email" value="{{old('email')}}">
							    <span class="text-danger">
									{{  $errors->first('email') }}
								</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label class="control-label">Mensaje</label>
							    <textarea name="mensaje" class="form-control" required>{{old('mensaje')}}</textarea>
								</div>
							</div>
							<div class="row pad-top-20">
								<div class="col-md-6">
									<div class="g-recaptcha" 
								           data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
								    </div>
									@if ($errors->has('g-recaptcha-response'))
									    <span class="text-danger">
									        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
									    </span>
									@endif
								</div>
								<div class="col-md-6 text-right">
									{{-- <button type="submit" class="btn btn-default btn-submit">ENVIAR</button> --}}
									{{-- <button type="submit"  class="btn btn-default">ENVIAR</button> --}}
									<input type="submit" class="btn btn-default" value="ENVIAR">
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				<br>
				{{-- <index-usados v-bind:data="{ unidades: {{ $unidades }} }"></index-usados> --}}
			</div>
		</section>

		<section>
			<div class="container">
			<div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 890 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">CHERY TIGGO 5 2.0 4X2 LUXURY CVT L/17</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2018  
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 8.800
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 800.000</h2>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 921 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 44.500
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 300.000</h2>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 851 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 76.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Oscuro
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 320.000</h2>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 915 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FIESTA 1.6 5P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 38.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 320.000</h2>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 880 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FOCUS L/14 2.0 4 P SE PLUS</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2014 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 41.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Dorado
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 380.000</h2>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-4">
                <div class="thumbnail thumbnail-no-bg">
                  <!-- <img src="http://www.asahimotors.com/img_usados/f4a794b36e28f0c09218da939414cc45.jpeg" alt=""> -->
                  <!-- INT 889 -->
                  <div class="caption caption-default">
                    <h3 class="text-center">FORD FOCUS L/16 1.6 5 P S</h3>
                    <p class="text-center">
                        <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2015 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 33.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                            </div>
                        </div>
                    </p>
                    <p class="text-center" >
                        <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                        <h2 class="text-center precio">$ 390.000</h2>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 957 -->
                      <div class="caption caption-default">
                        <h3 class="text-center">FORD RANGER 3.0 TDI DC 4X2</h3>
                        <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label>  2010
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 143.245
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Oscuro
                                </div>
                            </div>
                        </p>
                        <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 350.000</h2>
                        </p>
                      </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 864 -->
                        <div class="caption caption-default">
                            <h3 class="text-center">IVECO DAILY 70C 16 CHASIS 4350</h3>
                            <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2010 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 90.000
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                                </div>
                            </div>
                            </p>
                            <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 740.000</h2>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 944 -->
                        <div class="caption caption-default">
                            <h3 class="text-center">TOYOTA COROLLA 1.8 SE-G L/11 AUT</h3>
                            <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2013 
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 169.000
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Plata
                            </div>
                            </div>
                            </p>
                            <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 370.000</h2>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 902 -->
                        <div class="caption caption-default">
                            <h3 class="text-center">TOYOTA ETIOS 1.5 4 PTAS XLS </h3>
                            <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2016 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 100.000
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Negro
                                </div>
                            </div>
                            </p>
                            <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 315.000</h2>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 929 -->
                        <div class="caption caption-default">
                            <h3 class="text-center">TOYOTA HILUX L/05 2.5 SC 4X2</h3>
                            <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2010 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 277.249
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                                </div>
                            </div>
                            </p>
                            <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 340.000</h2>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 926 -->
                      <div class="caption caption-default">
                        <h3 class="text-center">TOYOTA HILUX L/16 2.4 DC 4X2 </h3>
                        <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2018 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 48.500
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Rojo
                                </div>
                            </div>
                        </p>
                        <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 900.000</h2>
                        </p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 901 -->
                      <div class="caption caption-default">
                        <h3 class="text-center">TOYOTA HILUX L/16 2.4 SC 4X2 </h3>
                        <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2016 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 156.000
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Blanco
                                </div>
                            </div>
                        </p>
                        <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 660.000</h2>
                        </p>
                      </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 911 -->
                      <div class="caption caption-default">
                        <h3 class="text-center">TOYOTA PRIUS 1.8 CVT L/17</h3>
                        <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2017 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 21.000
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Rojo
                                </div>
                            </div>
                        </p>
                        <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 800.000</h2>
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="thumbnail thumbnail-no-bg">
                        <!-- INT 872 -->
                      <div class="caption caption-default">
                        <h3 class="text-center">VOLKSWAGEN SAVEIRO 1.6 L/18</h3>
                        <p class="text-center">
                            <div style="display: flex; justify-content: space-around; font-size: 12px;">
                                <div>
                                    <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> 2018 
                                </div>
                                <div>
                                    <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> 4.000
                                </div>
                                <div>
                                    <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> Gris Plata
                                </div>
                            </div>
                        </p>
                        <p class="text-center" >
                            <!-- <a v-bind:href="'#'" class="btn btn-default" role="button">VER DETALLES</a> -->
                            <h2 class="text-center precio">$ 500.000</h2>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
            </div>
		</section>
	</article> 

@stop

@section('script')
<script type="text/javascript">
	$('#contacto-form').on('shown.bs.collapse', function (e) {
    $('#cli').focus();
})
</script>
	<!-- jQuery Easing -->
	{{-- <script src="/gallery/js/jquery.easing.1.3.js"></script> --}}

	<!-- Waypoints -->
	{{-- <script src="/gallery/js/jquery.waypoints.min.js"></script> --}}
	<!-- Portfolio Filter Mixitup -->
	{{-- <script type="text/javascript" src="/gallery/js/jquery.mixitup.min.js"></script> --}}

	<!-- Main JS (Do not remove) -->
	{{-- <script src="/gallery/js/main.js"></script> --}}
@stop