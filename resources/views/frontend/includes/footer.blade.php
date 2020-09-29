<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
	        attribution=setup_tool
	        page_id="127409800604499"
	        greeting_dialog_display="fade" 
	        greeting_dialog_delay="10"
	  		logged_in_greeting="Hola! en qué podemos ayudarte?"
	  		logged_out_greeting="Hola! en qué podemos ayudarte?">
      </div>

<footer>
	<section class="text-center prefooter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 logos-footer disabled">
					<div class="logos-content d-flex justify-content-center align-items-center">
					<div><img src="/imagenes/logos/logo_etc.png" class="img-responsive img-fluid" alt="Estilo Comercial Toyota"></div>
					<div><img src="/imagenes/logos/logo_mant_exp.png" class="img-responsive img-fluid" alt="Mantenimiento Express"></div>
					<div><img src="/imagenes/logos/logo_eco.png" class="img-responsive img-fluid" alt="Toyota ECO"></div>
					<div><img src="/imagenes/logos/logo_genuine_parts.png" class="img-responsive img-fluid" alt="GENUINE PARTS"></div>
					<div><img src="/imagenes/logos/iram.png" class="img-responsive img-fluid" alt="IRAM"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer">
			<div class="row row-footer row-footer-border row-no-margin">
				<div class="col-md-12 col-xs-12 col-sm-12 text-center">
				<h1>Derka y Vargas</h1>
				<h4 class="white">Concesionario Oficial Toyota en Chaco</h4>
				</div>
			</div>
			<div class="row py-2 row-no-margin">
				<div class="col-md-1 col-sm-12"></div>
				<div class="col-md-3 col-sm-12">
					<h3 class="title-footer">EMAILS</h3>
					<ul class="list-unstyled ml-1 ul-footer-emails">
						<li>
							<p class="mb-0">Ventas</p>
							<span>ventas@derkayvargas.com.ar  </span>
						</li>
						<li>
							<p class="mb-0">Plan de Ahorro</p>
							<span>plandeahorro@derkayvargas.com.ar  </span>
						</li>
						<li>
							<p class="mb-0">Administración</p>
							<span>administracion@derkayvargas.com.ar   </span>
						</li>
						<li>
							<p class="mb-0">Gestoría</p>
							<span>gestoria@derkayvargas.com.ar  </span>
						</li>
						<li>
							<p class="mb-0">Posventa Charata</p>
							<span>posventa-charata@derkayvargas.com.ar  </span>
						</li>
						<li>
							<p class="mb-0">Posventa Sáenz Peña</p>
							<span>posventa-sp@derkayvargas.com.ar  </span>
						</li>
						<li>
							<p class="mb-0">Posventa Resistencia</p>
							<span>posventa-resistencia@derkayvargas.com.ar   </span>
						</li>
						<li>
							<p class="mb-0">Responsabilidad Social Empresaria</p>
							<span>rse@derkayvargas.com.ar  </span>
						</li>
					</ul>
				</div>
				<div class="col-md-5 col-sm-12">
					<h3 class="title-footer">SUCURSALES</h3>
					<ul class="list-unstyled ml-1 ul-footer-sucursales visible-md visible-lg">
						<li>
							<p class="mb-0">Casa Central Sáenz Peña - <small> Belgrano Nº 872 (Calle 10 esq. 19)</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i> (0364) 44 - 20602 / 20549 / 20840</span>
						</li>
						<li>
							<p class="mb-0">Sucursal Resistencia - <small> Ruta Nicolas Avellaneda Km. 11,9</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i> (0362)4 - 764840 / 764841 / 764842 / 764844 / 764847 / 764852</span>
						</li>
						<li>
							<p class="mb-0">Sucursal Charata - <small> Ruta 89 Km. 74</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i>  03735 15 620 255</span>
							</li>
						<li>
							<p class="mb-0">Sucursal Villa Angela - <small> Av. 25 de Mayo Nº 1101</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i> (03735) 423 200</span>
						</li>
						<li>
							<p class="mb-0">Sucursal Resistencia Usados - <small> AV. Sarmiento 1890</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i> (0362) 443 330 0</span>
						</li>
						<li>
							<p class="mb-0">Plan de Ahorro Resistencia - <small> AV. Sarmiento 1890</small></p>
							<span class="telefono ml-1"><i class="fa fa-phone"></i> (0362) 443 330 0</span>
						</li>
					</ul>
					
					<ul class="list-unstyled ml-1 ul-footer-sucursales visible-xs visible-sm">
						{{-- <li>
							<span>Casa Central Sáenz Peña</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i> Belgrano Nº 872 (Calle 10 esq. 19)</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i> (0364) 44 - 20602 / 20549 / 20840</a>
						</li>
						<li>
							<span>Sucursal Resistencia</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i> Ruta Nicolas Avellaneda Km. 11,9</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i> (0362) 476 484 0/47</a>
							
						</li>
						<li>
							<span>Sucursal Charata</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i>  Ruta 89 Km. 74</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i>  03735 15 620 255</a>
							</li>
						<li>
							<span>Sucursal Villa Angela</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i> Av. 25 de Mayo Nº 1101</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i> (03735) 423 200</a>
						</li> 
						<li>
							<span>Sucursal Resistencia Usados</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i> AV. Sarmiento 1890</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i> (0362) 443 330 0</a>
						</li>
						<li>
							<span>Plan de Ahorro Resistencia</span>
							<a href="#" class="telefono ml-1"><i class="fa fa-map-marker"></i> AV. Sarmiento 1890</a><br>
							<a href="#" class="telefono ml-1"><i class="fa fa-phone"></i> (0362) 443 330 0</a>
						</li>
						--}}
					</ul>
				</div>
				<div class="col-md-2 col-sm-12">
					{{-- <h3 class="title-footer">HORARIOS DE ATENCIÓN</h3>
					<ul class="list-unstyled ml-1 ul-footer-emails">
						<li><span>Ventas</span>
							 Lunes a Viernes de 8 a 12 & 16 a 20 - Sábados de 8 a 12.30
						</li>
						<li><span>Posventa</span>
							 Lunes a Viernes de 8 a 12 & 15.30 a 19.30 - Sábados de 8 a 12.30
						</li>
					</ul> --}}
					<h3 class="title-footer">SÍGUENOS EN</h3>
					<ul class="list-unstyled list-inline">
						<li class="list-inline-item"><a href="https://www.facebook.com/derkayvargas/" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/derkayvargas/" target="_blank" class="btn btn-instagram"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/derkayvargas?lang=es" target="_blank" class="btn btn-twitter"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
	</section>
	<section style="background: #111; padding: 7px 0; color: #999;">
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="text-center" style="font-size: 15px;color: white">Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2018 - Todos los Derechos Reservados</p>
			</div>
		</div>
		</div>
	</section>
</footer>