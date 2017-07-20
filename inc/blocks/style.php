<?php


		$categories = get_terms('garge_door');
		
		?>


<div class="block block-choose">
    <div class="container">
		
		 <p class="text-center "><a href="#"  class="small-title">GARAGE DOORS</a></p>
		 <h2 class="text-center big-title">Choose a garage door style </h2>
		 <div class="row">	

		 			<?php $i = 0; ?>
   					<?php foreach( $categories as $category ) {
   						  $category_link = sprintf( 
					        '<a href="%1$s" alt="%2$s">%3$s</a>',
					        esc_url( get_category_link( $category->term_id ) ),
					        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
					        esc_html( $category->name )
					    );
   						?>
   						<?php //if( $i % 2 == 0 ) { ?>
					<div class="col-md-12 col-xs-6">
		        	<div class="row block-choose-row" data-res="1060">
		        	
			            <div class="col-md-6 col-xs-6 <?php if( $i % 2 == 0 ) {echo'right';}else{echo 'left';} ?> block-choose-img text-center ">
			            	<div class="choose-wrap">
					           	<a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" >

					                <img src="<?php echo get_template_directory_uri(); ?>/images/300x300_switch.png" class="img-responsive"  />
					             </a>

					        </div>      
			            </div>
					
					
			            <div class="col-md-6 col-xs-6 block-choose-content">
			            	<div class="content-wrap">
			                    <h2 class="block__title h3 t-brand"> <?php echo $category->name?>  </h2>
			                  
			                    <p><?php echo $category->description; ?></p>
			                    <div>
			                   <a class="choose-link" href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>">VIEW OUR RANGE</a>
								</div>


			                    <?php //echo $item['body']; ?>
			                </div>
			           
			           </div>  
			           </div>  
			    </div><!--End block choose row-->
			           <?php ++$i; ?>
			            <?php } //} ?>
		        </div>	 
		      
		         
		       
	

        </div> <!--End container-->
   
</div>
    

      
   