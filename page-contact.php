<?php get_header();?>


  <section>
    <div class="contact">

        <div class="contact-area">
            
            <div class="contact-container">
            <div class="contact-title">
                <h2>Leave us a message!</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero culpa ea ab libero laudantium amet excepturi.</p>
                </div>  
                <div class="contact-form">
                    <div class="contact-form-title">
                    <h2>Contact us!</h2>
                    <p>Leave us a message</p>
                    </div>
                    <!-- <form action="">
                        <div class="input-layout">
                            <label for="">Name</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-layout">
                            <label for="">Email</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-layout">
                            <label for="">Phone</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-layout">
                            <label for="">Message</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="input-layout">
                        <div class="submit-field">
                        <input type="submit" value="Send" />
                        </div>
                        </div>
                    </form> -->
                    <div class="contact-input-layout">
                        <?php echo do_shortcode('[contact-form-7 id="63" title="Contact form 1"]');?>
                </div>
                <div class="contact-wave"></div>

            </div>
        </div>
    </div>
  </section>

    
<?php get_footer();?>