<?php wp_footer(); ?>
  <!-- bootstrap hardcoded here -->
  <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script-->

  <!-- from slider tutorial 02 -->
  <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<YOUR_THEME_LINK>/jquery.flexslider-min.js"></script>
  <script type="text/javascript">(function($) {
    $(window).load(function() {
        $('#slider .flexslider').flexslider({
               animation: 'slide',
                slideshowSpeed: 9000,
                animationSpeed: 900,
                pauseOnAction: true,
                pauseOnHover: true,
                controlNav: false,
                directionNav: true,
                controlsContainer: ".flexslider",
        });
    });
  })(jQuery)</script-->

    <!-- from slider tutorial 02 -->
    <!--script src="jquery.min.js"></script-->
    <!--script src="owlcarousel/owl.carousel.min.js"></script-->
    <script>
    jQuery('.owl-carousel').owlCarousel({
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
    </script>

  </body>
</html>
