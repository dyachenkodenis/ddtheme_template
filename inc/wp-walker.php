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

/* Navbar Primary Start */
class WalkerWordpressTheme extends Walker_Nav_Menu
{   

	function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) 
	{
		
		$title = $item->title; // title menu
		//$permalink = $item->url; // url menu
		//$parent = $item->menu_item_parent; // является ли child menu        
		
		//print_r($item);   
	 
	  	

	$output .= "<li><a href='".$item->url."' >".$title."</a></li>";

	  
	}
	function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= "";      
	}
	
	function start_lvl(&$output, $depth = 0, $args = array())
	{
		
		$output .= "";
		
	}  
	function end_lvl(&$output, $depth = 0, $args = null)
	{
		
		$output .= "</a></li>";
	
	}


}
/* Navbar Primary Stop */