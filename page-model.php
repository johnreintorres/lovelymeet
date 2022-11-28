<?php get_header();?>

<?php 
$email = do_shortcode('[swpm_show_member_info column="email"]');

?>

    <section>
      
        <div class="gallery">
        <div class="gallery-slider-title">
                        <h2>MODEL</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Vero culpa ea ab libero laudantium 
                                    amet excepturi quis fugiat in nisi, dolore, eaque quas,
                                    officia alias. Rem voluptatem 
                                    accusantium assumenda magnam.</p>
                </div>
                <div class="gallery-area">
                <div class="models">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged'):1;
                    query_posts(array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 18,
                        'orderby' => 'rand',
                        'category_name' => 'model',

                    ));
                    if(have_posts()):
                    ?>
                    <?php while (have_posts()): the_post();
                    ?>
                      <div class="model-layout">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <div class="model-info">
                    <h2 class="model-title"><?php the_title(); ?></h2>
                    <!-- <p class="model-desc">
                        <?php the_content();?>
                    </p> -->
                    <a class="btn-inquiry"
                    href="<?php the_permalink();?>">
                    <div class="view-details">
                        <span>View Details</span>
                    </div>
                    </a>
                </div>
                
            </div>
                    <?php endwhile?>
                    <div class="pagination-models">
                    <?php my_pagination();?>
                </div>
            <?php else: ?>
          <div class="no-result">
              <h1>No results found</h1>
          </div>
          <?php endif;?>
                </div>
                <div class="gallery-container">
                    <div class="gallery-grp">
                    <div class="gallery-slider">
                    <?php
            query_posts(array(
                'post_type'=> 'post',
                'orderby'=>'rand',
                'category_name'=> 'model',
            ));
            if (have_posts()):
            ?>
            <?php while(have_posts()): the_post();
            ?>
            <div class="model-layout">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <div class="model-info">
                    <h2 class="model-title"><?php the_title(); ?></h2>
                    <!-- <p class="model-desc">
                        <?php the_content();?>
                    </p> -->
                    <a class="btn-inquiry"
                    href="<?php the_permalink();?>">
                    <div class="view-details">
                        <span>View Details</span>
                    </div>
                    </a>
                </div>
                
            </div>
            <?php endwhile?>
           
            <?php else: ?>
          <div class="no-result">
              <h1>No results found</h1>
          </div>
          <?php endif;?>
                     
                    </div>

                    </div>
                    </div>
                    <div class="gallery-wave-bot"></div>

          </div>

    </section>    

<?php get_footer();?>