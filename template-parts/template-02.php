<?php
/*
Template Name: Template 02
Template Post Type: post, page
*/



//$my_custom_posts = get_posts( $args );


get_header(); ?>
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


        <!-- Slider start -->
        <section id="slider">
          <?php

          /* Get cpt posts */
          $qoutesQuery = new WP_Query( array( 'post_type' => 'slider' ) );
          $qoutesPosts = $qoutesQuery->posts;

          /**
          * Custom function to split arrays into equal parts, by Andrei from https://zerowp.com/
          */
          function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
          {
              $nr = (int)ceil(count($input_array) / $size);
              if ($nr > 0) {
                  return array_chunk($input_array, $nr, $preserve_keys);
              }
              return $input_array;
          }

          /* hub for splitting arrays */
          $splittedArray = splitMyArray($qoutesPosts, 2);
          $splittedArray0 = $splittedArray[0];
          $splittedArray1 = $splittedArray[1];
          do_action('qm/info', array(
            '$splittedArray0'=>$splittedArray0,
            '$splittedArray1'=>$splittedArray1,
          ));


          global $post;
          ?>
          <div id="owl-carousel-01" class="owl-carousel owl-theme"><?php
              foreach($splittedArray0 as $i => $post) {
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
              // don't forget to restore the main queried object after the loop!
              wp_reset_postdata(); ?>
          </div>

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
              // don't forget to restore the main queried object after the loop!
              wp_reset_postdata(); ?>
          </div>


        </section>

        <!-- Slider end -->

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
get_footer();
