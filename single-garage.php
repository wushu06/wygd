<?php get_header();
    // Custom post for gallery (garages)

 ?>

<div class="block block-carousel">
    <div class="container">
 
        
            <div class="row block-carousel-images">
                
                                   
                    <div class="carousel">
                    <?php if( $images = theme( 'gallery' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                        
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px'  />
                            
                        
                    <?php } ?>
                   <?php } ?>

                     </div>
                    <?php
                        $next_post = get_next_post();
                        if (!empty( $next_post )): ?>
                          <a class="image-next" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">NEXT</a>
                        <?php endif; ?>
                        <?php
                        $prev_post = get_previous_post();
                        if (!empty( $prev_post )): ?>
                          <a class="image-prev" href="<?php echo $prev_post->guid ?>">PREV</a>
                    <?php endif ?>
               
             
            </div>
            <div class="row block-carousel-content">
            <h3><?php  the_title();  ?></h3>
              <div class="col-md-8">
                <!-- Buttons -->
                <a>WANT THIS DOOR </a>  <a>BACK TO GALLERY</a>
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





<?php get_footer(); ?>