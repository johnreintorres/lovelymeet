<?php get_header();?>

<section>
<div class="single">
        <div class="single-title">
            <h2>Details</h2>
        </div>
    <div class="single-area">
    <div class="single-container">
<div class="single-post">

           <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          
           <div class="content">
          
           <p><?php echo the_date();?></p>
           <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
           <div class="date-single-layout">
           <p class="title"><?php the_title(); ?></p>
           </div>
           <?php the_content(); ?>
           </div>
   <?php endwhile; else : endif; ?>


   <div class="blogs-container-bot">
       <h1>Other News</h1>
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
                                <span class="event-tag">News</span>
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
    </div>
</section>

 

<?php get_footer();?>