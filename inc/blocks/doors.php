<div class="block block-doors">
    <div class="container">
    	<div class="row block-doors-row" data-res="1060">

    	<?php $i = 0; ?>
    	<?php if( $items = theme( 'items' ) ) { ?>
    		<?php foreach( $items as $item ) { ?>
    			
		        
		        	
			            <div class="col-md-6 block-doors-content">
			                <img src="<?php echo $item['image']['sizes']['technical']; ?>" title="<?php echo esc_attr( $item['title'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="img-responsive" />
			          
			            	<div class="text-center">
			                    <h2 class="block__title h3 t-brand"><?php echo $item['title']; ?></h2>

			                    <?php echo $item['body']; ?>
			                </div>
			            </div>
		        	
		  
			<?php } ?>
		<?php } ?>
		</div>

        
    </div>
</div>