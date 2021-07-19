<?php if (!defined('ABSPATH')) { die(); }
/**
* Wordpress Theme
* @version     1.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
* @package WordPress
* @subpackage Wordpress Theme
* @since Wordpress Theme 1.0
*/

// Start Javascript
add_action( 'wp_enqueue_scripts', 'wp_script' );
    function wp_script() {
    // Header Javascript
    //5 параметр должен быть false

    // Footer Javascript
    wp_enqueue_script(
        'jquery-cdn',
        get_stylesheet_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), null, true        
    );   
 
}
// Stop Javascript

//Start CSS Style
add_action( 'wp_enqueue_scripts', 'alex_style' );
function alex_style() {     
    wp_enqueue_style( 
        'wp_template',
    get_stylesheet_directory_uri() . '/assets/css/wp_template.css', 
        array(), null, false );     
}
//Stop CSS Style

//Start Icon
function add_my_site_icon_meta_tags($tags) {
    $tags[] = '<link rel="icon" type="image/png" href="'.THEMEURL.'assets/img/favicon-16x16.png" sizes="16x16" />';
    return $tags;
}
add_filter('site_icon_meta_tags', 'add_my_site_icon_meta_tags');
//Stop Icon