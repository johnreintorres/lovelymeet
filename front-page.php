<?php get_header();?>

    <section>
        <div class="fv">
            <div class="fv-area">
                <div class="fv-container">
                    <div class="fv-title" data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/lovelymeet.png" alt="" />
                    </div>
                    <div class="fv-link">
                        <a class="get-start" data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000" href="">Get Started</a>
                        <a data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000" href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/google-play-badge.png" alt="" /></a>
                    </div>
                </div>
                <div class="fv-waves"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="whyus">
            <div class="width-limit whyus-area">
                <div class="whyus-container">
                    <div class="whyus-title">
                        <h2 data-aos="fade-right" data-aos-delay="50" data-aos-duration="800">Why choose us?</h2>
                        <p data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500">
                            Our members are locking for their very own love story <br />
                            and we do everything to help them achieve it.
                        </p>
                    </div>
                    <div class="whyus-grp">
                        <div class="whyus-grp-container"  data-aos="fade-down" data-aos-delay="600" data-aos-duration="1000">
                            <i class="fas fa-user-friends"></i>
                            <h2 data-aos="fade-up">No Fakes!</h2>
                            <p data-aos="fade-up">
                                Lovelymeet is strictly <br />
                                monitored, no fakes!
                            </p>
                        </div>
                        <div class="whyus-grp-container"  data-aos="fade-up" data-aos-delay="700" data-aos-duration="1000">
                            <i class="fas fa-wallet"></i>
                            <h2>Free Access</h2>
                            <p>
                                Lovelymeet is strictly <br />
                                monitored, no fakes!
                            </p>
                        </div>
                        <div class="whyus-grp-container"  data-aos="fade-down" data-aos-delay="800" data-aos-duration="1000">
                            <i class="fas fa-envelope-open-text"></i>
                            <h2>Easy Signup</h2>
                            <p>
                                Lovelymeet is strictly <br />
                                monitored, no fakes!
                            </p>
                        </div>
                        <div class="whyus-grp-container"  data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000">
                            <i class="fas fa-mobile"></i>
                            <h2>Dating APP.</h2>
                            <p>
                                Lovelymeet is strictly <br />
                                monitored, no fakes!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="whyus-grp-bot">
                    <div class="whyus-grp-bot-title" class="whyus-grp-container"  data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
                        <h2>LOVELYMEET GUARANTEE</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                            Rem rerum, modi aut asperiores similique sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                    <div class="whyus-grp-bot-field" class="whyus-grp-container"  data-aos="fade-left" data-aos-delay="600" data-aos-duration="1000">
                        <div class="bot-field-container">
                            <!-- <i class="fas fa-user-friends"></i> -->
                            <img src="<?php echo get_template_directory_uri();?>/assets/gif/arrow.gif" alt="" />
                            <h2>Join Lovelymeet Community</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                                rerum, modi aut asperiores 
                            </p>
                        </div>
                        <div class="bot-field-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/gif/lock.gif" alt="" />
                            <h2>Protect Personal Data</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                                rerum, modi aut asperiores 
                            </p>
                        </div>
                        <div class="bot-field-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/gif/browse.gif" alt="" />
                            <h2>Browse Members</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                                rerum, modi aut asperiores 
                            </p>
                        </div>
                        <div class="bot-field-container">
                            <img src="<?php echo get_template_directory_uri();?>/assets/gif/chat.gif" alt="" />
                            <h2>Start Communicating</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                                rerum, modi aut asperiores 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="filter">
            <div class="filter-wave"></div>
            <div class="width-limit filter-area">
                <div class="filter-container">
                    <div class="filter-title" class="whyus-grp-container">
                        <h2  data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">Find Your Perfect Match</h2>
                        <p   data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="filter-field-overlay"></div>
                    <div class="filter-field" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                        <div class="filter-field-title">
                            <h2>Find A Match</h2>
                        </div>
                        <?php echo do_shortcode('[rencontre_search nb=2]');?>
                        <form>
                        <div class="filter-btn filter-field-form-grp filter-field-form-submit-field">
                            <input type="submit" value="Get Started" />
                        </div>
                        </form>
                        <!-- <form action="">
                            <div class="filter-field-form-grp">
                                <label for="gender">I Am a</label>
                                <select name="gender" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="lgbtq">LGBTQ</option>
                                </select>
                            </div>

                            <div class="filter-field-form-grp">
                                <label for="age">Age</label>
                                
                                <select name="age" id="age">
                                    <option value="young-adult">20 - 29</option>
                                    <option value="middle-aged-adult">30 - 39</option>
                                    <option value="old-adults">40 - 59</option>
                                    <option value="old">60 - 80</option>

                                </select>

                                <div class="filter-field-form-grp filter-field-form-submit-field">
                                    <input type="submit" value="Search" />
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
            <!-- <div class="spacer layer1"></div> -->
            <div class="filter-wave-bot"></div>
        </div>
    </section>

    <section>
        <div class="steps">
            <div class="width-limit steps-area">
                <div class="steps-container">
                    <div class="steps-title">
                        <h2 data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">How does it Work?</h2>
                        <p data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="steps-field">
                        <div class="steps-field-container">
                            <div class="steps-field-container-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/step-1.png" alt="" />
                            </div>
                            <div class="steps-field-container-text-area" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                                <h2>Talk about yourself</h2>
                                <span>Lorem ipsum dolor sit amet consectet t amet 
                                    consectet:</span>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                </ul>
                            </div>
                        </div>

                        <div class="steps-field-container">
                            <div class="steps-field-container-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/step-2.png" alt="" />
                            </div>
                            <div class="steps-field-container-text-area" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                                <h2>Make the first move</h2>
                                <span>Lorem ipsum dolor sit amet consectet t amet 
                                    consectet:</span>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                </ul>
                            </div>
                        </div>

                        <div class="steps-field-container">
                            <div class="steps-field-container-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/step-3.png" alt="" />
                            </div>
                            <div class="steps-field-container-text-area" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                                <h2>Conversation</h2>
                                <span>Lorem ipsum dolor sit amet consectet t amet 
                                    consectet:</span>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                    <li>Lorem ipsum dolor sit amet t amet consectet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <!-- <div class="testimonials-wave"></div> -->
        <div class="testimonials">
        <div class="testimonials-wave"></div>
            <div class="width-limit testimonials-area">
                <div class="testimonials-container">
                    <div class="testimonials-field" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000">
                    <div class="testimonials-title">
                        <h2>Testimonials</h2>
                        <p>Our Happy Users</p>
                    </div>
                    <div class="testimonials-grp">
                        <div class="testimonials-carousel single-slider">
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-1.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>James Harden</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-3.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Leona Ramirez</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-2.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Jasper Legazpi</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-4.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Jean Smith</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-5.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Eula Miller</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-6.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Sophia Alcaraz</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-7.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Chloe Jones</h2>
                            </div>

                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-8.jpg" alt="" />
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.
                                </p>
                                <h2>Andrea Williams</h2>
                            </div>
                        </div>

                        <div class="testimonials-carousel nav-slider">
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-1.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-3.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-2.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-4.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-5.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-6.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-7.jpg" alt="" />
                            </div>
                            <div class="testimonials-carousel-container">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial-8.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="testimonials-wave-bot"></div>
        </div>
    </section>

<?php get_footer();?>