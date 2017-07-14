
			  	<!-- social media -->
			  	  <?php if( $facebook = theme('social_accounts', 'facebook') ) { ?>
                <a href="<?php echo $facebook ?>" class="social" title="Facebook" target="blank"><i class='fa fa-facebook-official' ></i>
                </a>
            <?php } ?>

            <?php if( $twitter = theme('social_accounts', 'twitter') ) { ?>
                <a href="<?php echo $twitter ?>" class="social" title="Twitter" target="blank"><i class='fa fa-twitter-square' ></i>
                </a>
            <?php } ?>

         
