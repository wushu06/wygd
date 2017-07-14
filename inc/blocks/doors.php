<?php

	$args = array(
	    // Only get published posts..
	    'post_type'              => array( 'door_style' ),
	    'post_status'            => array( 'publish' ),



	    // Get the latest results
	    'order'                  => 'DESC',
	    'orderby'                => 'rand',


	    'tax_query'=> array(
            'taxonomy' => 'door_style',
            'terms' => array('foo'),
            'field' => 'slug',
        )
	);

	// The Query
	$garage = new WP_Query( $args );


?>
<?php 
// $cat_args =  array('orderby' => 'name'  );

 // wp_list_categories();


 ?>

<div class="block block-choose">
    <div class="container">
		 <?php  $category = get_the_category(); ?>
		 <p class="text-center "><a href="#"  class="small-title">GARAGE DOORS</a></p>
		 <h2 class="text-center">Choose a garage door style</h2>
   
		        	<div class="row block-choose-row" data-res="1060">
		        	
			            <div class="col-md-6  block-choose-img text-center align-self-start">
			            	<div class="choose-wrap">
					           	<a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Aluminum side sectional garage doors' ) ) ); ?>" >

					                <img src="<?php echo get_template_directory_uri(); ?>/images/300x300_switch.png" class="img-responsive"  />
					             </a>
					        </div>      
			            </div>

			            <div class="col-md-6 col-xs-12 block-choose-content">
			            	<div class="content-wrap">
			                    <h2 class="block__title h3 t-brand">Aluminum side sectional garage doors </h2>
			                    <div>
			                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis pretium diam, sed congue ipsum.</p>
			                   <a class="choose-link" href="<?php echo esc_url( get_category_link( get_cat_ID( 'Aluminum side sectional garage doors' ) ) ); ?>">VIEW OUR RANGE</a>
								</div>


			                    <?php //echo $item['body']; ?>
			                </div>
			            </div>
			            </div>
		        	
		      
		         <div class="row block-choose-row" data-res="1060">
					<div class="row-container-two">
		         	    <div class="col-md-6 block-choose-content">
			            	<div class="content-wrap" >
			                    <h2 class="block__title h3 t-brand">Steel sectional garage doors</h2>


			                  
			                </div>
			            </div>
			            <div class="col-md-6 block-choose-img ">
			            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Steel sectional garage doors' ) ) ); ?>">

			                <img src="<?php echo get_template_directory_uri(); ?>/images/300x300_switch.png"   class="img-responsive" />
			            </a>
			            </div>
			            

			        </div>
		        	</div>
		       
	

        </div>
   
</div>
             
           
       
   