<?php
// listing functionality additional support to post types, navigation etc. inspired from twentyseventeen theme
require get_template_directory() . '/bootstrap-navwalker.php';
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
  'default-color' => 'ffffff',
  'default-image' => '',
) ) );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array(
  'aside',
  'image',
  'video',
  'quote',
  'link',
) );
function register_theme_menus() {
  register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'THEMENAME' )
  ) );

}
//defining custom header and footer widgets for adding code/elements through ui
register_sidebar( array(
    'name' => __( 'Custom Header', 'starter_template' ),
    'id' => 'header-information',
    'description' => __( 'Information for the header', 'starter_template' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
) );

register_sidebar( array(
    'name' => __( 'Custom Footer', 'starter_template' ),
    'id' => 'footer-information',
    'description' => __( 'Information for the footer', 'starter_template' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
) );

add_action( 'init', 'register_theme_menus');
//loading stylesheets
function starter_template_theme_styles() {
wp_enqueue_style( 'wordpress_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/app.css' );
    wp_enqueue_style( 'light_css', get_template_directory_uri() . '/css/featherlight.min.css' );
 }
 add_action( 'wp_enqueue_scripts', 'starter_template_theme_styles' );

function starter_template_theme_js() {
//loading javascript from Bootstrap and lightbox
wp_register_script('jquery', 'http://code.jquery.com/jquery-latest.min.js',null,false,true);
  wp_enqueue_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true );
  wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/featherlight.min.js', true );
  wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/featherlight.gallery.min.js', true );
}
 add_action( 'wp_enqueue_scripts', 'starter_template_theme_js' );
 ?>
