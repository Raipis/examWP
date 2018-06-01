<?php // Queue parent style followed by child/customized style
//int_max initialized to force priority of child style css, inspired by post on stackoverflow
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,700', false );
}
?>
