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
                    <aside class="col-md-4">                        
                            <?php
                            if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')):
                            ?>
                            <?php endif; ?> 
                    </aside>
                