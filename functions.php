<?php

register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'my-custom-theme' ),
));

function my_custom_theme_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
        'id'   => 'sidebar-1',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'my-custom-image-size', 640, 999 );

function my_custom_theme_enqueue() {
    wp_enqueue_style( 'my-custom-theme', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue' );

add_theme_support( 'title-tag' );



/**
 * Include Owl Carouse CSS and JS
 */
function owlcarousel_enqueue_scripts() {

  wp_enqueue_style( 'my-style-owl-carousel-min-css', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.css');
  wp_enqueue_style( 'my-style-owl-theme-default-min-css', get_template_directory_uri() . '/owlcarousel/owl.theme.default.min.css');
  wp_enqueue_style( 'my-custom-style-css', get_template_directory_uri() . '/custom-style.css');

  // Did not load on frontend when loading these files from here.
  //wp_enqueue_script('my-script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
  //wp_enqueue_script('my-script-owl-carousel-min-js', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js' );

}
add_action('wp_enqueue_scripts', 'owlcarousel_enqueue_scripts');



/**
 * Add featured Image Support
 */
function cih_theme_support(){

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slider_image','64','64',true);

}
add_action('after_setup_theme','cih_theme_support');



/**
 * ##########################################################
 *   Slider
 * ##########################################################
 */

add_shortcode( 'sldr-shrtcde-01' , 'sldr_shrtcde_shortcode_callback_01');
if( ! function_exists('sldr_shrtcde_shortcode_callback_01') ){
  function sldr_shrtcde_shortcode_callback_01(){

    global $post;
    $n = 4;
    $m = 2;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $valueArray = array();


    if( ! wp_is_mobile()) {

      foreach (array_keys($qoutesPosts) as $i => $key) {
          if (($i+1) % $n) {
              continue;
          }

          $value = $qoutesPosts[$key];
          array_push($valueArray, $value);
      }

      $s1 = '';
      $s1 = '<div id="owl-carousel-01" class="owl-carousel owl-theme">';
      if($valueArray){
        foreach($valueArray as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
          $thePostQoute = get_field('qoute');
          $thePostTitle = get_the_title();
          $s1 .= '<div class="item">';
            if(has_post_thumbnail() ):
                $s1 .= '<div class="featured_image_wrap">';
                  $s1 .= '<img src="'.$thePostThumbnail.'"/>';
                $s1 .= '</div>';
            endif;
            $s1 .= '<p class=”post_qoute">';
              $s1 .= $thePostQoute;
            $s1 .= '</p>';
            $s1 .= '<h4 class=”post_title">';
              $s1 .= $thePostTitle;
            $s1 .= '</h4>';
          $s1 .= '</div>';
        }
      };
      wp_reset_postdata();
      $s1 .= '</div>';

      return $s1;

    } else {

      foreach (array_keys($qoutesPosts) as $i => $key) {
          if (($i+1) % $m) {
              continue;
          }

          $value = $qoutesPosts[$key];
          array_push($valueArray, $value);
      }

      $s1 = '';
      $s1 = '<div id="owl-carousel-01" class="owl-carousel owl-theme">';
      if($valueArray){
        foreach($valueArray as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
          $thePostQoute = get_field('qoute');
          $thePostTitle = get_the_title();
          $s1 .= '<div class="item">';
            if(has_post_thumbnail() ):
                $s1 .= '<div class="featured_image_wrap">';
                  $s1 .= '<img src="'.$thePostThumbnail.'"/>';
                $s1 .= '</div>';
            endif;
            $s1 .= '<p class=”post_qoute">';
              $s1 .= $thePostQoute;
            $s1 .= '</p>';
            $s1 .= '<h4 class=”post_title">';
              $s1 .= $thePostTitle;
            $s1 .= '</h4>';
          $s1 .= '</div>';
        }
      };
      wp_reset_postdata();
      $s1 .= '</div>';

      return $s1;
    }

  }
}


add_shortcode( 'sldr-shrtcde-02' , 'sldr_shrtcde_shortcode_callback_02');
if( ! function_exists('sldr_shrtcde_shortcode_callback_02') ){
  function sldr_shrtcde_shortcode_callback_02(){

    global $post;
    $n = 4;
    $m = 2;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $valueArray = array();


    if( ! wp_is_mobile()) {

      foreach (array_keys($qoutesPosts) as $i => $key) {
          $i++;
          if (($i+1) % $n) {
              continue;
          }

          $value = $qoutesPosts[$key];
          array_push($valueArray, $value);
      }


      $s2 = '';
      $s2 = '<div id="owl-carousel-02" class="owl-carousel owl-theme">';
      if($valueArray){
        foreach($valueArray as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
          $thePostQoute = get_field('qoute');
          $thePostTitle = get_the_title();
          $s2 .= '<div class="item">';
            if(has_post_thumbnail() ):
                $s2 .= '<div class="featured_image_wrap">';
                  $s2 .= '<img src="'.$thePostThumbnail.'"/>';
                $s2 .= '</div>';
            endif;
            $s2 .= '<p class=”post_qoute">';
              $s2 .= $thePostQoute;
            $s2 .= '</p>';
            $s2 .= '<h4 class=”post_title">';
              $s2 .= $thePostTitle;
            $s2 .= '</h4>';
          $s2 .= '</div>';
        }
      };
      wp_reset_postdata();
      $s2 .= '</div>';

      return $s2;

    } else {

      foreach (array_keys($qoutesPosts) as $i => $key) {
          $i++;
          if (($i+1) % $m) {
              continue;
          }

          $value = $qoutesPosts[$key];
          array_push($valueArray, $value);
      }


      $s2 = '';
      $s2 = '<div id="owl-carousel-02" class="owl-carousel owl-theme">';
      if($valueArray){
        foreach($valueArray as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
          $thePostQoute = get_field('qoute');
          $thePostTitle = get_the_title();
          $s2 .= '<div class="item">';
            if(has_post_thumbnail() ):
                $s2 .= '<div class="featured_image_wrap">';
                  $s2 .= '<img src="'.$thePostThumbnail.'"/>';
                $s2 .= '</div>';
            endif;
            $s2 .= '<p class=”post_qoute">';
              $s2 .= $thePostQoute;
            $s2 .= '</p>';
            $s2 .= '<h4 class=”post_title">';
              $s2 .= $thePostTitle;
            $s2 .= '</h4>';
          $s2 .= '</div>';
        }
      };
      wp_reset_postdata();
      $s2 .= '</div>';

      return $s2;
    }

  }
}


add_shortcode( 'sldr-shrtcde-03' , 'sldr_shrtcde_shortcode_callback_03');
if( ! function_exists('sldr_shrtcde_shortcode_callback_03') ){
  function sldr_shrtcde_shortcode_callback_03(){

    global $post;
    $n = 4;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $valueArray = array();


    foreach (array_keys($qoutesPosts) as $i => $key) {
        $i+=2;
        if (($i+1) % $n) {
            continue;
        }

        $value = $qoutesPosts[$key];
        array_push($valueArray, $value);
    }

    $s3 = '';
    $s3 = '<div id="owl-carousel-03" class="owl-carousel owl-theme">';
    if($valueArray){
      foreach($valueArray as $i => $post) {
        setup_postdata($post);
        $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
        $thePostQoute = get_field('qoute');
        $thePostTitle = get_the_title();
        $s3 .= '<div class="item">';
          if(has_post_thumbnail() ):
              $s3 .= '<div class="featured_image_wrap">';
                $s3 .= '<img src="'.$thePostThumbnail.'"/>';
              $s3 .= '</div>';
          endif;
          $s3 .= '<p class=”post_qoute">';
            $s3 .= $thePostQoute;
          $s3 .= '</p>';
          $s3 .= '<h4 class=”post_title">';
            $s3 .= $thePostTitle;
          $s3 .= '</h4>';
        $s3 .= '</div>';
      }
    };
    wp_reset_postdata();
    $s3 .= '</div>';

    return $s3;

  }
}


add_shortcode( 'sldr-shrtcde-04' , 'sldr_shrtcde_shortcode_callback_04');
if( ! function_exists('sldr_shrtcde_shortcode_callback_04') ){
  function sldr_shrtcde_shortcode_callback_04(){

    global $post;
    $n = 4;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $valueArray = array();


    foreach (array_keys($qoutesPosts) as $i => $key) {
        $i+=3;
        if (($i+1) % $n) {
            continue;
        }

        $value = $qoutesPosts[$key];
        array_push($valueArray, $value);
    }


    $s4 = '';
    $s4 = '<div id="owl-carousel-04" class="owl-carousel owl-theme">';
    if($valueArray){
      foreach($valueArray as $i => $post) {
        setup_postdata($post);
        $thePostThumbnail = get_the_post_thumbnail_url( $post ,'slider_image');
        $thePostQoute = get_field('qoute');
        $thePostTitle = get_the_title();
        $s4 .= '<div class="item">';
          if(has_post_thumbnail() ):
              $s4 .= '<div class="featured_image_wrap">';
                $s4 .= '<img src="'.$thePostThumbnail.'"/>';
              $s4 .= '</div>';
          endif;
          $s4 .= '<p class=”post_qoute">';
            $s4 .= $thePostQoute;
          $s4 .= '</p>';
          $s4 .= '<h4 class=”post_title">';
            $s4 .= $thePostTitle;
          $s4 .= '</h4>';
        $s4 .= '</div>';
      }
    }
    wp_reset_postdata();
    $s4 .= '</div>';

    return $s4;
  }
}


/**
 * ##########################################################
 */
