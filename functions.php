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
function create_slider_post_type() {

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
add_action( 'init', 'create_slider_post_type' );

/**
 * Remove Slug support from custom post type
 */
add_action( 'init', function() {
    remove_post_type_support( 'slider', 'editor' );
    remove_post_type_support( 'slider', 'slug' );
} );

/**
 * Add featured Image Support
 */
 function cih_theme_support(){

   add_theme_support( 'post-thumbnails' );
   add_image_size( 'slider_image','1024','720',true);

}
add_action('after_setup_theme','cih_theme_support');

/**
 * Add Link Field Creating Custom Meta-Box Field in WordPress Admin
 */
function sliderLink_add_meta_box() {
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








//Adding shortcode action hook
add_shortcode( 'hakuna-matata' , 'hakuna_matata_shortcode_callback');
//Shortcode Callback function
if( ! function_exists('hakuna_matata_shortcode_callback') ){
  function hakuna_matata_shortcode_callback(){


    /* Get cpt posts */
    $qoutesQuery = new WP_Query( array( 'post_type' => 'slider' ) );
    $qoutesPosts = $qoutesQuery->posts;

    /* Custom function to split arrays into equal parts, by Andrei from https://zerowp.com/ */
    function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
    {
        $nr = (int)ceil(count($input_array) / $size);
        if ($nr > 0) {
            return array_chunk($input_array, $nr, $preserve_keys);
        }
        return $input_array;
    }

    /* hub for splitting arrays */
    $splittedArray = splitMyArray($qoutesPosts, 4);
    $splittedArray0 = $splittedArray[0];
    $splittedArray1 = $splittedArray[1];
    $splittedArray2 = $splittedArray[2];
    $splittedArray3 = $splittedArray[3];
    /*do_action('qm/info', array(
      '$splittedArray0'=>$splittedArray0,
      '$splittedArray1'=>$splittedArray1,
      '$splittedArray2'=>$splittedArray2,
      '$splittedArray3'=>$splittedArray3,
    ));*/


    //$post = get_option('post');
    global $post;


    $firstSlider = '';
    foreach($splittedArray0 as $i => $post) {
        setup_postdata($post);
        $firstSlider .= '<div class="item">';
        /*$firstSlider_02 = '<?php
          if(has_post_thumbnail()):
              ?><div class="featured_image_wrap"><?php
                  the_post_thumbnail();
              ?></div><?php
          endif;
          ?>
          <h4 class=”post_title <?php the_title(); ?>”>
            <?php the_title(); ?>
          </h4>
        </div>';*/
        $firstSlider .= '</div>';
    };


    do_action('qm/info', $firstSlider );

   return $firstSlider;
    /*return '
  <!-- Slider start -->
  <section id="zlider" class="grid">


    <div>1</div>

    <div>
    <div id="owl-carousel-01" class="owl-carousel owl-theme"><?php
        $firstSlider
        wp_reset_postdata(); ?>
    </div>
    </div>

    <div>3</div>

    <div>
    <div id="owl-carousel-02" class="owl-carousel owl-theme"><?php
        foreach($splittedArray1 as $i => $post) {
            setup_postdata($post);
            ?>
            <div class="item"><?php
              // use the template tags below here
              if(has_post_thumbnail()):
                  ?><div class="featured_image_wrap"><?php
                      the_post_thumbnail();
                  ?></div><?php
              endif;
              ?>
              <h4 class=”post_title <?php the_title(); ?>”>
                <?php the_title(); ?>
              </h4>
            </div>
            <?php
        };
        wp_reset_postdata(); ?>
    </div>
    </div>

    <div>5</div>

    <div>
    <div id="owl-carousel-03" class="owl-carousel owl-theme"><?php
        foreach($splittedArray2 as $i => $post) {
            setup_postdata($post);
            ?>
            <div class="item"><?php
              // use the template tags below here
              if(has_post_thumbnail()):
                  ?><div class="featured_image_wrap"><?php
                      the_post_thumbnail();
                  ?></div><?php
              endif;
              ?>
              <h4 class=”post_title <?php the_title(); ?>”>
                <?php the_title(); ?>
              </h4>
            </div>
            <?php
        };
        wp_reset_postdata(); ?>
    </div>
    </div>

    <div>7</div>

    <div>
    <div id="owl-carousel-04" class="owl-carousel owl-theme"><?php
        foreach($splittedArray3 as $i => $post) {
            setup_postdata($post);
            ?>
            <div class="item"><?php
              // use the template tags below here
              if(has_post_thumbnail()):
                  ?><div class="featured_image_wrap"><?php
                      the_post_thumbnail();
                  ?></div><?php
              endif;
              ?>
              <h4 class=”post_title <?php the_title(); ?>”>
                <?php the_title(); ?>
              </h4>
            </div>
            <?php
        };
        wp_reset_postdata(); ?>
    </div>
    </div>

    <div>9</div>

  </section> <!-- Slider end -->

  ';*/
  }
}






/**
 * ##########################################################
 */
