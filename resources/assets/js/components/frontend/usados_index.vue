<template>
 <div class="galeria-usados">
            <div id="fh5co-portfolio-section">
                <ul id="filters" class="clearfix animate-box">
                    <li><span class="filter active" data-filter=".all">Todos</span></li>
                    <li><span class="filter" data-filter=".auto">Autos</span></li>
                    <li><span class="filter" data-filter=".camioneta">Camionetas</span></li>
                    <li><span class="filter" data-filter=".toyota">Toyota</span></li>
                    <li><span class="filter" data-filter=".renault">Renault</span></li>
                    <li><span class="filter" data-filter=".rojo">Rojo</span></li>
                    <li><span class="filter" data-filter=".gris">Gris</span></li>
                </ul>
                <!-- <div id="portfoliolist" class="animate-box" style="display: flex;flex-direction:row; flex-wrap: wrap;"> -->
                <div id="portfoliolist" class="animate-box row">
                    <div  v-for="unidad in unidades" v-bind:class="' col-md-4 col-sm-12 col-xs-12 portfolio all thumbnail thumbnail-no-bg '+unidad.color+' '+unidad.marca+' '+unidad.tipo " data-cat="logo">
                        <div class="portfolio-wrapper">             
                            <img v-bind:src="unidad.url_imagen " alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Camera</a>
                                    <span class="text-category">Logo</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                        <div class="caption caption-default">
                            <h3>{{ unidad.marca }} {{ unidad.version }} </h3>
                            <hr style="margin-top: 10px; margin-bottom: 10px">
                            <div style="display: flex; justify-content: space-around;">
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
                            <br>
                            <div style="display: flex; justify-content: flex-start; align-items: center;">
                                <a href="#" class="btn btn-danger" v-on:click="openModalContacto(unidad)">Consultar</a>
                                <div style="margin-left: 10px;" class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

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

            <!-- Modal -->
            <div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">CONSULTAR</h4>
                  </div>
                  <div class="modal-body">
                    <h4 class="text-center">
                        {{ dataModalContacto.marca }} - {{ dataModalContacto.modelo }} - {{ dataModalContacto.año }} - {{ dataModalContacto.color }}
                    </h4>
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
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
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
               unidades: [
                            { id:'1', marca: 'TOYOTA', modelo: 'COROLLA', version:'XEI', año:'2016', km:'50.000', color:'rojo', url_imagen:'imagenes/usados/corolla.jpg', tipo:'auto' },
                            { id:'2', marca: 'TOYOTA', modelo: 'COROLLA', version:'XEI', año:'2016', km:'50.000', color:'rojo', url_imagen:'imagenes/usados/hilux.jpg', tipo:'camioneta' },
                            { id:'3', marca: 'TOYOTA', modelo: 'COROLLA', version:'XEI', año:'2016', km:'50.000', color:'negro', url_imagen:'imagenes/usados/rav.jpg', tipo:'auto' },
                            { id:'4', marca: 'renault', modelo: 'Logan', version:'Lg', año:'2016', km:'50.000', color:'negro', url_imagen:'imagenes/usados/rav.jpg', tipo:'auto' },
                            { id:'5', marca: 'Chevrolet', modelo: 'Corsa', version:'cls', año:'2016', km:'50.000', color:'gris', url_imagen:'imagenes/usados/rav.jpg', tipo:'auto' }
                ],
                dataModalContacto : ''

            }
        },
        mounted() {
            
        },
        methods:{
            openModalContacto(unidad)
            {
                $('#contacto').modal('toggle');
                this.dataModalContacto = unidad;
            }
        }
    }
</script>
