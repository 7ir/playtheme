<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
