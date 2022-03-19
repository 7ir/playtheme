<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- bootstrap hardcoded here -->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"-->
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
