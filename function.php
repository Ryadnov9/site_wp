<?php


// Підключення стилів і скриптів
function my_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true );
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // Подключить jQuery с CDN
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);
    }

}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



?>

