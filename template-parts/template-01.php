<?php
/*
Template Name: Clean Page
Template Post Type: post, page
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body class="cleanpage theme-background">
<?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
?>
<?php get_footer(); ?>
</body>
</html>
