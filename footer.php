       <?php // if ( !is_front_page() ) :  ?>
   

    <div class="button-call-wrapper">
        <button id="survey-mobile" class="button-call" href='#'>FOR SAME DAY REAPAIRS CALL <strong> 01924 849 579 </strong></button>
    </div>
            
            <?php // endif; ?> 

    <footer class="footer text-center">

      
            
        <div class="social social--footer pull-left">
            <?php if( $facebook = theme('social_accounts', 'facebook') ) { ?>
                <a href="<?php echo $facebook ?>" class="social__facebook" title="Facebook" target="blank"><i class='fa fa-facebook' ></i>
                </a>
            <?php } ?>

            <?php if( $twitter = theme('social_accounts', 'twitter') ) { ?>
                <a href="<?php echo $twitter ?>" class="social__twitter" title="Twitter" target="blank"><i class='fa fa-twitter' ></i>
                </a>
            <?php } ?>

            <?php if( $instagram = theme('social_accounts', 'instagram') ) { ?>
                <a href="<?php echo $instagram ?>" class="social__instagram" title="Instagram" target="blank"><i class='fa fa-linkedin' ></i>
                </a>
            <?php } ?>
        </div>

        <div class="footer__copy">
           
        

        <div class="footer-links pull-right">
            <p>
            <a href="<?php echo site_url( 'terms' ); ?>" title="Terms &amp; Conditions">T&amp;Cs</a>
             &nbsp; | &nbsp; 
            <a href="<?php echo site_url( 'privacy' ); ?>" title="Privacy Policy">Privacy Policy</a>
         </p>
      </div>


           


    </footer>

           

   

    <?php wp_footer(); ?>
</body>
</html>