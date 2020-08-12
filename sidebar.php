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
					<aside class="col-md-4">						
							<?php
      						if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')):
      						?>
     						<?php endif; ?> 
					</aside>
				