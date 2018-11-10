<template>
	<div>
    	<div class="navbar-wrapper visible-md visible-lg" v-bind:style="this.styles">
	        <div class="navbar navbar-static-top" v-bind:style="this.background">
	            <div class="navbar-header">
	                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                  <span class="icon-bar"></span>
	                </a>
	                <!-- <a class="navbar-brand" href="#">Bootstrap 3</a>  -->
	            </div>
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="display: flex !important; justify-content: center;">
	              <ul class="nav navbar-nav navbar-ppal fromLeft">
	                <li class="dropdown dropdown-hover">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MODELOS <span class="caret"></span></a>
	                  <ul class="dropdown-menu dropdown-hover">
	                    <li v-for="modelo in modelos">
	                    	<a class="text-uppercase" v-bind:href="'/modelo/'+modelo.nombre">{{ modelo.nombre }}</a>
	                    </li>
	                  </ul>
	                </li>
	                <li><a href="/plan-de-ahorro">PLAN DE AHORRO</a></li>
	                <li><a href="/financiacion">FINANCIACION</a></li>
	                <li><a href="/usados">USADOS</a></li>
	                <li class="dropdown dropdown-hover">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSVENTA <span class="caret"></span></a>
	                  <ul class="dropdown-menu dropdown-hover">
	                    <li><a href="/accesorios">Accesorios</a></li>
	                    <li><a href="/posventa">Servicios Posventa</a></li>
	                    <li role="separator" class="divider"></li>
	                    <li><a href="/turno-servicios/create">Turnos ONLINE</a></li>
	                  </ul>
	                </li>
	                <!-- <li class="dropdown dropdown-hover">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS <span class="caret"></span></a>
	                  <ul class="dropdown-menu dropdown-hover">
	                    <li><a href="#">La Empresa</a></li>
	                    <li><a href="#">Historia</a></li>
	                    <li><a href="#">Misión-Visión-Valores</a></li>
	                  </ul>
	                </li> -->
	                <li class=""><a href="#">CONTACTO</a></li>
	              </ul>
	            </div><!-- /.navbar-collapse -->
	        </div>
    	</div>  
	</div>   
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
                background: '',
                opacity: '',
                position: '',
                styles: '',
                modelos: ''
            }
        },
        mounted() {
            this.data.bg_rgba != null ? this.background = 'background: '+this.data.bg_rgba : '';
            this.position = 'position:'+this.data.position;

            this.styles = this.position+'; '+this.background;

            this.getModelos();

        },
        methods:{
            getModelos(){
            	axios
		          	.get('/modelos')
		          	.then(response => (
		                this.modelos = response.data
	          		))
            }
        },
        computed: {
          
        }
    }
</script>
