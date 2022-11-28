<?php get_header();?>
<section>
  <div class="log">
      <div class="width-limit log-area">
          <div class="log-container">
               <div class="log-container-left">
                   <div class="log-carousel">
                       <div class="log-carousel-container">
                           <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-1.gif" alt="">
                           <h2>Reunite with your soulmate</h2>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  In aliquid inventore repellendus, placeat.</p>
                       </div>
                       <div class="log-carousel-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-2.gif" alt="">
                        <h2>Show yourself</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  In aliquid inventore repellendus, placeat.</p>
                          
                       </div>
                       <div class="log-carousel-container">
                        <img src="<?php echo get_template_directory_uri();?>/assets/gif/log-3.gif" alt="">
                        <h2>Connect with people</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  In aliquid inventore repellendus, placeat.</p>
                          
                       </div>
                   </div>
               </div>
               <div class="log-container-right">
                   <a href=""><h2>LOVELYMEET</h2></a>
                   <span>Welcome to Lovelymeet</span>
                   
                   <form class="log-form" action="">
                       <div class="log-form-group">
                           <label for="username">Username or Email</label>
                           <input type="text" name="username" id="" require>
                       </div>
                       <div class="log-form-group">
                           <label for="password">Password</label>
                           <input type="password" name="password" id="" require>
                       </div>

                       <div class="log-form-group log-form-submit">
                           <input type="submit" value="Sign in">
                       </div>
                   </form>
               </div>
          </div>
      </div>
      <div class="log-wave-bot"></div>
  </div>
</section>
 
  <?php get_footer();?>