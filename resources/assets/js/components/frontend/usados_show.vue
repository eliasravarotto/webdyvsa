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
                    <div class="col-sm-8" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                <img src="/imagenes/usados/camry/1.jpg"></div>

                                <div class="item" data-slide-number="1">
                                <img src="/imagenes/usados/camry/10.jpg"></div>

                                <div class="item" data-slide-number="2">
                                <img src="/imagenes/usados/camry/11.jpg"></div>

                                <div class="item" data-slide-number="3">
                                <img src="/imagenes/usados/camry/12.jpg"></div>

                                <div class="item" data-slide-number="4">
                                <img src="/imagenes/usados/camry/13.jpg"></div>

                                <div class="item" data-slide-number="5">
                                <img src="/imagenes/usados/camry/5.jpg"></div>
                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>                                       
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>                                       
                            </a>                                
                            </div>
                    </div>

                    <div class="col-sm-4" id="carousel-text">
                    	<div>
                    		<label style="font-family:ToyotaFont; font-size: 20px; color: #404048">
                    			{{ unidad.marca }} {{ unidad.modelo }} {{ unidad.version }} 
                    		</label>
                    	</div>
                    	<div style="display: flex; justify-content: space-between;">
                            <div>
                                <label><i class="fa fa-calendar" aria-hidden="true"></i> Año:</label> {{ unidad.año }}
                            </div>
                            <div>
                                <label><i class="fa fa-tachometer" aria-hidden="true"></i> KM:</label> {{ unidad.km }}
                            </div>
                            <div>
                                <label><i class="fa fa-paint-brush" aria-hidden="true"></i> Color:</label> {{ unidad.color }}
                            </div>
                        </div>
                        <div class="well text-justify">
                        	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        	quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                        </div>
                        <a class="btn btn-default btn-block btn-lg" href="">CONSULTAR</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/Slider-->

        <div class="row hidden-xs" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img src="/imagenes/usados/camry/1.jpg"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img src="/imagenes/usados/camry/10.jpg"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="/imagenes/usados/camry/11.jpg"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="/imagenes/usados/camry/12.jpg"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-4"><img src="/imagenes/usados/camry/13.jpg"></a>
                    </li>

                    <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-5"><img src="/imagenes/usados/camry/5.jpg"></a>
                    </li>
                </ul>                 
        </div>

        <div class="row arrow_box"></div>

        <div class="row mar-top">
        	<div class="col-md-7 col-xs-12 col-sm-12">
                <h2>CONSULTAR</h2>
                <form>
                    <label>Email o Telefono</label>
                    <input class="form-control" type="text" name="">
                    <label>Mensaje</label>
                    <textarea class="form-control"></textarea>
                </form>
                <br>
                <div class="alert alert-info" role="alert">
                    <p>Estaremos en contacto a la brevedad.</p>
                </div>
                <div>
                	<a class="btn btn-default" href="">Enviar</a>
                </div>
        	</div>
        	<div class="col-md-5 col-xs-12 col-sm-12"></div>
        </div>

	</div>
</template>

<script>
    export default {
    	props: ['data'],
        data(){
            return {
            	unidad: {marca:'TOYOTA', modelo:'COROLLA', version:'XEI',año: '2015', km:'25.000', color:'negro',
                        imagenes:[
                                {
                                    url: '',
                                    url: '',
                                    url: '',
                                    url: '',
                                }
                        ]
                }
            }
        },
        mounted() {
            this.initJS();
        },
        methods:{
            openModalContacto(unidad)
            {
                $('#contacto').modal('toggle');
                this.dataModalContacto = unidad;
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
			
            }
        }
    }
</script>
