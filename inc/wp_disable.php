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

 //Disable Emoji
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

  // Remove title in wp_head
  remove_action( 'wp_head', '_wp_render_title_tag', 1 );

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

  remove_action('wp_head', 'adjacent_posts_rel_link');

  add_filter( 'feed_links_show_comments_feed', '__return_false' );

  //remove_action('wp_head', 'rel_canonical');
  
  //remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

  //Remove Gutenberg Block Library CSS from loading on the frontend
  function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
  } 
  add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

  //Remove css resent comment wp_head
  function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
  add_action('widgets_init', 'remove_recent_comments_style');