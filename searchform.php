<?php 
/**
 * DDTheme Wordpress Theme
 * @version     1.0.0
 * @author      
 * @link        
 * @copyright   2020 DDTheme
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