<?php
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
if (!defined('ABSPATH')) { die(); }
?>


<?php 
//video header

//echo get_header_video_url();

$url = get_header_video_url();
if( $url ){
	echo wp_video_shortcode( array(
		'src'      => $url,
		'poster'   => '',
		'height'   => 800,
		'width'    => 1200,
	) );
}

// echo get_header_image();



?>
<img src="<?php echo get_header_image(); ?>" alt="">