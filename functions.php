<?php

//Load CSS
function load_css()
{
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'main', get_template_directory_uri().'/css/main.css', array(), '1.0.1', 'all');
    wp_enqueue_style( 'main');

}
add_action( 'wp_enqueue_scripts', 'load_css');

//Load Javascript
function load_js()
{
    wp_enqueue_script( 'jquery');
    wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script( 'bootstrap');

    wp_register_script( 'typewritter', get_template_directory_uri().'/js/typewritter.js', 'typewritter', '1.0.0', true);
    wp_enqueue_script( 'typewritter');
}
add_action( 'wp_enqueue_scripts', 'load_js');

//Theme options
add_theme_support('menus');

//Menus
register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'wp-shuvankar' ),
        'footer'  => __( 'Secondary menu', 'wp-shuvankar' ),
    )
);