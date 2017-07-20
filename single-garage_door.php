<?php get_header();

$categories = get_terms('garge_door');

foreach( $categories as $category ) { $cat_name = $category->name;}
 ?>



<div class="block-post">
<div class="container-post">


	<div class="row">

		<div class="col-md-6 col-post">
			<div class="post-image text-center">
				<img src="http://placehold.it/400X400" class="img-responsive">
			</div>
			<div class="image-desc">
				<p>Available in these colours</p>
				<div class="colors">
					<?php 

				$arr = array('1e2427', '614035', '16261e', '87643a', '181512'
							,'aaaeab', 'ddc793', '224339', 'b8d6af', '3b586d'
							,'4d2c2b', '78232a', '1f518d', '081724', '696d68'
							, 'ffffff', '667172');
				foreach ($arr as $value) {
				    

				    echo '<span style="background:#'.$value.'"></span>';
				}

					 ?>
				</div>


			</div>
		</div>

		<div class="col-md-6 ">
			<div class="post-text">
			
   						
   						
				 <h6> <a href="<?php echo  get_site_url() ?>/garage-doors">GARAGE DOORS</a> &nbsp; | &nbsp; <a href=""><?php echo $cat_name ?></a></h6>    
				<h1><strong><?php the_title(); ?></strong><br>
				<?php echo $cat_name  ?></h1>
				<p><?php the_content(); ?>

				</p>
				
				<a href="" class="home-button">Enquire now</a>
				<div class="social"><?php partial('addthis') ?></div>
			</div>
			
		</div>

	</div>




	<div class="row">
		<h2 class="text-center title-post""> People who looked at<strong> <?php the_title(); ?> </strong>also looked at </h2>

		<?php
		
		
		$prev_post = get_previous_post();
		if (!empty( $prev_post )): ?>
		
		

		<div class="col-md-5 col-xs-12">
			<div class="post-image-two text-center">
				<?php echo get_the_post_thumbnail($prev_post->ID); ?>
			</div>
			<div class="post-text-two text-center">
				 <h2><?php echo $prev_post->post_title ?></h2>
				<p><?php echo $prev_post->post_content ?> </p> <br>
				<a href="<?php echo $prev_post->guid ?>" class="home-button">Enquire now</a>
			</div>
		</div>
		<?php endif ?>
<div class="col-md-1"></div>
		<?php
		$next_post = get_next_post();
		if (!empty( $next_post )):  ?>
			
			<div class="col-md-5 col-xs-12">
			<div class="post-image-two text-center">
				<?php echo get_the_post_thumbnail($next_post->ID); ?>
			</div>
			<div class="post-text-two text-center">
				 <h2><?php echo $next_post->post_title ?></h2>
				<p><?php echo $next_post->post_content ?> </p> <br>
				<a href="<?php echo $next_post->guid ?>" class="home-button">Enquire now</a>
			</div>
		</div>
		<?php endif; ?>

	</div> 

</div>
</div>




<?php get_footer(); ?>