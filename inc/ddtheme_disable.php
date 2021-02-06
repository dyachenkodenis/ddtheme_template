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
/**
 * Disable Emoji support introduced in WP 4.2
 */
/*function pss_disable_emoji() {

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

}
add_action( 'init', 'pss_disable_emoji' );

  // Remove really simple discovery link
  remove_action('wp_head', 'rsd_link');

  // Remove wlwmanifest.xml (needed to support windows live writer)
  remove_action('wp_head', 'wlwmanifest_link');

  // Remove wordpress version
  remove_action('wp_head', 'wp_generator');

  // Remove dns-prefetch Link from WordPress Head (Frontend)
  remove_action('wp_head', 'wp_resource_hints', 2);

  // Disable REST API link tag
  remove_action('wp_head', 'rest_output_link_wp_head', 10);

  // Disable oEmbed Discovery Links
  remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

  // Disable REST API link in HTTP headers
  remove_action('template_redirect', 'rest_output_link_header', 11, 0);*/