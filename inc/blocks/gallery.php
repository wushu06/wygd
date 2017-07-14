<?php

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
   

<div class="block block-gallery">
    <div class="container">

        <div class="row block-gallery-images js-masonry" >


       

		<?php   // The Loop
         if ( $garage->have_posts() ) { ?>
        

            <?php
            while ( $garage->have_posts() ) {
                $garage->the_post();?>

            
                      
                 
                 <div class="gallery-overlay-parent">
	                 <a href="<?php the_permalink(); ?>" >
	                 <img src="<?php echo get_the_post_thumbnail_url( ); ?>"  />
	                 </a>
	                 <div class="gallery-overlay">
                 	<h3 class="text-center"><?php the_title(); ?></h3> <br>
                 	<p class="text-center"><a >VIEW</a></p>
                 </div>
                </div>
                 
                
               <?php }
            ?>
       
    <?php } ?>
			

            </div>
 

    </div>
</div>
