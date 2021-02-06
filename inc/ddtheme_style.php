<?php 
/**
 * DDTheme Wordpress Theme
 * @version     1.0.1
 * @author      
 * @link        
 * @copyright   2020 DDTheme
 * @license     
 */

if (!defined('ABSPATH')) { die(); }

// Start Javascript
add_action( 'wp_enqueue_scripts', 'ddtheme_scripts' );
    function ddtheme_scripts() {
    // Header Javascript
    wp_enqueue_script(
        'bootstrap-min',
        get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true
    );

    // Footer Javascript    
    wp_enqueue_script(
        'jquery',
        get_stylesheet_directory_uri() . '/assets/js/jquery-3.5.1.slim.min.js', array(), null, true        
    );
    wp_enqueue_script(
        'npm',
        get_stylesheet_directory_uri() . '/assets/js/npm.js', array(), null, true  
    );      
}
// Stop Javascript

//Start CSS Style
add_action( 'wp_enqueue_scripts', 'alex_style' );
function alex_style() { 
    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap-theme.min.css', array(), null, false );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), null, false );
    wp_enqueue_style( 'ddtheme_template', get_stylesheet_directory_uri() . '/assets/css/ddtheme_template.css', array(), null, false );     
}
//Stop CSS Style