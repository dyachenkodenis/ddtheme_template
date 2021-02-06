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


add_theme_support(  'post-formats', 
			array(  'aside',
					'gallery',
					'link',
					'image',
					'quote',
					'status',
					'video',
					'audio',
					'chat'
					) 
				);

add_post_type_support( 'post', 
				array(	'author',
						'excerpt',
						'title',
						'editor',
						'thumbnail',
						'trackbacks',
						'custom-fields',
						'comments',
						'revisions',
						'page-attributes',
						'post-formats'
						) 
					);


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

add_theme_support( 'custom-header', array(
		'default-image' => '',
		'video' => true,
		'video-active-callback'  => 'is_front_page'
) );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(  
	'search-form',
	'gallery',
	'caption',
	'script',
	'style',
) );

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', [
	'height'      => 190,
	'width'       => 190,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => true,
] );

add_theme_support( 'admin-bar', [ 'callback'=>'__return_false' ] );

add_theme_support( 'responsive-embeds' );

/* Widget Start*/
register_sidebar( array(
		'name'          => __( 'Sidebar', 'ddtheme' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );    
/* Widget Stop*/


/* Menu Start */
add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'test_li', 10, 4 );

function test_li( $classes, $item, $args, $depth ) {
		$classes[] = 'menu__item';  
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'test_a', 10, 3 );

function test_a( $atts, $item, $args ) {
	$class = 'menu__link'; // or something based on $item
	$atts['class'] = $class;
	return $atts;
}
/* Menu Stop */


/* Button MCE Start */
function my_mce_buttons_2( $buttons ) { 
	$buttons[] = 'underline';
	$buttons[] = 'alignjustify';
	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
/* Buttion MCE Stop */

