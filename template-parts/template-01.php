<?php
/*
Template Name: Template 01
Template Post Type: post, page
*/

get_header(); /*?>
  <div class="site-content">
    <?php
    while ( have_posts() ) :

    the_post();
    ?>

    <article <?php post_class(); ?>>

	  <?php the_post_thumbnail( 'my-custom-image-size' ); ?>

      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <div class="entry-content">
*/?>

        <!-- Slider start -->
        <div class="container">
           <div class="row">
              <?php
              /* Test 01 */
              /*$arg = array(
                 'post_type'         => 'slider',
                 'posts_per_page'    => 5,
                 'order'             => 'ASC'
              );
              $slider = new WP_Query($arg);
              $j = 0;
              $post_count = wp_count_posts('slider')->publish;
              */

              /* Test 02 */
              global $post;
              $posts = array( /* WP_Post, WP_Post, ... */);
              
              while (list($i, $post) = each($posts)) :
                  setup_postdata($post);
                  // use the template tags below here
                  if(has_post_thumbnail()):
                      ?><div class="featured_image_wrap"><?php
                          the_post_thumbnail();
                      ?></div><?php
                  endif;
                  the_title();
              endwhile;
              // don't forget to restore the main queried object after the loop!
              wp_reset_postdata();

?>



              <!-- Carousel, Test 01 -->
              <!--div class="owl-carousel">
                 <div class="carousel-inner">
                        <?php while($slider->have_posts()) : $slider->the_post(); ?>
                    <div class="item">
                       <?php if(has_post_thumbnail()): the_post_thumbnail('slider'); endif; ?>
                         <h2>
                            <?php the_title() ?>
                         </h2>
                         <br>
                         <h3>
                            <a href="<?php echo get_post_meta(get_the_ID(),'_slider_link_value_key', true); ?>"><span><?php the_excerpt(); ?></span></a>
                         </h3>
                    </div>
                        <?php $j++; endWhile; wp_reset_query(); ?>
                 </div>
              </div--><!-- /carousel -->




           </div>
        </div>
        <!-- Slider end -->

<?php /*
      </div><!-- .entry-content -->

    </article><!-- #post-## -->

    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;

  endwhile;
	?>
	</div><!-- .site-content -->
<?php
get_sidebar();
get_footer();*/
