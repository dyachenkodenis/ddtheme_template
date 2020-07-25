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
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.5.1.slim.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">MENU</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php get_home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
								if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);
								} elseif ( ! has_nav_menu( 'expanded' ) ) {
									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,											
										)
									);
								}
								wp_nav_menu(
									array(

									)
								);
			?>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

<div class="container">
	<div class="row">
		<div class="">

	<header class="row">
		
	</header>
	
	