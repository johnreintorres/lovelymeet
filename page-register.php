<?php get_header();?>
<section>
  <div class="log register-form">
      <div  class="register-padding"></div>
      <div class="width-limit log-area">
          <div class="log-container sign-up-container">
            <div class="log-container-right">
                <a href=""><h2>LOVELYMEET</h2></a>
                <span>Register to Lovelymeet</span>
                
                <div class="log-form" action="">
                <?php echo do_shortcode(' [swpm_registration_form]')?>

</div>
            </div>
               <div class="log-container-left">
                   <div class="log-carousel">
                       <div class="log-carousel-container">
                           <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-1.gif" alt="">
                           <h2>Reunite with your soulmate</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquid inventore repellendus, placeat.</p>
                       </div>
                       <div class="log-carousel-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-2.gif" alt="">
                        <h2>Show yourself</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquid inventore repellendus, placeat.</p>
                          
                       </div>
                       <div class="log-carousel-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-3.gif" alt="">
                        <h2>Connect with people</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquid inventore repellendus, placeat.</p>
                          
                       </div>
                   </div>
               </div>
        
          </div>
      </div>
      <div class="log-wave-bot"></div>
  </div>
</section>
 <?php get_footer();?>