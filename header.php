<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- bootstrap hardcoded here -->
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"-->
    <!-- from slider tutorial 02 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" type="text/css">
    <!-- from slider tutorial 02 -->
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script-->
    <!-- owl carousel -->
    <!--link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"-->
    <!--script type="text/javascript">(function(jQuery) {
      jQuery(window).load(function() {
          $('#slider .flexslider').flexslider({
                 animation: 'slide',
                  slideshow: true,
                  slideshowSpeed: 3000,
                  animationSpeed: 900,
                  pauseOnAction: true,
                  pauseOnHover: true,
                  controlNav: false,
                  directionNav: true,
                  controlsContainer: ".flexslider",
          });
      });
    })(jQuery)</script-->



    <?php wp_head(); ?>
  </head>

  <body <?php body_class( 'custom-body-class'); ?>>

    <header class="site-header">
    	<p class="site-title">
    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    			<?php bloginfo( 'name' ); ?>
    		</a>
    	</p>
    	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
        ) );
      ?>
    </header><! – .site-header – >
