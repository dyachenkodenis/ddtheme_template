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

define('THEMEDIR', get_template_directory() . '/');
define('THEMEURL', get_template_directory() . '/');
define('THEMEDOMAIN', 'ddtheme');


require THEMEDIR . 'include/ddtheme_disable.php';
require THEMEDIR . 'include/ddtheme_template.php';

