<?php
/**
 * Child theme functions
 *
 * 
 * Text Domain: OceanWp Child 
 * Example of Customizing the OceanWP child theme (with Elemontor )
 */


function theme_enqueue_styles() {

    $parent_style = 'parent-style'; // Parent Style: OceanWP

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' ); //OceanWP Style Sheet

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );//The Child OceanWP Style Sheet

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function theme_scripts_load() {
    wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/functions.js', array ( 'jquery' ), 1.0, true);//Javascript Function with JQuery, at the footer
}
add_action( 'wp_enqueue_scripts','theme_scripts_load' );
