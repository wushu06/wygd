<?php
	// PAGE FOR AREAS CUSTOM POSTS
	$args = array(
	    // Only get published posts..
	    'post_type'              => array( 'areas' ),
	    'post_status'            => array( 'publish' ),



	    // Get the latest results
	    'order'                  => 'DESC',
	    'orderby'                => 'rand',
	);

	// The Query
	$areas = new WP_Query( $args );
?>
   



<div class="block-location">
<h6 class="text-center"><a href="#"><?php echo theme('small_title'); ?></a></h6>
<h1 class="text-center"><?php echo theme('title'); ?></h1>


<?php   // The Loop
 if ( $areas->have_posts() ) {
?>

    <?php
    while ( $areas->have_posts() ) {
        $areas->the_post();?>

		<div class="location-wrapper">
			<a href="<?php the_permalink(); ?>" >
			<div class="location-image">
				 
	                 <img src="<?php echo get_the_post_thumbnail_url( ); ?>"  />
	            
				<div class="overlay">
					<div class="text text-center">
					 	<i class="fa fa-map-marker" aria-hidden="true"></i>
						<h1><?php echo get_the_title() ; ?></h1>
						
					</div>
				</div>
			</div> </a>
		</div>

<?php } } ?>		




	


</div>