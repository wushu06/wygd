<?php get_header(); ?>

<div class="block block-choose">
    <div class="container">
		 <?php  $category = get_the_category(); ?>

		        	<div class="row block-choose-row" data-res="1060">
			            <div class="col-md-6  block-choose-img text-center align-self-start">
			           	<a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Aluminum side sectional garage doors' ) ) ); ?>" >

			                <img src="<?php echo get_template_directory_uri(); ?>/images/home.jpg" class="img-responsive"  />
			             </a> 
			            </div>

			            <div class="col-md-6 block-choose-content">
			            	<div class="content-wrap">
			                    <h2 class="block__title h3 t-brand">Aluminum side sectional garage doors </h2>



			                    <?php //echo $item['body']; ?>
			                </div>
			            </div>
		        	</div>
		      
		         <div class="row block-choose-row" data-res="1060">

		         	    <div class="col-md-6 block-choose-content">
			            	<div class="content-wrap" >
			                    <h2 class="block__title h3 t-brand">Steel sectional garage doors</h2>


			                  
			                </div>
			            </div>
			            <div class="col-md-6 block-choose-img ">
			            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'Up & Over Steel Garage Doors' ) ) ); ?>">

			                <img src="<?php echo get_template_directory_uri(); ?>/images/home.jpg"   class="img-responsive" />
			            </a>
			            </div>
			            

			        
		        	</div>
		       
	

        
    </div>
</div>





























                <?php // $category = get_the_category(); ?>
               

                	<!--<a href="<?php //echo get_permalink( get_option( 'page_for_posts' ) ); ?>" >View Everything</a> &nbsp; 
                	<a href="<?php //echo esc_url( get_category_link( get_cat_ID( 'Aluminum side sectional garage doors' ) ) ); ?>" >Aluminum side sectional garage doors</a> &nbsp; 
                	<a href="<?php //echo esc_url( get_category_link( get_cat_ID( 'Steel sectional garage doors' ) ) ); ?>">Steel sectional garage doors</a>-->
        

            <?php // if ( have_posts() ) : ?>
           
            		<?php
                   // while ( have_posts() ) : the_post();
            		//	$category = get_the_category();

                      //  $category_slug = ( $category[0]->slug == 'uncategorised' ) ? 'news' : $category[0]->slug;

 
       //    the_title(); 		//endwhile;
                    ?>
        	
        	<?php //endif; ?>

        


<?php get_footer(); ?>