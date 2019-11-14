/***********************************
    1. Slider Principal
    2. Efecto Hover menú principal.
    4. MENU FLOTANTE
    5. INIT OWL CAROUCEL
    6. SCRIPT FACEBOOK FAN PAGE
***********************************/

$(document).ready(function(){
  /*---------------------------------
    1. Slider Principal
  ---------------------------------*/
  $('.carousel').carousel({
      pause: "false"
  });

  /*---------------------------------
    2. Efecto Hover menú principal.
  ---------------------------------*/
  $('.dropdown-hover').hover(
    function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).slideToggle();
    }, 
    function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
    }
  );

  /*--------------------------------
    4. MENU FLOTANTE
  --------------------------------*/
  $( ".menu-toggle" ).click(function() {
    $(".menu-toggle").toggleClass('open');
    $(".menu-round").toggleClass('open');
    $(".menu-line").toggleClass('open');
  });


  /*--------------------------------
    5. INIT OWL CAROUCEL
  --------------------------------*/
  $('.owl-carousel.owl-carousel-modelos').owlCarousel({
      stagePadding: 0,
      loop:true,
      margin:0,
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

/*---------------------------------
  6. SCRIPT FACEBOOK FAN PAGE
----------------------------------*/
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));