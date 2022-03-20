<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- old links, can be deleted -->
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" type="text/css"-->
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
