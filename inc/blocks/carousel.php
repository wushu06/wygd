<div class="block block-carousel">
    <div class="container">
 
        
            <div class="row block-carousel-images">
            	<div class='col-md-12 text-center'>
                                   
            		<div class="carousel">
                    <?php if( $images = theme( 'gallery' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                   		
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px'  />
                            
                        
                    <?php } ?>
                   <?php } ?>

                     </div>
                     <h3><?php echo theme( 'title' ) ?></h3>
               </div>
             
            </div>
            <div class="row block-carousel-content">
			  <div class="col-md-8">
			  	<!-- Buttons -->
			  	<?php echo theme('button_one') ?>   <?php echo theme('button_two') ?>
			  </div>
			  <div class="col-md-4">
			  	<!-- social media -->
			  	  <?php if( $facebook = theme('social_accounts', 'facebook') ) { ?>
                <a href="<?php echo $facebook ?>" class="social" title="Facebook" target="blank"><i class='fa fa-facebook-official' ></i>
                </a>
            <?php } ?>

            <?php if( $twitter = theme('social_accounts', 'twitter') ) { ?>
                <a href="<?php echo $twitter ?>" class="social" title="Twitter" target="blank"><i class='fa fa-twitter-square' ></i>
                </a>
            <?php } ?>

         
			  </div>
			</div>

 

    </div>
</div>
