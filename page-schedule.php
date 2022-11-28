<?php get_header();?>
<section>
<div class="schedule">
        <div class="schedule-title">
            <h2>Schedule</h2>
        </div>
      
    <div class="schedule-area">

    <div class="schedule-container">

        <div class="calendar">
            <?php echo do_shortcode('[membership level="0,1"]
            <div class="low-user-area">
            <span class="low-user">This page content is for users bronze and higher level only.</span>
            <a class="get-start" href="http://feemo.xsrv.jp/development/lovelymeet-wp/membership-account/">My Account</a>
            </div>
            [/membership]')?>
            
        </div>
        <?php echo do_shortcode('[membership level="0,1"]<div class="timetable-slider-01">[/membership]')?>
        <?php
              $teachers = get_users( array( 'role__in' => array( 'author' ) ) );
              foreach ( $teachers as $user ) { ?>
        
        <div class="weekly-sched">
        <?php echo '<h2>' . esc_html( $user->display_name ) . '</h2>'; ?>

             <?php 
                $week_id = '[olb_weekly_schedule id="'.$user->ID.'"]';
                echo do_shortcode('[membership level="2,3,4"]' .$week_id. '[/membership]');?>
        </div>
        <?php } ?>
        </div>
    </div>
    </div>

</section>
<?php get_footer();?>