<?php get_header(); ?>


<div class="block post-door">
    <div class="container">
    	<div class="row">

	    	<div class="col-md-6 col-xs-12">
	    		<div class="post-image">
	    			<img src="<?php echo theme( 'image', 'url' ); ?>" class="img-responsive">

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
	    			<h3><?php echo theme('title'); ?></h3>
	    			<div class="post-list">
	    				<ul>
	    					<?php if( $items = theme( 'list' ) ) { ?>
	    					<?php foreach( $items as $item ) { ?>
	    						<?php echo '<li>'.$item['text'].'</li>';?>
	    					<?php } } ?>

	    					
	    				</ul>
	    				<a href="#">ENQUIRE NOW</a>
	    			</div>
	    		</div>
	    		
	    	</div>

   

        
    	</div>
	</div>
</div>




<?php get_footer(); ?>