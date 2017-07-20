<?php get_header(); ?>


	<?php
	// Page gallery 
	$args = array(
	    // Only get published posts..
	    'post_type'              => array( 'garage' ),
	    'post_status'            => array( 'publish' ),



	    // Get the latest results
	    'order'                  => 'DESC',
	    'orderby'                => 'rand',
	);

	// The Query
	$garage = new WP_Query( $args );
?>


<div class="block-gallery">
	<div class="container">
 			<div class="row text-center">
                <h1 class="h2 divide divide--center"><?php echo theme( '404_title' ); ?></h1>
                <br>

                <?php echo theme( '404_intro' ); ?>
                <br>	
            </div>
		<div class="grid">

			<?php   // The Loop
         if ( $garage->have_posts() ) { ?>
        

            <?php
            while ( $garage->have_posts() ) {
                $garage->the_post();?>

			<div class="gallery-wrapper">
				<div class="grid-item">
					<div class="gallery-image">
						<img src="<?php echo get_the_post_thumbnail_url( ); ?>" > 
						<div class="overlay">
						<div class="text text-center">
							<h1><?php the_title(); ?></h1><br>
							<a href="<?php the_permalink(); ?>" >View</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php } } ?>	

</div>
</div>

<?php get_footer(); ?>