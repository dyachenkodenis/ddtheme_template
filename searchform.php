<?php 
/**
 * Basic Wordpress Theme
 * @version     2.0.0
 * @author      
 * @link        
 * @copyright   2021 Basic Wordpress Theme
 * @license     
 */

if (!defined('ABSPATH')) { die(); }
?>
<form role="form" method="get" action="<?php echo home_url( '/' ) ?>">  
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s">    
  <span>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
  </span>  
</form>