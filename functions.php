<?php
function vikram_enqueue_assets() {
    wp_enqueue_style('vikram-style', get_stylesheet_uri());
    wp_enqueue_style('vikram-main', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'vikram_enqueue_assets');

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('editor-styles');

function vikram_register_testimonials() {
    register_post_type('testimonial', [
        'public' => true,
        'label' => 'Testimonials',
        'menu_icon' => 'dashicons-format-quote',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true
    ]);
}
add_action('init', 'vikram_register_testimonials');
?>
