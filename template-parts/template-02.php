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

          $args = array(
            'post_type' => 'slider',
            //'posts_per_page' => -1,
          );

          $my_posts = get_posts($args);
          echo $my_posts;

          function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
          {
              $nr = (int)ceil(count($input_array) / $size);

              if ($nr > 0) {
                  return array_chunk($input_array, $nr, $preserve_keys);
              }

              return $input_array;
          }


          echo esc_html( $my_custom_posts );



          ?>

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
