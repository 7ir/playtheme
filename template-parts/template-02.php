<?php
/*
Template Name: Template 02
Template Post Type: post, page
*/

?>
<div class="site-content">
    <?php
    while ( have_posts() ) :

    the_post();
    ?>

    <article <?php post_class(); ?>>

	  <!--?php the_post_thumbnail( 'my-custom-image-size' ); ?-->

      <!--header class="entry-header"-->
        <!--?php the_title( '<h1 class="entry-title">', '</h1>' ); ?-->
      <!--/header-->

      <div class="entry-content">

        <!-- WPForms embed -->
        <?php echo do_shortcode('[wpforms id="35"]');?>





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
