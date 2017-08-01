       <?php if (is_single() && is_post_type('garage_door')): ?>
        <div class="button-call-wrapper">
             <a class="brochure" href='<?php echo get_template_directory_uri() ?>/images/brochuretest.pdf' download>DOWNLOAD A <strong>BROCHURE</strong></a>
        </div>
        <?php else: ?>

   <!-- <div class="button-call-wrapper"  <?php if (is_page('thank-you')) {echo 'style="display: none"';}?>>
        <button id="survey-mobile" class="button-call" href='#'>FOR SAME DAY REAPAIRS CALL <strong> 01924 849 579 </strong></button>
    </div>-->
      <div class="btn-book">
      <button id="btnCallDesktop" class="call-desktop" href='tel:01924 849 579 '>FOR SAME DAY REAPAIRS CALL <strong> 01924 849 579 </strong> </button>
         <button id="btnCallMobile" class="call-mobile" href='#'>BOOK A <strong> FREE </strong> SITE SURVEY | <strong> 01924 849 579 </strong> </button>
    </div>

            <?php endif;?>
     <div class="btn-call">
         
     </div>     


    <footer class="footer text-center">



        <div class="social social--footer pull-left">
            <?php if ($facebook = theme('social_accounts', 'facebook')) {?>
                <a href="<?php echo $facebook ?>" class="social__facebook" title="Facebook" target="blank"><i class='fa fa-facebook' ></i>
                </a>
            <?php }?>

            <?php if ($twitter = theme('social_accounts', 'twitter')) {?>
                <a href="<?php echo $twitter ?>" class="social__twitter" title="Twitter" target="blank"><i class='fa fa-twitter' ></i>
                </a>
            <?php }?>

            <?php if ($instagram = theme('social_accounts', 'instagram')) {?>
                <a href="<?php echo $instagram ?>" class="social__instagram" title="Instagram" target="blank"><i class='fa fa-linkedin' ></i>
                </a>
            <?php }?>
        </div>

      



        <div class="links pull-right">
            <p>
           
            <a href="<?php echo site_url('privacy-policy'); ?>" title="Privacy Policy">COOKIE &amp; PRIVACY POLICY</a>
         </p>
      </div>





    </footer>





    <?php wp_footer();?>
</body>
</html>