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
<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css"> 

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
          <a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
                                wp_nav_menu(
                                    array(
                                        'items_wrap'    => '%3$s',
                                        'container'     => ''
                                    )
                                );
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container wp-container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-md-12">
          
          <header>
            <!-- Slider -->
          </header>