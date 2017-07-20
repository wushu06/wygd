<?php
/*
* Template Name: Thank you
*/
?>
<?php get_header(); ?>

	<?php


if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

        get_page_structure( 'page_structure' );
    }
}
?>

<?php get_footer(); ?>