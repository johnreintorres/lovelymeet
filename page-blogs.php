<?php get_header();?>



    <section>
      
        <div class="blogs">
            <div class="blogs-title"><h2>Blogs and Events</h2></div>
            <div class="width-limit blogs-area">
                <div class="blogs-container">
                    <div class="blogs-container-top">
                        <?php
                        query_posts(array(
                            'post_type' => 'post',
                            'category_name'=> 'top-left'
                        ));
                        if(have_posts());
                        ?>
                        <?php while (have_posts()):the_post();?>

                        <div class="blogs-container-top-left">
                        <a href="<?php the_permalink();?>">
                            <div class="blogs-container-top-left-content" style="background: url(<?php echo get_template_directory_uri();?>/assets/images/top-news-3.jpg) center no-repeat; background-size: cover;">
                                <span class="top-blog-tag"><?php 
                                        $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                            echo $post_tags[0]->name; 
                                        }
                                        ?></span>
                                <h2><?php the_title();?></h2>
                                    <div class="author-date-group">
                                        
                                        <span><?php 
                                        echo the_excerpt();
                                        ?></span>
                                        <span><?php echo get_the_date();?></span>
                                    </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
                   
                            <div class="blogs-container-top-right">
                            <?php
                                query_posts(array(
                                    'post_type'=>'post',
                                    'category_name'=>'top-right',
                                ));
                                if(have_posts());
                                ?>
                                <?php while (have_posts()):the_post();?>
                                <a href=" <?php the_permalink();?>">
                                <div class="blogs-container-top-right-content" style="background: url(<?php echo get_template_directory_uri();?>/assets/images/top-news-2.jpg) center no-repeat; background-size: cover;">
                                    <span class="top-blog-tag"><?php 
                                        $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                            echo $post_tags[0]->name; 
                                        }
                                        ?></span>
                                    <h2><?php the_title();?></h2>
                                </div>
                                </a>
                                <?php endwhile;?>
                               
                                <div class="top-right-bot-container">
                                <?php
                                query_posts(array(
                                    'post_type'=>'post',
                                    'category_name'=>'top-right-bot',
                                ));
                                if(have_posts());
                                ?>
                                <?php while (have_posts()):the_post();?>
                                    <a href="<?php the_permalink();?>">
                                    <div class="blogs-container-top-right-content" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID());?>) center no-repeat; background-size: cover;">
                                        <span class="top-blog-tag"><?php 
                                        $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                            echo $post_tags[0]->name; 
                                        }
                                        ?></span>
                                        <h2><?php the_title();?></h2>
                                    </div>
                                    
                                    </a>
                                    <?php endwhile;?>

                                    <!-- <a href="">
                                    <div class="blogs-container-top-right-content" style="background: url(<?php echo get_template_directory_uri();?>/assets/images/top-news-4.jpg) center no-repeat; background-size: cover;" >
                                        <span class="top-blog-tag">News</span>
                                        <h2>Are you tired of wondering this
                                        world alone?</h2>
                                    </div> 
                                    </a> -->

                                </div>
                            </div>

                        <!-- <div class="blogs-container-left-top">
                            <div class="blogs-left-top-content">
                            <h2>Are you tired of wondering this
                            world alone? Why not seach for the love
                        of your life here at Lovelymeet?</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis doloremque nisi at recusandae magni accusamus quidem eaque odit neque nobis? recusandae magni accusamus quidem eaque</p>
                            <a href="">Read more</a>
                        </div>
                    </div> -->
                </div>

                    <div class="blogs-container-bot">
                        <div class="blogs-bot-group">
                           
                            <?php
                             query_posts(array(
                                'post_type'=> 'post',
                                'orderby' => 'rand',
                                'category_name' => 'News'
                             ));
                             if(have_posts());
                            ?>
                            <?php while (have_posts()): the_post();?>
                            <div class="bot-group-container">
                                <span class="event-tag"><?php 
                                        $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                            echo $post_tags[0]->name; 
                                        }
                                        ?></span>
                                <a href="<?php the_permalink();?>" class="blog-title">
                                    <h2><?php the_title();?></h2>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                                </a>

                                <?php the_content();?>
                                <!-- <a class="blog-id-link" href="">Read more</a> -->
                            </div>
                            <?php endwhile;?>

                           

                         
                        </div>
                    </div>
                    </div>
            </div>
            <div class="filter-wave-bot"></div>

        </div>
    </section>    

  <footer>
        <!-- <div class="footer-wave"></div> -->
        <div class="footer">
            <!-- <div class="footer-wave"></div> -->
            <div class="width-limit footer-area">
                <div class="footer-container">
                    <div class="footer-container-left">
                        <h2>Don't Miss Out</h2>
                        <span>Sign up for the latest news, events and discounts.</span>
                        <form class="form" action="">
                            <div class="form-flex">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email Address" required>
                            </div>
                            <div class="form-group">
                                <label for="bday">Birthday*</label>
                                <input type="date" name="bday" id="bday" required>
                            </div>
                        </div>
                            <div class="form-group form-submit">
                                <input type="submit" value="Sign up">
                            </div>
                        </form>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Corrupti, ipsam, architecto tenetur quo sequi   ipsam, architecto tenetur quo sequi<br><br>*Required Information</p>
                        <div class="social-links-group">
                            <ul>
                                <li>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fab fa-instagram-square"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fab fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fab fa-tumblr"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fab fa-reddit-alien"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-container-right">
                        <div class="anchor-container">
                            <h2>Company</h2>
                            <ul>
                               <li><a href="index.php">Home</a></li>
                                <li><a href="">Dating</a></li>
                                <li><a href="blogs.php">Blogs</a></li>
                            </ul>
                        </div>

                        <div class="anchor-container">
                            <h2>Services</h2>
                            <ul>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="">My Account</a></li>
                                <li><a href="login.php">Sign In</a></li>
                                <li><a href="register.php">Sign Up</a></li>
                            </ul>
                        </div>

                        <div class="anchor-container">
                            <h2>Dating</h2>
                            <ul>
                                <li><a href="">Anchor 1</a></li>
                                <li><a href="">Anchor 2</a></li>
                                <li><a href="">Anchor 3</a></li>
                                <li><a href="">Anchor 4</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

                <div class="footer-privacy">
                    <div class="footer-privacy-container">
                    <div class="footer-privacy-container-left">
                        <ul>
                            <li><a href="">Sitemap</a></li>
                            <li><a href="">Privacy</a></li>
                            <li><a href="">Terms</a></li>
                            <li><a href="">User content permission terms</a></li>
                        </ul>
                    </div>
                    <div class="footer-privacy-container-right">
                        <span>© Copyright 2021 - 2025</span>
                    </div>
                </div>
            </div>
                <!-- <div class="footer-top">
                    <div class="footer-top-text">
                        <h2>Joining Us Today Just Got Easier!</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            adipi
                            adipisicing elit.Veritatis harum, cumque, eius praesentium
                            
                            elit.Veritatis harum, cumque, eius praesentium
                        </p>
                    </div>
                    <div class="footer-top-started"><a href="">Get Started</a></div>
                </div> -->
                <!-- <div class="footer-bot">
                    <div class="footer-bot-left-col">
                        <a class="footer-link-img" href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/ic_nav.png" alt="" /></a>
                        <p>
                            Voluptates cum asperiores fugit. <br />
                            soluta sequi consequuntur in! <br />
                            ad? Quod, labore laboriosam?
                        </p>
                        <span>© Copyright 2021 - 2025 <br />
                            Lovelymeet lovelymeet.com</span>
                    </div>
                    <div class="footer-bot-mid-col">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Blogs</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Login</a></li>
                            <li><a href="">Register</a></li>
                            <li><a href="">Terms of use</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-bot-right-col">
                        <h2>Connect with us</h2>
                        <ul>
                            <li>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-tumblr"></i></a>
                            </li>
                            <li>
                                <a href=""><i class="fab fa-reddit-alien"></i></a>
                            </li>
                        </ul>
                        <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/google-play-badge.png" alt="" /></a>
                    </div>
                </div> -->
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
</body>

</html>