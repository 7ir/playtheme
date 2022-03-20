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
            'posts_per_page' => -1,
          );

          $my_posts = get_posts($args);

          /*if( ! empty( $my_posts ) ){
          	$output = '<ul>';
          	foreach ( $my_posts as $p ){
          		$output .= '<li><a href="' . get_permalink( $p->ID ) . '">'
          		. $p->post_title . '</a></li>';
          	}
          	$output .= '</ul>';
          } else {
            echo "empty array";
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


          $splittedArray = splitMyArray($my_posts, 3);
          do_action('qm/info', $splittedArray );

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




          <div class=”wrap_choo”>
            <div class=”container”>
              <div class=”chooseUs”>
                <h3> SPECIALS / ANNOUNCEMENTS</h3>
                <div class=”list_services”>
                  <?php
                  // set the “paged” parameter (use ‘page’ if the query is on a static front page)
                  $paged = ( get_query_var( ‘paged’ ) ) ? get_query_var( ‘paged’ ) : 1;

                  // the query
                  $the_query = new WP_Query( ‘order=DSC&paged=’ . $paged );
                  ?>

                  <div id=”owl-example” class=”owl-carousel”>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <div class=”col-sm-12 col-xs-12 col-md-12 respBox wow bounceInUp text-center” data-wow-delay=’0.5s’>
                      <div class=”thumbnail udarpakhi”>
                        <?php the_post_thumbnail(); ?>
                        <div class=”caption”>
                          <h4 class=”post_title <?php the_title(); ?>”>
                          <?php the_title(); ?>
                          </h4>
                          <p>
                          <?php echo wp_trim_words( get_the_content(), 15, ‘…’ ); ?>
                          <a href=”<?php the_permalink(); ?>”>Read More</a>
                          </p>

                        </div>
                      </div>
                    </div>


                    <?php endwhile; ?>

                    <?php
                    // clean up after the query and pagination
                    wp_reset_postdata();
                    ?>
                    <?php else: ?>
                    <p>
                    <?php _e( ‘Sorry, no posts matched your criteria.’ ); ?>
                    </p>
                    <?php endif; ?>

                  </div><!-— owl -->

                  <div class=”customNavigation”>
                    <a class=”btn prev”>prev</a>
                    <a class=”btn next”>next</a>
                  </div><!-— customNavigation -->

                </div><!-— list_services -->
              </div><!-— chooseUs —->
            </div><!-— container -->
          </div><!-— wrap_choo -->








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
