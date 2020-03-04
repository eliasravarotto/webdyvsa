<template>
    <div>
    	<div class="owl-carousel owl-carousel-ppal owl-theme">
          <a :href="item.url" class="item d-md-none d-lg-none" v-for="item in itemsSm">
            <img  class="img-fluid" :src="item.image.public_path">
          </a>
        </div>
        <div class="owl-carousel owl-carousel-ppal owl-theme">
          <a :href="item.url" class="item d-none d-md-block d-lg-block" v-for="item in itemsMd">
            <img  class="img-fluid" :src="item.image.public_path">
          </a>
        </div>

        <div class="ph-item px-0 py-1 d-none d-md-block d-lg-block" v-if="items == null">
            <div class="ph-col-12">
                <div class="ph-picture b-rad-5" style="height: 300px !important"></div>
            </div>
        </div>

        <div class="ph-item px-0 py-1 d-md-none d-lg-none" v-if="items == null">
            <div class="ph-col-12">
                <div class="ph-picture b-rad-5" style="height: 280px !important"></div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {
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
                    console.log(vm.itemsMd);
                    Vue.nextTick(function(){
                     vm.installOwlCarousel();
                    }.bind(vm));
                })
            },
            installOwlCarousel: function(){
                $('.owl-carousel.owl-carousel-ppal').owlCarousel({
                      stagePadding: 0,
                      loop:true,
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
    .ph-item{
        border:none;
    }
</style>