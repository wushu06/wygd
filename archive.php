<?php get_header(); ?>

<div class="block block-doors">
    <div class="container">
       


 
        
                
                 
                    
                      
                          
                      
                          
                                <h2 class="block__title h3 t-brand"> <?php single_cat_title(); ?> </h2>
                                <a href="<?php the_permalink(); ?>"> <p><?php echo category_description(); ?></p>  
                            </a>

         <?php if( $categories = get_terms( 'product_category', array( 'hide_empty' => true, 'orderby' => 'slug', 'order' => 'ASC' ) ) ) { ?>     
    <?php foreach( $categories as $category ) { ?>
              
               <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb' ); ?>" srcset="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb--retina' ); ?> 2x" alt="<?php echo esc_attr( get_the_title() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="img-responsive">
                 <h4 class="item"><?php the_title(); ?></h4>
   <?php } } ?>
                    
    
      

        
    </div>
</div>


<?php get_footer(); ?>