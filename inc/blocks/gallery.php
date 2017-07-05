<div class="block block-gallery">
    <div class="container">
        
            <div class="row block-gallery-images">
                
                    

                    <?php if( $images = theme( 'gallery' ) ) { ?>
                    <?php foreach( $images as $i => $image ) { ?>
                   
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" width='300px'  />
                          
                    <?php } ?>
                   <?php } ?>
                    
                 
                    
                        
            
            </div>

 

    </div>
</div>
