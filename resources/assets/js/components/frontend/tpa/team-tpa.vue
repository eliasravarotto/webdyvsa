<template>
	<div class="container">
	    <div class="main-title">
			<h1>Conoce al Staff</h1>
			<p class="text-dark-3">Estamos aquí para asesorarte</p>
		</div>
		<!-- Ventas -->
	    <h3 class="text-muted text-center my-4">Ventas</h3>
	    <div class="owl-carousel owl-carousel-team-tpa">
	        <div v-for="item in teamVentas" class="item">
	            <div class="">
	            <!-- <div class="image-flip" ontouchstart="this.classList.toggle('hover');"> -->
	                <div class="mainflip box-shadow">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center">
	                                <!-- <img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"> -->
	                                <img class=" img-fluid" :src="'/imagenes/tpa/team/'+item.avatar" alt="card image">
	                                <h4 class="card-title">{{ item.nombre }}</h4>
	                                <p class="card-text">{{ item.perfil }} </p>
	                                <!-- <p class="card-text">gabrielrussas@derkayvargas.com.ar</p> -->
	                                <p class="card-text"><i class="fa fa-phone"></i> {{item.telefono}} <i class="fa fa-map-marker ml-1"></i> {{item.sucursal}}</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    <!-- Administracion -->
	    <h3 class="text-muted text-center my-4">Administración</h3>
	    <div class="owl-carousel owl-carousel-team-tpa">
	        <div v-for="item in teamAdmin" class="item" v-if="item.perfil != 'Asesor de Ventas'">
	            <div class="">
	            <!-- <div class="image-flip" ontouchstart="this.classList.toggle('hover');"> -->
	                <div class="mainflip box-shadow">
	                    <div class="frontside">
	                        <div class="card d-flex justify-content-center align-items-center flex-d-col">
	                            <div class="card-body text-center">
	                                <img class=" img-fluid" :src="'/imagenes/tpa/team/'+item.avatar" alt="card image">
	                                <h4 class="card-title">{{ item.nombre }}</h4>
	                                <p class="card-text">{{ item.perfil }}</p>
	                                <!-- <p class="card-text">gabrielrussas@derkayvargas.com.ar</p> -->
	                                <p class="card-text"><i class="fa fa-phone"></i> {{item.telefono}} <i class="fa fa-map-marker ml-1"></i> {{item.sucursal}}</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
	export default {
    	props: ['data'],
        data(){
        	return {
        		teamVentas: [],
        		teamAdmin: [],
        	}
        },
        mounted(){
        	var arrVtas = [];
        	var arrAdmin = [];
        	self = this;
	  		axios
	  			.get('/data/team-tpa.json')
	  			.then(res=>{
	  				res.data.forEach(function(element) {
						if (element.perfil == 'Asesor de Ventas'){
							arrVtas.push(element);
							self.teamVentas = _.orderBy(arrVtas,
	            						['orden'],
	            						['asc']);
						}else{
							arrAdmin.push(element);
							self.teamAdmin = _.orderBy(arrAdmin,
	            						['orden'],
	            						['asc']);
						}		  
					});
	  				this.initCarousel();
	  			});
  		},
		methods:{
			initCarousel(){
				$(document).ready(function(){
					$('.owl-carousel.owl-carousel-team-tpa').owlCarousel({
					      stagePadding: 0,
					      loop:true,
					      margin:15,
					      nav:false,
					      autoplay: true,
					      autoPlaySpeed: 5000,
					      autoPlayTimeout: 5000,
					      autoplayHoverPause: true,
					      pagination: false,
					      dots: false,
					      items : 3,
					      responsive:{
					          0:{
					              items:1
					          },
					          600:{
					              items:2
					          },
					          792:{
					              items:3
					          }
					      }
				  	})
				});
			}
		}
	}
</script>