<?php wp_footer(); ?>
    <!-- Owl Carousel -->
    <script>
    jQuery('#owl-carousel-01').owlCarousel({
        autoplay:true,
        autoplayTimeout: 2000,
        smartSpeed: 500,
        loop:true,
        margin:10,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:true,
        responsive:{
          0:{
              items:1
          },
        },
    })


    setTimeout(function(){

      jQuery('#owl-carousel-02').owlCarousel({
          autoplay:true,
          autoplayTimeout: 2000,
          smartSpeed: 500,
          loop:true,
          margin:10,
          animateIn: 'fadeIn',
          animateOut: 'fadeOut',
          nav:true,
          responsive:{
            0:{
                items:1
            },
          },
      })

    },2000);


    </script>

  </body>
</html>
