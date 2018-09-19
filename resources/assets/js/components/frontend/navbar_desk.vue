<template>
	<div>
    	<div class="navbar-wrapper visible-md visible-lg" v-bind:style="this.position">
	        <div class="navbar navbar-static-top" v-bind:style="this.styles">
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
	                    <li><a href="/modelo">HILUX</a></li>
	                    <li><a href="/modelo">RAV</a></li>
	                    <li><a href="/modelo">COROLLA</a></li>
	                    <li><a href="/modelo">YARIS</a></li>
	                    <li><a href="/modelo">ETIOS</a></li>
	                  </ul>
	                </li>
	                <li><a href="#">PLAN DE AHORRO</a></li>
	                <li><a href="#">FINANCIACION</a></li>
	                <li><a href="#">USADOS</a></li>
	                <li class="dropdown dropdown-hover">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POSVENTA <span class="caret"></span></a>
	                  <ul class="dropdown-menu dropdown-hover">
	                    <li><a href="#">Servicios</a></li>
	                    <li><a href="#">Accesorios</a></li>
	                    <li role="separator" class="divider"></li>
	                    <li><a href="#">Link</a></li>
	                  </ul>
	                </li>
	                <li class="dropdown dropdown-hover">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS <span class="caret"></span></a>
	                  <ul class="dropdown-menu dropdown-hover">
	                    <li><a href="#">La Empresa</a></li>
	                    <li><a href="#">Historia</a></li>
	                    <li><a href="#">Misión-Visión-Valores</a></li>
	                  </ul>
	                </li>
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
                backgroundColor: '',
                position: '',
                styles: ''
            }
        },
        mounted() {
            this.data.bg_color != null ? this.styles = 'background-color:'+this.data.bg_color : '';
            this.position = 'position:'+this.data.position;
        },
        methods:{
            
        },
        computed: {
          
        }
    }
</script>
