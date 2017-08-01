<?php get_header(); ?>
<!-- Archive -->
<div class="block block-doors">
    <div class="container">

      <h6 class="text-center"> <a href="<?php echo  get_site_url() ?>/garage-doors">GARAGE DOORS</a> &nbsp; | &nbsp; <a href=""><?php single_cat_title(); ?> </a></h6>                    
      <h2 class="text-center big-title"> <?php single_cat_title(); ?> </h2>
         
         <div class="text-center cat-content"><?php echo category_description(); ?></div>  
                
        <div class="row">       
 <?php $i = 0; ?> 
         <?php   $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
              ) ); ?>     
        <!--// foreach( $categories as $category ) { -->
        <?php if( have_posts() ) {
                while( have_posts() ) {   the_post(); 
                  if($i % 2 == 0) {  
                  ?>
                  
           <div  class="col removeCol col-xs-6">
                  <div class="doors-content">
                    <a  href="<?php the_permalink(); ?>">
                    <p class="text-center">
                   
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb' ); ?>" class="img-responsive"> 
                    <div class="overlay">
                      <h2 class="text-center">Find out more, explore colours and 
                      download our brochure</h2>
                    </div>
                    </p></a>
                  

   
   
    

                   </div>
                     <h4 class="item text-center"><?php the_title(); ?></h4>
                  <div class="text-center parag"> 
                    <?php the_excerpt( ); ?> 
                    <a class="home-button" href="<?php the_permalink(); ?>">ENQUIRE NOW</a>
                  </div>
             </div>
          
      
        <?php  } else{ ?>

      <div  class="col-sec removeCol-sec col-xs-6">
                  <div class="doors-content">
                    <a  href="<?php the_permalink(); ?>">
                    <p class="text-center">
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'preview-thumb' ); ?>" class="img-responsive">
                    <div class="overlay">
                      <h2 class="text-center">Find out more, explore colours and 
                      download our brochure</h2>
                    </div>
                    </p> </a>
                  

   
   
    

                   </div>
                     <h4 class="item text-center"><?php the_title(); ?></h4>
                  <div class="text-center parag"> 
                    <?php the_excerpt( ); ?> 
                    <a class="home-button" href="<?php the_permalink(); ?>">ENQUIRE NOW</a>
                  </div>
             </div>
          
      
             
        <?php }  $i++; ?>                       
          
         <?php }  }   ?> 

    </div>  
      

        
    </div>
</div>


<?php get_footer(); ?>