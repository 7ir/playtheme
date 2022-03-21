<?php wp_footer(); ?>
    <!-- jQuery library -->
   <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script-->
   <!-- Owl Carousel -->
   <!--script src="http://playcustomtheme.local/wp-content/themes/playtheme/owlcarousel/owl.carousel.min.js"></script-->
    <script>

    jQuery('#owl-carousel-01').owlCarousel({
        autoplay:true,
        autoplayTimeout: 5000,
        smartSpeed: 500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        responsive:{
          0:{
              items:1
          },
        },
    })


    var owl02 = jQuery('#owl-carousel-02');
    jQuery('#owl-carousel-02').owlCarousel({
        callbacks: true,
        smartSpeed: 500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 2000);
      function myCallback() {
          owl02.trigger( 'next.owl.carousel');
      }
    },1000);


    var owl03 = jQuery('#owl-carousel-03');
    jQuery('#owl-carousel-03').owlCarousel({
        callbacks: true,
        smartSpeed: 500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 2000);
      function myCallback() {
          owl03.trigger( 'next.owl.carousel');
      }
    },2000);


    var owl04 = jQuery('#owl-carousel-04');
    jQuery('#owl-carousel-04').owlCarousel({
        callbacks: true,
        smartSpeed: 500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:false,
        responsive:{
          0:{
              items:1
          },
        },
    })
    setTimeout(function(){
      var intervalID = window.setInterval(myCallback, 2000);
      function myCallback() {
          owl04.trigger( 'next.owl.carousel');
      }
    },3000);

    </script>

  </body>
</html>
