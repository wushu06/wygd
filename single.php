<?php get_header(); ?>

archive
<div class="block post-door">
    <div class="container">
    	<div class="row">

	    	<div class="col-md-6 col-xs-12">
	    		<div class="post-image">
	
	    	 <?php the_post_thumbnail(); ?>

	    		</div>
	    		<div class="post-styles">
	    			<p>Available in the following colours and finishes</p>
	    			<i class="fa fa-square-o" aria-hidden="true"></i>
	    			<i class="fa fa-square-o" aria-hidden="true"></i>
	    			<i class="fa fa-square-o" aria-hidden="true"></i>
	    			<i class="fa fa-square-o" aria-hidden="true"></i>

	    		</div>
	    		
	    	</div>


	    	<div class="col-md-6 col-xs-12">
	    		<div class="post-content">
	    			<a href='<?php echo theme('link_one'); ?>'>GARAGE DOORS</a> |
	    			<a href='<?php echo theme('link_two'); ?>'>UP AND OVER STEEL GARAGEDOORS</a>
	    			<h3> <?php the_title(); ?></h3>
	    			<div class="post-list">
	    			<?php the_content(); ?>
	    				<ul>
	    				

	    					
	    				</ul>
	    				<a href="#">ENQUIRE NOW</a>
	    				 <?php partial( 'addthis' ); ?>
	    			</div>
	    		</div>
	    		
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="social">
	    		  		<?php if( $link = get_previous_post() ) { ?>
                			<a href="<?php echo get_the_permalink( $link->ID ); ?>" title="<?php echo esc_attr( get_the_title( $link->ID ) ); ?>" class="btn btn--outline">Prev Article</a>
                		<?php } ?>
                		 &nbsp; 
                		<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" title="See all posts" class="btn btn--outline">See All</a>
                		 &nbsp; 
                		<?php if( $link = get_next_post() ) { ?>
                			<a href="<?php echo get_the_permalink( $link->ID ); ?>" title="<?php echo esc_attr( get_the_title( $link->ID ) ); ?>" class="btn btn--outline">Next Article</a>
                		<?php } ?>
   				</div>
	    	</div>
	    </div>		

   

        
    	</div>
	</div>
</div>




<?php get_footer(); ?>





              

