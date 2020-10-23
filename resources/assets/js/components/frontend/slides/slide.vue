<template>
  <div>
    <div class="d-md-none d-lg-none">
        <div class="owl-carousel owl-carousel-ppal owl-theme">
          <a :href="item.url" class="item d-md-none d-lg-none" v-for="item in itemsSm">
            <img  class="img-fluid" v-lazy="item.image.public_path">
          </a>
        </div>
    </div>

    <div class="d-none d-md-block d-lg-block">
      <div class="owl-carousel owl-carousel-ppal owl-theme owl-desktop">
        <a :href="item.url" class="item d-none d-md-block d-lg-block" v-for="item in itemsMd">
          <img  class="img-fluid" v-lazy="item.image.public_path">
        </a>
      </div>
    </div>
  </div>
</template>

<script>
  import VueLazyLoad from 'vue-lazyload'
  Vue.use(VueLazyLoad)
	export default {
      components: {
          VueLazyLoad,
      },
    	props: ['data'],
        data(){
        	return {
        		items: null,
                itemsSm: [],
                itemsMd: [],
        	}
        },
        mounted(){
        	//this.items = this.data.items;
            this.getDataSlide(this.data.slide_id);
          
        },
        methods:{
            getDataSlide(slide_id){
                var vm = this;
                axios
                .get('/slide_get_data/'+slide_id)
                .then(res => {
                    vm.items = res.data.items;

                    vm.items.forEach(item => {
                        if (item.size == 'SM')
                            vm.itemsSm.push(item);
                        if (item.size == 'MD')
                            vm.itemsMd.push(item);
                    });
                    Vue.nextTick(function(){
                     vm.installOwlCarousel();
                    }.bind(vm));
                    console.log(vm.itemsSm);
                })
            },
            installOwlCarousel: function(){
                $(".loading-slider-sm").remove();
                $(".loading-slider-md").remove();
                $('.owl-carousel.owl-carousel-ppal').owlCarousel({
                      stagePadding: 0,
                      loop:false,
                      margin:7,
                      nav:false,
                      autoplay: true,
                      autoPlaySpeed: 5000,
                      autoPlayTimeout: 5000,
                      autoplayHoverPause: true,
                      pagination: false,
                      dots: false,
                      items : 1,
                })    
             },
        }
    }
</script>

<style type="text/css" scoped>
    .owl-carousel.owl-carousel-ppal {
        padding-top: 3px;
    }
    .b-rad-5{
        border-radius: 5px;
    }


    /**********************
        LOADING
    **********************/
        .lds-ellipsis {
          display: flex;
          align-items: center;
          position: relative;
          width: 80px;
          height: 55px;
        }
        .lds-ellipsis div {
          position: absolute;
          /*top: 33px;*/
          width: 13px;
          height: 13px;
          border-radius: 50%;
          background: #fdd;
          animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }
        .lds-ellipsis div:nth-child(1) {
          left: 8px;
          animation: lds-ellipsis1 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(2) {
          left: 8px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(3) {
          left: 32px;
          animation: lds-ellipsis2 0.6s infinite;
        }
        .lds-ellipsis div:nth-child(4) {
          left: 56px;
          animation: lds-ellipsis3 0.6s infinite;
        }
        @keyframes lds-ellipsis1 {
          0% {
            transform: scale(0);
          }
          100% {
            transform: scale(1);
          }
        }
        @keyframes lds-ellipsis3 {
          0% {
            transform: scale(1);
          }
          100% {
            transform: scale(0);
          }
        }
        @keyframes lds-ellipsis2 {
          0% {
            transform: translate(0, 0);
          }
          100% {
            transform: translate(24px, 0);
          }
        }
    /*** end LOADING ***/
</style>