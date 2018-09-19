@extends('layout')


@section('styles_sheets')
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('gallery/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('gallery/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('gallery/js/modernizr-2.6.2.min.js') }}"></script>
@stop

@section('content')
<!-- Navbar Desktop -->
<navbar-desk v-bind:data="{ bg_color:'#292828', position: 'relative' }"></navbar-desk>

<article>
	<div class="container">
		<h2>Lista de usados</h2>
			<div id="fh5co-page">
		<div id="fh5co-portfolio-section">
			<div class="container">
				<ul id="filters" class="clearfix animate-box">
					<li><span class="filter active" data-filter=".all">Todos</span></li>
					<li><span class="filter" data-filter=".app">Autos</span></li>
					<li><span class="filter" data-filter=".card">Camionetas</span></li>
					<li><span class="filter" data-filter=".icon">Toyota</span></li>
					<li><span class="filter" data-filter=".logo">Renault</span></li>
					<li><span class="filter" data-filter=".web">Blanco</span></li>
				</ul>
				<div id="portfoliolist" class="animate-box">
					<div class="portfolio all logo thumbnail" data-cat="logo">
						<div class="portfolio-wrapper">				
							{{-- <img src="https://www.toyota.com.ar/showroom/etios-hb/images/banner/Hero_Car_Chapter_Etios_v3.jpg" alt="" /> --}}
							<img src="/imagenes/usado-rav.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Camera</a>
									<span class="text-category">Logo</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
						<div class="caption">
							<h3>Etios 5ptas</h3>
							<a href="" class="btn btn-primary">Consultar</a>
						</div>
					</div>	
								
					<div class="portfolio all card web thumbnail" data-cat="card">
						<div class="portfolio-wrapper">			
							{{-- <img src="https://www.toyota.com.ar/showroom/yaris/images/banner/Yaris_Hero-CC_v6.jpg" alt="" /> --}}
							<img src="/imagenes/usado-hilux.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Card</a>
									<span class="text-category">Card WEB</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
						<div class="caption">
							<h3>Yaris 4ptas</h3>
							<a href="" class="btn btn-primary">Consultar</a>
						</div>
					</div>
					<div class="portfolio all web thumbnail" data-cat="web">
						<div class="portfolio-wrapper">						
							<img src="/imagenes/usado-corolla.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">WEB Sonor's Design</a>
									<span class="text-category">Web design</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
						<div class="caption">
							<h3>Yaris 4ptas</h3>
							<a href="" class="btn btn-primary">Consultar</a>
						</div>
					</div>				
					{{-- 		
					<div class="portfolio all card" data-cat="card">
						<div class="portfolio-wrapper">			
							<img src="https://www.toyota.com.ar/showroom/rav4/images/banner/hero.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Typography Company</a>
									<span class="text-category">Business card</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
					<div class="portfolio all app" data-cat="app">
						<div class="portfolio-wrapper">
							<img src="https://www.toyota.com.ar/showroom/prius/images/banner/Prius_Hero-CC_v3%20(1).jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Weatherette</a>
									<span class="text-category">App</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>			
					<div class="portfolio all card" data-cat="card">
						<div class="portfolio-wrapper">			
							<img src="https://www.toyota.com.ar/showroom/sw4/images/banner/SW4_Hero-CC_v2.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">BMF</a>
									<span class="text-category">Business card</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
					<div class="portfolio all card" data-cat="card">
						<div class="portfolio-wrapper">			
							<img src="https://www.toyota.com.ar/showroom/hilux_sg/images/TOYOTA_BANNER_CARCHAPTER.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Techlion</a>
									<span class="text-category">Business card</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>	
					<div class="portfolio all logo" data-cat="logo">
						<div class="portfolio-wrapper">			
							<img src="https://www.toyota.com.ar/showroom/86/images/banner/86_Hero-CC_v4_b.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">KittyPic</a>
									<span class="text-category">Logo</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div>
					<div class="portfolio all icon" data-cat="icon">
						<div class="portfolio-wrapper">			
							<img src="https://www.toyota.com.ar/showroom/86/images/banner/86_Hero-CC_v4_b.jpg" alt="" />
							<div class="label">
								<div class="label-text">
									<a class="text-title">Domino's Pizza</a>
									<span class="text-category">Icon</span>
								</div>
								<div class="label-bg"></div>
							</div>
						</div>
					</div> --}}																											
				</div>
			</div>
		</div>

		<!-- END fh5co-portfolio-section -->
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section">
						<h2>Our Services</h2>
						<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-heart"></i>
							<div class="holder-section">
								<h3>Crafted With Love</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-laptop"></i>
							<div class="holder-section">
								<h3>Web Developement</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-video"></i>
							<div class="holder-section">
								<h3>Video Editing</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-mobile"></i>
							<div class="holder-section">
								<h3>Mobile Optimization</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-gears"></i>
							<div class="holder-section">
								<h3>Search Engine Optimization</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="fh5co-services text-center">
							<i class="icon-piechart"></i>
							<div class="holder-section">
								<h3>Web Marketing</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End: fh5co-services-section -->
	</div>
	</div>
	
</article>


	
@stop

@section('script')
<!-- jQuery Easing -->
	<script src="/gallery/js/jquery.easing.1.3.js"></script>

	<!-- Waypoints -->
	<script src="/gallery/js/jquery.waypoints.min.js"></script>
	<!-- Portfolio Filter Mixitup -->
	<script type="text/javascript" src="/gallery/js/jquery.mixitup.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="/gallery/js/main.js"></script>

	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.all'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
	});	
	</script>
@stop