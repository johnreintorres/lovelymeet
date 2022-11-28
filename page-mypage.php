<?php get_header();?>
<section>
<div class="schedule">
        <div class="schedule-title">
            <h2>My page</h2>
        </div>
    <div class="schedule-area">
    <div class="schedule-container">
<div class="mypage">
<h2>Hello,</h2>
<?php echo do_shortcode('[olb_member_data key="name"]')?>
<h2>Term of validity:</h2>
<?php echo do_shortcode('[olb_member_data key="olbterm"]
[olb_if_expire]Expired[/olb_if_expire]')?>
<h2>Free ticket:</h2>
<?php echo do_shortcode('[olb_member_data key="free"] left.')?>
<h2>History:</h2>
<?php echo do_shortcode('[olb_members_history perpage="5" pagenavi="0"](No history)[/olb_members_history]')?>
<h2>Reserved:</h2>
<?php echo do_shortcode('[olb_members_schedule perpage="5" pagenavi="0"](No schedule)[/olb_members_schedule]')?>
</div>
</div>
    </div>
</div>

</section>
<?php get_footer();?>









