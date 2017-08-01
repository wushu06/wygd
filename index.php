<?php get_header(); ?>



<div class="block block-blog">
    <div class="container">
		

		 <h2 class="text-center big-title scroll-animate">Blog</h2>
		    <div class="row-p"> 

		 					<?php // The Loop 
		 					$i = 0;
						if (have_posts()) {
						    ?>


						            <?php
						while (have_posts()) {
						        the_post();?>
						        <div class="col-md-p ">
						        <div class="boxes">
						   
							        <div class="col-md">
								        <div class="content-img">
								        	<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"  class='img-responsive'></a>
								        </div>
							        	
							        </div>
							        <div class="col-md">
							        	<div class="content-text">
							        	<a href="<?php the_permalink(); ?>">
							        	<div class="content">
							        	<h2><?php the_title(); ?></h2>
							        	<p><?php the_excerpt(); ?></p>
							        	</div>	
							        	</div>
							        	</a>
							        	
							        </div>
								</div>
						        </div>
					

			                    
			              

			   
			           <?php ++$i; ?>
			            <?php } }//} ?>
		        
		      
		     </div>      
		       
	

        </div> <!--End container-->
   
</div>
    

      
   






        


<?php get_footer(); ?>