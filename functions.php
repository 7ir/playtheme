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
 * ##########################################################
 *   Slider
 * ##########################################################
 */


/**
 * Include Owl Carouse CSS and JS
 */
function owlcarousel_enqueue_scripts() {
  wp_enqueue_style( 'my-style-owl-carousel-min-css', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.css');
  wp_enqueue_style( 'my-style-owl-theme-default-min-css', get_template_directory_uri() . '/owlcarousel/owl.theme.default.min.css');
  wp_enqueue_style( 'my-custom-style-css', get_template_directory_uri() . '/custom-style.css');

  wp_enqueue_script('my-script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
  wp_enqueue_script('my-script-owl-carousel-min-js', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js' );
}
add_action('wp_enqueue_scripts', 'owlcarousel_enqueue_scripts');




/**
 * Create Custom Post Type for Slideres
 */
/*function create_slider_post_type() {

	$labels = array(
		'name' => __( 'Sliders' ),
		'singular_name' => __( 'Sliders' ),
		'all_items'           => __( 'All Sliders' ),
		'view_item'           => __( 'View Slider' ),
		'add_new_item'        => __( 'Add New Slider' ),
		'add_new'             => __( 'Add New Slider' ),
		'edit_item'           => __( 'Edit Slider' ),
		'update_item'         => __( 'Update Slider' ),
		'search_items'        => __( 'Search Slider' ),
		'search_items' => __('Sliders')
	);

	$args = array(
		'labels' => $labels,
		'description' => 'Add New Slider contents',
		'menu_position' => 27,
		'public' => true,
		'has_archive' => true,
		'map_meta_cap' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'rewrite' => array('slug' => false),
		'menu_icon'=>'dashicons-format-image',
		'supports' => array(
			'title',
			'thumbnail','excerpt'
		),
	);
	register_post_type( 'slider', $args);

}
add_action( 'init', 'create_slider_post_type' );*/

/**
 * Remove Slug support from custom post type
 *//*
add_action( 'init', function() {
    remove_post_type_support( 'slider', 'editor' );
    remove_post_type_support( 'slider', 'slug' );
} );*/


/**
 * Add featured Image Support
 */
/*function cih_theme_support(){

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slider_image','1024','720',true);

}
add_action('after_setup_theme','cih_theme_support');*/

/**
 * Add Link Field Creating Custom Meta-Box Field in WordPress Admin
 */
/*function sliderLink_add_meta_box() {
   add_meta_box('slider_link','Slider Link','slider_link_callback','slider');
}
function qouteText_add_meta_box() {
   add_meta_box('qoute_text','Qoute text','qoute_text_callback','slider');
}

function slider_link_callback( $post ) {

   wp_nonce_field('slider_link_save','slider_link_meta_box_nonce');
   $value = get_post_meta($post->ID,'_slider_link_value_key',true);
   ?>
    <input type="text" name="slider_link_field" id="slider_link_field" value="<?php echo esc_attr( $value ); ?>" required="required" size="100" />
   <?php
}
add_action('add_meta_boxes','sliderLink_add_meta_box');


function qoute_text_callback( $post ) {

   wp_nonce_field('qoute_text_save','qoute_text_meta_box_nonce');
   $value = get_post_meta($post->ID,'_qoute_text_value_key',true);
   ?>
    <input type="text" name="qoute_text_field" id="qoute_text_field" value="<?php echo esc_attr( $value ); ?>" required="required" size="100" />
   <?php
}
add_action('add_meta_boxes','qouteText_add_meta_box');
*/

/*
function slider_link_save( $post_id ) {
   if( ! isset($_POST['slider_link_meta_box_nonce'])) {
      return;
   }
   if( ! wp_verify_nonce( $_POST['slider_link_meta_box_nonce'], 'slider_link_save') ) {
      return;
   }
   if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
      return;
   }
   if( ! current_user_can('edit_post', $post_id)) {
      return;
   }
   if( ! isset($_POST['slider_link_field'])) {
      return;
   }
   $slider_link = sanitize_text_field($_POST['slider_link_field']);
   update_post_meta( $post_id,'_slider_link_value_key', $slider_link );
}
add_action('save_post','slider_link_save');


function qoute_text_save( $post_id ) {
   if( ! isset($_POST['qoute_text_meta_box_nonce'])) {
      return;
   }
   if( ! wp_verify_nonce( $_POST['qoute_text_meta_box_nonce'], 'qoute_text_save') ) {
      return;
   }
   if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
      return;
   }
   if( ! current_user_can('edit_post', $post_id)) {
      return;
   }
   if( ! isset($_POST['qoute_text_field'])) {
      return;
   }
   $qoute_text = sanitize_text_field($_POST['qoute_text_field']);
   update_post_meta( $post_id,'_qoute_text_value_key', $qoute_text );
}
add_action('save_post','qoute_text_save');
*/








function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
{
    $nr = (int)ceil(count($input_array) / $size);
    if ($nr > 0) {
        return array_chunk($input_array, $nr, $preserve_keys);
    }
    return $input_array;
}





add_shortcode( 'hakuna-matata-01' , 'hakuna_matata_shortcode_callback_01');
if( ! function_exists('hakuna_matata_shortcode_callback_01') ){
  function hakuna_matata_shortcode_callback_01(){

    global $post;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $splittedArray = splitMyArray($qoutesPosts, 4);
    $splittedArray0 = $splittedArray[0];

    $s1 = '';
    $s1 = '<div id="owl-carousel-01" class="owl-carousel owl-theme">';
      foreach($splittedArray0 as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'thumbnail');
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
      };
      wp_reset_postdata();
    $s1 .= '</div>';

    return $s1;
  }
}



add_shortcode( 'hakuna-matata-02' , 'hakuna_matata_shortcode_callback_02');
if( ! function_exists('hakuna_matata_shortcode_callback_02') ){
  function hakuna_matata_shortcode_callback_02(){

    global $post;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $splittedArray = splitMyArray($qoutesPosts, 4);
    $splittedArray1 = $splittedArray[1];

    $s2 = '';
    $s2 = '<div id="owl-carousel-02" class="owl-carousel owl-theme">';
      foreach($splittedArray1 as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'thumbnail');
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
      };
      wp_reset_postdata();
    $s2 .= '</div>';

    return $s2;
  }
}


add_shortcode( 'hakuna-matata-03' , 'hakuna_matata_shortcode_callback_03');
if( ! function_exists('hakuna_matata_shortcode_callback_03') ){
  function hakuna_matata_shortcode_callback_03(){

    global $post;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $splittedArray = splitMyArray($qoutesPosts, 4);
    $splittedArray2 = $splittedArray[2];

    $s3 = '';
    $s3 = '<div id="owl-carousel-03" class="owl-carousel owl-theme">';
      foreach($splittedArray2 as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'thumbnail');
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
      };
      wp_reset_postdata();
    $s3 .= '</div>';

    return $s3;
  }
}

add_shortcode( 'hakuna-matata-04' , 'hakuna_matata_shortcode_callback_04');
if( ! function_exists('hakuna_matata_shortcode_callback_04') ){
  function hakuna_matata_shortcode_callback_04(){

    global $post;

    $qoutesQuery = new WP_Query( array( 'post_type' => 'qoutes' ) );
    $qoutesPosts = $qoutesQuery->posts;

    $splittedArray = splitMyArray($qoutesPosts, 4);
    $splittedArray3 = $splittedArray[3];

    $s4 = '';
    $s4 = '<div id="owl-carousel-04" class="owl-carousel owl-theme">';
      foreach($splittedArray3 as $i => $post) {
          setup_postdata($post);
          $thePostThumbnail = get_the_post_thumbnail_url( $post ,'thumbnail');
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
      };
      wp_reset_postdata();
    $s4 .= '</div>';

    return $s4;
  }
}




/**
 * ##########################################################
 */
