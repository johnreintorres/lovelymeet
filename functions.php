<?php

    function load_stylesheets() {
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/scss/style.css', array(), false, 'all');
        wp_enqueue_style('stylesheet');
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');

    function load_stylesheets2(){
        wp_register_style('stylesheet', get_template_directory_uri() . '/assets/scss-2/style.css', array(), false, 'all');
        wp_enqueue_style('stylesheet');
    }
    add_action('wp_enqueue_scripts','load_stylesheets');


    function loadjs() {
        wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', 'jquery', '', 1, true);
        wp_enqueue_script('mainjs');
    }
    add_action('wp_enqueue_scripts', 'loadjs');
    add_theme_support('post-thumbnails');


add_shortcode('wpsms_send_form', function () {
    ?>
    <form method="post">
        <?php wp_nonce_field('send_sms_nonce', 'wpsms_nonce'); ?>
        <textarea name="content"></textarea>
        <button type="submit">Send SMS!</button>
    </form>
    <?php
    if (isset($_POST['wpsms_nonce']) && wp_verify_nonce($_POST['wpsms_nonce'], 'send_sms_nonce')) {
        $adminMobileNumber[] = \WP_SMS\Option::getOption('admin_mobile_number');
        wp_sms_send($adminMobileNumber, sanitize_text_field($_POST['content']));
        wp_safe_redirect( wp_get_referer() );
        exit;
    }
});


if (!function_exists('my_pagination')):
    function my_pagination()
{
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'prev_text' => __('←'),
            'next_text' => __('→'),
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
        ));
    }
endif;
?>


