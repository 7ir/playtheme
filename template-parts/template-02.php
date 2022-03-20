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

          /*$args = array(
            'post_type' => 'slider',
            'posts_per_page' => -1,
          );

          $my_posts = get_posts($args);*/

          // trying something diffrent
          $query = new WP_Query( array( 'post_type' => 'slider' ) );
          $posts = $query->posts;
          do_action('qm/info', $query);
          do_action('qm/info', $posts);

          /*foreach($posts as $post) {
              // Do your stuff, e.g.
              // echo $post->post_name;
          }*/









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


          $splittedArray = splitMyArray($posts, 2);
          do_action('qm/info', $splittedArray );
          $splittedArray0 = $splittedArray[0];
          do_action('qm/info', $splittedArray0 );




          /* Test 02 */
          global $post;
          //$posts = array( /* WP_Post, WP_Post, ... */); this is now splittedArray0

          while (list($i, $post) = each($splittedArray0)) :
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

          <!-- Owl Carousel 01-->
          <!--div class="owl-carousel owl-theme">
              <div class="item"><h4>1</h4></div>
              <div class="item"><h4>2</h4></div>
              <div class="item"><h4>3</h4></div>
              <div class="item"><h4>4</h4></div>
              <div class="item"><h4>5</h4></div>
              <div class="item"><h4>6</h4></div>
              <div class="item"><h4>7</h4></div>
              <div class="item"><h4>8</h4></div>
              <div class="item"><h4>9</h4></div>
              <div class="item"><h4>10</h4></div>
              <div class="item"><h4>11</h4></div>
              <div class="item"><h4>12</h4></div>
          </div-->


          <!--div>
            <div class="item">
              <h4 class=”post_title <?php the_title(); ?>”>
              <?php the_title(); ?>
              </h4>
            </div>
          </div-->










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
