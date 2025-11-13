<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-main-style', get_template_directory_uri() . '/assets/style/main-style.css');
    wp_enqueue_style('my-cssreset-style', get_template_directory_uri() . '/assets/style/reset.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');