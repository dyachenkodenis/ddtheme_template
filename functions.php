<?php if (!defined('ABSPATH')) { die(); }
/**
* Wordpress Theme
* @version     3.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
*/

define('THEMEDIR', get_template_directory() . '/');
define('THEMEURL', get_template_directory() . '/');
define('THEMEDOMAIN', 'simpledwptemplate');


require THEMEDIR . 'inc/wp_disable.php';
require THEMEDIR . 'inc/wp_support.php';
require THEMEDIR . 'inc/wp_additional_template.php';
require THEMEDIR . 'inc/wp_style.php';
