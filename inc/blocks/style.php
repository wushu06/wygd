<?php


		$categories = get_terms('garge_door_category');
		
		?>

					













<div class="block-gallery" style="margin-top: 200px">
	<div class="container">

style.php (in pages)
	<?php foreach( $categories as $category ) {?>
   						
   						<h2 class="block__title h3 t-brand"> <?php echo $category->name?>  </h2>
   						    <p><?php echo $category->description; ?></p>
   						        <a class="choose-link" href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>">VIEW OUR RANGE</a>
								</div>
   <?php }  ?>	





		</div>

	</div>
</div>
