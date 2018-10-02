<style type="text/css">
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
}
/* Declare heights because of positioning of img element */
.carousel .item {
  height: 100%;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 400px;
}
.thumbnail-lighten{
  background-color: #fcfeff;
}
.thumbnail-lighten .caption {
    padding: 0px;
}
.thumbnail-lighten .caption p {
    font-size: 15px;
}
.thumbnail-lighten .caption h3 {
        color: #4b4b4b !important;
        font-size: 20px;
        font-weight: 600;
}
/* RESPONSIVE CSS--------------------------------------------------------*/
@media (min-width: 768px) {
  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 80px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }
}
.carousel,.item,.active{height:100%;}
.carousel-inner{height:100%;}
.fill{width:100%;height:100%;background-position:center;background-size:cover;}
/* faster sliding speed */
.carousel-inner > .item {
/*    -webkit-transition: 0.6s ease-in-out left;
    -moz-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left;*/
}

</style>
<template>
<div>
  <div class="fill banner">
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <template v-for="(imagen, index) in imagenes">
          <div v-bind:class="[index == 0 ? activeClass : 'item']">
              <div class="fill" v-bind:style="{ 'background-image': 'url(' + imagen + ')' }">
                <div class="container"></div>
              </div>
          </div>
        </template>
      </div>
    </div>
  </div>
 </div>   
</template>

<script>
    export default {
        data(){
            return {
                imagenes: ["/imagenes/bg1.jpg","/imagenes/bg2.jpg","/imagenes/bg3.jpg"],
                activeClass : 'active item'
            }
        },
        mounted() {
            
        },
        methods:{
            
        },
        computed: {
          
        }
  }
</script>
