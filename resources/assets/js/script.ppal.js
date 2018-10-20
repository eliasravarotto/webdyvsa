$(document).ready(function(){
      //Slider Principal
      $('.carousel').carousel({
          pause: "false"
      });

      //-75 tamaño del header-contacto
      $(".banner").css({"height":($(window).height()-75) + "px"});

      //Efecto Hover menú principal.
      $('.dropdown-hover').hover(
        function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).slideToggle();
        }, 
        function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
        }
      );
});


//---------------------------------SCRIPT FACEBOOK FAN PAGE----------------------------
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
//---------------------------------------------------------------------------------------

//---------------------------------SCRIPT EFECTO CORTINA DOWN-UP-------------------------

    $('.contenedor_tarjeta').mouseenter( function(){
        $('.hover-block' , this).slideDown();
     });
    
    $('.contenedor_tarjeta').mouseleave( function(){
        $('.hover-block' , this).slideUp();
     });
//--------------------------------------------------------------------------------------

//--------------------------------MENU FLOTANTE-----------------------------------------
        $( ".menu-toggle" ).click(function() {
          $(".menu-toggle").toggleClass('open');
          $(".menu-round").toggleClass('open');
          $(".menu-line").toggleClass('open');
        });
//--------------------------------------------------------------------------------------

