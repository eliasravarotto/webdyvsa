@extends('layout')
<style type="text/css">
.image-service .is-desc {
    position: absolute;
    padding: 60px;
    margin-left: 65%;
    background: #fff;
    top: 50%;
    width: 35%;
    z-index: 2;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-box-shadow: 0 23px 40px rgba(0,0,0,.15);
    box-shadow: 0 23px 40px rgba(0,0,0,.15);
}
.image-service .is-desc-sm-xs {
    position: absolute;
    padding: 60px;
    margin-left: 65%;
    background: #fff;
    top: 50%;
    width: 35%;
    z-index: 2;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-box-shadow: 0 23px 40px rgba(0,0,0,.15);
    box-shadow: 0 23px 40px rgba(0,0,0,.15);
}

.image-service .is-image {
    width: 70%;
    height: 100%;
    background-size: cover;
    background-position: 50%;
}
.image-service {
    position: relative;
    height: 550px;
}

</style>

@section('content')


	<!-- Navbar Desktop -->
	<navbar-desk v-bind:data="{ bg_rgba: 'rgba(0,0,0,0.5);', position: 'relative' }"></navbar-desk>

	<article>
		
		<div style="width: 100%">
			<img src="http://www.yacopinisa.com/wp-content/uploads/2017/08/slide-psvtas4.jpg" class="img-responsive" alt="Cinque Terre">
		</div>

		<section style="margin-top: 50px; margin-bottom: 50px">
			<div class=" container">
				
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<img class="img-responsive" src="/imagenes/posventa/gratis.jpg" alt="Cinque Terre">
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h3>Lorem</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			</div>
		</section>
		
		<section style="margin-top: 50px; margin-bottom: 50px">
			<div class="container">
				
			<div class="table-responsive">          
				<table class="table table-striped">
					<thead>
					  <tr>
					    <th style="text-align: center; font-size: 20px;"></th>
					    <th style="text-align: center; font-size: 20px;">ETIOS</th>
					    <th style="text-align: center; font-size: 20px;">COROLLA</th>
					    <th style="text-align: center; font-size: 20px;">HILUX 4x2</th>
					    <th style="text-align: center; font-size: 20px;">Hilux/SW4 4x4</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>10.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>20.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>30.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>40.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>50.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>
					  <tr>
					    <td style="text-align: center;font-size: 20px;"><b>100.000km</b></td>
					    <td style="text-align: center;font-size: 20px;">$6190</td>
					    <td style="text-align: center;font-size: 20px;">$4190</td>
					    <td style="text-align: center;font-size: 20px;">$7190</td>
					    <td style="text-align: center;font-size: 20px;">$7790</td>
					  </tr>

					</tbody>
				</table>
  			</div>
			</div>
		</section>

		<section>
			<div class="container">
				<h2 class="text-center">Valores de Posventa</h2>
				<div class="row">
					<div class="col-md-4">
						<h3><i class="fa fa-users" aria-hidden="true"></i> Personal Técnico Capacitado</h3>
						<p>Contar con personal altamente capacitado es la mejor forma de transmitir el valor de la marca Toyota a nuestros clientes. Por esta razón desarrollamos y entrenamos a nuestro personal mientras nos preparamos para responder a los retos del futuro. Por ello es que Usted tiene siempre la tranquilidad y el respaldo de dejar su vehículo en las mejores manos. Somos los que mejor conocemos su Toyota.</p>
					</div>	
					<div class="col-md-4">
						<h3><i class="fa fa-certificate" aria-hidden="true"></i> Personal Técnico Capacitado</h3>
						<p>Contar con personal altamente capacitado es la mejor forma de transmitir el valor de la marca Toyota a nuestros clientes. Por esta razón desarrollamos y entrenamos a nuestro personal mientras nos preparamos para responder a los retos del futuro. Por ello es que Usted tiene siempre la tranquilidad y el respaldo de dejar su vehículo en las mejores manos. Somos los que mejor conocemos su Toyota.</p>
					</div>	
					<div class="col-md-4">
						<h3><i class="fa fa-certificate" aria-hidden="true"></i> Personal Técnico Capacitado</h3>
						<p>Contar con personal altamente capacitado es la mejor forma de transmitir el valor de la marca Toyota a nuestros clientes. Por esta razón desarrollamos y entrenamos a nuestro personal mientras nos preparamos para responder a los retos del futuro. Por ello es que Usted tiene siempre la tranquilidad y el respaldo de dejar su vehículo en las mejores manos. Somos los que mejor conocemos su Toyota.</p>
					</div>	
				</div>
			</div>
		</section>

		<section style="background-color: aqua">
			<div class="container" style="padding-top: 50px; padding-bottom: 50px;">
				<div class="row section-body">
					<div class="col-md-12 col-sm-12 image-service is-right-text">
						<div class="is-image reveal reveal_visible" style="background-image: url('https://mylisting.27collective.net/mycar/wp-content/uploads/sites/5/2017/10/model-3-mountain-pearl-1.jpg')">
						</div>
						<div class="is-desc reveal reveal_visible visible-md visible-lg">
							<h2 class=" case27-primary-text">Una imagen bien copada de Marcelo</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="btn btn-primary">
									Start exploring 
								</a>
						</div>
						<div class="is-desc-sm-xs reveal reveal_visible hidden-md hidden-lg">
							<h2 class="">Una imagen bien copada de Marcelo</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<a href="#" class="btn btn-primary">
									Start exploring 
								</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<h3>Contacto</h3>
		</section>		


	</article>

@stop

