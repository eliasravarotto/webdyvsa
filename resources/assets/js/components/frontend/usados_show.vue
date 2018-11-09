<style type="text/css">
	.hide-bullets {
list-style:none;
margin-left: -40px;
margin-top:20px;
}
</style>
<template>
	<div>
		<!-- Slider -->
        <div class="row">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-7" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div v-for="(imagen, index) in imagenes" :class="index == 0 ? 'active item' : 'item'" :data-slide-number="index">
                                    <img :src="imagen.url">
                                </div>

                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>                                       
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>                                       
                            </a>                                
                        </div>
                    </div>

                    <div class="col-sm-5" id="carousel-text">
                    	<div>
                    		<label class="text-uppercase" style="font-family:ToyotaFont; font-size: 25px; color: #404048">
                    			{{ unidad.marca }} {{ unidad.modelo }} {{ unidad.version }} 
                    		</label>
                    	</div>
                    	<div style="display: flex; justify-content: space-between; font-size: 18px;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> {{ unidad.anio }}
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> {{ unidad.km }}
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> {{ unidad.color }}
                            </div>
                        </div>
                        <div class="well text-justify">
                        	<p>{{unidad.descripcion}}</p>
                        </div>
                        <a class="btn btn-default btn-block btn-lg" href="">CONSULTAR</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Slider-->
        <div class="row hidden-xs" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets" style="display: flex; justify-content: center;">
                <li v-for="(imagen, index) in imagenes" class="col-sm-2">
                    <a class="thumbnail hand" :id="'carousel-selector-'+index"><img :src="imagen.url" v-on:click="showImage(imagen)"></a>
                </li>
            </ul>                 
        </div>

        <!-- The Modal ------------------------------->
        <div id="moda_show_imagen" class="modal-img">
            <!-- The Close Button -->
            <span class="close-on-click">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01" src="#">
        </div>

        <div class="row arrow_box"></div>

        <div class="row" style="margin-top: 100px;">
            <div class="col-md-6 col-sm-12 col-xs-12 well">
                <h3 class="text-center">Consultar por <span class="text-uppercase">{{unidad.marca}} {{unidad.modelo}} {{unidad.color}}</span></h3>
                <form>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <label>Nombre</label>
                            <input class="form-control" type="text" name="nombre" v-model="form.nombre" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <label>Teléfono</label>
                            <input class="form-control" type="email" name="telefono" v-model="form.telefono">
                        </div>
                            
                        <div class="col-md-6 col-xs-12 col-sm-12">
                            <label>Email</label> (opcional)
                            <input class="form-control" type="email" name="email" v-model="form.email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <label>Mensaje</label>
                            <textarea class="form-control" v-model="form.mensaje"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <a  class="btn btn-danger" v-on:click.prevent="enviarConsulta()">ENVIAR</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <div class="text-right">
                            <p style="font-size: 20px; font-weight: bold;">También podes enviarnos tu consulta vía Whatsapp</p>
                            <b style="font-size: 25px;">3625-123456</b>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <div>
                            <img src="/imagenes/icons/whatsapp-icon.png" style="height: 75px;">                             
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
            	unidad: '',
                imagenes:'',
                form:{
                    nombre:'',
                    email: '',
                    telefono:'',
                    mensaje:'',
                }
                }
        },
        mounted() {
            this.initJS();
            this.unidad = this.data.unidad;
            this.imagenes = this.data.imagenes;
        },
        methods:{
            openModalContacto(unidad)
            {
                $('#contacto').modal('toggle');
                this.dataModalContacto = unidad;
            },
            showImage(img){
                // Get the modal
                var modal = document.getElementById('moda_show_imagen');
                // Get the image and insert it inside the modal - use its "alt" text as a caption
                //var img = document.getElementById('myImg');
                var modalImg = document.getElementById("img01");
                modalImg.src = img.url;
                modal.style.display = "flex";
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close-on-click")[0];
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                    $("#moda_show_imagen").fadeOut()
                }
            },
            initJS()
            {
            	//SRC https://bootsnipp.com/snippets/featured/carousel-extended-320-compatible
		        $('#myCarousel').carousel({
		                interval: 5000
		        });

		       $('[id^=carousel-selector-]').click( function(){
		            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
		            var id = parseInt(id);
		            $('#myCarousel').carousel(id);
		        });
		 
		        //$('#carousel-text').html($('#slide-content-0').html());
		 
		        // When the carousel slides, auto update the text
		        // $('#myCarousel').on('slid.bs.carousel', function (e) {
		        //          var id = $('.item.active').data('slide-number');
		        //         $('#carousel-text').html($('#slide-content-'+id).html());
		        // });
			
            },
            enviarConsulta()
            {
                axios.post('/consultar/usado/'+this.unidad.id, {
                    nombre: this.form.nombre,
                    telefono: this.form.telefono,
                    email: this.form.email,
                    mensaje: this.form.mensaje,
                    marca: this.unidad.marca,
                    modelo: this.unidad.modelo,
                  })
                  .then(function (response) {
                    console.log(response);
                    this.form.nombre = '';
                    this.form.telefono = '';
                    this.form.email = '';
                    this.form.mensaje = '';

                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }
        }
    }
</script>
