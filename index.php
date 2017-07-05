<?php
get_header();


get_page_structure( 'page_structure' );

// Now that we have the header area sorted we can generate our posts
if ( have_posts() ) {
	?>

	<div class="block block--breakdown">
	    <div class="container">

	    	<?php while ( have_posts() ) { the_post(); ?>

		        <div class="row row-equal breakdown js-fade--right" data-res="1060">

        			<?php if ( has_post_thumbnail() ) { ?>

			            <div class="breakdown__image large-9 columns text-center">
			                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
			                	<img src="<?php echo the_post_thumbnail_url( 'technical' ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="img-responsive" />
			                </a>
			            </div>

			        <?php } ?>

		            <div class="bg-gray <?php echo ( has_post_thumbnail() ) ? 'large-15' : 'large-24'; ?> columns end">
		            	<div class="breakdown__content">
		                    <h2 class="block__title h3 t-brand">
			                	<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="t-brand title-link">
			                		<?php echo get_the_title(); ?>
			                	</a>
			                </h2>

			            	<span class="divide divide--gradient divide--less-pad"></span>

		                    <p><?php echo get_the_excerpt(); ?></p>
		                </div>
		            </div>
		        </div>

			<?php } ?>

		</div>
	</div>
<?php
}

get_footer();