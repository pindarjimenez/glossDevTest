<?php
/* enqueue scripts and style from parent theme */
function twentyChild_styles() {
    wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'twentyChild_styles');

/* Custom Navbar */
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
        )
    );
    }
add_action( 'init', 'register_my_menus' );

function fontawesome_stylesheets()
{
    wp_register_style('fontawesome-style', get_stylesheet_directory_uri() . '/public/scss/vendors/font-awesome-4.7.0/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style('fontawesome-style');
}
add_action('wp_enqueue_scripts', 'fontawesome_stylesheets');

/**
 * Importing Scripts
 * True means adding script in footer
 */
function main_scripts()
{   
    wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js', '', '1.0', 'all');
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'main_scripts');
?>