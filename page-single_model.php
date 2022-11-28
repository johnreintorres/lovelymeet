<?php get_header();?>
<?php 
$email = do_shortcode('[swpm_show_member_info column="email"]');
$name = do_shortcode('[swpm_show_member_info column="first_name"]');

?>
<section>
<div class="single">
        <div class="single-title">
            <h2>Details</h2>
        </div>
    <div class="single-area">
    <div class="single-container">
<div class="single-post">

          
           <div class="model-single__layout">
           <div class="date-single-layout">
           <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

           <p class="title"><?php the_title(); ?></p>
           </div>
           <div class="model-single__content">
           <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">

           <table>
               <tbody>
                   <!-- <tr>
                       <th>Mobile Number</th>
                       <td><?php the_field('mobile_number')?>
                        </td>
                   </tr>
                   <tr>
                       <th>Height</th>
                       <td><?php the_field('height')?> cm
                        </td>
                   </tr>
                   <tr>
                       <th>Weight</th>
                       <td><?php the_field('weight')?> kg
                        </td>
                   </tr>
                   <tr>
                       <th>Bust</th>
                       <td><?php the_field('bust')?> cm                        </td>
                   </tr>
                   <tr>
                       <th>Weist</th>
                       <td><?php the_field('weist')?> cm
                        </td>
                   </tr>
                   <tr>
                       <th>Hips</th>
                       <td><?php the_field('hips')?> cm
                        </td>
                   </tr>
                   <tr> -->
                       <th>Passion</th>
                       <td><?php the_field('passion')?> 
                        </td>
                   </tr>
                    <tr>
                       <th>Zodiac</th>
                       <td><?php the_field('zodiac')?> 
                        </td>
                   </tr>
                   <tr>
                       <th>Blood Type</th>
                       <td><?php the_field('blood_type')?> 
                        </td>
                   </tr>
                   <tr>
                       <th>Pets</th>
                       <td><?php the_field('pets')?> 
                        </td>
                   </tr>
                   <tr>
                       <th>Education</th>
                       <td><?php the_field('pets')?> 
                        </td>
                   </tr>
                   <tr>
                       <th>Smoking</th>
                       <td><?php the_field('smoking')?> 
                        </td>
                   </tr>
               </tbody>
           </table>

           </div>
           <a class="btn-inquiry"
                    href="<?php echo site_url('/inquiry'); ?>?emailadd=<?php echo $email; ?>&first_name=<?php echo $name; ?> &model_name=<?php the_title(); ?> &mobile_number=<?php the_field('mobile_number'); ?>">
                    <div class="view-details">
                        <span>Book Now</span>
                    </div>
                    </a>
           <!-- <?php the_content(); ?> -->

        
            </div>
   <?php endwhile; else : endif; ?>


</div>


<div class="gallery-container">
    <div class="gallery-grp">
               
               <div class="gallery-slider">
               <?php
       $paged = (get_query_var('paged')) ? get_query_var('paged'):1;
       query_posts(array(
           'post_type'=> 'post',
           'paged'=> $page,
           'post_per_page'=> 4,
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
</div>

    </div>
    
</section>

 

<?php get_footer();?>