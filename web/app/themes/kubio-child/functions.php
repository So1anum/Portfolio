<?php
function kubio_child_enqueue_styles() {
    $parent_style = 'kubio-style';
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
}
add_action('wp_enqueue_scripts', 'kubio_child_enqueue_styles');

function theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');
require get_stylesheet_directory() . '/cpt-portfolio.php';
